<?php
include('dbcon.php');
include('header.php');
?>
<div class="contact-container">
   
    <div class="contact1">
     
    </div>
    <div class="contact2">
        <div class="contact2-h1">
        <h1>Don't Hesitate <br> To Contact Us</h1>
        </div>
       
       <div class="contact-box">
       <form action="contact.php" method="post">
                <div class="form-group-con">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your name">
                </div>
                <div class="form-group-con">
                    <label for="name">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group-con">
                    <label for="name">Mobile:</label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter Your phone">
                </div>
                <div class="form-group-con">
                    <label for="name">Address:</label>
                    <input type="phone" name="address" id="phone" placeholder="Enter Your Address">
                </div>
                <div class="form-group-con">
                    <label for="name">message:</label>
                  <textarea name="message" id="message" cols="20" rows="6"></textarea>
                </div>
                <div class="form-group-con">
                    <button class="con-btn" name="con-btn">Submit</button>
                </div>
            </form>
            <?php
               if(isset($_POST['con-btn']))
               {
                   $con_name=$_POST['name'];
                   $con_email=$_POST['email'];
                   $con_mobile=$_POST['phone'];
                   $con_address=$_POST['address'];
                   $con_message=$_POST['message'];

                   $qry="INSERT INTO `contact`(`id`, `name`, `email`, `mobile`, `address`, `message`) VALUES ('','$con_name','$con_email','$con_mobile','$con_address','$con_message')";

                   $run=mysqli_query($sql,$qry);
                   if($run)
                   {
                       ?>
                       <script>
                           alert("Thanks For Contacting Us");
                       </script>
                       <?php
                   }
                   else{

                   }
                  
               }
            ?>
       </div>
    </div>
    
</div>
</body>
</html>