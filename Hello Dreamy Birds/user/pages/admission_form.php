<?php
session_start();
error_reporting(0);
include('../dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{

 // Coding for form Submission  
if(isset($_POST['submit']))
  {
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
    $upic=$_FILES["userpic"]["name"];
    $tc=$_FILES["tcimage"]["name"];
        $tenmarksheet=$_FILES["hscimage"]["name"];
        $twlevemaksheet=$_FILES["sscimage"]["name"];
        $gramarksheet=$_FILES["graimage"]["name"];
        $pgmarksheet=$_FILES["pgraimage"]["name"];
    
$extension = substr($upic,strlen($upic)-4,strlen($upic));
$extensiontc = substr($tc,strlen($tc)-4,strlen($tc));
$extensiontm = substr($tenmarksheet,strlen($tenmarksheet)-4,strlen($tenmarksheet));
$extensiontwm = substr($twlevemaksheet,strlen($twlevemaksheet)-4,strlen($twlevemaksheet));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif",".pdf",".PDF",".JPG","JPEG",".PNG",".GIF");

// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
elseif(!in_array($extensiontc,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif/pdf format allowed');</script>";
}
elseif(!in_array($extensiontm,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif/pdf format allowed');</script>";
}
elseif(!in_array($extensiontwm,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif/pdf format allowed');</script>";
}
else
{
// rename user pic
$userpic=md5($upic).$extension;
$tc=md5($tc).$extensiontc;
$tm=md5($tenmarksheet).$extensiontm;
$twm=md5($twlevemaksheet).$extensiontwm;
if($gramarkshee!=""){
$gra=md5($gramarksheet).$extensiongra;
} else { $gra="";}

if($pgmarksheet!=""){
$pgra=md5($pgmarksheet).$extensionpgra;
} else { $pgra="";}
move_uploaded_file($_FILES["tcimage"]["tmp_name"],"userdocs/".$tc);
     move_uploaded_file($_FILES["hscimage"]["tmp_name"],"userdocs/".$tm);
     move_uploaded_file($_FILES["sscimage"]["tmp_name"],"userdocs/".$twm);
     move_uploaded_file($_FILES["graimage"]["tmp_name"],"userdocs/".$gra);
     move_uploaded_file($_FILES["pgraimage"]["tmp_name"],"userdocs/".$pgra);
     move_uploaded_file($_FILES["userpic"]["tmp_name"],"userimages/".$userpic);
    $query=mysqli_query($con,"insert into tbladmapplications(UserId,CourseApplied,FatherName,MotherName,DOB,Nationality,Gender,Category,CorrespondenceAdd,PermanentAdd,SecondaryBoard,SecondaryBoardyop,SecondaryBoardper,SecondaryBoardstream,SSecondaryBoard,SSecondaryBoardyop,SSecondaryBoardper,SSecondaryBoardstream,GraUni,GraUniyop,GraUnidper,GraUnistream,PGUni,PGUniyop,PGUniper,PGUnistream,Signature,UserPic,TransferCertificate,TenMarksheeet,TwelveMarksheet,GraduationCertificate,PostgraduationCertificate) value('$uid','$coursename','$fathername','$mothername','$dob','$nationality','$gender','$category','$coradd','$peradd','$secboard','$secyop','$secper','$secstream','$ssecboard','$ssecyop','$ssecper','$ssecstream','$grauni','$grayop','$graper','$grastream','$pguni','$pgyop','$pgper','$pgstream','$sign','$userpic','$tc','$tm','$twm','$gra','$pgra')");
    if ($query) {
    
    echo '<script>alert("Data has been added successfully.")</script>';
    echo "<script>window.location.href ='admission_form.php'</script>";
  }
  else
    {
     echo '<script>alert("Something Went Wrong. Please try again.")</script>';
         echo "<script>window.location.href ='admission_form.php'</script>";
    }
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
    Hello Dreamy Birds | Admision Form
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
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/extended/form-extended.css">

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
          <a class="nav-link text-white active bg-gradient-primary" href="admission_form.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">description</i></i>
            </div>
            <span class="nav-link-text ms-1">Admission Form</span>
          </a>
        </li>
      <!--   <li class="nav-item">
          <a class="nav-link text-white " href="edit-appform.php?editid=<?php echo $row['ID'];?>">
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
  <!--       <li class="nav-item">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Admission Form</li>
          </ol><br>
          <h6 class="font-weight-bolder mb-0">       
            <i class="material-icons-round opacity-10">description</i> | Admission Form</h6><br>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control"> -->
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
 <!--            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
             -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">           
     </a>
              </li>
            </ul>
            <a href="../../index.php">
                    <img src="logo/0.0.png" class="navbar-brand-img h-100" alt="main_logo" height="350"  width="350">
</a>
          </div></nav>
       
    <!-- FORM -->


   <br><div class="card">
  
<?php 
$stuid=$_SESSION['uid'];
$query=mysqli_query($con,"select * from tbladmapplications 
  join tbluser on tbluser.ID=tbladmapplications.UserId where  UserId=$stuid");
$rw=mysqli_num_rows($query);
if($rw>0)
{
while($row=mysqli_fetch_array($query)){
?>
 <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-Gray 100 shadow-success border-radius-lg pt-3 pb-3">
                <h6 style="color:green;" align="center" >                    
<!--                   <img src="logo/0.0.png" class="navbar-brand-img h-100" alt="main_logo" height="300"  width="250">
 -->Your Admission Form Is Uploaded Succesfully</h6>
</div> <br><br> 

<div  id="exampl">  
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-success shadow-danger border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Personal Informations</h6>
</div>   
<table class="table" border="0.50" width="100%">
<tr>
  <th>Applicant Name</th>
  <td><?php echo $row['FirstName']." ".$row['LastName'];?></td>
  <br>
  <th>Registration Date</th>
  <td><?php echo $row['CourseApplieddate'];?></td>
</tr>


  <th>Course Applied</th>
  <td><?php echo $row['CourseApplied'];?></td> <br><br>
  <th>Student Pic</th>
  <td><img src="userimages/<?php echo $row['UserPic'];?>" width="200" height="150"></td>

<tr>
  <th>Father's Name</th>
  <td><?php echo $row['FatherName'];?></td>
  <th>Mother's Name</th>
  <td><?php echo $row['MotherName'];?></td>
</tr>
<tr>
  <th>DOB</th>
  <td><?php echo $row['DOB'];?></td>
  <th>Nationality</th>
  <td><?php echo $row['Nationality'];?></td>
</tr>
<tr>
  <th>Gender</th>
  <td><?php echo $row['Gender'];?></td>
  <th>Category</th>
  <td><?php echo $row['Category'];?></td>
</tr>
<tr>
  <th>Correspondence Address</th>
  <td><?php echo $row['CorrespondenceAdd'];?></td>
  <th>Permanent Address</th>
  <td><?php echo $row['PermanentAdd'];?></td>
</tr>
<tr>
  <th>Transfer Certificate</th>
  <td><a href="userdocs/<?php echo $row['TransferCertificate'];?>" target="_blank">View File </a></td>

  <th>10th Marksheet</th>
  <td><a href="userdocs/<?php echo $row['TenMarksheeet'];?>" target="_blank">View File </a></td>
</tr>
<tr>
  <th>12th Marksheet</th>
  <td><a href="userdocs/<?php echo $row['TwelveMarksheet'];?>" target="_blank">View File </a></td>
  <th>Graduation Certificate</th>
  <td>
<?php if($row['GraduationCertificate']==""){ ?>
  NA
<?php } else{ ?>
    <a href="userdocs/<?php echo $row['GraduationCertificate'];?>" target="_blank">View File </a>
<?php } ?>
  </td>
</tr>

<tr>
  <th>Post Graduation Certificate</th>
  <td>
<?php if($row['PostgraduationCertificate']==""){ ?>
  NA
<?php } else{ ?>
    <a href="userdocs/<?php echo $row['PostgraduationCertificate'];?>" target="_blank">View File </a>
<?php } ?>
  </td>
</tr>
</table><br><br><br>

     <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-success shadow-danger border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Education Qualification</h6>

      </div><br>
      </div>
      <div class="card">
<div class="table-responsive">
  <table class="table mb-0">

<!-- <table class="table" border="1" width="100%" style="margin-top:1%">
 --><tr>
  <th>#</th>
   <th>Board / University</th>
    <th>Year</th>
     <th>Percentage</th>
       <th>Stream</th>
</tr>
<th>10th(Secondary)</th>
  <td><?php echo $row['SecondaryBoard'];?></td>
  <td><?php echo $row['SecondaryBoardyop'];?></td>
   <td><?php echo $row['SecondaryBoardper'];?></td>
   <td><?php echo $row['SecondaryBoardstream'];?></td>
</tr>
<tr>
  <th>12th(Senior Secondary)</th>
  <td><?php echo $row['SSecondaryBoard'];?></td>
   <td><?php echo $row['SSecondaryBoardyop'];?></td>
   <td><?php echo $row['SSecondaryBoardper'];?></td>
    <td><?php echo $row['SSecondaryBoardstream'];?></td>
</tr>
<tr>
  <th>Graduation</th>
  <td><?php echo $row['GraUni'];?></td>
  <td><?php echo $row['GraUniyop'];?></td>
  <td><?php echo $row['GraUnidper'];?></td>
  <td><?php echo $row['GraUnistream'];?></td>
</tr>
<tr>
  <th>Post Graduation</th>
  <td><?php echo $row['PGUni'];?></td>
  <td><?php echo $row['PGUniyop'];?></td>
  <td><?php echo $row['PGUniper'];?></td>
  <td><?php echo $row['PGUnistream'];?></td>
</tr>

</table>

      </div>
    </div>

<br>

    <br><div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-success shadow-danger border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Admin Remarks</h6>

      </div><br>
      </div>
      <div class="card">
<div class="table-responsive">

<?php if($row['AdminStatus']==""):?>
  <?php else: ?>

  <table class="table mb-0">

<tr>
  <th>Admin Remark</th>
  <td><?php echo $row['AdminRemark'];?></td>
</tr>
<tr>
  <th>Admin Status</th>
 <td><?php 
                  if($row['AdminStatus']==""){
echo "admin remark is pending";
} 

 if($row['AdminStatus']=="1"){
  echo "Selected";
}
    
if($row['AdminStatus']=="2"){
  echo "Rejected";
}
                    ?></td>
</tr>
<tr>
  <th>Admin Remark Date</th>
  <td><?php echo $row['AdminRemarkDate'];?></td>
</tr>
<?php endif;?>
  <tr>
  </tr>
</table>
</div>
</div>
<br>

  <br><div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-success shadow-danger border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Student's Self Declaration</h6>
</div><br>
    <th colspan="2">I hereby state that the facts mentioned above are true to the best of my knowledge and belief.<br />
                    [<?php  echo $row['Signature'];?>]
    </th>
  </tr>
</table>


</div>
<div align="center" >
  <button class="btn btn-success" style="cursor: pointer;"  OnClick="CallPrint(this.value)" >Print</button></div>
<?php 

if ($row['AdminStatus']==""){
?>
<p align="center" style="text-align: center;font-size: 10px;" class="btn btn-danger"><a href="edit-appform.php?editid=<?php echo $row['ID'];?>">Edit Details</a></p>
<?php }} } else { ?>










<form name="submit" method="post" enctype="multipart/form-data">        
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                  
                     <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Personal Information</h6>
                 <div class="heading-elements">
                    <ul class="list-inline mb-0">
                  
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      
                    </ul>
                  </div>
              </div>
            </div>
                 





             
                <div class="card-content">
                  <div class="card-body">







 

<div class="row">
<div class="col-7 col-md-5">
  Course Applied       
   <div class="dropdown">
   <select name='coursename' id="coursename" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" required="true">
     <option value="">Course Applied</option>
      <?php $query=mysqli_query($con,"select * from tblcourse");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['CourseName'];?>"><?php echo $row['CourseName'];?></option>
                  <?php } ?>  
   </select>
    </div>
                   
</div>

<div class="col-7 col-md-5">
 <fieldset>
  Student Pic
  <div class="ajax-file-upload-container">
    <input class="" placeholder="" id="userpic" name="userpic"  type="file" required>
    </div>
</fieldset>                  
</div>
 </div><br>


 <div class="row">

 <div class="col-7 col-md-5">
<div class="input-group input-group-dynamic mb-4">
    <span class="input-group-text">Father's Name</span>
    <input type="text" class="form-control" placeholder="Father's Name" aria-label="fathername" aria-describedby="basic-addon1" id="fathername" name="fathername"  type="text" required >
</div>
</div>

 <div class="col-7 col-md-5">
<div class="input-group input-group-dynamic mb-4">
    <span class="input-group-text">Mother's Name</span>
    <input type="text" class="form-control" placeholder="Mother's Name" aria-label="mothername" aria-describedby="basic-addon1" id="mothername" name="mothername"  type="text" required >
</div>
</div>
</div>
   <br>
<div class="row">
 <div class="col-6 col-md-3">

        <div class="input-group input-group-dynamic mb-4">
        <span class="input-group-text">Date Of Birth</span>
        <input type="text" class="form-control" placeholder="YYYY-MM-DD" aria-label="mothername" aria-describedby="basic-addon1"  id="dob" name="dob"  type="text" required >
        </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div class="col-6 col-md-3">
        <div class="input-group input-group-dynamic mb-4">
        <span class="input-group-text">Nationality</span>
        <input type="text" class="form-control" placeholder="Nationality" aria-label="mothername" aria-describedby="basic-addon1" id="nationality" name="nationality"  type="text" required>
      </div>
    </div>
    </div>

<br>
<div class="row">
 <div class="col-6 col-md-3">
  Gender  
   <select class="btn btn-outline-secondary dropdown-toggle" aria-labelledby="dropdownMenuButton" id="gender" name="gender"  required>
    <option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Transgender">Transgender</option>
   </select>
                      </div>

<div class="col-6 col-md-3">
   Category    
<select class="btn btn-outline-secondary dropdown-toggle" id="category" name="category"  required>
    <option value="">Select Category</option>
<option value="General">General</option>
<option value="OBC">OBC</option>
<option value="SC/ST">SC/ST</option>
<option value="SC/ST">Other</option>
   </select>

  </div>

 

</div><br>

<div class="row"> 

  <div class="col-6 col-md-5">
  Correspondence Address         
   <div class="input-group input-group-outline mb-4">
   <input class="form-control" id="coradd" name="coradd"  type="textarea" required rows="4"></input>
    </div>
</div>
  <div class="col-6 col-md-5">
  Permanent Address             
   <div class="input-group input-group-outline mb-4">
   <input class="form-control" id="peradd" name="peradd"  type="text" required rows="4"></input>
    </div>
  </div>




</div><br><br>





     <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Education Qualification</h6>

      </div><br>
      </div>
      <div class="card">
<div class="table-responsive">
  <table class="table mb-0">
<tr>
  <th>Education Name</th>
   <th>Board / University</th>
    <th>Year</th>
     <th>Percentage</th>
       <th>Stream</th>
</tr>
<tr>
<th>10th(Secondary)</th>
<td>   <input class="form-control white_bg" id="10thboard" name="10thboard" placeholder="Board / University"  type="text" required></td>
<td>   <input class="form-control white_bg" id="10thpyeaer" name="10thpyear" placeholder="Year"  type="month"  min="1900-01" max="2021-12" step="1" value="-" required></td>
<td>   <input class="form-control white_bg" id="10thpercentage" name="10thpercentage" placeholder="Percentage"  type="text" required></td>
<td>   <input class="form-control white_bg" id="10thstream" name="10thstream" placeholder="Stream"  type="text" required></td>
</tr>
<tr>
<th>12th(Senior Secondary)</th>
<td>   <input class="form-control white_bg" id="12thboard" name="12thboard" placeholder="Board / University"  type="text" required></td>
<td>   <input class="form-control white_bg" id="12thboard" name="12thpyear" placeholder="Year"    type="month"  min="1900-01" max="2021-12" step="1" value="-" required></td>
<td>   <input class="form-control white_bg" id="12thpercentage" name="12thpercentage" placeholder="Percentage"  type="text" required></td>
<td>   <input class="form-control white_bg" id="12thstream" name="12thstream" placeholder="Stream"  type="text" required></td>
</tr>
<tr>
<th>Graduation</th>
<td>   <input class="form-control white_bg" id="graduation" name="graduation" placeholder="Board / University"  type="text"></td>
<td>   <input class="form-control white_bg" id="graduationpyeaer" name="graduationpyeaer" placeholder="Year"    type="month"  min="1900-01" max="2021-12" step="1" value="-"></td>
<td>   <input class="form-control white_bg" id="graduationpercentage" name="graduationpercentage" placeholder="Percentage"  type="text"></td>
<td>   <input class="form-control white_bg" id="graduationstream" name="graduationstream" placeholder="Stream"  type="text" ></td>
</tr>
<tr>
<th>Post Graduation</th>
<td>   <input class="form-control white_bg" id="postgraduation" name="postgraduation" placeholder="Board / University"  type="text" ></td>
<td>   <input class="form-control white_bg" id="pgpyeaer" name="pgpyear" placeholder="Year" type="month"  min="1900-01" max="2021-12" step="1" value="-" ></td>
<td>   <input class="form-control white_bg" id="pgpercentage" name="pgpercentage" placeholder="Percentage"  type="text" ></td>
<td>   <input class="form-control white_bg" id="pgstream" name="pgstream" placeholder="Stream"  type="text" ></td>
</tr>
</table>
</div>
</div>
</hr>

<br><br>





     <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Document/Marksheet Upload</h6>

      </div><br>
      </div>




<div class="col-7 col-md-5">
 <fieldset>
 <b> 1 | ID Proof </b><br>
 <small><b>NOTE:</b>Uplode ADHARCARD,PANCARD,VOTINGCARD Etc..</small>
   <div class="ajax-file-upload-container">
    <input class="" id="tcimage" name="tcimage"  type="file" required>
    </div>
</fieldset>
                 
</div>
<br>
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <b>2 | 10th Marksheet </b>
   <div class="ajax-file-upload-container">
    <input class="" id="hscimage" name="hscimage"  type="file" required>
    </div>
</fieldset>                 
</div><br>

<div class="col-xl-6 col-lg-12">
 <fieldset>
  <b>4 | 12th Mark Sheet           </b>      
   <div class="ajax-file-upload-container">
    <input class="" id="sscimage" name="sscimage"  type="file" required>
    </div>
</fieldset>                 
</div><br>

<div class="col-xl-6 col-lg-12">
  <fieldset>
  <b>5 | Graduation Certificate(if any)</b> 
     <div class="ajax-file-upload-container">
    <input class="" id="graimage" name="graimage"  type="file">
    </div>
</fieldset>
 </div><br>

<div class="col-xl-4 col-lg-12">
  <fieldset>
<b>6 | Post Graduation Certificate(if any)</b>                
   <div class="ajax-file-upload-container">
    <input class="" id="pgraimage" name="pgraimage"  type="file" >
    </div>
</fieldset>
</div>
<br>
<br>


<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
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


<div class="input-group input-group-outline mb-4">
   <input class="form-control" id="signature" name="signature" placeholder="Signature [Enter Your Full Name]"  type="text">

</div>
</div>
<div class="row" style="margin-top: 2%">
<div class="col-xl-6 col-lg-12">
<button type="submit" name="submit" class="btn bg-gradient-success">Submit</button>
</div>
</div>
 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php } ?>
        <!-- Formatter end -->
      </form>  
      </div>
    </div>
  </div>

  </div>
</div>
 
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

<?php  } ?>







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