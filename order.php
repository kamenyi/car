<?php

    $title = "ABC-CAR | Contact";
    require_once  'config/db.php';

    if(isset($_SESSION["userID"])) {
    }else {
        header('Location: signin.php');
    }

    require_once 'partials/head.php';
    require_once 'partials/nav.php';


?>

<?php

if (isset($_POST['send_email']))  {

    $send_email = "example@example.com";
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = 'Emial form ABC-CAR';
    $content = $_POST['message'];
    $message = "A user has posted a message to your website ($email)\r\n";
    $message .= "-----------------------------------------------\r\n";
    $message .= $content;

    $header = "Reply-To: $email";

    $headers = 'From: example@example.com' . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($send_email, $subject, $message, $headers);

    $result='<div class="alert alert-success">Thank you for contacting us! we will get back as soon as possible</div>';
}

if(isset($_GET['id'])) {

    $c_id = $_GET['id'];

    $query = $connection->query("SELECT * FROM car WHERE carID='$c_id'");
    $row = mysqli_fetch_array($query,MYSQLI_ASSOC);
} else {
    echo '';
}

?>


<div class="container">
    <div class="form-group contact-us">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-5">
            <legend class="text-center hd">Order Now</legend>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            <form class="form-horizontal signupform" id="userForm" autocomplete="off" method="post" action="contact.php">
                <fieldset>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for=""></label>
                        <div class="col-sm-12 col-md-9 col-md-offset-3">
                            <?php echo $result; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for=""></label>
                        <div class="col-sm-12 col-md-9 col-md-offset-3">
                            <?php echo $row['carDetails'] ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="fullname"></label>
                        <div class="col-sm-12 col-md-9 col-md-offset-3">
                            <input id="fullname" name="fullname" type="text" placeholder="John Smith" class="form-control input-md inputbox"> <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email"></label>
                        <div class="col-sm-12 col-md-9 col-md-offset-3">
                            <input id="email" name="email" type="email" placeholder="johnsmith2016@gmail.com" class="form-control input-md inputbox"> <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="message"></label>
                        <div class="col-sm-12 col-md-9 col-md-offset-3">
                            <textarea class="form-control" id="message" name="message" placeholder=""><?php echo $row['carInfo'] ?></textarea> <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email"></label>
                        <div class="col-sm-12 col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-default btn-block" name="send_email" id="btn">Order Now!</button> <span class="help-block"></span>
                        </div>
                    </div>
                </fieldset>
            </form>


        </div>

        <?php require_once 'partials/footer.php'; ?>
