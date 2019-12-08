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

      <article id="checkspot" >

        <?php 
      
      require_once ('dbconn.php');
      
        $login = "";
      
        if(!empty($_REQUEST['email'])){
            $email = mysqli_real_escape_string($dbc, trim($_REQUEST['email']));
        } else {
            $errors = $errors . "<p>You didn't enter an email.</p>";
        }
      
        if(!empty($_REQUEST['password'])){
            $password = mysqli_real_escape_string($dbc, trim($_REQUEST['password']));
        } else {
            $errors = $errors . "<p>You didn't enter a password.</p>";
        }
      
        if ($errors ==""){
          
          $q = "SELECT * FROM users WHERE(email='$email' AND pass='$password')";

          $r = @mysqli_query($dbc, $q);
          
          $num = @mysqli_num_rows($r);
          
          if ($num > 0) {
          
          
          while ($row = mysqli_fetch_array($r)) {
              echo'
              <img src="images/cart.jpg"></br>
              <p>You logged in successfully! But sadly there is not a check out page available right now.</p>
              ';
          }
      }else{
          echo '<p >Nothing was found within this search. Please either go <a href="checkout.php">back</a> to try again, or <a href="signup.php">sign up.</a></p>';
          echo $login;
      }
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
