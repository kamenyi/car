<?php

    $title = "ABC-CAR | Home";

    require_once '../config/db.php';

    if(isset($_SESSION["adminID"])) {
    }else {
        header('Location: index.php');
    }

    require_once 'partials/head.php';
    require_once 'partials/nav.php';


?>


<?php

if(isset($_POST['Register'])) {
    $firstName = mysqli_real_escape_string($connection,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($connection,$_POST['lastName']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = md5(mysqli_real_escape_string($connection,$_POST['password']));
    $cdate = $_POST['Y-m-d H:i:s'];
    $timestamp = date('Y-m-d H:i:s', strtotime($cdate));

    $check = $connection->query("SELECT customerEmail FROM customer WHERE customerEmail='$email'");
    $run = $check->fetch_array(MYSQLI_BOTH);
    if($run==0) {
        $query = $connection->query(" INSERT INTO customer ( customerFirstName, customerLastName, customerEmail, customerPassword, customerCreatedDate )
                VALUES ( '$firstName', '$lastName', '$email', '$password', curdate()) ");

        header('Location: signin.php');
    } else {
        $result='<div class="alert alert-danger">Sorry this Email is already exist</div>';
    }

}

?>




    <div class="container u-form comp-container">
        <form class="form-horizontal signupform" id="userForm" autocomplete="off" method="post" action="signup.php">
            <fieldset>

                <div class="form-group c-a-a">
                    <label class="col-md-4 control-label" for=""></label>
                    <div class="col-md-5 from-m-f">
                        <legend class="text-center">Add Staff</legend>
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
                    <label class="col-md-4 control-label" for="fullname"></label>
                    <div class="col-md-5">
                        <input id="firstName" name="firstName" type="text" placeholder="John" class="form-control input-md inputbox"> <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fullname"></label>
                    <div class="col-md-5">
                        <input id="lastName" name="lastName" type="text" placeholder="Smith" class="form-control input-md inputbox"> <span class="help-block"></span>
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
                        <input id="password" name="password" type="password" placeholder="********" class="form-control input-md inputbox"> <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="password_again"></label>
                    <div class="col-md-5">
                        <input id="password_again" name="password_again" type="password" placeholder="********" class="form-control input-md inputbox">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="password_again"></label>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-default btn-block" name="Register" id="Register">Create Account</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

<?php

require_once 'partials/footer.php';

?>