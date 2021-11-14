<?php

    require "assets/php/driverdetailprocess.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
                if($i = $id){
            ?>
        <title>Driver: <?php echo $firstname[$i] ?> <?php echo $lastname[$i] ?></title>
        <link rel="icon" href="https://image.flaticon.com/icons/png/512/2418/2418779.png">
        <link rel="stylesheet" href="driverdetails.css">
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
            <section class="container">

                <div class="content">
                    <div class="driver">
                        <div class="driver-pic">
                            <img src="<?php echo $image2[$i]?>" width="100%" height="450px" style="object-fit:cover; object-position: 0 0%;" alt="">
                        </div>
                        <div class="number">
                            <h1><?php echo $number[$i] ?></h1>
                            <img src="<?php echo $flag[$i] ?>" alt="">
                        </div>
                        <div class="driver-name">
                            <h1><?php echo $firstname[$i] ?> <?php echo $lastname[$i] ?></h1>
                        </div>
                    </div>
                    <div class="driver-details">
                        <img src="<?php echo $logo[$i] ?>" alt="">
                        <div class="driver-data">
                            <div class="data">
                                <h1>Team</h1>
                                <h1>Country</h1>
                                <h1>Podiums</h1>
                                <h1>Points</h1>
                                <h1>Date of Birth</h1>
                                <h1>Place of Birth</h1>
                            </div>
                            <div class="answer">
                                <h1><?php echo $team[$i] ?></h1>
                                <h1><?php echo $nationality[$i] ?></h1>
                                <h1><?php echo $podium[$i] ?></h1>
                                <h1><?php echo $fullPoints[$i] ?></h1>
                                <h1><?php echo $birthDate[$i] ?></h1>
                                <h1><?php echo $birthPlace[$i] ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section 2 -->
            <Section class="bio">
                <div class="title">
                    <h1>Biography</h1>
                </div>
                <div class="bio-text">
                    <p>
                    <?php echo $bio[$i] ?>
                    </p>
                </div>
            </Section>
            
            <?php
                }
            ?>

        </main>
    </body>
</html>