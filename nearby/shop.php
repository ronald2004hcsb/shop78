<?php
  
  require_once 'connection.php';

 $sql = "SELECT * FROM product";
 $all_product = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name=""viewport content="width=device-width, initial-scale=1.0">
        <title>ecommerce website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <section id="shop-header">
            <a href="#"><img src="Colorful_Illustrative_Online_Shop_Logo-removebg-preview.png" class="logo"></a>
                
            <div>
                <ul id="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a class="active" href="shop.php">Shop</a></li>
                    <li><a href="Trending.php">Trending</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                     
                </ul>
            </div>
            <div class="search-container">
                <li><a href="search.php"><input type="text" id="searchInput" placeholder="Search..." onkeyup="showResults()"></a></li>
                <div id="searchResults" class="search-results"></div>
            
        </section>
        <section id="hero2">
            
        </section>
        

        </section>

        <section id="product1" class="section-p1">
           <h2>SHOP</h2>
          <h3> <p>Explore, Click, Indulge!</p></h3>
            
          
          <?php
         include_once 'shop.php';

         ?>
           
      <main>
      <?php
       while($row = mysqli_fetch_assoc($all_product)){
       

       ?>
       
        <div class="card">
           <div class="image">
               <img src="<?php echo $row["product_image"]; ?>" alt="">
           </div>
           <div class="caption">
               <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
               </p>
               <p class="product_name"><?php echo $row["product_name"];  ?></p>
               <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
               
           </div>
           <button class="add" data-id="<?php echo $row["product_id"];  ?>">Add to cart</button>
       </div>
               
       
         

          
          <?php
       }
          ?>
          </main>
          <script src="script.js"></script>
          
    </body>
</html>