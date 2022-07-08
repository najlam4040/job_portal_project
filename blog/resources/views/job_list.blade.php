@include('components.header')
<main>
   
    <div id="main_div">
        <div class="row">
           <input class="input_box1 col-3" type="text" placeholder="Keyword:Name,Tag">
           <input class="input_box col-3" type="text" placeholder="Location:City,State,Zip">
           <input class="input_box col-3" type="text" placeholder="choose Category...">
           <button class="filter_button col-1">filter</button>
        </div>
        <div class="job_list_container">
            <div class=" row job_app ">
                <img class="col-3 log_image " src="images/autodesk.jpg" alt="">
                <p class="col-3 app_name"><b>Investment Banker</b><br>honda  $800-910<button class="small_button">full time</button></p>
                <p class="col-2 location">QBL Park, C40</p>
                <button class="col-4 apply_button">Apply Now</button>
            </div>
            <div class=" row job_app ">
                <img class="col-3 log_image " src="images/google_logo.png" alt="">
                <p class="col-3 app_name"><b>Investment Banker</b><br>honda  $800-910<button class="small_button">part time</button></p>
                <p class="col-2 location">QBL Park, C40</p>
                <button class="col-4 apply_button">Apply Now</button>
            </div>
            <div class=" row job_app ">
                <img class="col-3 log_image " src="images/download.png" alt="">
                <p class="col-3 app_name"><b>Investment Banker</b><br>honda  $800-910<button class="small_button">freelancer</button></p>
                <p class="col-2 location">QBL Park, C40</p>
                <button class="col-4 apply_button">Apply Now</button>
            </div>
            <div class=" row job_app ">
                <img class="col-3 log_image " src="images/microsoft.png" alt="">
                <p class="col-3 app_name"><b>Investment Banker</b><br>honda  $800-910<button class="small_button">full time</button></p>
                <p class="col-2 location">QBL Park, C40</p>
                <button class="col-4 apply_button">Apply Now</button>
            </div>
            <div class=" row job_app ">
                <img class="col-3 log_image " src="images/skype.png" alt="">
                <p class="col-3 app_name"><b>Investment Banker</b><br>honda  $800-910<button class="small_button">enternship</button></p>
                <p class="col-2 location">QBL Park, C40</p>
                <button class="col-4 apply_button">Apply Now</button>
            </div>
            <div class=" row job_app ">
                <img class="col-3 log_image " src="images/virtue.jpg" alt="">
                <p class="col-3 app_name"><b>Investment Banker</b><br>honda  $800-910<button class="small_button">full time</button></p>
                <p class="col-2 location">QBL Park, C40</p>
                <button class="col-4 apply_button">Apply Now</button>
            </div>
            <div class=" row job_app ">
                <img class="col-3 log_image " src="images/twitter.png" alt="">
                <p class="col-3 app_name"><b>Investment Banker</b><br>honda  $800-910<button class="small_button">part time</button></p>
                <p class="col-2 location">QBL Park, C40</p>
                <button class="col-4 apply_button">Apply Now</button>
            </div>
        </div>
        <div>

        </div>  
    </div>
</main>
@include('components.footer')