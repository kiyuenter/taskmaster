<?php

session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="global.css" type="text/css"/>
    <link rel="stylesheet" href="store.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>KJ Pharmacy | Store</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
        <div class="header">
            <a href="index.php"><img src="logo.png" alt="LOGO" width="35px" height="35px"/></a>
        </div>
        <div class="nav">
            <ul>
                <li><a href="index.php" class="underline">HOME</a></li>
                <li><a href="store.php" class="underline"><l class="dddd">STORE</l></a></li>
                <li><a href="about.php" class="underline">ABOUT</a></li>
                <li><a href="contact.php" class="underline">CONTACT</a></li>
            </ul>
        </div>
        <div class="log">
                <ul>
                    <li class="search">
                        <form action="search.php" method="get">
                            <input name="text" type="text" style="height: 10px; border-radius: 5px;" id="search-bar" placeholder="Search . . .">|
                            <button name="submit" class="search-icon"><i class="bi bi-search" style="color:white; margin-right: 20px;"></i></button>
                        </form>
                    </li>
                    <li><a href="counter.html"><i class="bi bi-cart4" style="margin-right: 20px;"></i></li></a>
                    <li><p class="count" style="color: white;">0</p></li>
                    <?php
                    if(!isset($_SESSION['EAddress'])){
                        echo '<li><a href="../login/signupLogin.php"><i class="bi bi-person-circle"></i></a></li>';

                    }
                    else{
                        echo $_SESSION['EAddress'];
                     echo '<a href="logout.php"><button style="margin: 5px; border-radius: 8px; width: 90px; height: 33px; border: none; background-color: rgb(8, 172, 184); color: white">LOG OUT</button></a>';
                    
                    }
                    ?>
                </ul>
            </div>
        </div>
        </div>
        <div class="store-content">
            <div class="part-1">
                <div class="col">
                <div class="store-collection">
                        <!-----Fetch Product information from the database -->
                        <?php
                            include 'connection.php';

                            $select = "select * from product_tb limit 0, 4";
                            $sele = $con -> query($select);
                            $NumOfRow = $sele->num_rows;

                            if ($NumOfRow > 0)
                            {
                                while ($row = $sele->fetch_assoc())
                                {
                                    echo "<div class='col-1'>";
                                    echo "<img src='".$row['ProImage']."'>";
                                    echo "<p>".$row['ProName']."</p>";
                                    echo "<del style='color: red;'>".$row['ProPrice']."</del>";
                                    echo "<p>".$row['ProDiscount']."</p>";
                                    echo "<div class='add-to'>
                                    <button class='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'>
                                        <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
                                      </svg>&nbsp;&nbsp;ADD TO CART</button>
                                    </div>";
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col">
                <div class="store-collection">
                        <!-----Fetch Product information from the database -->
                        <?php
                            include 'connection.php';

                            $select = "select * from product_tb limit 4, 8";
                            $sele = $con -> query($select);
                            $NumOfRow = $sele->num_rows;

                            if ($NumOfRow > 0)
                            {
                                while ($row = $sele->fetch_assoc())
                                {
                                    echo "<div class='col-1'>";
                                    echo "<img src='".$row['ProImage']."'>";
                                    echo "<p>".$row['ProName']."</p>";
                                    echo "<del style='color: red;'>".$row['ProPrice']."</del>";
                                    echo "<p>".$row['ProDiscount']."</p>";
                                    echo "<div class='add-to'>
                                    <button class='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'>
                                        <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
                                      </svg>&nbsp;&nbsp;ADD TO CART</button>
                                    </div>";
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col">
                <div class="store-collection">
                        <!-----Fetch Product information from the database -->
                        <?php
                            include 'connection.php';

                            $select = "select * from product_tb limit 8, 12";
                            $sele = $con -> query($select);
                            $NumOfRow = $sele->num_rows;

                            if ($NumOfRow > 0)
                            {
                                while ($row = $sele->fetch_assoc())
                                {
                                    echo "<div class='col-1'>";
                                    echo "<img src='".$row['ProImage']."'>";
                                    echo "<p>".$row['ProName']."</p>";
                                    echo "<del style='color: red;'>".$row['ProPrice']."</del>";
                                    echo "<p>".$row['ProDiscount']."</p>";
                                    echo "<div class='add-to'>
                                    <button class='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'>
                                        <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
                                      </svg>&nbsp;&nbsp;ADD TO CART</button>
                                    </div>";
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col">
                <div class="store-collection">
                        <!-----Fetch Product information from the database -->
                        <?php
                            include 'connection.php';

                            $select = "select * from product_tb limit 12, 16";
                            $sele = $con -> query($select);
                            $NumOfRow = $sele->num_rows;

                            if ($NumOfRow > 0)
                            {
                                while ($row = $sele->fetch_assoc())
                                {
                                    echo "<div class='col-1'>";
                                    echo "<img src='".$row['ProImage']."'>";
                                    echo "<p>".$row['ProName']."</p>";
                                    echo "<del style='color: red;'>".$row['ProPrice']."</del>";
                                    echo "<p>".$row['ProDiscount']."</p>";
                                    echo "<div class='add-to'>
                                    <button class='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'>
                                        <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
                                      </svg>&nbsp;&nbsp;ADD TO CART</button>
                                    </div>";
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col">
                <div class="store-collection">
                        <!-----Fetch Product information from the database -->
                        <?php
                            include 'connection.php';

                            $select = "select * from product_tb limit 16, 20";
                            $sele = $con -> query($select);
                            $NumOfRow = $sele->num_rows;

                            if ($NumOfRow > 0)
                            {
                                while ($row = $sele->fetch_assoc())
                                {
                                    echo "<div class='col-1'>";
                                    echo "<img src='".$row['ProImage']."'>";
                                    echo "<p>".$row['ProName']."</p>";
                                    echo "<del style='color: red;'>".$row['ProPrice']."</del>";
                                    echo "<p>".$row['ProDiscount']."</p>";
                                    echo "<div class='add-to'>
                                    <button class='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'>
                                        <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
                                      </svg>&nbsp;&nbsp;ADD TO CART</button>
                                    </div>";
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col">
                <div class="store-collection">
                        <!-----Fetch Product information from the database -->
                        <?php
                            include 'connection.php';

                            $select = "select * from product_tb limit 20, 24";
                            $sele = $con -> query($select);
                            $NumOfRow = $sele->num_rows;

                            if ($NumOfRow > 0)
                            {
                                while ($row = $sele->fetch_assoc())
                                {
                                    echo "<div class='col-1'>";
                                    echo "<img src='".$row['ProImage']."'>";
                                    echo "<p>".$row['ProName']."</p>";
                                    echo "<del style='color: red;'>".$row['ProPrice']."</del>";
                                    echo "<p>".$row['ProDiscount']."</p>";
                                    echo "<div class='add-to'>
                                    <button class='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'>
                                        <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
                                      </svg>&nbsp;&nbsp;ADD TO CART</button>
                                    </div>";
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col">
                <div class="store-collection">
                        <!-----Fetch Product information from the database -->
                        <?php
                            include 'connection.php';

                            $select = "select * from product_tb limit 24, 28";
                            $sele = $con -> query($select);
                            $NumOfRow = $sele->num_rows;

                            if ($NumOfRow > 0)
                            {
                                while ($row = $sele->fetch_assoc())
                                {
                                    echo "<div class='col-1'>";
                                    echo "<img src='".$row['ProImage']."'>";
                                    echo "<p>".$row['ProName']."</p>";
                                    echo "<del style='color: red;'>".$row['ProPrice']."</del>";
                                    echo "<p>".$row['ProDiscount']."</p>";
                                    echo "<div class='add-to'>
                                    <button class='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'>
                                        <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
                                      </svg>&nbsp;&nbsp;ADD TO CART</button>
                                    </div>";
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
    </div>
    <footer>
        <div class="hr">
            <hr class="ft">
        </div>
        <div class="footer-content">
            <div class="footer-content-1">
                <div>
                    <img src="logo.png" alt=""width="100px">
                    <p>KJ PHARMACY</p>
                </div>
                <div class="linked">
                    <p><u><b>PAGES LINK</b></u></p>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="store.php">STORE</li></a>
                        <li><a href="about.php">ABOUT</li></a>
                        <li><a href="contact.php">CONTACT</li></a>
                    </ul>
                </div>
                <div class="subscribe">
                    <ul>
                        <li class="sub-1">Subscribe to our newsletter</li>
                        <li class="sub-2">You get monthly digest of what's new and exciting from us.</li>
                        <li class="sub-3"><form><input type="email" placeholder="Email address" required class="sub-5"><input class="sub-4" type="submit" value="Subscribe"></form></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="hr">
            <hr class="ft"/>
        </div>
        <div class="footer-content">
            <div class="footer">
                <div>
                    <p style="font-weight: 600;">&copy;KJ Pharmacy. All rights reserved.</p>
                </div>
                <div class="ft-li">
                    <ul>
                        <li><a href="https://www.twitter.com" target="_blank"><img src="image/icons/twitter.svg" alt="twitter"></a></li>
                        <li><a href="https://www.facebook.com" target="_blank"><img src="image/icons/facebook.svg" alt="facebook"></a></li>
                        <li class="un"><a href="https://www.instagram.com" target="_blank"><img src="image/icons/instagram.svg" alt="instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!--Script for search bar expand-->
    <script>
        function expandSearch() {
  var searchBar = document.getElementById("search-bar");
  searchBar.style.width = "200px";
  searchBar.style.border = "2px solid white";
}
    </script>
</body>
</html>