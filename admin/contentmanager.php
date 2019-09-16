<?php require_once('Connections/twconn.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
   
  
}
if (!isset($_SESSION["sess_username"])){
	     header("Location: ../login/index.php?err=2");
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['sess_username'] = NULL;
  $_SESSION['sess_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['sess_username']);
  unset($_SESSION['sess_userrole']);
  unset($_SESSION['sess_user_id']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../login/index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}

?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}



$currentPage = $_SERVER["PHP_SELF"];

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form5")) {
	
	if($_FILES['imager']['name'] == ""){
		$updateSQL = sprintf("UPDATE content SET words=%s, Title=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					   GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($_POST['id'], "text"));
		
	}else{
	$target = "img/".basename($_FILES['imager']['name']);
	$image = $_FILES['imager']['name'];
	
	if (move_uploaded_file($_FILES['imager']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
		echo"<script>alert('rewer');</script>";
		 $updateSQL = sprintf("UPDATE content SET words=%s, Title=%s, images=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					    GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($target, "text"),
                       GetSQLValueString($_POST['id'], "text"));
					   
	}
		
		
		
  mysqli_select_db($twconn,$database_twconn);
  $Result1 = mysqli_query($twconn, $updateSQL) or die(mysqli_error());

  $updateGoTo = "Contentmanager.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}




if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form6")) {
	
	if($_FILES['imager']['name'] == ""){
			$updateSQL = sprintf("UPDATE content SET words=%s, Title=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					   GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($_POST['id'], "text"));
		
	}else{
	$target = "img/".basename($_FILES['imager']['name']);
	$image = $_FILES['imager']['name'];
	
	if (move_uploaded_file($_FILES['imager']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
		echo"<script>alert('rewer');</script>";
		 $updateSQL = sprintf("UPDATE content SET words=%s, Title=%s, images=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					    GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($target, "text"),
                       GetSQLValueString($_POST['id'], "text"));
					   	   
	}
		
		
		
  mysqli_select_db($twconn,$database_twconn);
  $Result1 = mysqli_query($twconn, $updateSQL) or die(mysqli_error());

  $updateGoTo = "Contentmanager.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form7")) {
	
	if($_FILES['imager']['name'] == ""){
			$updateSQL = sprintf("UPDATE dailyscripture SET scripture=%s, istletter=%s, verse1=%s, verse2=%s WHERE id=%s",
                       GetSQLValueString($_POST['scripture'], "text"),
					   GetSQLValueString($_POST['istletter'], "text"),
					    GetSQLValueString($_POST['verse1'], "text"),
					   GetSQLValueString($_POST['verse2'], "text"),
                       GetSQLValueString($_POST['id'], "text"));
		
	}else{
	$target = "img/".basename($_FILES['imager']['name']);
	$image = $_FILES['imager']['name'];
	
	if (move_uploaded_file($_FILES['imager']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
		echo"<script>alert('rewer');</script>";
$updateSQL = sprintf("UPDATE dailyscripture SET scripture=%s, istletter=%s, verse1=%s, verse2=%s, image=%s WHERE id=%s",                      GetSQLValueString($_POST['scripture'], "text"),
					   GetSQLValueString($_POST['istletter'], "text"),
					    GetSQLValueString($_POST['verse1'], "text"),
					   GetSQLValueString($_POST['verse2'], "text"),
					    GetSQLValueString($target, "text"),
                       GetSQLValueString($_POST['id'], "text"));
					   	   
	}
		
		
		
  mysqli_select_db($twconn,$database_twconn);
  $Result1 = mysqli_query($twconn, $updateSQL) or die(mysqli_error());

  $updateGoTo = "Contentmanager.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form8")) {
	
	if($_FILES['imager']['name'] == ""){
			$updateSQL = sprintf("UPDATE content SET words=%s, Title=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					   GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($_POST['id'], "text"));
		
	}else{
	$target = "img/".basename($_FILES['imager']['name']);
	$image = $_FILES['imager']['name'];
	
	if (move_uploaded_file($_FILES['imager']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
		echo"<script>alert('rewer');</script>";
		 $updateSQL = sprintf("UPDATE content SET words=%s, Title=%s, images=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					    GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($target, "text"),
                       GetSQLValueString($_POST['id'], "text"));
					   	   
	}
		
		
		
  mysqli_select_db($twconn,$database_twconn);
  $Result1 = mysqli_query($twconn, $updateSQL) or die(mysqli_error());

  $updateGoTo = "Contentmanager.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form9")) {
	
	if($_FILES['imager']['name'] == ""){
			$updateSQL = sprintf("UPDATE content SET words=%s, Title=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					   GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($_POST['id'], "text"));
		
	}else{
	$target = "img/".basename($_FILES['imager']['name']);
	$image = $_FILES['imager']['name'];
	
	if (move_uploaded_file($_FILES['imager']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
		echo"<script>alert('rewer');</script>";
		 $updateSQL = sprintf("UPDATE content SET words=%s, Title=%s, images=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					    GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($target, "text"),
                       GetSQLValueString($_POST['id'], "text"));
					   	   
	}
		
		
		
  mysqli_select_db($twconn,$database_twconn);
  $Result1 = mysqli_query($twconn, $updateSQL) or die(mysqli_error());

  $updateGoTo = "Contentmanager.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form10")) {
	
	if($_FILES['imager']['name'] == ""){
			$updateSQL = sprintf("UPDATE content SET words=%s, Title=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					   GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($_POST['id'], "text"));
		
	}else{
	$target = "img/".basename($_FILES['imager']['name']);
	$image = $_FILES['imager']['name'];
	
	if (move_uploaded_file($_FILES['imager']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
		echo"<script>alert('rewer');</script>";
		 $updateSQL = sprintf("UPDATE content SET words=%s, Title=%s, images=%s WHERE id=%s",
                       GetSQLValueString($_POST['word'], "text"),
					    GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($target, "text"),
                       GetSQLValueString($_POST['id'], "text"));
					   	   
	}
		
		
		
  mysqli_select_db($twconn,$database_twconn);
  $Result1 = mysqli_query($twconn, $updateSQL) or die(mysqli_error());

  $updateGoTo = "Contentmanager.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysqli_select_db($twconn,$database_twconn);
$query_Recordset1 = "SELECT * FROM content WHERE id = 'bday'";
$Recordset1 = mysqli_query($twconn,$query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);

mysqli_select_db($twconn,$database_twconn);
$query_wed = "SELECT * FROM content WHERE id = 'wed'";
$wed = mysqli_query($twconn,$query_wed) or die(mysqli_error());
$row_wed = mysqli_fetch_assoc($wed);
$totalRows_wed = mysqli_num_rows($wed);

mysqli_select_db($twconn,$database_twconn);
$query_extra = "SELECT * FROM content WHERE id = 'extra'";
$extra = mysqli_query($twconn, $query_extra) or die(mysqli_error());
$row_extra = mysqli_fetch_assoc($extra);
$totalRows_extra = mysqli_num_rows($extra);

mysqli_select_db($twconn,$database_twconn);
$query_extra2 = "SELECT * FROM content WHERE id = 'extra2'";
$extra2 = mysqli_query($twconn, $query_extra2) or die(mysqli_error());
$row_extra2 = mysqli_fetch_assoc($extra2);
$totalRows_extra2 = mysqli_num_rows($extra2);

mysqli_select_db($twconn,$database_twconn);
$query_extra3 = "SELECT * FROM content WHERE id = 'extra3'";
$extra3 = mysqli_query($twconn, $query_extra3) or die(mysqli_error());
$row_extra3 = mysqli_fetch_assoc($extra3);
$totalRows_extra3 = mysqli_num_rows($extra3);

mysqli_select_db($twconn,$database_twconn);
$query_dscrip = "SELECT * FROM dailyscripture";
$dscrip = mysqli_query($twconn, $query_dscrip) or die(mysqli_error());
$row_dscrip = mysqli_fetch_assoc($dscrip);
$totalRows_dscrip = mysqli_num_rows($dscrip);



?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Content Manager</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
   

    
    <link href='http://fonts.googleapis.com/css?family=Kreon:300,400,700' rel='stylesheet' type='text/css'>
    
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>


    <link href="css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
    <link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css">
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script><script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    

    <div id="header" style="height: 0px !important; min-height: 0px; max-height: 0px;"  >
        <div class="bg-overlay"></div>
      <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="ion-navicon"></i>
                        </button>
                        <a class="navbar-brand" href="#"><h2>True Worshiper</h2></a>
                    </div><!-- navbar-header -->
                <div id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="index.php">Admin</a></li>
                        <li><a href="monthlyroster.php">Monthly roster</a></li>
                        <li><a href="staffs.php">Staffs</a></li>
                        <li><a href="contentmanager.php">Content Manager</a></li>
                        <li><a href="<?php echo $logoutAction ?>">Logout</a></li>

                    </ul>
                </div><!--/.navbar-collapse -->
              </div><!-- container -->
      </div><!-- menu -->

            <div class="center text-right"></div>
</div>
    <!-- /#header -->



    <div id="monthlyroster" class="cyan-wrapper"></div>
<div  id="staffs">
  <div class="modal fade" id="modaladdnew" tabindex="-1" role="dialog" aria-labelledby="modaladdnewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-sm">
        <form name="form" action="<?php echo $editFormAction; ?>" method="POST">
        </form>
      </div>
    </div>
  </div>
</div>
</div>
        
</div>

<div id="news" class="light-wrapper">
<div class="container inner">
            <div class="title">
              <h2 class="section-title text-center">News &amp; Events</h2>
              <p class="lead main text-center">Birthdays, News and lot more</p>
            </div>

            <div class="row news">
             <table class="table  table-bordered table-hover table-condensed" border="1"> 
             <tr>
               <td class="text-center">
              <div class="col-sm-12 left; ">
                    <div class="news clearfix form-group">
                    
                    <div class="col-sm-4 left" >
                    <img  style="max-height:100%; max-width:100%" src="<?php echo $row_Recordset1['images']; ?>">
                    </div>
                    <div class="col-sm-8">
<form  action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form5">
          <input class="form-control" name="Title" type="text" value="<?php echo $row_Recordset1['Title']; ?>">
<input class="form-control" type="hidden" name="id" value="<?php echo $row_Recordset1['id']; ?>"> 
<textarea class="form-control" name="word" cols="25" rows="5" ><?php echo $row_Recordset1['words']; ?></textarea>
                       <input class="form-control" style="display:inline" name="imager" type="file">
                      <input class="form-control btn-info" name="upload" type="submit" value="Save">
                      <input type="hidden" name="MM_update" value="form5">
                      </div>
                      </form>
                        
                       
                </div>
                   
 
            </div>
            </td>
            <td>
            <div class="col-sm-12 left; ">
                    <div class="news clearfix form-group">
                    
                    <div class="col-sm-4 left" >
                    <img  style="max-height:100%; max-width:100%" src="<?php echo $row_wed['images']; ?>">
                    </div>
                    <div class="col-sm-8">
<form  action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form5">
          <input class="form-control" name="Title" type="text" value="<?php echo $row_wed['Title']; ?>">
<input class="form-control" type="hidden" name="id" value="<?php echo $row_wed['id']; ?>"> 
<textarea class="form-control" name="word" cols="25" rows="5" ><?php echo $row_wed['words']; ?></textarea>
                       <input class="form-control" style="display:inline" name="imager" type="file">
                      <input class="form-control btn-info" name="upload" type="submit" value="Save">
                      <input type="hidden" name="MM_update" value="form5">
                      </div>
                      </form>
                        
              </div>
                   

            </div>
            </td>
            </tr>
            <tr>
            <td>
            <div class="col-sm-12 left; ">
                    <div class="news clearfix form-group">
                    
                    <div class="col-sm-4 left" >
                    <img  style="max-height:100%; max-width:100%" src="<?php echo $row_dscrip['image']; ?>">
                    </div>
                    <div class="col-sm-8">
<form  action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form7">
          <input class="form-control" name="scripture" type="text" value="<?php echo $row_dscrip['scripture']; ?>">
          <input class="form-control" name="istletter" type="text" value="<?php echo $row_dscrip['istletter']; ?>">
<input class="form-control" type="hidden" name="id" value="<?php echo $row_dscrip['id']; ?>"> 
<textarea class="form-control" name="verse1" cols="25" rows="5" ><?php echo $row_dscrip['verse1']; ?></textarea>
 <textarea class="form-control" name="verse2" cols="25" rows="5" ><?php echo $row_dscrip['verse2']; ?></textarea>

                       <input class="form-control" style="display:inline" name="imager" type="file">
                      <input class="form-control btn-info" name="upload" type="submit" value="Save">
                      <input type="hidden" name="MM_update" value="form7">
                      </div>
                      </form>
                        
              </div>
                   

            </div>
            </td>
            <td>
            <div class="col-sm-12 left; ">
                    <div class="news clearfix form-group">
                    
                    <div class="col-sm-4 left" >
                    <img  style="max-height:100%; max-width:100%" src="<?php echo $row_extra['images']; ?>">
                    </div>
                    <div class="col-sm-8">
<form  action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form8">
          <input class="form-control" name="Title" type="text" value="<?php echo $row_extra['Title']; ?>">
<input class="form-control" type="hidden" name="id" value="<?php echo $row_extra['id']; ?>"> 
<textarea class="form-control" name="word" cols="25" rows="5" ><?php echo $row_extra['words']; ?></textarea>
                       <input class="form-control" style="display:inline" name="imager" type="file">
                      <input class="form-control btn-info" name="upload" type="submit" value="Save">
                      <input type="hidden" name="MM_update" value="form8">
                      </div>
                      </form>
                        
              </div>
                   

            </div>
            </td>
            </tr>
             <tr>
            <td>
            <div class="col-sm-12 left; ">
                    <div class="news clearfix form-group">
                    
                    <div class="col-sm-4 left" >
                    <img  style="max-height:100%; max-width:100%" src="<?php echo $row_extra2['images']; ?>">
                    </div>
                    <div class="col-sm-8">
<form  action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form9">
          <input class="form-control" name="Title" type="text" value="<?php echo $row_extra2['Title']; ?>">
<input class="form-control" type="hidden" name="id" value="<?php echo $row_extra2['id']; ?>"> 
<textarea class="form-control" name="word" cols="25" rows="5" ><?php echo $row_extra2['words']; ?></textarea>
                       <input class="form-control" style="display:inline" name="imager" type="file">
                      <input class="form-control btn-info" name="upload" type="submit" value="Save">
                      <input type="hidden" name="MM_update" value="form9">
                      </div>
                      </form>
                        
              </div>
                   

            </div>
            </td>
            <td>
            <div class="col-sm-12 left; ">
                    <div class="news clearfix form-group">
                    
                    <div class="col-sm-4 left" >
                    <img  style="max-height:100%; max-width:100%" src="<?php echo $row_extra3['images']; ?>">
                    </div>
                    <div class="col-sm-8">
<form  action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form10">
          <input class="form-control" name="Title" type="text" value="<?php echo $row_extra3['Title']; ?>">
<input class="form-control" type="hidden" name="id" value="<?php echo $row_extra3['id']; ?>"> 
<textarea class="form-control" name="word" cols="25" rows="5" ><?php echo $row_extra3['words']; ?></textarea>
                       <input class="form-control" style="display:inline" name="imager" type="file">
                      <input class="form-control btn-info" name="upload" type="submit" value="Save">
                      <input type="hidden" name="MM_update" value="form10">
                      </div>
                      </form>
                        
              </div>
                   

            </div>
            </td>
            </tr>
            </table>
            
  </div>
        <!-- /.container -->
    </div><!-- #news -->


    <footer id="footer" class="dark-wrapper">
         <li> &copy; Copyright Access Solution ltd 2017 Privacy Policy, Terms and Conditions apply </li>
        
</footer>


<script src="js/jquery-2.1.3.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

<script src="js/jquery.actual.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"], hint:"Name"});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>
<?php
mysqli_free_result($Recordset1);

mysqli_free_result($wed);

mysqli_free_result($extra);

mysqli_free_result($extra2);

mysqli_free_result($extra3);

mysqli_free_result($dscrip);
?>
