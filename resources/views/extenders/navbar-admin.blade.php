<style>




html,body{
      width:100%;
      height:100%;
      margin:0px;
      padding:0px;
      overflow-x:hidden;
    }




</style>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  navbar1">
    <div class="container-fluid">
      
      <p
        class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
        
        >
        <i class="fa-solid fa-bolt" style="color: #ffffff;"></i>
        {{$appSetting->website_name ?? 'website name'}}
        
        </p
      >
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#topNavBar"
        aria-controls="topNavBar"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <ul class="navbar-nav mx-5">

          



          <li class="me-3 mt-2">
            <a class="nav-item {{Route::is('admin.menu') ? 'text-primary':''}}" style="color:#ffffff; text-decoration:none;" href="{{route('admin.menu')}}">
              <i class="fa-solid fa-gauge-high" style="color:#ffffff; "></i>
            Dashboard
          </a>
        </li>



       <li class="me-3 mt-2">
            <a class="nav-item {{Route::is('admin.orders.view')||Route::is('admin.orders.show') ? 'text-primary':''}}" style="color:#ffffff; text-decoration:none;" href="{{route('admin.orders.view')}}">
              <i class="fa-solid fa-percent" style="color:#ffffff; "></i>
            Orders
          </a>
        </li>

       


      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle ms-2 {{Route::is('settings')||Route::is('terms-information')||Route::is('policy-information')  ? 'text-primary':''}}"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
          <i class="fa-solid fa-gear" style="color:#ffffff;"></i>
          Site Settings
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item {{Route::is('settings' )? 'active':''}}" href="{{route('settings')}}">General Website Informations</a></li>
            <li><a class="dropdown-item {{Route::is('terms-information') ? 'active':''}}" href="{{route('terms-information')}}">Terms & Conditions informations</a></li>
            <li><a class="dropdown-item {{Route::is('policy-information') ? 'active':''}}" href="{{route('policy-information')}}">Policy & Privacy informations</a></li>
            
            
          </ul>
        </li>
      </ul>
  
        
        </ul>
          
         
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2 {{Route::is('admin.category.create')||Route::is('create.color')||Route::is('admin.product.create') ? 'text-primary':''}}"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
              <i class="fa-solid fa-plus" style="color:#fff;"></i>
              Create
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item {{Route::is('admin.category.create' )? 'active':''}}" href="{{route('admin.category.create')}}">Create Categories</a></li>
                <li><a class="dropdown-item {{Route::is('create.color') ? 'active':''}}" href="{{route('create.color')}}">Create Colors</a></li>
                <li><a class="dropdown-item {{Route::is('admin.product.create') ? 'active':''}}" href="{{route('admin.product.create')}}">Create your products</a></li>
                
                
              </ul>
            </li>
          </ul>
  
         <ul class="navbar-nav me-2">
          <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle ms-2 {{Route::is('admin.category')||Route::is('admin.brands')||Route::is('view.color')||Route::is('view.products')||Route::is('users.informations') ? 'text-primary':''}}"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
          <i class="fa-solid fa-eye" style="color:#ffffff;"></i>
          View
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item {{Route::is('admin.category') ? 'active':''}}" href="{{route('admin.category')}}">View Categories</a></li>
            <li><a class="dropdown-item {{Route::is('admin.brands') ? 'active':''}}" href="{{route('admin.brands')}}">View Brands</a></li>
            <li><a class="dropdown-item {{Route::is('view.color') ? 'active':''}}" href="{{route('view.color')}}">View Colors category</a></li>
            <li><a class="dropdown-item {{Route::is('view.products') ? 'active':''}}" href="{{route('view.products')}}">View your Products</a></li>
            <li><a class="dropdown-item {{Route::is('outOfStock') ? 'active':''}}" href="{{route('outOfStock')}}">View out of Stock Products</a></li>
            <li><a class="dropdown-item {{Route::is('users.informations') ? 'active':''}}"  href="{{route('users.informations')}}">View Users Account</a></li>
            
            
          </ul>
        </li>
         </ul>
  
         

         <li class="navbar-nav me-2">
          <a class="nav-item {{Route::is('tasks') ? 'text-primary':''}}" style="color:#ffffff; text-decoration:none;" href="{{route('tasks')}}">
            <i class="fa-solid fa-list-check" style="color: #ffffff;"></i>
          Tasks
          <span class=" ms-2   top-5 start-100 translate-middle badge rounded-pill bg-danger">
            {{$TaskCount}}
            <span class="visually-hidden">unread messages</span>
          </span>
          </a>
      </li>
  
         <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle ms-2"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
            <i class="fa-regular fa-compass" style="color:#ffffff;"></i>
            Navigate to
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{route('user.menu')}}">Users Menu</a></li>
              <li><a class="dropdown-item" href="{{route('user.shop')}}">Shop</a></li>
              <li><a class="dropdown-item" href="{{route('user.collections')}}"> Categories</a></li>
              <li><a class="dropdown-item" href="{{route('new.arival')}}">New Products</a></li>
              <li><a class="dropdown-item" href="{{route('feature.products')}}">Featured Products</a></li>
            </ul>
          </li>
         </ul>
  
         <a class="nav-item ms-auto"  href="{{route('user.menu')}}" style="color:#ffffff; text-decoration:none;">Return to Home user page</a>
         
  
        <form class="d-flex ms-auto my-3 my-lg-0" action="{{route('search.product')}}" method="GET" class="d-flex me-2" role="search" >
          <div class="input-group">
            <input
              class="form-control"
              type="search"
              placeholder="Search Product"
              aria-label="Search"
              name="search" value="{{Request::get('search')}}"
            />
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
  
  
        </form>

        


        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle ms-2"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
               <i class="fa-solid fa-user" style="color:#ffffff;"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{route('user.profile')}}">Account Information</a></li>
              <li> <form class="dropdown-item" action="{{route('logout')}}" method="post">
                @csrf
            <button class="btn btn-danger">Logout</button>
            </form>
        </li>
              
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>



