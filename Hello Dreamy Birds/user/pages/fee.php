<?php
session_start();
error_reporting(0);
include('../dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $uid=$_SESSION['uid'];
    $mop=$_POST['mop'];
    $transno=$_POST['transno'];
    $dot=$_POST['dot'];
    $payamt=$_POST['payamt'];
    $query=mysqli_query($con,"insert into tblfees(UserID,ModeofPayments,TransactionNumber,DateofTransaction,PaymentAmount) value('$uid','$mop','$transno','$dot','$payamt')");
    if ($query) {
  
     echo '<script>alert("Fes has been submitted successfully.")</script>';
    echo "<script>window.location.href ='fee.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
  }

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="logo/png" href="../logo/logo (24).ico">
   <title>
    Hello Dreamy Birds |Fee Payment
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
          <a class="nav-link text-white " href="adltr.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">verified</i>
            </div>
            <span class="nav-link-text ms-1">Admission Letter</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary  " href="fee.php">
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
          <a class="nav-link text-white " href="profile.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Fee Payment</li>
          </ol><br>
          <h6 class="font-weight-bolder mb-0">                  <i class="material-icons-round opacity-10">payments</i>
| Pay Fee</h6>
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
  
<!-- fee -->

<form name="submit" method="post" enctype="multipart/form-data">  

        <section class="formatter" id="formatter">
<br>
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Fee Payment</h6>

      </div>
   
</div>
<div class="card">
  <div class="card-body" id="exampl">
        <!-- Input Mask start -->
   
        <!-- Formatter start -->
<?php 
$stuid=$_SESSION['uid'];
$ret=mysqli_query($con,"select AdminStatus from  tbladmapplications join tbluser on tbluser.ID=tbladmapplications.UserID where tbluser.ID='$stuid'");
$num=mysqli_fetch_array($ret);
$adstatus=$num['AdminStatus'];
if($num>0 && $adstatus=='1' )
{

$query=mysqli_query($con,"select * from tblfees where  UserID=$stuid");
$rw=mysqli_num_rows($query);
if($rw>0)
{
while($row=mysqli_fetch_array($query)){
?>
<br><div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Fee Payment is Completed</h6>

      </div>
   
</div>
  Thank you For Support..<br>
<!-- <img src="logo/0.0.png" class="navbabrr-and-img h-100" alt="main_logo" height="250"  width="100">
 -->
              <p><img src="logo/0.0.png" width="250" height="100"  /></p>

<table class="table mb-0">





<tr>
  <th>Payment Amount</th>
  <td><?php echo $row['PaymentAmount'];?></td>
</tr>
<tr>
  <th>Mode of Payment</th>
  <td><?php echo $row['ModeofPayments'];?></td>
</tr>
<tr>
  <th>Transaction Number</th>
  <td><?php echo $row['TransactionNumber'];?></td>
</tr>
<tr>
  <th>Date of Transaction</th>
  <td><?php echo $row['DateofTransaction'];?></td>
</tr>
</table>
<div style="float:center; padding-top: 20px;">
  <button class="btn btn-success" style="cursor: pointer;"  OnClick="CallPrint(this.value)" >Print</button></div>
<?php } } else { ?>
<form name="submit" method="post" enctype="multipart/form-data">        
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Submit Fees By Given Details</h4>
                  <small><b>Bank Name   :</b>HDFC BANK LTD</small><br>
                  <small><b>A/C Name    :</b>Hello Dreamy Birds</small><br>
                  <small><b>A/C Number  :</b>50100318377877</small><br>
                  <small><b>IFSC Code   :</b>HDFC0004693</small><br>
                  <small><b>Branch Code :</b>4693</small><br>
                  
                  

                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                  
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
 
<div class="row">
  <div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Payment Amount</h5>
  <?php
$uid=$_SESSION['uid'];
$ret=mysqli_query($con,"select * from  tbladmapplications where UserId='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
   <div class="input-group input-group-outline mb-4">
     <input class="form-control" id="payamt" name="payamt"  type="text" readonly value="<?php  echo $row['FeeAmount'];?>">
   
    </div>
</fieldset>
            <?php }?>     
</div>
<div class="col-6 col-md-3">
 <fieldset>
  <h5>Mode of Payments</h5>
   <div class="dropdowan">
    <select class="btn btn-outline-secondary dropdown-toggle" name="mop" required="true">
      <option value="">Choose Mode of Payment</option>
      <option value="Debit Card">Debit Card</option>
      <option value="Credit Card">Credit Card</option>
      <option value="E-Wallet">E-Wallet</option>
      <option value="UPI">UPI</option>
    </select>
   
    </div>
</fieldset>
                 
</div>

</div>
 <div class="row">
  <div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Transaction Number                  </h5>
   <div class="input-group input-group-outline mb-4">
    <input class="form-control" id="transno" name="transno"  type="text" required="true">
    </div>
</fieldset>                 
</div>
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Date of Transaction                  </h5>
   <div class="input-group input-group-outline mb-4">
    <input class="form-control" id="dot" name="dot"  type="date" required="true">
    </div>
</fieldset>                 
</div>
 </div> 
<div class="row" style="margin-top: 2%">
<div class="col-xl-6 col-lg-12">
<button type="submit" name="submit" href="fee.php"  class="btn btn-success btn-min-width mr-1 mb-1">Submit</button>
</div>
</div>
 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php } }  else if($num>0 && $adstatus==''){ ?>
<p>Your application is pending with admin.    </p>
<?php } else if($num>0 && $adstatus=='2'){ ?>
<p> Your application has been rejected by admin  </p>
<?php } else{?> 
  <p>First fill the application form.</p>
<?php } ?>
          <!-- Formatter end -->
      </form>  
      </div>
    </div>
    </div>
  </div>





            
          
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

</html><?php  } ?>
