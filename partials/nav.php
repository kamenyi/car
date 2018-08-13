<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">ABC CAR</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cars <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="used_cars.php">Used Car</a></li>
                        <li><a href="new_cars.php">New Car</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="search_car.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">


                <?php
                if(isset($_SESSION['userID']))
                {
                    echo '<li class="nav-link"><a class="nav-link" href="logout.php">Logout</a></li>';

//                    echo '<li><a href="add_new_car.php">Add New Car</a></li>';
//                    echo '<li><a href="add_staff.php">Add Staff</a></li>';
//                    echo '<li class="nav-link"><a class="nav-link" href="signup.php">Register</a></li>';
//                    echo '<li class="nav-link"><a class="nav-link" href="signin.php">Login</a></li>';
                }
                else
                {
                    echo '<li><a href="signup.php">Register</a></li>';
                    echo '<li><a href="signin.php">Log In</a></li>';
                }
                ?>

<!--                <li><a href="signup.php">Register</a></li>-->
<!--                <li><a href="signin.php">Log In</a></li>-->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>