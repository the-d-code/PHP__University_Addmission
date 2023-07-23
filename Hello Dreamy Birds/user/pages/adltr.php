<?php
session_start();
error_reporting(0);
include('../dbconnection.php');

$UserId = $_SESSION['uid'];


 $sql = "SELECT * FROM tbladmapplications WHERE UserId='".$uid."'";
  $result = mysqli_query($con, $sql);
($row = mysqli_fetch_assoc($result));
if (mysqli_num_rows($result) > 0) {
// output data of each row

 ?>
                                    
<script type="text/javascript" language="Javascript">
window.location = "index.php";
window.open('fail.php');
</script>

    <?php   }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="logo/png" href="../logo/logo (24).ico">
   <title>
    Hello Dreamy Birds |Profile
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
<!--         <img src="../logo/logo (24).ico" class="navbar-brand-img h-100" alt="main_logo">
 -->        <span class="ms-1 font-weight-bold text-white"> <font face = "Comic sans MS" size = "4">Hello Dreamy Birds</font></span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <!-- <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main"> -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="../index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="admission_form.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">description</i></i>
            </div>
            <span class="nav-link-text ms-1">Admission Form</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white  " href="edit_appform.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">edit_note</i>
            </div>
            <span class="nav-link-text ms-1">Edit Application</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="adltr.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">verified</i>
            </div>
            <span class="nav-link-text ms-1">Admission Letter</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="fee.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">payments</i>
            </div>
            <span class="nav-link-text ms-1">Submit Fee</span>
          </a>
        </li>
   
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-white " href="../logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
  
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Hello Dreamy Birds</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Admission Letter</li>
          </ol><br>
          <h6 class="font-weight-bolder mb-0">                  <i class="material-icons-round opacity-10">verified</i>
| Admission Confirmation</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control"> -->
            </div>
          </div>
         <!--  <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
          </ul>

 -->        
                    <img src="logo/0.0.png" class="navbar-brand-img h-100" alt="main_logo" height="350"  width="350">

</div>
      </nav>
  
<!-- profile -->
<form name="submit" method="post" enctype="multipart/form-data"> 

        <section class="formatter" id="formatter">
<br>
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Admission Letter</h6>
</div>
<div class="card">
  <div class="">
                  <div class="card-body"  id="exampl">
 <div class="row">


                                  <?php 

$sql = "SELECT * FROM tbladmapplications WHERE UserId = '$UserId' AND AdminStatus = '1'";
  $result = mysqli_query($con, $sql);
($row = mysqli_fetch_assoc($result));
if ( $row['AdminStatus'] == '1') {
                 ?>
              </p>
              <p><img src="logo/0.0.png" width="250" height="100"  /></p>
              <h3>LETTER OF ADMISSION TO, <?php echo $row['Signature']?></h3>
                      <p>DEAR <?php echo $row['Signature']."," ?></p>
                      <p>
                        CONGRATULATIONS! WE ARE HAPPY TO OFFER YOU ADMISSION TO THE,<b>HELLO DREAMY BIRDS</b>,
                      </p>
                      <p>
                       <li>  PROCEDURE FOR PAYMENT OF ACCEPTANCE FEE, ACADEMIC CLEARANCE & PAYMENT OF TUITION FEE
                        YOU ARE EXPECTED TO PAY THE ACCEPTANCE FEE WITHIN 15 DAYS .
                        PLEASE NOTE THAT THE ACCEPTANCE FEE IS NON-REFUNDABLE AND DOES NOT GUARANTEE YOUR ADMISSION. </li>
                        <li> NOTE THAT UNDER NO CIRCUMSTANCE WOULD THE DATE FOR THE PAYMENT OF ACCEPTANCE FEE BE EXTENDED. </li>
           <br>
                <h3>REGARDING FEE PAY</h3>
           1 - PAY YOUR ACCEPTANCE FEE WITH AN APPROPRITE METHOD.<br>
           2 - PRINT YOUR ACCEPTANCE FEE RECEIPT.<br>
           3 - KEEP YOUR RECEIPT AND CLEARANCE SCHEDULE FOR REGISTRATION.<br>
           
            <h3><b>THE FOLLOWING DOCUMENTS ARE REQUIRED FOR REGISTRATION:</b></h3>
            <small>BRING ORIGENAL AND XEROX ALSO</small>
           
            <li>ID PROOF </li>
            <li>4 PASSPORT SIZE PHOTOS</li>
            <li>APPLICATION SLIP.</li>
            <li>ADMISSION LETTER.</li>
            <li>ACCEPTANCE FEE RECEIPT.</li>
            <li>10TH MARKSHEET & PASSING CERTIFFECATE</li>
            <li>12TH MARKSHEET & PASSING CERTIFFECATE</li>
            <li>PG MARKSHEETS <small>[ALL SEMESTERS]</small>IF APPLAY FOR MASTERS</li>
            <li>RECEIPT FOR PAYMENT MADE FOR CHANGE OF COURSE/INSTITUTION.(IF APPLICABLE)</li>


<b>NOTE : IF YOU DON'T COMPLETE RECCOMANDED PROCESS YOUR ADMISSION WILL BE CANCELD.</b><br><br>



<p><img src="logo/00.png" width="150" height="100" /></p>
HELLO DREAMY BIRDS<br>
---------------------<br>
REGISTRAR
                      </p>

                  <?php }

                  else{ ?>
                    <h4 style="color:red">Sorry, no Admission yet. Check back later.</h4>
                    <?php } ?>
             
            </div>  
      </div>
      </div><!--close content-->  
    </div><!--close site_content-->  
 



 





 </div>
<div style="float:center; padding-top: 20px;">
  <button class="btn btn-success" style="cursor: pointer;"  OnClick="CallPrint(this.value)" >Print</button></div>
</div>

</div>
</div>
</div>
</section>
</form>




            
          
    <!-- End Navbar -->
     <div class="container-fluid py-4">
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="" class="font-weight-bold" target="_blank">Hello Dreamy Birds</a>
                for a better Future.
              </div>
            </div>
          
          </div>
        </div>
      </footer>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>

 <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
}

</script>
</body>

</html>
