<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Portal</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
            
</head>
<body>
   
    <header>
        <div class="row" id="header_container">
            <div class="col-3" id="logo_box">
                <img src="images/logo.png" style="width:220px; height:auto;">
            </div>
            <div class="col-3" id="header_navigation">
                <a href="<?=url('/home');?>">Home</a>
                <a href="#">About</a>
            </div>
            <div class="col-6" id="header_buttons">
                <a href="<?=url('/register');?>" class="btn btn-primary ta_button_primary"><i class="fa fa-user-plus"></i> Register</a>
                <a href="<?=url('/login');?>" class="btn btn-primary ta_button_primary"><i class="fa fa-sign-in"></i> Login</a>
                <a href="<?=url('/employers_login');?>" class="btn btn-primary ta_button_primary"><i class="fa fa-external-link"></i> Employer</a>
                <link rel="stylesheet" href="">
            </div>
        </div>
    </header>