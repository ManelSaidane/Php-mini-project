<?php
include('header.php');
include('dbcon.php');
session_start();

?>
<style>
    .food-nav{
        display: flex;
        width: 100%;
        margin-top: 30px;
        position: sticky;
        top:0px;
        background-color:  #aae59f;
        border-radius:50px;
        
    }
    .food-nav ul{
        display: flex;
        padding: 10px;
        align-items: center;
        justify-content: center;
        margin-left: 50px;
    }
    .food-nav ul li{
        list-style: none;
        padding: 10px;
        text-align:center;
        margin-left: 70px;
    }
    .food-nav ul li:hover{
        background-color:white;
        color:white;
        border-radius:10px;
    }
    .food-nav ul li a{
        text-decoration: none;
        font-size:20px;
        text-align:center;
        color:black;
        font-weight:700;
    }
    .food-h{
        text-align:center;
    }
</style>
<nav class="food-nav">
    <ul>
        
        <li><a href="#Tunisian">Tunisian</a></li>
        <li><a href="#italian">Italian</a></li>
        <li><a href="#Frensh">Frensh</a></li>
        <li><a href="#Turkish">Turkish</a></li>
        <li><a href="#chinese">Chinese</a></li>
        <li><a href="#deserts">Deserts</a></li>
    </ul>
</nav>

