<?php

    session_start();

    $title = "ABC-CAR | Home";

    require_once '../config/db.php';
    if(isset($_SESSION["adminID"])) {
    }else {
        header('Location: index.php');
    }

    require_once 'partials/head.php';
    require_once 'partials/nav.php';
    require_once 'partials/footer.php';

?>

<div class="container">

    <h2>All Car</h2>

    <div class="row">



        <?php

        $query = $connection->query("SELECT * FROM car");
        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
            ?>



            <!-- Car 1-->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $row['carImage']?><?php echo $row['carImageName'] ?>" alt="car" class="img-responsive">
                    <div class="caption">
                        <h4><?php echo $row['carDetails'] ?></h4>
                        <p><?php echo $row['carInfo'] ?></p>
                        <p><a href="view_car.php?id=<?php echo $row['carID']?>" class="btn btn-primary" role="button">Read More</a></p>
                    </div>
                </div>
            </div>


            <?php
        }
        ?>

    </div>



</div>
