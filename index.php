<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To our Restaurant 'SavorOnline'</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="left-nav">
            <img src="logo.jpg" alt="logo">
        </div>
        <div class="right-nav">
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="about.php">About Us</a></li>
                <li class="item"><a href="food.php">Food</a></li>
                <li class="item"><a href="contact.php">Contact Us</a></li>
                <li class="item"><a href="cart.php">Cart</a></li>
                <li class="item"><a href="admin.php">Admin</a></li>
                <li class="item"><a href="feedback.php">Feedback</a></li>
               
                
            </ul>
        </div>
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
                echo "
                <div class='user'>

                    $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
                </div>
                ";
            }
            else{
                echo "
                <div class='sign-in-up'>
                <button type='button' onclick=\"popup('login-popup')\">Login</button>
                <button type='button' onclick=\"popup('register-popup')\">Register</button>
                </div>
                ";
            }
        ?>
    </nav>

    <!-- -------------- login ------------------------------- -->
    <div class="popup-container" id="login-popup">
        <div class=" popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User Login</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" class="login-btn" name="login">Login</button>
            </form>
            <div class="forgot-btn">
                <button type="button" onclick="forgotPopup()">Forgot Password</button>
            </div>
        </div>
    </div>


    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="FULL NAME"  name="fullname" required>
                <input type="text" placeholder="User Name" name="username" required>
                <input type="email" placeholder="E-Mail"  name="email" required>
                <input type="password" placeholder="Password"  name="password" required>
                <button type="submit" class="register-btn" name="register">Register</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="forgot-popup">
        <div class="forgot popup">
            <form action="forgotpassword.php" method="POST">
                <h2>
                    <span>Reset Password</span>
                    <button type="reset" onclick="popup('forgot-popup')">X</button>
                </h2>
                <input type="email" placeholder="E-mail" name="email">
                
                <button type="submit" class="reset-btn" name="send-reset-link">Send Link</button>
            </form>
            
        </div>
    </div>
    <!-- <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
         echo"<h1 style='text-align:center; margin-top:200px'>Welcome - $_SESSION[username]</h1>";
      }
    ?> -->

    <!-- ----------  Home --------------------- -->
    <section id="home">
        <h1 class="h1">Welcome To our Restaurant 'SavorOnline'</h1>
        <p class="p">Bienvenue sur notre site de restaurant ! Nous sommes ravis de vous accueillir dans notre univers culinaire. Chez nous, l'art de la gastronomie est une passion que nous cultivons chaque jour avec soin et dévouement. Nous proposons une carte variée, composée de plats savoureux et originaux, élaborés à partir de produits frais et de qualité. Que vous soyez en quête d'un déjeuner rapide, d'un dîner romantique ou d'un repas entre amis, nous avons ce qu'il vous faut. Notre équipe de professionnels de la restauration est à votre disposition pour vous offrir une expérience gastronomique inoubliable. Nous espérons vous voir bientôt dans notre restaurant et partager avec vous notre passion pour la cuisine.</p><br>
       
    </section>

    <section id="rooms-right">
        <div class="paras">
          <p class="sectionTag">PanCake</p>
          <p class="sectionsubTag font"> "There's nothing quite like a stack of fluffy pancakes, drizzled with warm maple syrup and topped with your favorite fruits or nuts. Whether you prefer them for breakfast, brunch, or even dinner, pancakes are the ultimate comfort food that never fail to satisfy. So go ahead, indulge in a stack of golden goodness and savor every bite."</p>
          <p class="price">Price : 12 dt</p>
          <button class="price-btn" >Book A table</button>
          </div>
          <div class="thumbnail">
          <img src="pancake.jpg" alt="" class="imgFluid">
          </div>
    </section>

    <section id="rooms-left">
        <div class="paras">
          <p class="sectionTag">Sushi</p>
          <p class="sectionsubTag font">Experience the taste of Japan with our expertly crafted sushi, made with only the freshest and highest quality ingredients. Our skilled chefs take pride in their precision and attention to detail, ensuring that each piece of sushi is a work of art that tantalizes the taste buds. Whether you're a fan of traditional nigiri or adventurous rolls, we have the best sushi in town that will leave you craving for more.</p>
          <p class="price">Price: 30 dt</p>
          <button class="price-btn">Book A Table</button>
          </div>
          <div class="thumbnail">
           <img src="suchi.jpg" alt="" class="imgFluidd">
          </div>
    </section>

    <section id="rooms-right">
        <div class="paras">
          <p class="sectionTag">Crepes</p>
          <p class="sectionsubTag font">Crepes are thin pancakes enjoyed worldwide. They are made from a batter of flour, eggs, milk, and salt. Sweet crepes are filled with ingredients like Nutella, fruits, or whipped cream, while savory crepes may contain cheese, ham, or vegetables. They can be enjoyed for breakfast, dessert, or as a light meal.</p>
          <p class="price">Price : 10 dt </p>
            <button class="price-btn">Book A Table</button>
          </div>
          <div class="thumbnail">
          <img src="./crepe.jpg" alt= "" class="imgFluid">
          </div>
    </section>

    <!-- -------------------------food ------------------------ -->
    <section id="services-container">
        <h1 class="h-primary center">Our Speciality</h1>
        <div id="services">
            <div class="box">
                <a href="food.php"><img src="./suchi.jpg" alt="manchurion"></a>
               <h2 class="h-secondary center">Chinese</h2>
               <p class="center">Chinese cuisine is known for its diverse flavors and cooking techniques. It incorporates fresh ingredients and seeks a balance of colors, textures, and tastes in each dish. Popular Chinese dishes include sweet and sour chicken, Kung Pao shrimp, Peking duck, and dim sum. Noodles, rice dishes, stir-fries, and flavorful sauces are also common. Regional cuisines like Sichuan, Cantonese, and Hunan offer unique specialties. Chinese cuisine's rich culinary traditions have made it a favorite worldwide.
               </p>
            </div>
            <div class="box">
                 <a href="food.php"><img src="img/pasta.png" alt="pasta"></a>
                <h2 class="h-secondary center">Italian</h2>
                <p class="center"> Italian cuisine is famous for its simple yet flavorful dishes. It relies on high-quality ingredients such as pasta, tomatoes, olive oil, and fresh herbs. Classic Italian dishes like spaghetti Bolognese, margherita pizza, and risotto showcase the essence of Italian cooking. Italian cuisine also offers a wide variety of regional specialties, including creamy tiramisu and refreshing gelato for dessert. With its emphasis on fresh ingredients and uncomplicated recipes, Italian cuisine continues to be cherished worldwide.
                </p>
             </div>
             <div class="box">
             <a href="food.php"><img src="./couscous.jpg" alt="Tunisian"></a>
                <h2 class="h-secondary center">Tunisian</h2>
                <p class="center">Tunisian cuisine, the cuisine of Tunisia, consists of the cooking traditions, ingredients, recipes and techniques developed in Tunisia since antiquity. It is mainly a blend of Mediterranean and native Punics-Berber cuisine. Historically, Tunisian cuisine influenced many cultures and nations like Italians, Andalusians, French and Arabs.

