<?php

    $title = "ABC-CAR | Used Car";

    require_once  'config/db.php';
    require_once 'partials/head.php';
    require_once 'partials/nav.php';

    require_once 'partials/footer.php';

?>

<div class="container">

    <div class="row">



        <?php

            $search = $_GET['search'];

            $query = $connection->query("SELECT * FROM car WHERE carDetails LIKE '%$search%'");
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
        ?>

            <div class="col-sm-12 col-md-12" style="margin-bottom: 30px;margin-top: 30px;">

                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo $row['carDetails'] ?> <span class="text-left">&nbsp; &nbsp; <?php echo $row['carPrice'] ?></span></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?php echo $row['carImage']?><?php echo $row['carImageName'] ?>" alt="car" class="img-responsive">
                            </div>
                            <div class="col-sm-6">
                                <h5 class="text-muted">ODOMETER: <br> <span class="text-muted"><?php echo $row['carOdometer'] ?></span></h5>
                                <h5 class="text-muted">TRANSMISSION: <br> <span class="text-muted"><?php echo $row['CarTransmssion'] ?></span></h5>
                                <p>
                                    <?php echo $row['carInfo'] ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pull-right info-btn">
                        <a href="contact.php?id=<?php echo $row['carID']?>" class="btn btn-primary" role="button">Enquire</a>
                        <a href="order.php?id=<?php echo $row['carID']?>" class="btn btn-primary" role="button">Order</a>
                        <a href="view_car.php?id=<?php echo $row['carID']?>" class="btn btn-primary" role="button">View Car</a>
                    </div>

                    <div class="pull-left">
                        <h5 class="text-muted">LOCATION: <span class="text-muted"> <?php echo $row['carLocation'] ?> </span></h5>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>