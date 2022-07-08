@include('components.header')
<main>
    <div class='register_form card'>
        <div class="card-body">
            <h2>Login</h2>
            <p>Sign in to your account.</p>
            <form action="" id="register_form" onsubmit="return validate_form()">
                <div class="row">
                    
                    <div class="form-group register_form_item">
                        <lable for="email">Email</lable><br>
                        <span id="form_error_email" class="text-danger"></span>
                        <input type="email" name="email" id="email" placeholder="Email Address" class= "form-control" >
                    <div>
                    <div class="form-group register_form_item">
                        <lable for="password">Password</lable><br>
                        <span id="form_error_password" class="text-danger"></span>
                        <input type="password" name="password" id="password" placeholder="Enter Password" class= "form-control" >
                    <div>
                    <div class="form-group register_form_item">
                        <button type="submit" class= "btn btn-primary register_button" >Login</button>
                    <div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="form-group register_form_item text-center">
                        Don't have an account?
                        <a href="<?=url('/register');?>">Register</a>
                    </div>
                </div>
            </form>
        </div>
        
    </div>  
    
</main>

<script type="text/JavaScript">
    function validate_form() {
        let email       = document.getElementById("email").value;
        let password    = document.getElementById("password").value;
        let error_count = 0;
        if (email=='') {
            document.getElementById("form_error_email").innerText = 'Please enter Email';
            error_count ++;
        }else{
            document.getElementById("form_error_email").innerText = '';
        }
        if (password=='') {
            document.getElementById("form_error_password").innerText = 'Please enter Password';
            error_count ++;
        }else{
            document.getElementById("form_error_password").innerText = '';
        }

        if(error_count > 0){
            return false;
        }else{
            return true;
        }

    }
</script>

@include('components.footer')