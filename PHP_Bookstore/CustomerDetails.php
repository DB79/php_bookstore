 <!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Account Details</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="stylesheet.css">

    <style type="text/css">
    
    table{
    border: 1px solid black;
    border-collapse:collapse;
    text-align:left;
    }
    
    th{
    border: 1px solid black;
    padding:6px;
    font-weight:bold;
    background:#ccc;
    }
    
    td{
    border: 1px solid black;
    padding:6px;
    }    
  </style>


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
        
        
        $id=$_POST['email'];
        
        $sql="SELECT * FROM customers WHERE email = '$id'";
        
        $res = mysqli_query($dbcnx, $sql);
        if ( !$res ) {
                echo('Query failed ' . $sql . ' Error:' . mysqli_error($dbcnx));
                exit();
            }
        
        
         else if(($id == "") or (mysqli_num_rows($res)< 1)){
          ?>
         <div class="block"> 
          You must enter a valid email address
          
          
        <form action="CustomerDetails.php" method="post">
        
        <p> Please try again</p> 
        
        <input type="hidden" value="<?php echo $custid;?>" name="custid">
        <input type="text" name="email" size="30" maxLength="30" placeholder="email">   <br><br>
        <input type="submit" name="update" value="View Details">
        
        </form>
          
          
          </div>
          
          
          <?php
          exit();
          }
        
        
        
        else 
        {
        $row = mysqli_fetch_array($res); 
        $id=$row['customerid'];
        $name=$row['name'];
        $street=$row['street'];
        $town=$row['town'];
        $county=$row['county'];
        $country=$row['country']; 
        $email=$row['email'];
        
        }
        
        ?>
        
        
         <div class="block">
         <p>Your details</p>
         
        <form action="updatedCustomer.php" method="post">
        <input type="hidden" name="ud_id" value="<?php echo $id; ?>">
        
         <input style="border:none;" type="text" value="Name" size="7" readonly>
         <input type="text" name="ud_name" value="<?php echo $name; ?>" size="30"><br />
         <input style="border:none;" type="text" value="Street" size="7" readonly>
         <input type="text" name="ud_street" value="<?php echo $street; ?>" size="30"><br />
         <input style="border:none;" type="text" value="Town" size="7" readonly>
         <input type="text" name="ud_town" value="<?php echo $town; ?>" size="30"><br />
         <input style="border:none;" type="text" value="County" size="7" readonly>
         <input type="text" name="ud_county" value="<?php echo $county; ?>" size="30"><br />
         <input style="border:none;" type="text" value="Country" size="7" readonly>
         <input type="text" name="ud_country" value="<?php echo $country; ?>" size="30"><br />
         <input style="border:none;" type="text" value="E-mail" size="7" readonly>
         <input type="text" name="ud_email" value="<?php echo $email; ?>" size="30"><br />
        
        <input type="Submit" value="Update">
        </form>
           
          </div>
        
          
          <div class="block" style="width:60%;">
          
          <?php
          
          $querry = "SELECT * FROM sales WHERE custid = $id";
          
          $result = mysqli_query($dbcnx, $querry);
          
          if(mysqli_num_rows($result)< 1)
          {
            echo "You Have no previous purchases";
            exit();
            
          }
          
          else if ( !$result ) {
                echo('Query failed ' . $querry . ' Error:' . mysqli_error($dbcnx));
                exit();
          }
          
          
          
          else{
          
          
          
          ?>
          <p> Your purchase history</p>
          
          <table>
          
          <tr><th>Sale ID</th><th>Book</th><th>Author</th><th>Category</th><th>Qty</th></tr>
          <?php
          
         
          
           while($sales = mysqli_fetch_array($result))   {
           
          
          $bookid=(int)$sales['bookid'];
          $custid=$sales['custid'];
          $qty=$sales['qty'];
          $saleid=$sales['saleid']; 
                      
          
          $details = "SELECT * FROM books WHERE bookid = $bookid";
          
          $book = mysqli_query($dbcnx, $details);
          if(!$book){
           echo('Query failed ' . $details . ' Error:' . mysqli_error($dbcnx));
                exit();
           }
          
          else{
          $bookdetails = mysqli_fetch_array($book); 
          $title=$bookdetails['title'];
          $author=$bookdetails['author'];
          $category=$bookdetails['category'];
          
          
          
          
          ?>
          
          
          <tr>
          <td><?php echo $saleid;?></td>
          <td><?php echo $title;?></td>
          <td><?php echo $author;?></td>
          <td><?php echo $category;?></td>
          <td><?php echo $qty;?></td></tr>
          
          
          
          
          <?php
          }
               }
                       ?>
               </table>
               
          
                         <?php   
          
                }
          ?>
          
            
          
          </div>
        
        
          <div class="block">
        
          <?php
        
        
        
        
        
        $sql = "SELECT saleid FROM sales where custid = $id";
        $res = mysqli_query($dbcnx, $sql);
        if ( !$res ) {
                echo('Query failed ' . $sql . ' Error:' . mysqli_error($dbcnx));
                exit();
            }
        ?>
        
        
        <form action="return.php" method="POST">
        
        <?php
        // Display the text of each name in a paragraph
        
        echo("Select the saleid for the transaction you wish to return" ); 
        
        echo("<select name='saleid'>");
        
        while ( $row = mysqli_fetch_array($res) ) {
        $bt = $row['saleid'];
        
        //echo("<option value=$bt>". $row["ISBN"] ."</option>");
        ?>
        
        <option value="<?php echo $bt; ?>"
        <?php if(isset($_POST['saleid'])){if ($_POST['saleid'] == $bt) echo ' selected';} ?> name="saleid">     
        <?php echo $row["saleid"]; ?>
        
        </option> 
        <?php }
        
        echo("</select>");
        
        
             
        mysqli_close($dbcnx);
        
        
        
        
        ?>     
        
        <input type='submit' name='do_action' value="Return" />
        
           
          </div>
        

   </div>
   </form>
   
     
   <div class="footer">
   
   <div class="footerDiv">
        
         <h4>Site Map</h4>
        


         <ul>
               
         <li><a href="">Home</a></li>
         <li><a href="">Top Sellers</a></li>
         <li><a href="">Forum</a></li>    
         <li><a href="">Support</a></li>
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
         <li><a href="">atch us on YouTube</a></li>    
         
             
         </ul>
       
  </div>
     
     
  </div>  
  
  
  </body>
</html>

