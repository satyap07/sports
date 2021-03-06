<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tournament</title>
    <link rel="stylesheet" type="text/css" href="./public/css/tCSS.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!-- Slideshow container -->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 7</div>
            <img src="./public/images/photo11.jpg" />
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 7</div>
            <img src="./public/images/photo22.jpg" />
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 7</div>
            <img src="./public/images/photo33.jpg" />
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 7</div>
            <img src="./public/images/photo44.jpg" />
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 7</div>
            <img src="./public/images/photo55.jpg" />
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 7</div>
            <img src="./public/images/photo66.jpg" />
        </div>
        <div class="mySlides fade">
            <div class="numbertext">7 / 7</div>
            <img src="./public/images/photo77.jpg" />
        </div>
        <div class="blurshow">
            <div class="content">
                <h1>TOURNAMENTS</h1>
                <p>
                    We have lots of sports categories available. You can apply for
                    multiple sports and register them. Create an account or Login to
                    view for various tournaments.
                </p>
                <br />
                <a href="register_tournament.php">REGISTER</a>
            </div>
            <div class="content2">
                <p>
                    S <br />
                    P <br />
                    O <br />
                    R <br />
                    T <br />
                    S <br />
                    <br />
                    2 <br />
                    0 <br />
                    2 <br />
                    0
                </p>
            </div>
        </div>
    </div>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <div class="tournaments">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./public/images/cricket.jpg" alt="Avatar" />
                </div>
                <div class="flip-card-back">
                    <h1>Cricket</h1>
                    <p>Start Date: 04-02-2020</p>
                    <p>End Date: 10-02-2020</p>
                    <p>Venue: Outdoor Stadium</p>
                    <br />
                    <a href="cricket.php">View Details</a>
                    <br /><br />
                    <form action="register_sport.php" method="POST">
                        <input type="hidden" name="sport" value="cricket" />
                        <button type="submit">Register Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./public/images/football.jpg" alt="Avatar" />
                </div>
                <div class="flip-card-back">
                    <h1>Football</h1>
                    <p>Start Date: 04-02-2020</p>
                    <p>End Date: 10-02-2020</p>
                    <p>Venue: Football Stadium</p>
                    <br />
                    <a href="football.php">View Details</a>
                    <br /><br />
                    <form action="register_sport.php" method="POST">
                        <input type="hidden" name="sport" value="football" />
                        <button type="submit">Register Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./public/images/tt.jpg" alt="Avatar" />
                </div>
                <div class="flip-card-back">
                    <h1>Table Tennis</h1>
                    <p>Start Date: 04-02-2020</p>
                    <p>End Date: 10-02-2020</p>
                    <p>Venue: Indoor Gym</p>
                    <br />
                    <a href="tabletennis.php">View Details</a>
                    <br /><br />
                    <form action="register_sport.php" method="POST">
                        <input type="hidden" name="sport" value="tabletennis" />
                        <button type="submit">Register Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./public/images/hockey.jpg" alt="Avatar" />
                </div>
                <div class="flip-card-back">
                    <h1>Hockey</h1>
                    <p>Start Date: 04-02-2020</p>
                    <p>End Date: 10-02-2020</p>
                    <p>Venue: Outdoor Stadium</p>
                    <br />
                    <a href="hockey.php">View Details</a>
                    <br /><br />
                    <form action="register_sport.php" method="POST">
                        <input type="hidden" name="sport" value="hockey" />
                        <button type="submit">Register Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./public/images/basketball.jpg" alt="Avatar" />
                </div>
                <div class="flip-card-back">
                    <h1>Basketball</h1>
                    <p>Start Date: 04-02-2020</p>
                    <p>End Date: 10-02-2020</p>
                    <p>Venue: VIT Basketball Court</p>
                    <br />
                    <a href="basketball.php">View Details</a>
                    <br /><br />
                    <form action="register_sport.php" method="POST">
                        <input type="hidden" name="sport" value="basketball" />
                        <button type="submit">Register Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./public/images/swimming.jpg" alt="Avatar" />
                </div>
                <div class="flip-card-back">
                    <h1>Swimming</h1>
                    <p>Start Date: 04-02-2020</p>
                    <p>End Date: 10-02-2020</p>
                    <p>Venue: Hostel Swimming Pool</p>
                    <br />
                    <a href="swimming.php">View Details</a>
                    <br /><br />
                    <form action="register_sport.php" method="POST">
                        <input type="hidden" name="sport" value="swimming" />
                        <button type="submit">Register Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/javascript/myScript.js"></script>
</body>

</html>