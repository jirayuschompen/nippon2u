<?php
    require 'conn.php';
    $sql = "SELECT * FROM sendaddress";
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
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/headers.css" > -->
    <link rel="stylesheet" href="css/sidebars.css">
    <!-- <link rel="stylesheet" href="css/product.css"> -->
    <link rel="stylesheet" href="css/radio.css">
    <link rel="stylesheet" href="css/buttonspayment.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      body{
      margin-left: 280px;
      margin-top: 90px;
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
                <input type="text" id="product-search" placeholder="Search by Product Name" />
            </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class="fa-solid fa-cart-shopping"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
        <!-- <img src="images/profile.jpg" alt="" class="profile" /> -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        // echo $_SESSION['success'];
                        // unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            
                <i>
                    <?php 
                        echo $_SESSION['username']; 
                    ?>
                </i>
            

                <i><a href="index.php?logout=1" class='bx bx-log-out' style="text-decoration: none; color : #707070">
                  
                </a></i>



            <?php else : ?>
                <!-- Display the "Login" and "Register" buttons -->
                <i><a href="login.php">Login</a></i>
                <i><a href="register.php">Register</a></i>
        <?php endif ?>
        </div>
    </nav>
    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <br>
          <!-- <div class="menu_title menu_home"></div> -->
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
            <!-- <span> Expand</span> -->
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <!-- <span> Collapse</span> -->
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>

    


  <!-- End Side bar -->
    <br>
    <div class="container-fluid">
    <h1>ชำระเงิน</h1>
    <br>
     <p>กรุณากรอกรายละเอียดด้านล่างเพื่อเสร็จสิ้นการสั่งซื้อสินค้า</p>
    </div>
    <br><br>
    <div class="row">
      <!-- address accordion -->
      <div class="col-sm-8"> 
        <div class="accordion accordion-flush" id="addressAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                ที่อยู่จัดส่งสินค้า
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample"> 
              <br>
            <?php
          if ($result->num_rows > 0) {
             $counter = 1;
             while ($row = $result->fetch_assoc()) {
              echo "<tr class='radio-group' data-row-id='$counter'>";
              echo "<td><div class='radio-group'>
                  <input type='radio' id='radioaddress$counter' name='radio-groupsend2' class='radio-input'>
                  <label for='radioaddress$counter' class='radio-label'>
                  <span class='radio-inner-circle'></span>";
              echo "<td>" . $row["sendaddress_id"] . "</td>";
              echo "<td>" . $row["sendaddress_lastname"] . "</td>";
              echo "<td>" . $row["sendaddress_houseno"] . "</td>";
              echo "<td>" . $row["sendaddress_alley"] . "</td>";
              echo "<td>" . $row["sendaddress_street"] . "</td>";
              echo "<td>" . $row["sendaddress_subdistrict"] . "</td>";
              echo "<td>" . $row["sendaddress_province"] . "</td>";
              echo "<td>" . $row["sendaddress_postcode"] . "</td>";
              echo "<td>" . $row["sendaddress_telephone"] ."<br>". "</td>";
              echo "</label></div></td></tr>";
              $counter++;
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
              <div class="accordion-body"><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modaladdressadding" action="dvdinsuccess.php">เพิ่มที่จัดส่งใหม่</button></div>        
            </div>
          </div>
      </div>
      <br>
      <!-- choice sending -->
      <div class="accordion accordion-flush" id="sendingChoiceAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseforsendchoice" aria-expanded="false" aria-controls="flush-collapseforsendchoice">
              วิธีจัดส่ง
            </button>
          </h2>
          <div id="flush-collapseforsendchoice" class="accordion-collapse collapse" aria-labelledby="flush-heading" data-bs-parent="#accordionFlushExample">  
            <br>
            <div class="radio-group">
              <input type="radio" id="radio1" name="radio-groupsending" class="radio-input">
              <label for="radio1" class="radio-label">
                <span class="radio-inner-circle"></span>
                Grab หรือ Lalamove (เก็บค่าจัดส่งปลายทางและสำหรับลูกค้าในกรุงเทพ)
              </label>
              <br>
              <input type="radio" id="radio2" name="radio-groupsending" class="radio-input">
              <label for="radio2" class="radio-label">
                <span class="radio-inner-circle"></span>
                ไปรษณีย์ไทย - EMS
              </label>
              <br>
            </div>  
          </div>
        </div>
    </div>
    <br>
    <!-- choice payment -->
    <div class="accordion accordion-flush" id="paymentChoiceAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseforpaymentchoice" aria-expanded="false" aria-controls="flush-collapseforpaymentchoice">
            วิธีชำระเงิน
          </button>
        </h2>
        <div id="flush-collapseforpaymentchoice" class="accordion-collapse collapse" aria-labelledby="flush-heading" data-bs-parent="#accordionFlushpaymentchoice">  
          <br>
          <div class="radio-grouppayment">
            <input type="radio" id="radiopayment1" name="radio-grouppayment" class="radio-input">
            <label for="radiopayment1" class="radio-label">
              <span class="radio-inner-circle"></span>
              <img src="https://www.designil.com/wp-content/uploads/2020/04/prompt-pay-logo.png" alt="float-start" width="250" height="80">
              <p></p>
            </label>
            <br>
            <input type="radio" id="radiopayment2" name="radio-grouppayment" class="radio-input">
            <label for="radiopayment2" class="radio-label">
              <span class="radio-inner-circle"></span>
              โอนผ่านบัญชีธนาคาร
            </label>
            <br>
            <input type="radio" id="radiopayment3" name="radio-grouppayment" class="radio-input">
            <label for="radiopayment3" class="radio-label">
              <span class="radio-inner-circle"></span>
              เก็บเงินปลายทาง
            </label>
            <br>
          </div>  
        </div>
      </div>
  </div>
          </div>  
          <div class="col-sm-4">
            <!-- for bill description -->
            <div class="container">
              <h4>Cart
                <span class="price" style="color:black">
                  <i class="fa fa-shopping-cart"></i>
                  <b>4</b>
                </span>
              </h4>
              <p><a href="#">Product 1</a> <span class="price">$15</span></p>
              <p><a href="#">Product 2</a> <span class="price">$5</span></p>
              <p><a href="#">Product 3</a> <span class="price">$8</span></p>
              <p><a href="#">Product 4</a> <span class="price">$2</span></p>
              <hr>
              <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
            </div>  
            <!-- HTML !-->
            <a href="payment.php" class="button-9" role="button" >ดำเนินการจ่ายเงิน</a>
          </div>
        </div>
        </div>
      </div>
  </div>
    </div>


    <!-- <script>
    // Add click event listener to each row
    var rows = document.querySelectorAll('.row-clickable');
    rows.forEach(function(row) {
        row.addEventListener('click', function() {
            // Get the data-row-id attribute value
            var rowId = row.getAttribute('data-row-id');
            // Select the corresponding radio button based on rowId
            var radio = document.getElementById('radio' + rowId);
            // Set the radio button to checked
            radio.checked = true;
        });
    });
</script> -->

   
<!----------------------------------------Modal for address adding-------------------------------------------->
<div class="modal fade" id="modaladdressadding" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaladdressaddingLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaladdressaddingLabel">ที่อยู่จัดส่งสินค้า</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- form -->
          <form id="form1" name="form1" method="POST" action="insertaddress.php">
            <!--name&lastname-->
              <div class="row"> 
                <div class="col"> &nbsp; ชื่อ
                  <input type="text" class="form-control" placeholder="ชื่อ" name="custname" >
                </div>
                <div class="col"> นามสกุล
                  <input type="text" class="form-control" placeholder="นามสกุล" name="custlastname" >
                </div>
              </div>
              <br>
              <br>
              <!-- addressnum&alley -->
              <div class="row"> 
                  <div class="col"> &nbsp; ที่อยู่
                    <input type="text" class="form-control" placeholder="บ้านเลขที่ หมู่บ้าน/อาคาร" name="housenum" >
                    
                  </div>
                  <div class="col"> <br>
                    <input type="text" class="form-control" placeholder="ซอย" name="alley">
                  </div>
                </div>
                <br>
                <!-- street&Subdistrict-->
                <div class="row"> 
                  <div class="col">
                    <input type="text" class="form-control" placeholder="ถนน" name="street">
                  </div>
                  <div class="col"> 
                    <input type="text" class="form-control" placeholder="แขวง/ตำบล" name="Subdistrict" >
                    
                  </div>
                </div>
                <br>
                <!-- district& province-->
              <div class="row"> 
                  <div class="col">&nbsp; เขต/อำเภอ
                    <input type="text" class="form-control" placeholder="เขต/อำเภอ" name="district" >
                    
                  </div>
                  <div class="col"> จังหวัด
                    <input type="text" class="form-control" placeholder="จังหวัด" name="province" >
                    
                  </div>
                  </div>
              <br>
              <div class="row"> 
              <div class="col">&nbsp;รหัสไปรษณีย์
              <input type="text" class="form-control" placeholder="รหัสไปรษณีย์" name="postcode" >
              
              </div>
              <div class="col">เบอร์โทรศัพท์
              <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" name="telnum" >
              
              </div>
              </div>
              <br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-primary" value="บันทึก">ตกลง</button>
              </div>
            </form>
      </div>
    </div>
  </div>
</div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebars.js"></script>
    <script src="js/Card-Slider.js"></script>
</body>
</html>
