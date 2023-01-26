<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/89b0a6acae.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header">
        <nav>
            <a href="#"><img src="images/logo.png" class="logo"></a>
            <div class="nav-links" id="navLinks">
                <i class='fa-sharp fa-solid fa-circle-xmark' onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="#">ACCOMODATION</a></li>
                    <li><a href="#">FILTERS</a></li>
                    <li><a href="#">LOCATION</a></li>
                    <li><a href="#">ABOUT US</a></li>
                </ul>
            </div>
            <i class='bx bx-menu' onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>EXPLORE</h1>
            <h2> " EXTRAORDINARY EXPERIENCE "</h2>
            <p>A whole new hotel and beach resort experience unlike any other,<br>come and visit azzura for more
                exciting views and spots.
            </p>
            <a href="#" class="hero-btn">Sign-up</a>
            <a href="#" class="hero-btn">Login</a>
            
        </div>
        <div class="availability">
            <div class="status">
                <form action="availabilty.php" method="post">
                    <div class="category">
                        <label for="check-in" class="edit"> CHECK-IN
                            <br><input type="date" id="check-in" name="check-in"required>
                        </label>
                        <label for="check-out" class="edit"> CHECK-OUT
                            <br><input type="date" id="check-out" name="check-out"required>
                        </label>
                        <label for="code" class="edit"> PROMO CODE
                            <br><input type="text" id="code" name="code"required>
                        </label>
                        <label for="adult" class="edit"> ADULT
                            <br><input type="number" id="adult" name="adult"required>
                        </label>
                        <label for="children" class="edit"> CHILDREN
                            <br><input type="number" id="children" name="children"required>
                        </label>
                        
                        <input type="submit" id="submit" name="submit" value="Check Availabity">
    
                    </div>
                    
                </form>
                <!--<a href="#" class="button">Check availability</a>-->
               
            </div>
       </div>
        
    </section>
        
    <section class="container">
        <h2 class="text">Welcome to</h1>
        <h1 class="title">Azzura Hotel and Beach Resort</h1>
        <p class="paragraph">Find Azzura in Bolong Zamboanga City, Azzura are designed to merge intimate <br>
            stays in one instagram worthy space for you, our guests.
        </p>
        <div class="row">
            <div class="container-col">
                <i class='fa-sharp fa-solid fa-circle-xmark'></i>
                <h3>Fully furnished airconditioned rooms</h3>

            </div>
            <div class="container-col">
                <i class='fa-sharp fa-solid fa-circle-xmark'></i>
                <h3>High Costumer<br>Satisfaction</h3>

            </div>
            <div class="container-col">
                <i class='fa-sharp fa-solid fa-circle-xmark'></i>
                <h3>Convenient <br>Location</h3>

            </div>
            <div class="container-col">
                <i class='fa-sharp fa-solid fa-circle-xmark'></i>
                <h3>Clean and green surroundings</h3>

            </div>
            <div class="container-col">
                <i class='fa-sharp fa-solid fa-circle-xmark'></i>
                <h3>Peaceful and <br>secured place</h3>

            </div>
        </div>
    </section>

    <section class="image-container">
        <h1 style="color: #fff; font-size: 35px;">Azzura New Exciting Experience</h1>
        <div class="row">
            <div class="image-col">
                <img src="images/profile.jpg">
                <div class="layer">
                    <h3>Olympic Pool</h3>
                </div>
            </div>
            <div class="image-col">
                <img src="images/profile.jpg">
                <div class="layer">
                    <h3>Mini Pool</h3>
                </div>
            </div>
            <div class="image-col">
                <img src="images/profile.jpg">
                <div class="layer">
                    <h3>Aqua Park</h3>
                </div>
            </div>

        </div>
        

    </section>

    <section class="content-box">
        <p>Create memorable 'Beach' and 'waterfront' experiences for 
            visitors that promote interaction with the natural environment
            though appropriate amenities, linkages and public accesses 
        </p>
    </section>

    <script>
        var navLinks = document.getElementById("navLinks")
        function showMenu(){
            navLinks.style.right ="0";
        }
        function hideMenu(){
            navLinks.style.right ="-200px";
        }
    </script>
</body>
</html>