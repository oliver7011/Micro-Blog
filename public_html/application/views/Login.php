<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hammersmith+One">

<style>
	body {
		color: #fff;
		background: #3AAFA9;
	}
	.form-control {
        min-height: 41px;
		background: #fff;
		box-shadow: none !important;
		border-color: #e3e3e3;
	}
	.form-control:focus {
		border-color: #70c5c0;
	}
    	.form-control, .btn {
        border-radius: 20px;
    	}
	.login-form {
		width: 350px;
		margin: 0 auto;
		padding: 100px 0 30px;
	}
	.login-form form {
		color: #def2f1;
		font-family: "Hammersmith One", sans-serif;
		border-radius: 10px;
    	margin-bottom: 15px;
        font-size: 13px;
        background: #2b7a78;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        position: relative;
    }
	.login-form h2 {
		font-size: 30px;

        	margin: 35px 0 25px;
    }

    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {
        font-size: 16px;
	background: #17252a;
	border: none;
	margin-bottom: 20px;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #89A7A7;
        outline: none !important;
	}    
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form a:hover {
		text-decoration: none;
	}
	.login-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>

<div class="login-form">
    <form action="http://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/dologin" method="post">

        <h2 class="text-center">Login</h2>
        <div class="form-group">
        	<input type="text" class="form-control" name="uname" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pword" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
		<div class="clearfix">
        </div>
    </form>

</div>
</body>
</html>
