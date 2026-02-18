<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wane Car Rental</title>
    <meta charset="utf-8">
    <meta name="author" content="pixelhint.com">
    <meta name="description" content="Car rental system"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<section>
    <?php include 'header.php'; ?>

    <section class="caption">
        <h2 style="text-align: center">Find Your Dream Cars For Hire</h2>
        <h3 style="text-align: center">
            Range Rovers - Mercedes Benz - Landcruisers
        </h3>
    </section>
</section>

<section class="listings">
    <div class="wrapper">
        <ul class="properties_list">

        <?php
            include 'includes/config.php';

            $sel = "SELECT * FROM cars WHERE status = 'Available'";
            $rs = $conn->query($sel);

            if ($rs && $rs->num_rows > 0) {
                while($rws = $rs->fetch_assoc()){
        ?>

            <li>
                <a href="book_car.php?id=<?php echo $rws['id']; ?>">
                    <img class="thumb"
                         src="cars/<?php echo $rws['image']; ?>"
                         width="300"
                         height="200">
                </a>

                <span class="price">
                    <?php echo "Kshs. " . $rws['price']; ?>
                </span>

                <div class="property_details">
                    <h1>
                        <a href="book_car.php?id=<?php echo $rws['id']; ?>">
                            <?php echo "Car Make: " . $rws['brand']; ?>
                        </a>
                    </h1>

                    <h2>
                        Car Name/Model:
                        <span class="property_size">
                            <?php echo $rws['car_name']; ?>
                        </span>
                    </h2>
                </div>
            </li>

        <?php
                }
            } else {
                echo "<p style='text-align:center;'>No cars available.</p>";
            }
        ?>

        </ul>
    </div>
</section>

<footer>
    <div class="wrapper footer">
        <p style="text-align:center;">
            Copyright &copy; <?php echo date("Y") ?>
            Happy Car Rental. All Rights Reserved.
        </p>
    </div>
</footer>

</body>
</html>