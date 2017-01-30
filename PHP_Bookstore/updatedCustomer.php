<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Updated Details</title>
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
         <?php
        // Connect to the database server
        $dbcnx = mysqli_connect("localhost", "root", "", "bookstore");
        if (mysqli_connect_errno($dbcnx )){
        echo "Failed to connect to MySQL: " .mysqli_connect_error();
        exit();}
        
        
        
        $ud_id = (int)$_POST['ud_id'];
        $ud_name = $_POST['ud_name'];
        $ud_street = $_POST['ud_street'];
        $ud_town = $_POST['ud_town'];
        $ud_county = $_POST['ud_county'];
        $ud_country = $_POST['ud_country'];
        $ud_email = $_POST['ud_email'];
        
        $sql="UPDATE customers 
              SET name ='$ud_name', street ='$ud_street' , town ='$ud_town', county = '$ud_county', country = '$ud_country', email = '$ud_email' 
              WHERE customerid=$ud_id";
        
        $res = mysqli_query($dbcnx,$sql);
        if ( !$res ) {
                echo('Query failed ' . $sql . ' Error:' . mysqli_error());
                exit();
            }
        
        else
        	{
          
          
         ?>
              <div class="block">
              
              <p> Your Updated Details</p>
              
             <input style="border:none;" type="text" value="Name" size="7" readonly>
             <input type="text" value="<?php echo $ud_name ?>" size="30" readonly> <br />
             <input style="border:none;" type="text" value="Street" size="7" readonly>
             <input type="text" value="<?php echo $ud_street ?>" size="30" readonly><br />
             <input style="border:none;" type="text" value="Town" size="7" readonly>
             <input type="text" value="<?php echo $ud_town ?>" size="30" readonly><br />
             <input style="border:none;" type="text" value="County" size="7" readonly>
             <input type="text" value="<?php echo $ud_county ?>" size="30" readonly><br />
             <input style="border:none;" type="text" value="Country" size="7" readonly>
             <input type="text" value="<?php echo $ud_country ?>" size="30" readonly><br />
             <input style="border:none;" type="text" value="E-mail" size="7" readonly>
             <input type="text" value="<?php echo $ud_email ?>" size="30" readonly>
             
             
          
          
              </div>
              <?php
        
        
        
        
        }
        
        
        
          mysqli_close($dbcnx);
        
        
        ?>
        


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


   
  