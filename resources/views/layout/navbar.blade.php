<nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('assets/images/logo_star_black.png')}}" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/logo_star_mini.jpg')}}" alt=""></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
        <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
        <li class="nav-item">
        </li>
        <li class="nav-item">
            <a class="nav-link profile-pic" onclick="logout()"><i class="fa fa-sign-out"></i></a>
        </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>