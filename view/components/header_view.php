<?php include '../main_style.html'?>

<link rel="stylesheet" href="../../style/style.css">

<div class="container_1 container-lg">
    <div class="adverties text-center text-white px-lg-5" id="adv-1" style="background-color: var(--dark-color);">
        <p class="text-center text_1 py-lg-2 m-0" style="padding-left: 30px;">Free Shipping Order Of $ 35</p>
    </div>
    <header class="header bg-light" id="head">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-lg-none d-md-inline-flex align-items-center navbar-brand">
                <img src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2021/01/Amaya-logo.png" height="45px" width="110px">
            </div>
            <div class="d-lg-none d-md-flex align-items-center navbar-brand">
                <i class="fas fa-search" style="font-size: 20px;"></i>
            </div>
            <div class="collapse navbar-collapse py-1" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#">HOME</a></li>
                    <li class="nav-item dropdown px-lg-5">
                        <a class="nav-link" href="#">PAGES</a>
                        <ul class="dropdown-menu pr-5" >
                            <li class="py-lg-2"><a href="../../test/index.html" >REGULAR POST WITH SIDEBAR</a></li>
                            <li class="py-lg-2"><a href="../../test/index.html">SIDEBAR BELOW TITLE</a></li>
                            <li class="py-lg-2"><a href="../../test/index.html">SIDEBAR BELOW FEATURED IMAGE</a></li>
                            <li class="py-lg-2"><a href="../../test/index.html">WIDE IMAGE WITH OVERLAY TEXT</a></li>
                        </ul>
                    </li>
                    <li class="nav-item "><a class="nav-link" href="#">PRRICING</a></li>
                    <li class="nav-item dropdown px-lg-5">
                        <a class="nav-link" href="#" id="dropdownMenuButton">ARTICLES</a>
                        <ul class="dropdown-menu pr-5" >
                            <li class="py-lg-2"><a href="../../test/index.html" >REGULAR POST WITH SIDEBAR</a></li>
                            <li class="py-lg-2"><a href="../../test/index.html">SIDEBAR BELOW TITLE</a></li>
                            <li class="py-lg-2"><a href="../../test/index.html">SIDEBAR BELOW FEATURED IMAGE</a></li>
                            <li class="py-lg-2"><a href="../../test/index.html">WIDE IMAGE WITH OVERLAY TEXT</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto d-lg-flex d-md-none d-none">
                    <img src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2021/01/Amaya-logo.png" height="50px" width="100px" alt="" class="h-25" style="margin-right: 100px;">
                </ul>
                <ul class="navbar-nav text-lg-end">
                    <li class="nav-item"><a class="nav-link" href="#">WHOLESALE</a></li>
                    <li class="nav-item px-lg-5"><a class="nav-link" href="#">SHOP</a></li>
                    <li class="nav-item "><a class="nav-link" href="#">LOCATION</a></li>
                </ul>
            </div>
        </nav>
    </header>
</div>
<style>
    .navbar-nav .nav-item{
        font-family: var(--Raleway-font);
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 1.5px;
    }
    /* CSS for hover effect on nav-link */
    .navbar-nav .nav-item:hover .nav-link {
        color: var(--yellow-color); 
    }
    .dropdown-menu {
        width: 280px;
        background-color: black;
        display: none;
        margin-left: 50px;
        margin-top: -8px;
    }
    .dropdown-menu li {
        margin-left: 25px;
    }
    .dropdown-menu li a{
        color: white;
        letter-spacing: 1px;
        text-decoration: none;
        font-family: var(--Raleway-font);
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
    }
    /* .dropdown-menu hr {
        margin-left: 25px;
        width: 15px;  
        background-color: white; 
    } */

    .navbar-nav .nav-item:hover .dropdown-menu {
        display: block;
    }
    .dropdown-menu li a:hover{
        color: var(--yellow-color);
    }

</style>
<script src="../../javascript/home_view.js"></script>
