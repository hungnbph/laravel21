<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Online Login Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/style1.css') }}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
</head>
<body>
<!-- main -->
<div class="center-container">
	<!--header-->
	<div class="header-w3l">
		<h1>Online register Form</h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
			</div>
			<form method="POST" action="" >
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="row">
                            <div class="col">
                            <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                            <div class="form-group">
                            <label class="text-primary">name</label>
                            <input type="text" name="name" placeholder="name" class="form-control">
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Email</label>
                            <input type="email" name="email" placeholder="Your email.." class="form-control">
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Password</label>
                            <input type="password" name="password" placeholder="Your Password..." class="form-control">
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Confirm Password</label>
                            <input type="password" name="confirm_password" placeholder="Confirm Your Password..." class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Address</label>
                            <input type="text" name="address" placeholder="Your Address..." class="form-control">
                        </div>
                        
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Create">
                        <a href="login" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
		</div>
	</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
	
	</div>
	<!--//footer-->
</div>
</body>
</html>
