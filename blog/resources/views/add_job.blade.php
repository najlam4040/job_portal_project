@include('components.header')
<main>
    <div class='register_form card'>
        <div class="card-body">
            <h2>Job Add</h2>
        <form action="">
            <div class="row">
                <div class="form-group register_form_item">
                    <lable for="name">Title</lable>
                    <input type="text" name="name" id="name" placeholder="Enter Your job title" class= "form-control" >
                <div>
                <div class="form-group register_form_item">
                    <lable for="name">Description</lable>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <div>
                <div class="form-group register_form_item">
                    <lable for="name">Location</lable>
                    <input type="text" name="phone" id="phone" placeholder="Enter your location" class= "form-control" >
                <div>
                <div class="form-group register_form_item">
                    <lable >Salary</lable>
                    <input type="number" id="email" placeholder="enter your salary" class= "form-control" >
                <div>
               
                <div class="form-group register_form_item">
                    <lable for="">Education</lable>
                    <input type="" name="" id="password" placeholder="Enter education" class= "form-control" >
                <div>
                <div class="form-group register_form_item">
                    <lable >Category</lable>
                    <input type="" id="email" placeholder="enter job category" class= "form-control" >
                <div>
               
                <div class="form-group register_form_item">
                    <lable for="">Job_type</lable>
                    <input type="" name="" id="password" placeholder="Enter Job_type" class= "form-control" >
                <div>    
               
                <div class="clearfix"></div>
               
                
            </div>
        </form>
        </div>
    </div>  
</main>
@include('components.footer')