Like many countries in the Mediterranean basin, the Tunisian cuisine is heavily based on olive oil, spices, tomatoes, seafood and meat. Yet, it has a distinctive spiciness that differs it from surrounding cuisines.</p>
    </div>
        </div>

        <div id="services">
            <div class="box">
            <a href="food.php"><img src="./rotatouille.jpg" alt=></a>
               <h2 class="h-secondary center">Frensh</h2>
               <p class="center">French cuisine is renowned for its elegance and emphasis on high-quality ingredients. It encompasses a wide range of regional specialties, from classic dishes like coq au vin and boeuf bourguignon to delicate pastries like croissants and macarons. French cuisine is known for its meticulous preparation, sophisticated techniques, and a strong emphasis on presentation. With its rich culinary heritage, French cuisine continues to be admired for its refined flavors and exquisite dining experiences.
               </p>
            </div>
            <div class="box">
            <a href="food.php"><img src="./turc.jpg" alt=></a>
                <h2 class="h-secondary center">Turkish</h2>
                <p class="center"> Turkish cuisine is renowned for its vibrant flavors and diverse influences. With a fusion of Middle Eastern, Mediterranean, Central Asian, and Balkan culinary traditions, Turkish food showcases a delightful array of fresh ingredients and aromatic spices. From hearty kebabs and savory meze platters to mouthwatering baklava and rich Turkish coffee, the cuisine offers a harmonious balance of meat, vegetables, grains, and dairy products. With its centuries-old culinary heritage, Turkish food continues to captivate food lovers with its enticing aromas and exquisite flavors. </p>
             </div>
             <div class="box">
             <a href="food.php"><img src="./tea.jpg" alt=""></a>
                <h2 class="h-secondary center">Deserts</h2>
                <p class="center">Desserts are a delightful and indulgent part of culinary traditions across various cultures. From decadent cakes and pastries to refreshing fruit-based treats, desserts offer a sweet and satisfying end to a meal </p>
             </div>
        </div>
       
    </section>

    
   












    <!-- -------------------------Footer ---------------------------- -->

    <section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                <h3>ABOUT US</h3>
                <p>The majority of independent <br> properties are losing out <br> on a lot of business for <br> one very simple reason: <br> their hotel websites are poorly <br> designed.</p>
                </div>
                <div class="footer-center">
                    <h3>USEFULL LINKS</h3>
                    <a href="room.php">Rooms</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="food.php">Food</a>
                    <a href="booking.php">Booking</a>
                    <a href="index.php">Home</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT INFO</h3>
                    <p>South-Kondwa,Pune, <br>Maharashtra,Pin-414001 <br>+91 7821893289 <br>www.restaurentms.com</p>
                </div>
                <div class="footer-center">
                    <h3>OPENING HOURS</h3>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Monday: 7:AM - 12Pm
                    </div>
                  
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Tue-Wed: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thur-Fri: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Sat-Sun: 7:Am - 12Pm
                    </div>


                </div>
            </div>
        </div>
    </section>
    

    <script>
        function popup(popup_name)
        {
             get_popup=document.getElementById(popup_name);
             if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else{
                get_popup.style.display="flex";
            }
        }

        function forgotPopup()
        {
            document.getElementById('login-popup').style.display="none";
            document.getElementById('forgot-popup').style.display="flex";
        }
    </script>
</body>
</html>