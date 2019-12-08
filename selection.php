<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Clothing Store | Find what you're looking for!</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link rel="stylesheet" href="stylesheet.css" type="text/css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation-float.min.css" integrity="sha256-sP0p6J7SbJGiJ2gkdY1nkVsLgdwiFN2kI370lU+zacQ= sha384-yZLxxcD8nfiSt1qfKJWwHwtkL58WZDTlkBnZN60qr3ZS35+LDsmUF2JHLxdyZ+KU sha512-Z3WbpfWFSsK2dBvoSYZnMvPmxSJUa5cxj3TYlmyj6cq8IXy7iB2nlUk+jjms8gnz4HmpQk/yhRSlRzW7keoSlg==" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>

    <header>
      <a href="index.html"><h2>Clothing Store</h2></a>
      <p><a href="signup.php">Sign Up</a></p>
        <p id="shoppingcart"><a href="checkout.php"><i class="fas fa-shopping-cart"></i></a></p>
    </header>

    <main>
      <article id="banner">
        <div id="bannerhead">

          <div id="bannertext">

          <p id="bannertitle">Your Selections</p>


        </div>
          
        </div>
      </article>

      <aside id="social">

        <ul>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fas fa-hashtag"></i></a></li>
        </ul>
        
      </aside>

      <article id="genderad" >

            <div class="featured-image-block-grid">
  <div class="featured-image-block-grid-header small-10 medium-8 large-7 columns text-center">

    </div>
    <div class="row large-up-3 small-up-1">

          <?php 
      
      require_once ('dbconn.php');
      
        $clothessearch = "";
      
        $clothessearch = 'gender="'.$_POST[gender].'"';
      
      if ($_POST['ctype'] <> "Select One"){
          
        $clothessearch = $clothessearch.'AND producttype="'.$_POST[ctype].'"';
      }
      
      if ($_POST['color'] <> "Select One"){
          
        $clothessearch = $clothessearch.'AND color="'.$_POST[color].'"';
      }
      
      if ($_POST['size'] <> "Select One"){
          
        $clothessearch = $clothessearch.'AND size="'.$_POST[size].'"';
      }
      
      
      
      $q = "SELECT * FROM clothing WHERE ".$clothessearch;
      
      $r = @mysqli_query($dbc, $q);
      
      $num = mysqli_num_rows($r);
      
      if ($num > 0) {
          
          
          while ($row = mysqli_fetch_array($r)) {
              echo'
              <div class="featured-image-block column card card-product">

              <div class="card-product-img-wrapper">

              <a class="button expanded">Add to Cart</a>

              <a href="#"><img src="images/'.$row['images'].'.jpg"></a>

              </div>

              <div class="card-section">

              <a href="#"><h3 class="card-product-name">'.$row['productname'].'</h3></a>

              <h5 class="card-product-price">$'.$row['price'].'.00</h5>

              <p class="card-product-description">'.$row['description'].'</p>

                </div>
                </div>
              ';
          }
      }else{
          echo "<p>Nothing was found within this search</p>";
          echo $clothessearch;
      }
      
      ?>

    </article>

  </div>
</div>
    </main>

    <footer>
      <p>Copyright Clothing Store</p>
    </footer>
  
  </body>
</html>
