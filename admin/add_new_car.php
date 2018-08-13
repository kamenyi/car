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



if(isset($_POST['add_new_car'])) {

//        print_r($_POST);

        $carDetails = mysqli_real_escape_string($connection,$_POST['carDetails']);
        $carPrice = mysqli_real_escape_string($connection,$_POST['carPrice']);
//        $carImageName = mysqli_real_escape_string($connection,$_POST['carImageName']); //1
//        $carImage = mysqli_real_escape_string($connection,$_POST['carImage']); // 2
        $carInfo = mysqli_real_escape_string($connection,$_POST['carInfo']);
        $carType = mysqli_real_escape_string($connection,$_POST['carType']);
        $CarTransmssion = mysqli_real_escape_string($connection,$_POST['CarTransmssion']);
        $carOdometer = mysqli_real_escape_string($connection,$_POST['carOdometer']);
        $carLocation = mysqli_real_escape_string($connection,$_POST['carLocation']);

//    print_r($_FILES);
//    die();

//        $carimg = "img/".basename($_FILES['carImage']['name']);
//
//    $carImage = $_FILES['carImage']['name'];
//
//        $add_new_car = $connection->query("INSERT INTO car (carDetails, carPrice, carImageName, carImage, carInfo, CarType, CarTransmssion, carOdometer, carLocation) VALUES ('$carDetails', '$carPrice', '$carImageName', '$carImage', '$carInfo', '$carType', '$CarTransmssion', '$carOdometer', '$carLocation')");
//
//    if (move_uploaded_file($_FILES['carImage']['tmp_name'], $carimg)) {
//        echo '';
//    } else {
//        echo '';
//    }



        $img_path = "img/";
        $image_name = $_FILES['carImage']['name'];

        $carImage = move_uploaded_file($_FILES['carImage']['tmp_name'], '../img/'.$image_name);

if (!$carImage)
            if(!isset($carImage)) {
                echo '';
            } else {
                $img = file_get_contents($_FILES['carImage']['tmp_name'],'img/');

                $image_size = getimagesize($_FILES['carImage']['tmp_name']);
                if($image_size == FALSE) {
                    echo '';
                } else {
                    $add_new_car = $connection->query("INSERT INTO car (carDetails, carPrice, carImageName, carImage, carInfo, CarType, CarTransmssion, carOdometer, carLocation) VALUES ('$carDetails', '$carPrice', '$image_name', '$img_path', '$carInfo', '$carType', '$CarTransmssion', '$carOdometer', '$carLocation')");
                }
            }

}

?>

<h2 class="text-muted text-center hd">Add New Car</h2>

<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            <form class="add_car_form" id="userForm" autocomplete="off" action="add_new_car.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <input type="text" class="form-control" name="carDetails" id="carDetails" placeholder="2012 Toyota Camry Hybrid H Auto">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="carPrice" id="carPrice" placeholder="$16,690">
                    <span class="help-block"></span>
                </div>

                <div class="col-md-3 a_n_c">
                    <input id="carType" name="carType" type="text" placeholder="NEW/USED" class="form-control">
                    <span class="help-block"></span>
                </div>
                <div class="col-md-3 a_n_c">
                    <input id="CarTransmssion" name="CarTransmssion" type="text" placeholder="Automatic/Manual" class="form-control">
                    <span class="help-block"></span>
                </div>
                <div class="col-md-3 a_n_c">
                    <input id="carOdometer" name="carOdometer" type="text" placeholder="14,072 km" class="form-control">
                    <span class="help-block"></span>
                </div>
                <div class="col-md-3 a_n_c">
                    <input id="carLocation" name="carLocation" type="text" placeholder="NSW" class="form-control">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="carInfo" name="carInfo" placeholder="TECH PACK AND SUNROOF. My 2014 Skoda Octavia has great fuel economy at 5.2L per 100km. 9 airbags to give you added safety. Only travelled 31000 km. This Skoda Octavia 2014 has adaptive cruise control, USB audio input, park assist, front parking sensors, bluetooth functionality and memory card reader. It represents great value at $28,100"></textarea>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <input type="file" name="carImage" id="carImage" accept="image/*">
                    <span class="help-block"></span>
                </div>


                <button type="submit" class="btn btn-primary pull-xs-right add_new_car" id="add_new_car" name="add_new_car">Add New Car</button>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'partials/footer.php';
?>