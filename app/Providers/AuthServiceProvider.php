<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin', function(User $user):bool{
            return (bool) $user->is_admin;
         });
 
         Gate::define('user.edit', function(User $user, User $model):bool{
             return ((bool) $user->is_admin || $user->id === $model->id);
         });

         Gate::define('user.ban', function(User $user):bool{
            return (bool) $user->is_banned;
         });

         
         
           

         

    }
}
