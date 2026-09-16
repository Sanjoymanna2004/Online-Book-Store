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

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Catagory-Horror</title>
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
    <link rel="stylesheet" href="catagory.css" />
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
<!-- ------------------------------------nav-bar-------------------------- -->
    
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
                              <option value="nav.php" >Catagory</option>
                              <option value="catagory_poetry.php">Poetry</option>
                              <option value="catagory_story.php">Short Story</option>
                              <option value="catagory_detective.php">Detective</option>
                              <option value="catagory_horror.php" selected>Horror</option>
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


<!-- -----------------------------------catagory------------------------------------ -->
    <div class="text">
      <p>Explore All Horror Books Here</p>
    </div>

    <div class="container">
          <!-- ------------------------row-1----------------------------------------       -->
      <div class="row mt-5">
        <div class="col-lg-3">
          <form action="manage_horror.php" method="POST">
          <div class="catagory1">
            <div class="book-img">
              <img src="./images/taranath_tantrik.webp" alt=""/>
            </div>
            <div class="book-name">
              <p>Taranath Tantrik</p>
            </div>
            <div class="book-author bibhu">
              <p>Bibhutibhushan Bandyopadhyay</p>
            </div>
            <div class="book-price">
              <p>Rs. 750/-</p>
            </div>
            <div class="add-to-cart">
              <div class="icon-text">
                <div class="atc">
                  <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                  <input type="hidden" name="item_name" value="Taranath Tantrik">
                  <input type="hidden" name="price" value="750">
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_horror.php"  method="POST">
            <div class="catagory1">
              <div class="book-img">
                <img
                  src="./images/manojder-advut-bari.webp"
                  alt=""
                />
              </div>
              <div class="book-name font-19">
                <p>Manojder Advut Bari</p>
              </div>
              <div class="book-author bibhu">
                <p>Shirshendu Mukhopadhyay</p>
              </div>
              <div class="book-price">
                <p>Rs. 500/-</p>
              </div>
              <div class="add-to-cart">
                <div class="icon-text">
                  <div class="atc">
                    <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                    <input type="hidden" name="item_name" value="Manojder Advut Bari">
                    <input type="hidden" name="price" value="500">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_horror.php"  method="POST">
          <div class="catagory1">
            <div class="book-img">
              <img
                src="./images/rupkatha.jpg"
                alt=""
              />
            </div>
            <div class="book-name">
              <p>Rupkatha Samagra</p>
            </div>
            <div class="book-author">
              <p>Nabanita Debsen</p>
            </div>
            <div class="book-price">
              <p>Rs. 450/-</p>
            </div>
            <div class="add-to-cart">
              <div class="icon-text">
                <div class="atc">
                  <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                  <input type="hidden" name="item_name" value="Rupkatha Samagra">
                  <input type="hidden" name="price" value="450">
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_horror.php"  method="POST">
          <div class="catagory1">
            <div class="book-img">
              <img
                src="./images/bhuter-raja-dilo-bor.webp"
                alt=""
              />
            </div>
            <div class="book-name font-19">
              <p>Bhuter Raja Dilo Bor</p>
            </div>
            <div class="book-author">
              <p>Tamas Karmakar</p>
            </div>
            <div class="book-price">
              <p>Rs. 450/-</p>
            </div>
            <div class="add-to-cart">
              <div class="icon-text">
                <div class="atc">
                  <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                  <input type="hidden" name="item_name" value="Bhuter Raja Dilo Bor">
                  <input type="hidden" name="price" value="450">
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      <div>
          <!-- ---------------------------------row-2------------------------------------ -->
  <div class="row mt-5">
        <div class="col-lg-3">
          <form action="manage_horror.php" method="POST">
          <div class="catagory1">
            <a href="#"><div class="book-img">
              <img src="./images/sobi_bhuture.webp" alt=""/>
            </div>
            </a>
            <div class="book-name">
              <p>Sobi Bhuture</p>
            </div>
            <div class="book-author">
              <p>Pradip Chattopadhyay</p>
            </div>
            <div class="book-price">
              <p>Rs. 500/-</p>
            </div>
            <div class="add-to-cart">
              <div class="icon-text">
                <div class="atc">
                  <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                  <input type="hidden" name="item_name" value="Sobi Bhuture">
                  <input type="hidden" name="price" value="500">
                </div>
              </div>
            </div>
          </div>
            </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_horror.php" method="POST">
          <div class="catagory1">
            <div class="book-img">
              <img
                src="./images/Bhoutik_Samagra.jpeg"
                alt=""
              />
            </div>
            <div class="book-name">
              <p>Bhoutik Samagra</p>
            </div>
            <div class="book-author">
              <p>Hemendra Kumar Roy</p>
            </div>
            <div class="book-price">
              <p>Rs. 600/-</p>
            </div>
            <div class="add-to-cart">
              <div class="icon-text">
                <div class="atc">
                  <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                  <input type="hidden" name="item_name" value="Bhoutik Samagra">
                  <input type="hidden" name="price" value="600">
                </div>
              </div>
            </div>
          </div>
           </form>
        </div>

        <div class="col-lg-3">
          <form action="manage_horror.php"  method="POST">
          <div class="catagory1">
            <div class="book-img">
              <a href="#"><img
                src="./images/Ekdajan_Gappo.jpg"
                alt=""
              />
              </a>
            </div>
            <div class="book-name">
              <p>Ekdajan Gappo</p>
            </div>
            <div class="book-author">
              <p>Satyajit Roy</p>
            </div>
            <div class="book-price">
              <p>Rs. 450/-</p>
            </div>
            <div class="add-to-cart">
              <div class="icon-text">
                <div class="atc">
                  <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                  <input type="hidden" name="item_name" value="Ekdajan Gappo">
                  <input type="hidden" name="price" value="450">
                </div>
              </div>
            </div>
          </div>
             </form>
        </div>

        <div class="col-lg-3">
             <form action="manage_horror.php" method="POST">
          <div class="catagory1">
            <div class="book-img">
             <a href="#"> <img
                src="./images/Raktakarabi.webp"
                alt=""
              />
              </a>
            </div>
            <div class="book-name">
              <p>Raktakarabi</p>
            </div>
            <div class="book-author">
              <p>Rabindranath Tagore</p>
            </div>
            <div class="book-price">
              <p>Rs. 850/-</p>
            </div>
            <div class="add-to-cart">
              <div class="icon-text">
                <div class="atc">
                  <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                  <input type="hidden" name="item_name" value="Raktakarabi">
                  <input type="hidden" name="price" value="850">
                </div>
              </div>
            </div>
          </div>
             </form>
        </div>
      <div> 
    <div>
<!-- -------------------------------------------------------------footer---------------------- -->
   
      <div class="area">
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
    
    <!-- -------------------------------------script----------------------------- -->
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
  </body>
</html>
