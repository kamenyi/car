
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"><?php echo "Welcome  " . $_SESSION['adminFirstName']; ?></a>
        </div>


            <ul class="nav navbar-nav navbar-right">




<!--                <li><a href="#">Logout</a></li>-->

                <?php
                if(!isset($_SESSION['adminID']))
                {

//                  
                }
                else
                {
                    echo '<li><a href="add_new_car.php">Add New Car</a></li>';
                    echo '<li><a href="add_staff.php">Add Staff</a></li>';
                    echo '<li class="nav-link"><a class="nav-link" href="logout.php">Logout</a></li>';
                }
                ?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>