
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
    <title>Catagory-Detective</title>
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
    <link rel="stylesheet" href="about.css" />
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
                              <option value="" selected>Catagory</option>
                              <option value="catagory_poetry.php">Poetry</option>
                              <option value="catagory_story.php">Short Story</option>
                              <option value="catagory_detective.php" >Detective</option>
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


<!-- -----------------------------------catagory------------------------------------ -->
<main>
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="about_banner">
                        <img src="./images/about_banner.svg" alt="">
                    </div>
                    <div class="about_us mb-5">
                        <h2 class="mb-4">About Us</h2>
                        <div class="about_text">
                        <p>Welcome to Neth BookPoint, your trusted source for a diverse range of books catering to every reader's taste. Established with the mission to foster a love for reading in our community, we pride ourselves on providing excellent service and a wide selection of books. Our journey began in 2021, and since then, we have grown to become a beloved destination for book lovers. Below, you'll find information about our four branches, their locations, and contact numbers.</p>
                    </div>
                    </div>
                    <div class="branches mb-5">
                        <h2>Our Branches</h2>
                        <div class="row mt-5">
                            <div class="col-lg-4 branch_width">
                               <p class="branch_head"> Kolkata</p>
                         <p>Main Street, City Center
                           Contact: 123-456-7890
                    Operating Hours: Monday to Saturday, 9 AM - 7 PM; 
                              Sunday, 10 AM - 5 PM
                    In-store shopping, Special discounts for students,
                               Workshops, Study spaces
                            </p>
                            </div>
                            <div class="col-lg-4 branch_width">
                                <p class="branch_head">
                                    Delhi</p>
                                    <p> Main Street, City Center
                            Contact: 123-456-7890
                         Operating Hours: Monday to Saturday, 9 AM - 7 PM;
                          Sunday, 10 AM - 5 PM
                      In-store shopping, Special discounts for students, 
                               Workshops, Study spaces
                                </p>
                            </div>
                            <div class="col-lg-4 branch_width">
                                <p class="branch_head">
                                    Mumbai</p>
                                    <p> Main Street, City Center
                               Contact: 123-456-7890
                        Operating Hours: Monday to Saturday, 9 AM - 7 PM;
                             Sunday, 10 AM - 5 PM
                        In-store shopping, Special discounts for students,
                                Workshops, Study spaces
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="comitment">
                        <h2 class="mb-5 text-center">Our Comitment</h2>
                        <p>
                            At Neth BookPoint, we are committed to providing a welcoming and inspiring environment for all book enthusiasts. Each of our branches is staffed with knowledgeable and friendly team members ready to assist you in finding the perfect book. Whether you're looking for the latest bestseller, a rare find, or a cozy place to read, Neth BookPoint is your destination. We believe in the power of reading to transform lives and build community. Join us at one of our branches or explore our offerings online. We're here to support your reading journey and make your book shopping experience enjoyable and fulfilling.
                        </p>
                    </div>
                </div>
            </div>
        </main>
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
