<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
    <img class="logo-abbr" src="./images/logo.jpeg" alt="">
        <img class="logo-compact" src="./images/logo-text.png" alt="">
        <img class="brand-title" src="./images/logo-text.png" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                        <div class="dropdown-menu p-0 m-0">
                            <form>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>

                
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('admin') }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                class="nav-text">Dashboard</span></a>
            </li>
            <li><a href="{{ route('training') }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                class="nav-text">Formations</span></a>
            </li>
            <li><a href="{{ route('events.index') }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                class="nav-text">Evenement</span></a>
            <li><a href="{{ route('blogs') }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                class="nav-text">Blogs</span></a>
            </li>
            
        </ul>
    </div>


</div>
<!--**********************************
    Sidebar end
***********************************-->