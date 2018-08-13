<?php

    $title = "ABC-CAR | Sign In";

    require_once  'config/db.php';
    require_once 'partials/head.php';
    require_once 'partials/nav.php';

?>

<?php

    if(isset($_POST['SignIn'])) {
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = md5(mysqli_real_escape_string($connection,$_POST['password']));


        $query = $connection->query("SELECT * FROM customer WHERE customerEmail='$email' AND customerPassword='$password'");
        $row = $query->fetch_array(MYSQLI_BOTH);

        if($row==0) {

            $result='<div class="alert alert-danger">Your logon attempt failed. Please try again.</div>';

        } else {

            $_SESSION["userID"] = $row["customerID"];
            $_SESSION["fullName"] = $row["customerFirstName"] . " " . $row['customerLastName'];

            $_SESSION["loggedIn"] = true;
            header('Location: index.php');
        }
    }

?>

    <div class="container u-form hd">
        <form class="form-horizontal signupform" id="userForm" autocomplete="off" method="post" action="signin.php">
            <fieldset>

                <div class="form-group">
                    <label class="col-md-4 control-label" for=""></label>
                    <div class="col-md-5 from-m-f">
                        <legend class="text-center">Sign In</legend>
                    </div>
                </div>

                <!--  Error Message-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for=""></label>
                    <div class="col-md-5">
                        <?php echo $result; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email"></label>
                    <div class="col-md-5">
                        <input id="email" name="email" type="email" placeholder="johnsmith2016@gmail.com" class="form-control input-md inputbox"> <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="password"></label>
                    <div class="col-md-5">
                        <input id="password" name="password" type="password" placeholder="********" class="form-control input-md inputbox">
                        <span class="help-block help-login"><a href="signup.php">Create an Account</a></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="password_again"></label>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-default btn-block" name="SignIn" id="SignIn">Login</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>



<?php
    include 'partials/footer.php';
?>