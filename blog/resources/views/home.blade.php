@include('components.header')
    <main>
        <div class="row text-center" id="home_search">
            <h1>Find Your Jobs</h1>
            <p>Its easy to find jobs in your home town itself with a single search.</p>
            <form action='<?=url('/job_list');?>'>
                <div class="row" id="home_search_form">
                    <div class="col-9">
                        <input type="text" class="form-control" placeholder="Enter Job Title/ Company Name..">
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary ta_button_primary" style="width:100%"><i class="fa fa-search"></i> Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <div id="category_header">
                <h4>Browse Jobs By Category</h4>
                <P>ut enim ad minim veniam,quis nostrud exercitation ullamco laboris aliquip</P>
            </div>
            <div style="max-width: 1000px;margin: auto;padding: 30px;background-color: rgb(240, 240, 240);">
                
                <div class="row">
                    <div class="col-3" class="category_box_outer">
                        <div class="category_box">
                            <img class="images" src='images/ux.png'> <br>
                            <h6>accounting & finance</h6>
                            <a href="<?=url('/job_list');?>">jobs</a>
                        </div>
                    </div>
                    <div class="col-3" class="category_box_outer">
                        <div class="category_box">
                            <img class="images" src='images/technical-support.png'><br>
                            <h6 >accounting & finance</h6>
                        </div>
                    </div>
                    <div class="col-3" class="category_box_outer">
                        <div class="category_box">
                            <img class="images" src='images/responsive.png'> 
                            <h6>accounting & finance</h6>
                        </div>
                    </div>
                    <div class="col-3" class="category_box_outer">
                        <div class="category_box">
                            <img class="images" src='images/business.png'>
                            <h6>accounting & finance</h6>
                        </div>
                    </div>
        
        
                </div>
                <div class="row">
                    <div class="col-3" class="category_box_outer">
                        <div class="category_box">
                            <img class="images" src='images/ux.png'>
                            <h6>accounting & finance</h6>
                        </div>
                    </div>
                    <div class="col-3" class="category_box_outer">
                        <div class="category_box">
                            <img class="images" src='images/ux.png'>
                            <h6>accounting & finance</h6>
                        </div>
                    </div>
                    <div class="col-3" class="category_box_outer">
                        <div class="category_box">
                            <img class="images" src='images/technical-support.png'>
                            <h6>accounting & finance</h6>
                        </div>
                    </div>
                    <div class="col-3" class="category_box_outer">
                        <div class="category_box">
                            <img class="images" src='images/responsive.png'>
                            <h6>accounting & finance</h6>
                        </div>
                    </div>
        
        
                </div>
            </div>
        </div>
    </main>
@include('components.footer')
    
