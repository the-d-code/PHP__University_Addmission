<?php
session_start();
error_reporting(0);
include('../dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    $eid=$_GET['editid'];
    $uid=$_SESSION['uid'];
    $coursename=$_POST['coursename'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $dob=$_POST['dob'];
    $nationality=$_POST['nationality'];
    $gender=$_POST['gender'];
    $category=$_POST['category'];
    $coradd=$_POST['coradd'];
    $peradd=$_POST['peradd'];
    $secboard=$_POST['10thboard'];
    $secyop=$_POST['10thpyear'];
    $secper=$_POST['10thpercentage'];
    $secstream=$_POST['10thstream'];
    $ssecboard=$_POST['12thboard'];
    $ssecyop=$_POST['12thpyear'];
    $ssecper=$_POST['12thpercentage'];
    $ssecstream=$_POST['12thstream'];
    $grauni=$_POST['graduation'];
    $grayop=$_POST['graduationpyeaer'];
    $graper=$_POST['graduationpercentage'];
    $grastream=$_POST['graduationstream'];
    $pguni=$_POST['postgraduation'];
    $pgyop=$_POST['pgpyear'];
    $pgper=$_POST['pgpercentage'];
    $pgstream=$_POST['pgstream'];
    $dec=$_POST['declaration'];
    $sign=$_POST['signature'];

    /*$str="update tbladmapplications set CourseApplied='$coursename',FatherName='$fathername',MotherName='$mothername',DOB='$dob',Nationality='$nationality',Gender='$gender',Category='$category',CorrespondenceAdd='$coradd',PermanentAdd='$peradd',SecondaryBoard='$secboard',SecondaryBoardyop='$secyop',SecondaryBoardper='$secper',SecondaryBoardstream='$secstream',SSecondaryBoard='$ssecboard',SSecondaryBoardyop='$ssecyop',SSecondaryBoardper='$ssecper',SSecondaryBoardstream='$ssecstream',GraUni='$grauni',GraUniyop='$grayop',GraUnidper='$graper',GraUnistream='$grastream',PGUni='$pguni',PGUniyop='$pgyop',PGUniper='$pgper',PGUnistream='$pgstream',Signature='$sign' where ID='$eid' && UserId='$uid'";


    echo "here....".$str;
    return;
*/  

    $query=mysqli_query($con,"update tbladmapplications set CourseApplied='$coursename',FatherName='$fathername',MotherName='$mothername',DOB='$dob',Nationality='$nationality',Gender='$gender',Category='$category',CorrespondenceAdd='$coradd',PermanentAdd='$peradd',SecondaryBoard='$secboard',SecondaryBoardyop='$secyop',SecondaryBoardper='$secper',SecondaryBoardstream='$secstream',SSecondaryBoard='$ssecboard',SSecondaryBoardyop='$ssecyop',SSecondaryBoardper='$ssecper',SSecondaryBoardstream='$ssecstream',GraUni='$grauni',GraUniyop='$grayop',GraUnidper='$graper',GraUnistream='$grastream',PGUni='$pguni',PGUniyop='$pgyop',PGUniper='$pgper',PGUnistream='$pgstream',Signature='$sign' where UserId='$uid'");
    
    if ($query) {
    
    echo '<script>alert("Data has been updated successfully.")</script>';
   echo "<script>window.location.href ='admission_form.php'</script>";
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
    Hello Dreamy Birds | Edit Application
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
 -->  <span class="ms-1 font-weight-bold text-white"> <font face = "Comic sans MS" size = "4">Hello Dreamy Birds</font></span>
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
          <a class="nav-link text-white active bg-gradient-primary " href="admission_form.php">
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
          <a class="nav-link text-white " href="fee.php">
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
          <a class="nav-link text-white " href="./pages/sign-in.html">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Application</li>
          </ol><br>
          <h6 class="font-weight-bolder mb-0">                  <i class="material-icons-round opacity-10">edit_note</i>
Edit Application Form</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control"> -->
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
             <!--  <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a> -->
            </li>
          </ul>
           <img src="logo/0.0.png" class="navbar-brand-img h-100" alt="main_logo" height="350"  width="350">
        </div>
      </nav>
  
<!-- 
aaaaaaaaaaaaaaaa -->


<br>


  

<form name="submit" method="post" enctype="multipart/form-data">    

<?php 
     $eid=$_GET['editid'];

$stuid=$_SESSION['uid'];
$query=mysqli_query($con,"select * from tbladmapplications 
  join tbluser on tbluser.ID=tbladmapplications.UserId where  UserId=$stuid");
$ret=mysqli_num_rows($query);
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>
 

 


                 <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                  
                     <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Personal Information</h6>
                 <div class="heading-elements">
                    <ul class="list-inline mb-0">
                  
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      
                    </ul>
                  </div>
              </div>
            </div>
                 


                <div class="card">
                  <div class="card-body">
 

<div class="row">
<div class="col-7 col-md-5">
  <h5>Course Applied                   </h5>
   <div class="dropdown">
   <select name='coursename' id="coursename" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
     <option value="<?php echo $row['CourseApplied'];?>"><?php echo $row['CourseApplied'];?>
       
     </option>
      <?php $query=mysqli_query($con,"select * from tblcourse");
              while($row1=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row1['CourseName'];?>">  <?php echo $row1['CourseName'];?></option>
                  <?php } ?>  
   </select>
    </div>
                   
</div>

<div class="col-7 col-md-5">
 <fieldset>
  <h5>Student Pic                   </h5>
   <div class="form-group">
     <img src="userimages/<?php  echo $row['UserPic'];?>" width="100" height="100"> <a href="changeimage.php?editid=<?php echo $row['ID'];?>" > &nbsp; Edit Image</a>
    </div>
</fieldset>                  
</div>
 </div>               
 <div class="row">

 <div class="col-7 col-md-5">
  <fieldset>
  <h5>Father's Name                   </h5>
<div class="input-group input-group-dynamic mb-4"> 
   <input class="form-control" id="fathername" name="fathername"  type="text" required='true' value="<?php echo $row['FatherName'];?>">
    </div>
</fieldset>               
</div>
 <div class="col-7 col-md-5">
 <fieldset>
  <h5>Mother's Name                 </h5>
<div class="input-group input-group-dynamic mb-4"> 
   <input class="form-control" id="mothername" name="mothername"  type="text" required='true' value="<?php echo $row['MotherName'];?>">
                          </div>
                        </fieldset>
                      </div>
                    </div>




<div class="row">
 <div class="col-6 col-md-4">
 <fieldset>
  <h5>Date Of Birth                   </h5>
<div class="input-group input-group-dynamic mb-4"> 
   <input class="form-control" id="dob" name="dob"  type="text" required='true' value="<?php echo $row['DOB'];?>">
          <!--  -->
    </div>
  <small class="text-muted">Date Of Birth Must be in this format (YYYY-MM-DD)</small>

</fieldset>                  
</div>
 <div class="col-6 col-md-4">
 <fieldset>
  <h5>Nationality                </h5>
<div class="input-group input-group-dynamic mb-4"> 
   <input class="form-control" id="nationality" name="nationality"  type="text" required='true' value="<?php echo $row['Nationality'];?>">
                          </div>

                        </fieldset>
                      </div>

                    </div><br>
<div class="row">

 <div class="col-7 col-md-2">
 <fieldset>
  <h5>Gender                </h5>
   <div class="dropdown">

   <select class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" id="gender" name="gender"  required>
    <option value="<?php echo $row['Gender'];?>"><?php echo $row['Gender'];?></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Transgender">Transgender</option>
   </select>
                          </div>
                        </fieldset>
                      </div>

 <div class="col-7 col-md-2">
    <h5>Category : </h5>
      <div class="dropdown">

<select class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"  id="category" name="category"  required>
    <option value="<?php echo $row['Category'];?>"><?php echo $row['Category'];?></option>
<option value="General">General</option>
<option value="OBC">OBC</option>
<option value="SC/ST">SC/ST</option>
<option value="SC/ST">Other</option>
   </select>
  </div>
</div>


<div class="row">
  <div class="col-6 col-md-5">
  <h5>Correspondence Address                  </h5>
   <div class="input-group input-group-outline mb-4">
   <input class="form-control" id="coradd" name="coradd" required='true' value="<?php echo $row['CorrespondenceAdd'];?>">
</input>    </div>

  </div>

  <div class="col-6 col-md-5">
  <h5>Permanent Address                  </h5>
   <div class="input-group input-group-outline mb-4">
     <input class="form-control" id="peradd" name="peradd" required="true" value="<?php echo $row['PermanentAdd'];?>"></input>

   <!--  <textarea type="textarea" class="form-control white_bg" id="peradd" name="peradd"  type="text" required='true' ></textarea> -->
    </div>
</div>
</div><br><br><br><br>


<br><br><div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Education Qualification</h6>

      </div>
      </div>
      <div class="card">
<div class="table-responsive">
<table class="table mb-0">
<tr>
  <th>#</th>
   <th>Board / University</th>
    <th>Year</th>
     <th>Percentage</th>
       <th>Stream</th>
</tr>
<tr>
<th>10th(Secondary)</th>
<td>   <input class="form-control white_bg" id="10thboard" name="10thboard" placeholder="Board / University"  type="text" required='true' value="<?php echo $row['SecondaryBoard'];?>"></td>
<td>   <input class="form-control white_bg" id="10thpyeaer" name="10thpyear" placeholder="Year" required='true'  type="month"  min="1900-01" max="2021-12" step="1"  value="<?php echo $row['SecondaryBoardyop'];?>"></td>
<td>   <input class="form-control white_bg" id="10thpercentage" name="10thpercentage" placeholder="Percentage"  type="text" required='true' value="<?php echo $row['SecondaryBoardper'];?>"></td>
<td>   <input class="form-control white_bg" id="10thstream" name="10thstream" placeholder="Stream"  type="text" required='true' value="<?php echo $row['SecondaryBoardstream'];?>"></td>
</tr>
<tr>
<th>12th(Senior Secondary)</th>
<td>   <input class="form-control white_bg" id="12thboard" name="12thboard" placeholder="Board / University"  type="text" required='true' value="<?php echo $row['SSecondaryBoard'];?>"></td>
<td>   <input class="form-control white_bg" id="12thboard" name="12thpyear" placeholder="Year"  type="month"  min="1900-01" max="2021-12" step="1" required='true' value="<?php echo $row['SSecondaryBoardyop'];?>"></td>
<td>   <input class="form-control white_bg" id="12thpercentage" name="12thpercentage" placeholder="Percentage"  type="text" required='true' value="<?php echo $row['SSecondaryBoardper'];?>"></td>
<td>   <input class="form-control white_bg" id="12thstream" name="12thstream" placeholder="Stream"  type="text" required='true' value="<?php echo $row['SSecondaryBoardstream'];?>"></td>
</tr>
<tr>
<th>Graduation</th>
<td>   <input class="form-control white_bg" id="graduation" name="graduation" placeholder="Board / University"  type="text" value="<?php echo $row['GraUni'];?>"></td>
<td>   <input class="form-control white_bg" id="graduationpyeaer" name="graduationpyeaer" placeholder="Year"  type="month"  min="1900-01" max="2021-12" step="1"  value="<?php echo $row['GraUniyop'];?>"></td>
<td>   <input class="form-control white_bg" id="graduationpercentage" name="graduationpercentage" placeholder="Percentage"  type="text" value="<?php echo $row['GraUnidper'];?>"></td>
<td>   <input class="form-control white_bg" id="graduationstream" name="graduationstream" placeholder="Stream"  type="text" value="<?php echo $row['GraUnistream'];?>"></td>
</tr>
<tr>
<th>Post Graduation</th>
<td>   <input class="form-control white_bg" id="postgraduation" name="postgraduation" placeholder="Board / University"  type="text" value="<?php echo $row['PGUni'];?>"></td>
<td>   <input class="form-control white_bg" id="pgpyeaer" name="pgpyear" placeholder="Year"  type="month"  min="1900-01" max="2021-12" step="1"  value="<?php echo $row['PGUniyop'];?>"></td>
<td>   <input class="form-control white_bg" id="pgpercentage" name="pgpercentage" placeholder="Percentage"  type="text" value="<?php echo $row['PGUniper'];?>"></td>
<td>   <input class="form-control white_bg" id="pgstream" name="pgstream" placeholder="Stream"  type="text" value="<?php echo $row['PGUnistream'];?>"></td>
</tr>
</table>
</div>
</div>
</hr>

<div class="row" style="margin-top: 2%"><br>
  
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Declaration</h6>

      </div><br>
      
</div>
 <div class="row">
<div class="col-xl-12 col-lg-12">
<h5><b>I hereby state that the facts mentioned above are true to the best of my knowledge and belief.</b></h5>
 </div>
 </div>               
<div class="row"> 
<div class="col-xl-4 col-lg-12">
<fieldset>
  <div class="input-group input-group-outline mb-4">

 <input class="form-control" id="signature" name="signature" placeholder="Signature"  type="text" value="<?php echo $row['Signature'];?>"> </div>
 </fieldset>  
</div>
</div> <?php 
$cnt=$cnt+1;
}?>
<div class="row" style="margin-top: 2%">

<div class="input-group input-group-outline mb-4">
<button type="submit" name="submit" class="btn btn-success btn-min-width mr-1 mb-1">Update</button>
</div>
</div>
 </div>
               
    
        
      
        <!-- Formatter end -->
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
   <script src="../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>

  <script src="../app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/forms/extended/typeahead/handlebars.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/forms/extended/formatter/formatter.min.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/forms/extended/card/jquery.card.js" type="text/javascript"></script>
  <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/extended/form-typeahead.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/extended/form-inputmask.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/extended/form-formatter.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/extended/form-maxlength.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/extended/form-card.js" type="text/javascript"></script>
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
</body>

</html>
<?php } ?>