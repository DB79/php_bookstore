
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Customer</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="stylesheet.css">
    
    
    

  </head>
  <body>
  
   <div class="header">
          
              <img src="images/header_image.jpg" alt="lakeside"/>
             
              <div class="caption">
                    	
              <h2>Lakeside Books</h2>
                 
              </div>   
          </div>
          
    <div id="nav">
              
              <div class="nav-container">
               
                      <div class="nav">
                      
                        <a href="index.php">Home</a>
                        <a href="Customer.php">Customer</a>
                        <a href="#">Forum</a>
                        <a href="#">Support</a>
                        <a href="#">About</a>
                        
                     
                      </div>
              
              </div>
              
            </div>
            
            
             
             <div class="rightSidebar">
    
    
    
               <div id="category">
                     
                      <div class="category-container">
                        
                        <h5>Catergories</h5>
                        
                        <a href="#category" class="category-button">Categories</a>
                        
                        <div class="category">
                        
                          <a href="#">Academic</a>
                          <a href="#">Art & Photography</a>
                          <a href="#">Biography & Autobiography</a>
                          <a href="#">Body & Soul</a>
                          <a href="#">Business & Law</a>
                          <a href="#">Entertainment</a>
                          <a href="#">Fiction</a>
                          <a href="#">Food & Drink</a>
                          <a href="#">Health & Fitness</a>
                          <a href="#">History & Politics</a>
                          <a href="#">Home & Garden</a>
                          <a href="#">Other</a>
                    
                            
                        </div>
                      
                      </div>
               
               </div>
    
    
    
    
            <div class="topBooks">
                    
                    <h5>This Weeks Top 5</h5>
                  <ol>
                       <li><a href="http://nathanfiler.co.uk/"  target="_blank">The Shock of the Fall</a> by Nathan Filer</li>
                       <li><a href="http://ken-follett.com/en/"  target="_blank">Winter of the World (Century of Giants Trilogy)</a> by Ken Follett</li>
                       <li><a href="http://dianechamberlain.com/"  target="_blank">Necessary Lies</a> by Diane Chamberlain</li>
                       <li><a href="http://www.edwardrutherfurd.com/paris.html"  target="_blank">Paris</a> by Edward Rutherfurd</li>
                       <li><a href="http://www.geraldseymour.co.uk/"  target="_blank">The Corporal's Wife</a> by Gerald Seymour</li>
                  </ol>
                                        
            </div>
            
            
             <div class="SocialMedia">
             
              <a class="twitter-timeline" href="https://twitter.com/search?q=%23bestbooks" data-widget-id="461074906470293505">Tweets about "#bestbooks"</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)
              ){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script",
              "twitter-wjs");</script>
            
                      <!-- Shop has no facebook page -->
              <iframe class="facebook" src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width=200&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80">
              </iframe>     
        
             </div>
    
    </div> 
   
   
   
   
   
    <div class="content">
  
         
          
   <div class="block">
   
     
   <form action="Customer.php" method="post">
   
   <p>Please fill in the following details</p>
   
   
   <input placeholder="Name" type="text" name="name" value="<?php if (isset($_POST['name'])) echo "";else echo "";?>" size="30" maxLength="30" tabindex="1"> <br>
   <br>
   <input placeholder="Street" type="text" name="street" value="<?php if (isset($_POST['street'])) echo "";else echo ""; ?>" size="30" maxLength="20" tabindex="2"><br />
   <br>
   <input placeholder="Town"" type="text" name="town" value="<?php if (isset($_POST['town'])) echo "";else echo ""; ?>" size="30" maxLength="20" tabindex="3"><br />
   <br>
   <input placeholder="County" type="text" name="county" value="<?php if (isset($_POST['county'])) echo "";else echo ""; ?>" size="30" maxLength="20" tabindex="4"><br />
   <br>
   <input placeholder="Country" type="text" name="country" value="<?php if (isset($_POST['country'])) echo "";else echo ""; ?>" size="30" maxLength="20" tabindex="5"><br />
   <br>
   <input placeholder="E-mail" type="text" name="email" value="<?php if (isset($_POST['email'])) echo "";else echo ""; ?>" size="30" maxLength="30" tabindex="6"><br />
   <br>
   <input type="submit" value="Sign Up" name="newCust">
   </form>
   <div >  
    
   <?php

        if (isset($_POST['newCust'])) {
            $name = $_POST['name'];
            $street = $_POST['street'];
            $town = $_POST['town'];
            $county = $_POST['county'];
            $country = $_POST['country'];
            $email = $_POST['email'];
            
        
        if ($name ==  '' or $street =='' or $town == '' or
            $county ==''  or $county == '' or $email =='')
        {
        ?>
        <p>You did not complete the insert from correctly </p>
        <?php                
        }
        
        else
        {
        $dbcnx = mysqli_connect("localhost", "root", "", "bookstore");
        
        // Check connection
        if (mysqli_connect_errno($dbcnx ))
        {
        echo "Failed to connect to MySQL: " .mysqli_connect_error();
        exit();
        }
        
        if ($_POST['newCust'] == "Sign Up") {
        
        $name = mysqli_real_escape_string($dbcnx, $name);
        
        
        
        $sql = "INSERT INTO customers (name,street,town,county,country,email)
        
                VALUES('$name','$street', '$town', '$county', '$country', '$email')";
                
        $res = mysqli_query($dbcnx, $sql);
        
        if ($res == 0) 
              {
                echo("<p>Error registering: " . mysqli_error() . "</p>");
              }
        else
              {
        	
        
           ?>
           <p>Your account has been created.</p>
             <?php
          
              }
        }
        
        
          
        mysqli_close($dbcnx);}
        
        }
        
        ?> 
           
                                  </div>
           </div>
           
           
           
           
           
           
        <div class="block">    
        
        <form action="CustomerDetails.php" method="post">
        
        <p> To update your details, return a book or view your previous history, sign in here</p> 
        
        <input placeholder="E-mail" type="text" name="email" size="30" maxLength="30">   <br><br>
        <input type="submit" name="update" value="Sign in">
        
        </form>
                            </div>
           
        
        
        
          </div>   
      
   <div class="footer">
   
   <div class="footerDiv">
        
         <h4>Site Map</h4>
        
         <ul>
               
         <li><a href="">Home</a></li>
         <li><a href="">Top Sellers</a></li>
         <li><a href="">Forum</a></li>    
         <li><a href="support.html">Support</a></li>
         <li><a href="">About Us</a></li>
          <li><a href="#top">Back to top</a></li>
              
         </ul>
       
  </div> 
  
  <div class="footerDiv">
  
        
         <h4>Delivery</h4>
        
         <ul>
               
         <li><a href="">Delivery Options</a></li>
         <li><a href="">Returns</a></li>
         <li><a href="">Terms and Conditions</a></li>    
         <li><a href="">Security</a></li>
         
             
         </ul>

  </div>
  
  <div class="footerDiv">
  
        
         <h4>Staff</h4>
        
         <ul>
               
         <form action="staff.php" method="post">
                        <input type="text" name="password" placeholder="Password">
                        <input type="submit" value="login">
                        </form>
         </ul>
         
        
  
  </div>
  
   <div class="footerDiv">
   
   
          
         <h4>Media</h4>
        
         <ul>
               
         <li><a href="">Follow us on Twitter</a></li>
         <li><a href="">Like us on Facebook</a></li>
         <li><a href="">Watch us on YouTube</a></li>    
         
             
         </ul>
       
  </div>
     
     
  </div>  
  
  
  
  </body>
  
</html>

