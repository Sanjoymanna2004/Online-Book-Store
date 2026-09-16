
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
    <title>Home Page</title>
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
    <link rel="stylesheet" href="home.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
      
        .img_box img{
            width: 160px;
            height: 220px;
        }
        .img_box img:hover{
            transform: scale(.9);
        }
        
        .slider-container .container{
            padding: 0 15px;
            max-width: 1230px;
            margin: 0 auto;
        }
        
        .card_slider{
            padding: 50px 0;
        }
    </style>
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
  <header>
  <nav class="navbar">
     
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
        
  </nav>
  </header>

   <!-- under navbar content start here -->
   <div id="main_image">
        <div class="abstract">
            <div class="bubbles">
                <span style="--i:11"></span>
                <span style="--i:14"></span>
                <span style="--i:7"></span>
                <span style="--i:11"></span>
                <span style="--i:13"></span>
                <span style="--i:26"></span>
                <span style="--i:9"></span>
                <span style="--i:16"></span>
                <span style="--i:11"></span>
                <span style="--i:6"></span>
                <span style="--i:14"></span>
                <span style="--i:11"></span>
                <span style="--i:24"></span>
                <span style="--i:8"></span>
                <span style="--i:14"></span>
                <span style="--i:11"></span>
                <span style="--i:9"></span>
                <span style="--i:19"></span>
                <span style="--i:13"></span>
                <span style="--i:6"></span>
                <span style="--i:13"></span>
                <span style="--i:26"></span>
                <span style="--i:7"></span>
                <span style="--i:11"></span>
                <span style="--i:24"></span>
                <span style="--i:16"></span>
                <span style="--i:9"></span>
            </div>
            </div>
            <div id="text_on_image">
                <h1 id="main_image_text">The Book Lover's Dreamland Awaits!</h1>
                <p id="main_para">Welcome to the ultimate book lover's paradise! Join our community and contribute to the ever-evolving library of stories, where every book has a chance to inspire someone new.</p>
                <div id="searchbar">
                    <input id="find" placeholder="Search a book">
                    <button id="findout">
                        Search
                    </button>
                </div>
            </div>

        </div>
        

    </div>
    <!-- hover image start from here --------------------------------------------------------- -->
    <div id="avalible">
        <h1 class="text-black">Our Best Picks</h1>
    </div>
    <br>
    <div class="slider-container">
        <div class="container">
            <div class="swiper card_slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img_box">
                          <a href="catagory_novel.php">
                            <img src="./images/aparajito.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img_box">
                          <a href="catagory_detective.php">
                            <img src="./images/byomkesh_samagra.jpeg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img_box">
                          <a href="catagory_poetry.php">
                            <img src="./images/chharpatra.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img_box">
                          <a href="catagory_novel.php">
                            <img src="./images/chokher_bali.webp" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img_box">
                          <a href="catagory_novel.php">
                            <img src="./images/gitanjali.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img_box">
                          <a href="catagory_novel.php">
                            <img src="./images/pather_panchali.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="img_box">
                          <a href="catagory_horror.php">
                            <img src="./images/taranath_tantrik.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    
    <!-- upper part of footer is start from here ---------------------------------------------------------- -->
    <div id="main_bellow">
        <div class="bellow_animation" id="bellow">
            <div class="bellow_base">
                <div class="animation" id="bellow_pic"><img src="bellow_pic.png" alt=""></div>
            </div>
            <div class="bellow_base">
                <div>
                    <ul id="unorder_list">
                        <h1 id="white_text">Your favourite</h1>
                        <h1 id="color_text">Books Are Here!</h1>
                    </ul>
                </div>
                <div  id="paragraph">
                    <p>Buy your favorite books online with ease! Enjoy exclusive offers and discounts on selected titles. Dive into our collection and find special deals that make reading more affordable. Shop now and unlock more savings with every purchase!</p>
                </div>
                <div id="feedback">
                    <div>
                        <h1>800+</h1>
                        <h1 class="details">Book Listing</h1>
                    </div>
                    <div>
                        <h1>1K+</h1>
                        <h1 class="details">Registered Members</h1>
                    </div>
                    <div>
                        <h1>50+</h1>
                        <h1 class="details">everyday buyer</h1>
                    </div>
    
                </div>
                <div  type="button" > 
                    <a id="explore" href="#">Explore me</a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer start here ----------------------------------------------------------------------------------------------- -->

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
    <!-- java script file start from here ------------------------------------------------------------------------------------ -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".card_slider", {
          slidesPerView: 4,
          spaceBetween: 20,
          loop:true,
          autoplay:{
            delay:1500,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            250: {
                slidesPerView: 1,
                spaceBetween: 20,
              },

            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 4,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 5,
              spaceBetween: 50,
            },
          },
        });
      </script>  

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

