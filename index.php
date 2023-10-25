<?php
    require 'conn.php';
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nippon2u</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/headers.css" > -->
    <link rel="stylesheet" href="css/sidebars.css">
    <!-- <link rel="stylesheet" href="css/navbar.css"> -->
    
    <style>
  
  
      .product-card {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
      }

      /* Set a fixed height for the product image */
      .product-image {
          height: 510px; /* Adjust the height as per your requirements */
          object-fit: cover; /* Maintain aspect ratio and cover the entire container */
      }

      /*  */
      @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&family=Sarabun:ital,wght@0,200;0,300;0,400;0,600;1,200;1,300;1,400;1,500;1,600&display=swap');

      *{
          font-family: 'Sarabun', sans-serif;
      }
      
      .bg-mix-dark-1{
          background-color: #f1f1f1 !important;
          color: #000000 !important;
      }
      
      .table>:not(caption)>*>*{
          background-color: initial !important; /* หมายถึง ไม่มีการกำหนดค่า */
          color: #fff !important;
      }
      
      
    </style>
</head>
<body>
    
    <!-- header  -->

      <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <!-- <img src="images/logo.png" alt=""> -->
      </i>Nippon2u
      </div>
      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>
      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
        <!-- <img src="images/profile.jpg" alt="" class="profile" /> -->
      </div>
    </nav>
    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_"></div>
          <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
          <!-- start -->
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">Home</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>
            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
            </ul>
          </li>
          <!-- end -->
          <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
          <!-- start -->
          <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-grid-alt"></i>
              </span>
              <span class="navlink">Overview</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>
            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
            </ul>
          </li>
          <!-- end -->
        </ul>
        <ul class="menu_items">
          <!-- <div class="menu_title menu_editor"></div> -->
          <!-- duplicate these li tag if you want to add or remove navlink only -->
          <!-- Start -->
          <!-- <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-magic-wand"></i>
              </span>
              <span class="navlink">Magic build</span>
            </a>
          </li> -->
          <!-- End -->
          <!-- <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Filters</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-filter"></i>
              </span>
              <span class="navlink">Filter</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cloud-upload"></i>
              </span>
              <span class="navlink">Upload new</span>
            </a>
          </li>
        </ul> -->
        <ul class="menu_items">
          <div class="menu_title menu_setting"></div>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-flag"></i>
              </span>
              <span class="navlink">Notice board</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-cog"></i>
              </span>
              <span class="navlink">Setting</span>
            </a>
          </li>
          
        </ul>
        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>

    


  <!-- End Side bar -->
   
	<!--  -->

  <div class="container my-6">
    <div class="row">
        <div class="col-12 p-md-5">
          </div>
            <div class="col-12 mt-7 p-md-7">
              <div class="row">
                 <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $output = "<div class='col-md-4 mb-4'>";
                            $output .= "<div class='card bg-mix-dark-1' style='height: 100%;'>";
                            $output .= '<img src="' . $row["product_img"] . '" class="card-img-top product-image" alt="Product Image">';
                            $output .= "<div class='card-body'>";
                            $output .= "<h6 class='card-title fw-bold'>" . "รหังสินค้า " . $row["product_id"] . "</h6>";
                            $output .= "<h5 class='card-title fw-bold'>" . $row["product_name"] . "</h5>";
                            $output .= "<p class='small card-text'>" . $row["product_description"] . "</p>";
                            $output .= "<h6 class='small card-text'>" . "ราคา " . $row["product_price"] . "</h6>";
                            $output .= "<p class='small card-text'>" . "จำนวนสินค้า " . $row["product_sock"] . "</p>";
                            $output .= "<div class='d-flex flex-column'>";
                            // You can add buttons or links here
                            $output .= "</div>";
                            $output .= "</div>";
                            $output .= "</div>";
                            $output .= "</div>";
                            echo $output;
                          }
                        } else {
                          echo "0 results";
                        }
                      $conn->close();
                    ?>
              </div>
            </div>
          </div>







    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebars.js"></script>
</body>
</html>