<div class="container">
    <!-- ----------------------------------- Tunisian -------------------------- -->
    <h1 class="food-h">Tunisian</h1>
    <div class="row" id="Tunisian">
    
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="./ojja.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">OJJA</h5>
                    <p class="card-text">Price : 15 dt </p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Ojja">
                   <input type="hidden" name="price" value="15">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="./brika.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Brik</h5>
                    <p class="card-text">Price : 10 dt </p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Brik">
                   <input type="hidden" name="price" value="10">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="./mloukh.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Molokhia</h5>
                    <p class="card-text">Price : 40 dt</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="molokhia">
                   <input type="hidden" name="price" value="40">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="./couscous.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Couscous</h5>
                    <p class="card-text">Price : 60 dt</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Couscous">
                   <input type="hidden" name="price" value="60">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="./slata-mechwiya.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">grilled Salad</h5>
                    <p class="card-text">Price :40 dt</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Mhammas">
                   <input type="hidden" name="price" value="40">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="./chorba.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Chorba</h5>
                    <p class="card-text">Price : 30 dt</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Chorba">
                   <input type="hidden" name="price" value="30">
                </div>
            </div>
            </form>
        </div>
       
      

    </div>
    <!-- ================================== Italian===================================== -->
    <h1 class="food-h">Italian</h1>
    <div class="row" id="italian">
       
        <div class="col-lg-3">
           
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/chillipasta.jpg" alt="pasta">
                <div class="card-body">
                    <h5 class="card-title">Chilli Pasta</h5>
                    <p class="card-text">Price : Rs 200</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Chili Pasta">
                   <input type="hidden" name="price" value="200">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/burger.jpg" alt="Burger">
                <div class="card-body">
                    <h5 class="card-title">Veg Cheese Burger</h5>
                    <p class="card-text">Price : Rs 110</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Burger">
                   <input type="hidden" name="price" value="110">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/pasta.png" alt="pasta">
                <div class="card-body">
                    <h5 class="card-title">Pasta</h5>
                    <p class="card-text">Price : Rs 160</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Pasta">
                   <input type="hidden" name="price" value="160">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/pizza.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Pizza</h5>
                    <p class="card-text">Price : Rs 250</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Pizza">
                   <input type="hidden" name="price" value="250">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/margereta.jpg" alt="margereta">
                <div class="card-body">
                    <h5 class="card-title">Margereta</h5>
                    <p class="card-text">Price : Rs 150</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Margereta">
                   <input type="hidden" name="price" value="150">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
            <div class="card">
                <img src="img/capsi.jpg" alt="capsi">
                <div class="card-body">
                    <h5 class="card-title">New Capsi Pizza</h5>
                    <p class="card-text">Price : Rs 160</p>
                   <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                   <input type="hidden" name="item_name" value="Capsi Pizza">
                   <input type="hidden" name="price" value="160">
                </div>
            </div>
            </form>
            
        </div>
       
      
        
    </div>
    <!-- ------------------------------------Frensh------------------------------------------- -->
    <h1 class="food-h">Frensh</h1>
    <div class="row" id="Frensh">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./Beeftongue.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Beef Tongue</h5>
                   <p class="card-text">Price : 100 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Beef_Tongue">
                  <input type="hidden" name="price" value="100">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./rotatouille.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Ratatouille</h5>
                   <p class="card-text">Price :90 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Ratatouille">
                  <input type="hidden" name="price" value="90">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./tripes.jpeg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Tripes</h5>
                   <p class="card-text">Price : 88 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Tripes">
                  <input type="hidden" name="price" value="88">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./bloodsausage.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Blood Sausage</h5>
                   <p class="card-text">Price : 120 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Blood_sausage">
                  <input type="hidden" name="price" value="120">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./frenshonion.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Frensh Onion Soup</h5>
                   <p class="card-text">Price : 40 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Frensh_soup">
                  <input type="hidden" name="price" value="40">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./pig.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Pig's Feet</h5>
                   <p class="card-text">Price : 150 dt </p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Pig_feet">
                  <input type="hidden" name="price" value="150">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
   <!-- ---------------------------------------Turkish ------------------------------------ -->
   <h1 class="food-h">Turkish</h1>
   <div class="row" id="Turkish">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./kebab.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Kebab</h5>
                   <p class="card-text">Price : 50 dt </p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Kebab">
                  <input type="hidden" name="price" value="50">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./kefte.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Kefte</h5>
                   <p class="card-text">Price : 50 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Kefte">
                  <input type="hidden" name="price" value="50">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./shawarma.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Shawarma</h5>
                   <p class="card-text">Price : 40 dt </p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Shawarma">
                  <input type="hidden" name="price" value="40">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./turc.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Turkish Bagels Simit</h5>
                   <p class="card-text">Price : 55 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Turc">
                  <input type="hidden" name="price" value="55">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./lentilsoup.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Lentil Soup</h5>
                   <p class="card-text">Price : 30 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Lentil_soup">
                  <input type="hidden" name="price" value="30">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./pide.webp" alt="">
               <div class="card-body">
                   <h5 class="card-title">Pide</h5>
                   <p class="card-text">Price : 82 dt </p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Pide">
                  <input type="hidden" name="price" value="82">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
   <!-- ------------------------------------------chinese-------------------------- -->
   <h1 class="food-h">Chinese</h1>
   <div class="row" id="chinese">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/paneerchilli.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Paneer Chili</h5>
                   <p class="card-text">Price : 50 dt </p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Paneer Chili">
                  <input type="hidden" name="price" value="50">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/manchu.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Manchurion</h5>
                   <p class="card-text">Price :  40 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Manchurion">
                  <input type="hidden" name="price" value="40">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/sezwan.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Sezwan Rice</h5>
                   <p class="card-text">Price : 60 dt </p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Sezwan">
                  <input type="hidden" name="price" value="60">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/nood.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Veg Dry Noodles</h5>
                   <p class="card-text">Price :  30 dt </p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Dry Noodels">
                  <input type="hidden" name="price" value="30">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/momo.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Boiled Momos</h5>
                   <p class="card-text">Price : 70 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Momos">
                  <input type="hidden" name="price" value="70">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/hakka.jpg" alt="hakks">
               <div class="card-body">
                   <h5 class="card-title">Paneer Butter Masala</h5>
                   <p class="card-text">Price : 50 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Hakka">
                  <input type="hidden" name="price" value="50">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
   <!-- ---------------------------------------------deserts---------------------------------- -->
   <h1 class="food-h">Deserts</h1>
   <div class="row" id="deserts">
       
       <div class="col-lg-3">
          
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./tea.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Mint Tea</h5>
                   <p class="card-text">Price : 10 dt </p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Tea">
                  <input type="hidden" name="price" value="10">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
           <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./mesfouf.png" alt="">
               <div class="card-body">
                   <h5 class="card-title">Mesfouf</h5>
                   <p class="card-text">Price : 15 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Mesfouf">
                  <input type="hidden" name="price" value="15">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./milk.jpeg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Milkshake</h5>
                   <p class="card-text">Price :10 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Milkshake">
                  <input type="hidden" name="price" value="10">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="./beklawa.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Beklawa</h5>
                   <p class="card-text">Price : 15 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="beklawa">
                  <input type="hidden" name="price" value="15">
               </div>
           </div>
           </form>
       </div>

       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/vanila.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Vanilla Ice-cream</h5>
                   <p class="card-text">Price : 7 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Vanila icecream">
                  <input type="hidden" name="price" value="7">
               </div>
           </div>
           </form>
       </div>
       <div class="col-lg-3">
       <form action="manage_cart.php" method="POST">
           <div class="card">
               <img src="img/strawberry.jpg" alt="">
               <div class="card-body">
                   <h5 class="card-title">Strawberry Ice-Cream</h5>
                   <p class="card-text">Price : 6 dt</p>
                  <button type="submit" name="add_to_cart" class="btnn">Add to Cart</button>
                  <input type="hidden" name="item_name" value="Strawberry ice-cream">
                  <input type="hidden" name="price" value="6">
               </div>
           </div>
           </form>
           
       </div>
      
     
       
   </div>
</div>
</body>
</html>