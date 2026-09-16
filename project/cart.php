<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login_p.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login_p.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Cart Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="catagory.css">
    <link rel="stylesheet" href="checkout.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script>
      function goToPage(selectElement) {
          var selectedValue = selectElement.value;
          if (selectedValue) {
              window.location.href = selectedValue; // Redirect to the selected page
          }
      }
  </script>
  </head>

  <body>
    <!-- -------------------------------------------------nav-------------------------------- -->
    <nav class="navbar">
      <header>
          <nav>
            <div class="contain">
              <div class="fill">
                <div class="nav-logo">
                  <img src="./images/logo.svg" alt="" />
                </div>
                <div class="name">
                  <p>NEATH BOOKPOINT</p>
                </div>
                <div class="menu">
                  <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li>
                        <select name="catagory" id="catagory" onchange="goToPage(this)">
                        <option value="" selected>Catagory</option>
                              <option value="catagory_poetry.php">Poetry</option>
                              <option value="catagory_story.php">Short Story</option>
                              <option value="catagory_detective.php">Detective</option>
                              <option value="catagory_horror.php">Horror</option>
                              <option value="catagory_science.php">Sci-Fi</option>
                              <option value="catagory_novel.php">Novel</option>
                         </select>
                     </li>
                     <?php 
                     $count=0;
                     if(isset($_SESSION['cart'])){
                      $count = count($_SESSION['cart']);
                     }
                     ?>
                   <li><a href="cart.php">My Cart(<?php echo $count?>)</a></li>
                   <li><a href="#">Contact Us</a></li>
                  </ul>
                  <div class="profile">
                    <img id="user-btn" src="./images/prof.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
             <div class="account-box">
                <div id="sanjay">Username: <span><?php echo $_SESSION['username']; ?> </span></div>
                <!-- <div id="sanjoy">Email: <span>  </span></div> -->
                <!-- <a href="login_p.php" class="logout">logout</a> -->
                <a href="nav.php?logout='1'" class="logout">logout</a>
             </div>
        </header>
  </nav>
<!-- --------------------------------------------------cart--------------------------- -->
  <div class="container-fluid">
    <div class="table-data">
        <div class="row">
            <div class="col-lg-3">
                <img src="cart_banner.svg" alt="" id="cart_banner">
            </div>
            <div class="col-lg-9">
    <table class="table mt-5 ">
        <h1 class="text-center mt-5" id="cart_heading">Your Cart Details</h1>
  <thead class="text-center">
    <tr>
      <th scope="col">Sl No.</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php   
    if(isset($_SESSION['cart'])){
          foreach($_SESSION['cart'] as $key => $value){
            $sr = $key+1;
            echo "
            <tr>
               <td>$sr</td>
               <td>$value[item_name]</td>
               <td>$value[price] <input type='hidden' class='iprice' value='$value[price]'></td>
               <td><input class='text-center iquantity' type='number' onchange='subTotal()' value='$value[quantity]' min='1' max='10'></td>
               <td class='itotal'></td>
               <td>
                  <form action='manage_detective.php' method='POST'>
                    <button name='remove_item' class='btn btn-sm btn-outline-danger'>Remove</button>
                    <input type='hidden' name='item_name' value='$value[item_name]'>
                  </form>
               </td>
            </tr>
            ";
          }
        }
    ?>
  </tbody>
</table>
      <div class="total_rupees">
        <h4>Grand Total: <span id="gtotal"></span> </h4>
        <button id="checkout-btn">Proceed to Checkout</button>

<!-- Hidden Modal Form -->
<div id="checkout-modal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <form class="form-container" action="process_checkout.php" method="POST">
            <h2 id="center">Checkout Details</h2>
        
            <div class="row">
                <div class="col">
                    <input type="text" placeholder="Enter receiver's name" name="receiver_name" required>
                </div>
                <div class="col">
                    <input type="text" placeholder="Enter card number" name="card_number" required>
                </div>
            </div>
        
            <div class="row">
                <div class="col">
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>
                <div class="col">
                    <input type="tel" placeholder="Enter contact number" name="contact" required>
                </div>
            </div>
        
            <div class="row">
                <div class="col">
                    <input type="text" placeholder="Enter billing address" name="billing_address" required>
                </div>
                <div class="col">
                    <input type="text" placeholder="Enter sending address" name="sending_address" required>
                </div>
            </div>
        
        
            <div class="button-row">
                <!-- Pay Now button -->
                <button type="submit">Pay Now</button>

                <!-- Close button -->
                <button type="button" class="close_Btn">Close Checkout Page</button>
            </div>

            <div class="row">
                <div class="col">
                    
                </div>
                <div class="col">
                    <p id="contact_us">*Contact us to cancel your order</p>
                </div>
            </div>
        </form>
        
    </div>
</div>

      </div>
     </div>
    </div>
  </div>
</div>

<!-- --------------------------------------------checkout-page--------------------------------- -->

    <!-- Checkout Button -->
   


<!-- ----------------------------------footer------------------------------   -->
  <div class="area" id="for_cart">
        <div class="footer-top">
               <div class="footer-logo">
                   <img src="./images/footer_logo.svg" alt="">
                </div>
         </div>
        <hr>
        <div class="footer-bottom">
          <div class="copyright">
            <a href="#">&copy; 2024|NEATH BOOKPOINT </a>
          </div>
          <div class="footer-msg">
            <p>Visit our branches in Kolkata, Delhi, Bangalore, Mumbai, and register for our online platform to enjoy maximum benefits!</p>
          </div>
          <div class="footer-icon">
            <i class="fa-brands fa-facebook-f" id="facebook"></i>
            <i class="fa-brands fa-linkedin" id="linkdin"></i>
          </div>
        </div>
      </div>
  <script>
    let accountBox = document.querySelector(".account-box");

    document.querySelector("#user-btn").onclick = () => {
      accountBox.classList.toggle("active");
    };

    window.onscroll = () => {
      accountBox.classList.remove("active");
    };

    
  </script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <script src="cart.js"></script>
  </body>
</html>

