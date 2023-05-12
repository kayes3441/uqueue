<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>General User Login </title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/login/css/bootstrap.min.css" />

    <!-- Core css -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/login/css/main.css"/>
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/login/css/theme1.css"/>

</head>
<body class="font-montserrat">


<div class="auth">
    <div class="auth_left">
        <div class="card">

            <form action="{{route('general.login')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="card-title">Login to your account</div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password"  name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" id="remember_me" name="remember" class="custom-control-input" />
                            <span class="custom-control-label" >Remember me</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <input type="submit" class="btn btn-primary btn-block" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="auth_right full_img"></div>
</div>

<script src="{{asset('/')}}admin/assets/js/lib.vendor.bundle.js"></script>
<script src="{{asset('/')}}admin/assets/js/core.js"></script>
</body>

</html>
