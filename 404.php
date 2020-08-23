<?php
include '_header.php';
?>
<section class="flat-breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <li class="trail-item">
                        <a href="index.html" title="">Home</a>
                        <span><img src="images/icons/arrow-right.png" alt=""></span>
                    </li>
                    <li class="trail-end">
                        <a href="#" title="">404</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
    
<section class="flat-error">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="wrap-error center">
                    <div class="header-error">
                        <img src="images/banner_boxes/error.png" alt="">
                        <h1>Sorry but we couldn’t find the page you are looking for.</h1>
                        <p>Please check to make sure you’ve typed the URL correctly. Maybe try a search?</p>
                    </div>
                    <div class="content-error">
                        <div class="form-search-error">
                            <form action="#" method="get" accept-charset="utf-8">
                                <div class="search-input">
                                    <input type="text" name="search" placeholder="Search">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</section>

<?php
include '_footer.php';
?>