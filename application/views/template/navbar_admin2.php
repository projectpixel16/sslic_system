<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <h4 class="text-light"><a href="index.html"><span>SILAY SANDIEGO LENDING INVESTOR INC.</span></a></h4>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
            <!-- <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.html">Contact</a></li>
            <li><a href="portfolio.html">FAQ</a></li> -->
            <li><a href="../admin/admin_dashboard">Dashboard</a></li>
            <li><a href="../admin/admin_loaners">Users</a></li>
            <li class="drop-down">
                <a href="#"><?php echo $_SESSION['fullname']; ?></a>
                <ul>
                    <li><a href="../admin/user_logout">Logout</a></li>
                    <!-- <li class="drop-down"><a href="#">Drop Down 2</a>
                        <ul>
                            <li><a href="#">Deep Drop Down 1</a></li>
                            <li><a href="#">Deep Drop Down 2</a></li>
                            <li><a href="#">Deep Drop Down 3</a></li>
                            <li><a href="#">Deep Drop Down 4</a></li>
                            <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    <li><a href="#">Drop Down 5</a></li> -->
                </ul>
            </li>
        </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
