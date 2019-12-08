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
        <p id="shoppingcart"><a href="checkout.php"><i class="fas fa-shopping-cart"></i></a></p>
    </header>

    <main>
      <article id="banner">
        <div id="bannerhead">

          <div id="bannertext">

          <p id="bannertitle">You need to login to checkout</p>


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

      <article id="checkspot" >




              <form action="checkoutmore.php" method="post">
      
          <p style="color: white">Email:</p> <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>"><br>
          
          <p style="color: white">Password:</p> <input type="text" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'];?>"><br>
          
          <input type='submit' value="Submit">
      
      </form>
    </article>

  </div>
</div>
    </main>

    <footer>
      <p>Copyright Clothing Store</p>
    </footer>
  
  </body>
</html>
