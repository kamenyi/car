<?php

    $title = "ABC-CAR | Home";

    require_once  'config/db.php';
    require_once 'partials/head.php';
    require_once 'partials/nav.php';

    require_once 'partials/carousel.php';

?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="text-muted m-b-3">Looking for car</h4>
            <div class="row">
                <div class="col-xs-12">
                    <form autocomplete="off">
                        <div class="form-group">
                            <label for="car-search" class="sr-only">Email address</label>
                            <input type="text" class="form-control" id="car-search" placeholder="Enter Model, Make, Year">
                        </div>
                        <input type="text" class="form-control" id="make" placeholder="Example - Totota">
                        <select class="custom-select m-t-1" title="">
                            <option>Used or New</option>
                            <option value="1">New</option>
                            <option value="2">Used</option>
                            <option value="3">Both</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <h4 class="text-muted m-b-2">No problem, Service, Advice for right <br> price is back</h4>
            <div class="row">
                <div class="col-xs-12">
                    <p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed vitae, quas eum amet culpa iste exercitationem repellendus repellat maiores, magnam provident ipsa maxime unde ad minima, quasi consectetur facilis voluptatem.</span>
                        <span>Animi provident ullam sunt, facilis reiciendis sed, deserunt iste ut ratione voluptatem ad quod! A necessitatibus molestias ullam in aut esse aliquam illum, natus tempore, dolorem minima et modi cum!</span>
                        <span>Perferendis sed voluptatum quasi dolores nesciunt cum voluptate blanditiis officiis minus, reprehenderit adipisci et dolorem hic dicta eligendi eius pariatur vitae amet inventore, exercitationem quod impedit. Dignissimos vero est reprehenderit.</span>
                    </p>
                    <p>
                        Call us on: 02 8888 8888
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row">

        <h4 class="text-muted" style="margin-left: 18px;">Looking for car</h4>

        <?php

            $query = $connection->query("SELECT * FROM car WHERE CarType='NEW' LIMIT 3");
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

<?php

require_once 'partials/footer.php';

?>
