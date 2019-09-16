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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
	 
$month = $_POST['month'];
$day = $_POST['day'];

$DOB = "0000" . "-" . $month . "-" . $day;  
  $insertSQL = sprintf("INSERT INTO tb1 (Name, Department, DOB) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Department'], "text"),
                       GetSQLValueString($DOB, "date"));

  mysqli_select_db($twconn,$database_twconn);
  $Result1 = mysqli_query($twconn, $insertSQL) or die(mysqli_error());

  $insertGoTo = "staffs.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "formedit")) {
	$month = $_POST['month'];
$day = $_POST['day'];

$DOB = "0000" . "-" . $month . "-" . $day; 
  $updateSQL = sprintf("UPDATE tb1 SET Name=%s, Department=%s, DOB=%s, Leaves=%s, Singer=%s, Prayer=%s, Preacher=%s WHERE id=%s",
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Department'], "text"),
                       GetSQLValueString($DOB, "date"),
					   GetSQLValueString($_POST['Leaves'], "text"),
                       GetSQLValueString($_POST['Singer'], "text"),
                       GetSQLValueString($_POST['Prayer'], "text"),
                       GetSQLValueString($_POST['Preacher'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysqli_select_db($twconn,$database_twconn);
  $Result1 = mysqli_query($twconn, $updateSQL) or die(mysqli_error());

  $updateGoTo = "staffs.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_delete"])) && ($_POST["MM_delete"] == "formdelete")) {
  $deleteSQL = sprintf("DELETE FROM tb1 WHERE id=%s",
                       GetSQLValueString($_POST['id'], "int"));

  mysqli_select_db($twconn,$database_twconn);
  $Result1 = mysqli_query($twconn, $deleteSQL) or die(mysqli_error());

  $deleteGoTo = "staffs.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$maxRows_viewstaffs = 17;
$pageNum_viewstaffs = 0;
if (isset($_GET['pageNum_viewstaffs'])) {
  $pageNum_viewstaffs = $_GET['pageNum_viewstaffs'];
}
$startRow_viewstaffs = $pageNum_viewstaffs * $maxRows_viewstaffs;

mysqli_select_db($twconn,$database_twconn);
$query_viewstaffs = "SELECT id, Name, Department, DOB, day(DOB), month(DOB), Password, `Role`, Leaves, Singer, Prayer, Preacher FROM tb1";
$query_limit_viewstaffs = sprintf("%s LIMIT %d, %d", $query_viewstaffs, $startRow_viewstaffs, $maxRows_viewstaffs);
$viewstaffs = mysqli_query($twconn, $query_limit_viewstaffs) or die(mysqli_error());
$row_viewstaffs = mysqli_fetch_assoc($viewstaffs);

if (isset($_GET['totalRows_viewstaffs'])) {
  $totalRows_viewstaffs = $_GET['totalRows_viewstaffs'];
} else {
  $all_viewstaffs = mysqli_query($twconn, $query_viewstaffs);
  $totalRows_viewstaffs = mysqli_num_rows($all_viewstaffs);
}
$totalPages_viewstaffs = ceil($totalRows_viewstaffs/$maxRows_viewstaffs)-1;

$queryString_viewstaffs = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_viewstaffs") == false && 
        stristr($param, "totalRows_viewstaffs") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_viewstaffs = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_viewstaffs = sprintf("&totalRows_viewstaffs=%d%s", $totalRows_viewstaffs, $queryString_viewstaffs);


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
    <title>Staffs</title>
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
    <link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css">
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script><script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
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
      </div><!-- menu --></div>
    <!-- /#header -->



    <div id="monthlyroster" class="cyan-wrapper"></div>
<div  id="staffs"> 
  <div class="col-wrapper row container inner  cyan-wrapper>
<div class="col-md-12">
<button type="button" style="float:left" class="text-info" data-toggle="modal" data-target="#modaladdnew">Add New</button>

					<div class="input-group">
                    <input type="text" style="float:right" class="col-md-2 " placeholder="Search for...">
                    <span class="input-group-btn" >
                      <button class="btn btn-default sty" type="button">Go!</button>
                    </span>
                    </div>
                    
</div>
  <table border="1" >
<table class="table table-striped table-bordered table-hover table-condensed " !important>
         
  <tr class="info">
  			<td>ID</td>
            <td>Name</td>
            <td>Department</td>
            <td>DOB</td>
            <td>Leave</td>
            <td>Singer</td>
            <td>Prayer</td>
            <td>Preacher</td>
            <td colspan="3">Edit</td>
  </tr>
  <?php do { ?>
    
  <tr>
    <td><?php echo $row_viewstaffs['id']; ?></td>
    <td><?php echo $row_viewstaffs['Name']; ?></td>
    <td><?php echo $row_viewstaffs['Department']; ?></td>
    <td><?php echo $row_viewstaffs['DOB']; ?></td>
    <td><?php echo $row_viewstaffs['Leaves']; ?></td>
    <td><?php echo $row_viewstaffs['Singer']; ?></td>
    <td><?php echo $row_viewstaffs['Prayer']; ?></td>
    <td><?php echo $row_viewstaffs['Preacher']; ?></td>
    <td><button type="button" class="text-info" data-toggle="modal" data-target="#modaledit<?php echo $row_viewstaffs['id']; ?>">Edit</button></td>
    <td><button type="button" class="text-danger" data-toggle="modal" data-target="#modaldelete<?php echo $row_viewstaffs['id']; ?>">Delete</button></td>
    <div class="modal fade" id="modaldelete<?php echo $row_viewstaffs['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modaldeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaldeleteLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this staff <?php echo $row_viewstaffs['Name']; ?> ?
      </div>
      <div class="modal-footer">
      <form action="<?php echo $editFormAction; ?>" method="post" name="formdelete">
      <input type="hidden" value="<?php echo $row_viewstaffs['id']; ?>" name="id"  id="id">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
         <input type="hidden" name="MM_delete" value="formdelete">
        </form>
      </div>
    </div>
  </div>
</div>  
  </tr>
  
  
  
  
  
  
  
  
  
  
  
  <div class="modal fade" id="modaledit<?php echo $row_viewstaffs['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
   <form action="<?php echo $editFormAction; ?>" method="POST" name="formedit">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
        <input type="hidden" value="<?php echo $row_viewstaffs['id']; ?>" name="id"  id="id">
          <label for="Name">Name</label>
          <input type="text" name="Name" class="form-control" id="Name" value="<?php echo $row_viewstaffs['Name']; ?>">
          <span class="textfieldRequiredMsg">A value is required.</span>
            </span>
        </div>
        <div class="form-group">
          <label for="Department">Department</label>
                           <select name="Department" class="form-control" id="Department">
<option  value="Account" <?php if( $row_viewstaffs['Department'] =='Account'){ echo 'selected'; }?>>Account</option>
    <option value="UCU" <?php if( $row_viewstaffs['Department'] =='UCU'){ echo 'selected'; }?> >UCU</option>
 <option  value="Business" <?php if( $row_viewstaffs['Department'] =='Business'){ echo 'selected'; }?>>Business</option>
    <option value="Technology" <?php if( $row_viewstaffs['Department'] =='Technology'){ echo 'selected'; }?> >Technology</option>
<option  value="Support" <?php if( $row_viewstaffs['Department'] =='Support'){ echo 'selected'; }?>>Support</option>
 <option value="Admin" <?php if( $row_viewstaffs['Department'] =='Admin'){ echo 'selected'; }?> >Admin</option>
                           </select>
         
        </div>
        
        <div class="form-group">
        <div class="form-group">
                           
						 <label for="month">Date of birth</label>
         <select name="month" class=" form-inline" id="month"  >
         <option  value="01" <?php if($row_viewstaffs['month(DOB)'] =='01'){ echo 'selected'; }?>>January</option>
         <option  value="02" <?php if($row_viewstaffs['month(DOB)'] =='02'){ echo 'selected'; }?>>Febuary</option>
         <option  value="03" <?php if($row_viewstaffs['month(DOB)'] =='03'){ echo 'selected'; }?>>March</option>
         <option  value="04" <?php if($row_viewstaffs['month(DOB)'] =='04'){ echo 'selected'; }?>>April</option>
         <option  value="05" <?php if($row_viewstaffs['month(DOB)'] =='05'){ echo 'selected'; }?>>May</option>
         <option  value="06" <?php if($row_viewstaffs['month(DOB)'] =='06'){ echo 'selected'; }?>>June</option>
         <option  value="07" <?php if($row_viewstaffs['month(DOB)'] =='07'){ echo 'selected'; }?>>July</option>
         <option  value="08" <?php if($row_viewstaffs['month(DOB)'] =='08'){ echo 'selected'; }?>>August</option>
          <option  value="09" <?php if($row_viewstaffs['month(DOB)'] =='09'){ echo 'selected'; }?>>september</option>
         <option  value="10" <?php if($row_viewstaffs['month(DOB)'] =='10'){ echo 'selected'; }?>>October</option>
         <option  value="11" <?php if($row_viewstaffs['month(DOB)'] =='11'){ echo 'selected'; }?>>November</option>
         <option  value="12" <?php if($row_viewstaffs['month(DOB)'] =='12'){ echo 'selected'; }?>>December</option>              
                           
                           </select>
         <select name="day" class=" form-inline" id="day"  >
         
                        <option  value="01" <?php if($row_viewstaffs['day(DOB)'] =='01'){ echo 'selected'; }?>>01</option>
                        <option  value="02" <?php if($row_viewstaffs['day(DOB)'] =='02'){ echo 'selected'; }?>>02</option>
                        <option  value="03" <?php if($row_viewstaffs['day(DOB)'] =='03'){ echo 'selected'; }?>>03</option>
                        <option  value="04" <?php if($row_viewstaffs['day(DOB)'] =='04'){ echo 'selected'; }?>>04</option>
                        <option  value="05" <?php if($row_viewstaffs['day(DOB)'] =='05'){ echo 'selected'; }?>>05</option>
                        <option  value="06" <?php if($row_viewstaffs['day(DOB)'] =='06'){ echo 'selected'; }?>>06</option>
                        <option  value="07" <?php if($row_viewstaffs['day(DOB)'] =='07'){ echo 'selected'; }?>>07</option>
                        <option  value="08" <?php if($row_viewstaffs['day(DOB)'] =='08'){ echo 'selected'; }?>>08</option>
                        <option  value="09" <?php if($row_viewstaffs['day(DOB)'] =='09'){ echo 'selected'; }?>>09</option>
                        <option  value="10" <?php if($row_viewstaffs['day(DOB)'] =='10'){ echo 'selected'; }?>>10</option>
                        <option  value="11" <?php if($row_viewstaffs['day(DOB)'] =='11'){ echo 'selected'; }?>>11</option>
                        <option  value="12" <?php if($row_viewstaffs['day(DOB)'] =='12'){ echo 'selected'; }?>>12</option>
                        <option  value="13" <?php if($row_viewstaffs['day(DOB)'] =='13'){ echo 'selected'; }?>>13</option>
                        <option  value="14" <?php if($row_viewstaffs['day(DOB)'] =='14'){ echo 'selected'; }?>>14</option>
                        <option  value="15" <?php if($row_viewstaffs['day(DOB)'] =='15'){ echo 'selected'; }?>>15</option>
                        <option  value="16" <?php if($row_viewstaffs['day(DOB)'] =='16'){ echo 'selected'; }?>>16</option>
                        <option  value="17" <?php if($row_viewstaffs['day(DOB)'] =='17'){ echo 'selected'; }?>>17</option>
                        <option  value="18" <?php if($row_viewstaffs['day(DOB)'] =='18'){ echo 'selected'; }?>>18</option>
                        <option  value="19" <?php if($row_viewstaffs['day(DOB)'] =='19'){ echo 'selected'; }?>>19</option>
                        <option  value="20" <?php if($row_viewstaffs['day(DOB)'] =='20'){ echo 'selected'; }?>>20</option>
                         <option  value="21" <?php if($row_viewstaffs['day(DOB)'] =='21'){ echo 'selected'; }?>>21</option>
                          <option  value="22" <?php if($row_viewstaffs['day(DOB)'] =='22'){ echo 'selected'; }?>>22</option>
                           <option  value="23" <?php if($row_viewstaffs['day(DOB)'] =='23'){ echo 'selected'; }?>>23</option>
                            <option  value="24" <?php if($row_viewstaffs['day(DOB)'] =='24'){ echo 'selected'; }?>>24</option>
                             <option  value="25" <?php if($row_viewstaffs['day(DOB)'] =='25'){ echo 'selected'; }?>>25</option>
                              <option  value="26" <?php if($row_viewstaffs['day(DOB)'] =='26'){ echo 'selected'; }?>>26</option>
                               <option  value="27" <?php if($row_viewstaffs['day(DOB)'] =='27'){ echo 'selected'; }?>>27</option>
                                <option  value="28" <?php if($row_viewstaffs['day(DOB)'] =='28'){ echo 'selected'; }?>>28</option>
                                 <option  value="29" <?php if($row_viewstaffs['day(DOB)'] =='29'){ echo 'selected'; }?>>29</option>
                        		 <option  value="30" <?php if($row_viewstaffs['day(DOB)'] =='30'){ echo 'selected'; }?>>30</option>
                                 <option  value="31" <?php if($row_viewstaffs['day(DOB)'] =='31'){ echo 'selected'; }?>>31</option>
                          
                           </select>
                           
             			 </div> 
          
        <div class="form-group">
          <label for="Leaves">Leave</label>
                           <select name="Leaves" class="form-control" id="Leaves" >
                             
        <option  value="Yes" <?php if( $row_viewstaffs['Leaves'] =='Yes'){ echo 'selected'; }?>>Yes</option>
    <option value="No" <?php if( $row_viewstaffs['Leaves'] =='No'){ echo 'selected'; }?> >No</option>
                           </select>
         
        </div>
        <div class="form-group">
          <label for="Singer">Singer</label>
                           <select name="Singer" class="form-control" id="Singer" >
                             
        <option  value="Yes" <?php if( $row_viewstaffs['Singer'] =='Yes'){ echo 'selected'; }?>>Yes</option>
    <option value="No" <?php if( $row_viewstaffs['Singer'] =='No'){ echo 'selected'; }?> >No</option>
                           </select>
         
        </div>
        <div class="form-group">
          <label for="Prayer">Prayer</label>
                           <select name="Prayer" class="form-control" id="Prayer" >
                             
        <option  value="Yes" <?php if( $row_viewstaffs['Prayer'] =='Yes'){ echo 'selected'; }?>>Yes</option>
    <option value="No" <?php if( $row_viewstaffs['Prayer'] =='No'){ echo 'selected'; }?> >No</option>
                           </select>
        <div class="form-group">
          <label for="Preacher">Preacher</label>
                           <select name="Preacher" class="form-control" id="Preacher" >
                             
        <option  value="Yes" <?php if( $row_viewstaffs['Preacher'] =='Yes'){ echo 'selected'; }?>>Yes</option>
    <option value="No" <?php if( $row_viewstaffs['Preacher'] =='No'){ echo 'selected'; }?> >No</option>
                           </select>
        </div>
      </div>
      <div class="modal-footer">
      
        <button   type="submit" class="btn btn-primary">Save changes</button>
     <input type="hidden" name="MM_update" value="formedit">
      
    </form>
      </div>
      
    </div>
  
    </div>
  
   
  
  

  
  <?php } while ($row_viewstaffs = mysqli_fetch_assoc($viewstaffs)); ?>
  
</table>
  </table>



  </div>
</div>


<div class="modal fade" id="modaladdnew" tabindex="-1" role="dialog" aria-labelledby="modaladdnewLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-sm">
     <form name="form" action="<?php echo $editFormAction; ?>" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="modaladdnewLabel">Register Staffs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <span id="sprytextfield1">
       						 <div class="form-group">
                          <label for="Name">Name</label>
                          <input type="text" name="Name" class="form-control" id="Name">
                          <span class="textfieldRequiredMsg">A value is required.</span></span>
                           </div>
                            <div class="form-group">
                          <label for="Department">Department</label>
                           <select name="Department" class="form-control" id="Department">
                             <option>Account</option>
                             <option>UCU</option>
                             <option>Technology</option>
                             <option>Admin</option>
                             <option>Business</option>
                           </select>
                           </div>
                           
                           <div class="form-group">
                           
						 <label for="month">Date of birth</label>
         <select name="month" class=" form-inline" id="month"  >
         
                        <option  value="01">January</option>
                        <option  value="02">Febuary</option>
                        <option  value="03">March</option>
                           <option  value="04">April</option>
                           <option  value="05">May</option>
                           <option  value="06">June</option>
                           <option  value="07">July</option>
                           <option  value="08">August</option>
                           <option  value="09">september</option>
                           <option  value="10">October</option>
                           <option  value="11">November</option>
                           <option  value="12">December</option>
                           </select>
         <select name="day" class=" form-inline" id="day"  >
         
                        <option  value="01">01</option>
                        <option  value="02">02</option>
                        <option  value="03">03</option>
                           <option  value="04">04</option>
                           <option  value="05">05</option>
                           <option  value="06">06</option>
                           <option  value="07">07</option>
                           <option  value="08">08</option>
                           <option  value="09">09</option>
                           <option  value="10">10</option>
                           <option  value="11">11</option>
                           <option  value="12">12</option>
                           <option  value="13">13</option>
                           <option  value="14">14</option>
                           <option  value="15">15</option>
                           <option  value="16">16</option>
                           <option  value="17">17</option>
                           <option  value="18">18</option>
                           <option  value="19">19</option>
                           <option  value="20">20</option>
                           <option  value="21">21</option>
                           <option  value="22">22</option>
                           <option  value="23">23</option>
                           <option  value="24">24</option>
                           <option  value="25">25</option>
                           <option  value="26">26</option>
                           <option  value="27">27</option>
                           <option  value="28">28</option>
                           <option  value="29">29</option>
                           <option  value="30">30</option>
                           <option  value="31">31</option>
                           
                           </select>
                           
             			 </div> 
                         
                        
              			          
		  <?php /*?> <!-- <span id="sprycheckbox1">
                           <div class="checkbox">
                          <label>Singing
                            <input name="Singer" type="checkbox" id="Singer" value="yes" checked>
                          </label>
                           </div>
                          <div class="checkbox">
                          <label>praying
                            <input name="praying" type="checkbox" id="praying" value="yes" checked>
                          </label>
            </div>
                          <div class="checkbox">
                          <label>preaching
                            <input name="preaching" type="checkbox" id="preaching" value="yes" checked>
                          </label>
            </div>
                          <span class="checkboxMinSelectionsMsg">you must select atleast two</span>
		    </span>--><?php */?>
                               
						  
      </div>
      <div class="modal-footer">
        <input name="submit" type="submit">
	    <input type="hidden" name="MM_insert" value="form">
        
      </div>
      </form>
    </div>
  </div>
</div>

 <p class="alert-dismissable">Total Staffs 
  <?php echo $totalRows_viewstaffs ?> </p>
 <div style="text-align:right">
<?php if ($pageNum_viewstaffs > 0) { // Show if not first page ?>
  <a href="<?php printf("%s?pageNum_viewstaffs=%d%s", $currentPage, max(0, $pageNum_viewstaffs - 1), $queryString_viewstaffs); ?>">Previous</a>
  <?php } // Show if not first page ?> 
 
<?php if ($pageNum_viewstaffs < $totalPages_viewstaffs) { // Show if not last page ?>
  <a href="<?php printf("%s?pageNum_viewstaffs=%d%s", $currentPage, min($totalPages_viewstaffs, $pageNum_viewstaffs + 1), $queryString_viewstaffs); ?>">Next</a>
  <?php } // Show if not last page ?> 
</div>



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
<!--var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1", {isRequired:false, minSelections:2});
-->
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>
<?php
mysqli_free_result($viewstaffs);
?>
