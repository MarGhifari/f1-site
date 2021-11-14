<?php

    require "assets/php/driverprocess.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formula 1: Driver</title>
        <link rel="icon" href="https://image.flaticon.com/icons/png/512/2418/2418779.png">
        <link rel="stylesheet" href="drivernew.css">
    </head>

    <body>
        <header>
            <nav>
                <div class="web-logo">
                    <a href="index.php"><img src="https://i.ndtvimg.com/i/2017-11/f1-logo-2018_827x510_81511713381.png" alt="Logo"></a>
                </div>
                <div>
                    <ul>
                        <li><a href="https://www.formula1.com/en/latest.html">Latest</a></li>
                        <li><a href="https://www.formula1.com/en/video.html">Video</a></li>
                        <li><a href="https://www.formula1.com/en/racing/2020.html">Schedule</a></li>
                        <li><a href="https://www.formula1.com/en/results.html">Standings</a></li>
                        <li><a href="">Drivers</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>

            <!-- Section 1 -->
            <section class="title">
                <div class="main-title">
                    <h1>F1 Drivers 2020</h1>
                </div>
                <div class="title-text">
                    <p>Check out this season's official line-up. Full breakdown of drivers, points, and current <br>
                        positions. Follow you favourite F1 drivers on and off the track. 
                    </p>
                </div>
            </section>

            <!-- Section 2 -->
            <section class="container">
                <?php
                    for($i=1; $i<=3; $i++){
                ?>

                <div class="card-container">
                    <a style="text-decoration: none; color: black;" href="driverdetailweb.php?id=<?php echo $i?>">
                        <div class="content">
                            <div class="first-row">
                                <div class="driver-position">
                                    <h1><?php echo $i?></h1>
                                </div>
                                <div class="driver-points">
                                    <h1>
                                        &nbsp<?php echo $points[$i] ?> <br><span style="background-color: black; color: white; border-radius: 5px; padding: 0 5%;"> PTS</span>
                                    </h1>
                                </div>
                            </div>
                            <div>
                                <hr class="divider">
                            </div>
                            <div class="second-row">
                                <div class="driver-name">
                                    <p style="border-left: thick solid <?php echo $color[$i]?>; padding-left: 12px;">
                                        <span style="font-size: 13px;"><?php echo $firstname[$i]?></span> <br><span style="font-family: f1-bold; font-size: 20px;"><?php echo $lastname[$i] ?></span> 
                                    </p>
                                </div>
                                <div class="driver-country">
                                    <img src="<?php echo $flag[$i]?>" alt="">
                                </div>
                            </div>  
                            <div>
                                <hr class="divider">
                            </div>
                            <div class="third-row">
                                <p><?php echo $team[$i]?></p>
                                <div class=third-row-pic>
                                    <div class="driver-number">
                                        <img src="<?php echo $idNumber[$i]?>" alt="">
                                    </div>
                                    <div class="driver-pic">
                                        <img src="<?php echo $image1[$i] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </a>
                </div>
                <?php
                    }
                ?>
                
            </section>

            <!-- Section 3 -->
            <section class="container-2">

                <?php 
                    for($i=4; $i<16; $i++){
                ?>
                
                <div class="card-container-2">
                <a style="text-decoration: none; color: black;" href="driverdetailweb.php?id=<?php echo $i?>">
                    <div class="content">
                        <div class="first-row">
                            <div class="driver-position">
                                <h1><?php echo $i ?></h1>
                            </div>
                            <div class="driver-points">
                                <h1>
                                    &nbsp<?php echo $points[$i]?><br><span style="background-color: black; color: white; border-radius: 5px; padding: 0 5%;"> PTS</span>
                                </h1>
                            </div>
                        </div>
                        <div>
                            <hr class="divider">
                        </div>
                        <div class="second-row">
                            <div class="driver-name">
                                <p style="border-left: thick solid <?php echo $color[$i]?>; padding-left: 12px;">
                                    <span style="font-size:13px"><?php echo $firstname[$i]?></span> <br><span style="font-family: f1-bold; font-size: 20px;"><?php echo $lastname[$i]?></span> 
                                </p>
                            </div>
                            <div class="driver-country">
                                <img src="<?php echo $flag[$i]?>" alt="">
                            </div>
                        </div>  
                        <div>
                            <hr class="divider">
                        </div>
                        <div class="third-row">
                            <p><?php echo $team[$i]?></p>
                            <div class=third-row-pic>
                                <div class="driver-number">
                                    <img src="<?php echo $idNumber[$i]?>" alt="">
                                </div>
                                <div class="driver-pic">
                                    <img src="<?php echo $image1[$i]?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>

                <?php
                    }
                ?>
            </section>

            
        </main>
    </body>
</html>