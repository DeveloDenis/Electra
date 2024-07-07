<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>Electrica</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2f5ecc16b9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

		body{
			margin:0;
			background-color:#ffffff;
		}


		table{
			border-spacing: 0;
		}

		td{
			padding:0;
		}

		img{
			border:0;
		}

		.wrapper{
			width:100%;
			table-layout: fixed;
			background-color:#ffffff;
			padding-bottom: 60px;
		}

		.main{
			background-color:#d2d2d5;
			margin: 0 auto;
			width: 100%;
			max-width: 600px;
			border-spacing:0;
			font-family: sans-serif;
			color:#ffff;
			
		}

		.button{
			background-color:#3561e7;
			color: #ffff ;
			text-decoration: none ;
			padding: 12px 20px ;
			font-weight:bold;
			border-radius: 5px;

		}

		.button:hover{
			background-color:#0141ff;
			color: #ffff ;
			text-decoration: none ;
			padding: 12px 20px ;
			font-weight:bold;
			border-radius: 5px;
		}


	</style>
</head>
<body>
	
	<center class="wrapper">
		<table class="main" width="100%">
            <tr>
				<td height="8" style="background-color:#029af1;">
                       
				</td>
			</tr>

			<tr>
				<td >
					<table width="100%">
                        <tr>
							<td class="two-columns"> 
                                 <table class="column">
									<tr>
										<td >
											<h1  width="180"><i class="fa-solid fa-bolt" style="color: #029af1;"></i> {{config('app.name')}}</h1>
										</td>
									</tr>
								 </table>

								 <table width="100%">
									<tr>
										<td class="two-columns"> 
											 <table class="column">
												<tr>
													<td>
														<a href="#" class="mx-2"><i class="fa-brands fa-facebook" style="color: #005eff;"></i></a>
                                                        <a href="#" class="mx-2"><i class="fa-brands fa-instagram" style="color: #ff00c8;"></i></a>
														<a href="#" class="mx-2"><i class="fa-brands fa-youtube" style="color: #ff0000;"></i></a>
														<a href="#" class="mx-2"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
													</td>
												</tr>
											 </table>
							</td>
						</tr>
					</table>
				</td>
			
			</tr>

			<tr>
				<td height="2" style="background-color:#029af1; ">
                       
				</td>
			</tr>
             
<!--text and title-->
			<tr>
				<td style="padding: 5px 0 50px;">
					<table width="100%">

                        <tr>
							<td style="text-align: center; padding: 15px;">

                                   <p style="font-size: 20px;font-weight: bold;">{{config('app.name')}}  <strong style="color: #029af1;">	Change your password</strong></p>
                                   <p style="font-size:15px;line-height:23px;padding:5px 0 15px;">{!!$body!!}</p>
								   <a href="{!!$action_link!!}" class="button">Change Password</a>
							</td>
						</tr>

					</table>
				</td>
			</tr>

			<!--footer-->
			<tr>
				<td style="background-color:#565656; color:#ffff;">
					<table width="100%">
                      <tr>
						<td style="text-align:center; padding:45px 20px  ;">
							<h1  width="160"><i class="fa-solid fa-bolt" style="color: #029af1;"></i> {{config('app.name')}}</h1>

							<p style="padding: 10px;">The road to technology</p>
							<p style="padding: 10px;">{{$appSetting->address ?? 'address'}}</p>

							<a href="#" class="mx-2"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
                                                        <a href="#" class="mx-2"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
														<a href="#" class="mx-2"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
														<a href="#" class="mx-2"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
						</td>
					  </tr>
					</table>
				</td>
			</tr>

			<tr>
				<td height="8" style="background-color:#029af1;">
                       
				</td>
			</tr>
		</table>
	</center>


</body>
</html>