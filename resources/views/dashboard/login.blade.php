<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ADMIN DASHBOARD</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <link rel="stylesheet" href="{{ asset('assets/superadmin/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('assets/superadmin/css/ready.min.pro.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/superadmin/css/ready.css')}}">
</head>
<body class="login">
<div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
        <h3 class="text-center">Sign In To Admin</h3>
        <div class="login-form">
            <form action="/login-proses" method="post">
                {{ csrf_field() }}
            <div class="form-group form-floating-label">
                <input id="username" name="username" name="username" type="text" class="form-control input-border-bottom" required>
                <label for="username" class="placeholder">Username</label>
            </div>
            <div class="form-group form-floating-label">
                <input id="password" name="password" name="password" type="password" class="form-control input-border-bottom" required>
                <label for="password" class="placeholder">Password</label>
                <div class="show-password">
                    <i class="flaticon-interface"></i>
                </div>
            </div>
            <div class="form-action">
            <!--    <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button> -->
                <btn type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</b>
            </div>
            </form>
    </div>
    </div>
    <!--END OF LOGIN PAGE END OF LOGIN PAGE END OF LOGIN PAGE END OF LOGIN PAGE-->

</div>
</body>
</html>