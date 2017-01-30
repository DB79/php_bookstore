<!DOCTYPE>

<html>
   <head>
      <title>Staff</title>
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
                        <br><form action="index.php">
                       
                        <input type="submit" value="Logout">
                        </form>
                        
                        
                        
                        
        
                        
                        
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
                 
                 
                 $pass = $_POST['password'];
                 
                 if($pass == 'login')
                 {
                 ?>
                   <div class="block">
   
                     <form action="addBook.php" method="post">
                     
                     <h4 style="color:black">Add Book</h4>
                     <input placeholder="Title" type="text" name="bookName" size="30" maxlength="30"><br />
                     <input placeholder="Author" type="text" name="bookAuthor" size="30" maxlength="30"><br />
                     <input placeholder="Category" type="text" name="bookCategory" size="30" maxlength="20"><br />
                     <input placeholder="Price" type="text" name="bookPrice" size="30"  maxlength="5"><br />
                     <input placeholder="Quantity" type="text" name="quantity" size="30" maxlength="4"><br />
                     
                     <input type="submit" value="Add Book" name="newBook" style="margin:20px;">
                    </div>
                  
                  
                  
                     </form>
                  <?php
                 
                  }
                 else{
                 
                 ?>
                 <div class="book">
                 
                 The password entered was incorrect.
                 
                 <br><form action="staff.php" method="post">
                        Try Again  :<input type="text" name="password" placeholder="Password">
                        <input type="submit" value="login">
                        </form>
                 
                 
                 </div> 
                 <?php
                 }
                 ?>
                 
        
   </div>
  
   <div class="footer">
   
   <div class="footerDiv">
        
         <h4>Site Map</h4>
        
         <ul>
               
         <li><a href="#">Home</a></li>
         <li><a href="#">Top Sellers</a></li>
         <li><a href="#">Forum</a></li>    
         <li><a href="#">Support</a></li>
         <li><a href="#">About Us</a></li>
          <li><a href="#top">Back to top</a></li>
              
         </ul>
       
  </div> 
  
  <div class="footerDiv">
  
        
         <h4>Delivery</h4>
        
         <ul>
               
         <li><a href="#">Delivery Options</a></li>
         <li><a href="#">Returns</a></li>
         <li><a href="#">Terms and Conditions</a></li>    
         <li><a href="#">Security</a></li>
         
             
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
               
         <li><a href="#">Follow us on Twitter</a></li>
         <li><a href="#">Like us on Facebook</a></li>
         <li><a href="#">Watch us on YouTube</a></li>    
         
             
         </ul>
       
  </div>
     
     
  </div>  
  
  
  
  </body>
</html>

