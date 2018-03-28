<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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
?>
<?php require_once('Connections/twconn.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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
  $insertSQL = sprintf("INSERT INTO tb1 (Name, DOB, Singer, Prayer, Preacher) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['DOB'], "date"),
                       GetSQLValueString(isset($_POST['Singer']) ? "true" : "", "defined","'Yes'","'no'"),
                       GetSQLValueString(isset($_POST['praying']) ? "true" : "", "defined","'Yes'","'no'"),
                       GetSQLValueString(isset($_POST['preaching']) ? "true" : "", "defined","'Yes'","'no'"));

  mysql_select_db($database_twconn, $twconn);
  $Result1 = mysql_query($insertSQL, $twconn) or die(mysql_error());

  $insertGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "former")) {
  $updateSQL = sprintf("UPDATE tb1 SET DOB=%s, Singer=%s, Prayer=%s, Preacher=%s WHERE Name=%s",
                       GetSQLValueString($_POST['DOB'], "date"),
                       GetSQLValueString($_POST['singer'], "text"),
                       GetSQLValueString($_POST['prayer'], "text"),
                       GetSQLValueString($_POST['preacher'], "text"),
                       GetSQLValueString($_POST['Name'], "text"));

  mysql_select_db($database_twconn, $twconn);
  $Result1 = mysql_query($updateSQL, $twconn) or die(mysql_error());

  $updateGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "former")) {
  $updateSQL = sprintf("UPDATE tb1 SET DOB=%s, Singer=%s, Prayer=%s, Preacher=%s WHERE Name=%s",
                       GetSQLValueString($_POST['DOB'], "date"),
                       GetSQLValueString($_POST['singer'], "text"),
                       GetSQLValueString($_POST['prayer'], "text"),
                       GetSQLValueString($_POST['preacher'], "text"),
                       GetSQLValueString($_POST['Name'], "text"));

  mysql_select_db($database_twconn, $twconn);
  $Result1 = mysql_query($updateSQL, $twconn) or die(mysql_error());

  $updateGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
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
		
		
		
  mysql_select_db($database_twconn, $twconn);
  $Result1 = mysql_query($updateSQL, $twconn) or die(mysql_error());

  $updateGoTo = "admin.php";
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
		
		
		
  mysql_select_db($database_twconn, $twconn);
  $Result1 = mysql_query($updateSQL, $twconn) or die(mysql_error());

  $updateGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form7")) {
	
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
		
		
		
  mysql_select_db($database_twconn, $twconn);
  $Result1 = mysql_query($updateSQL, $twconn) or die(mysql_error());

  $updateGoTo = "admin.php";
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
		
		
		
  mysql_select_db($database_twconn, $twconn);
  $Result1 = mysql_query($updateSQL, $twconn) or die(mysql_error());

  $updateGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}





mysql_select_db($database_twconn, $twconn);
$query_birthday = "SELECT Name, DOB FROM tb1 WHERE month(DOB)=month(curdate()) and day(DOB)=day(curdate())";
$birthday = mysql_query($query_birthday, $twconn) or die(mysql_error());
$row_birthday = mysql_fetch_assoc($birthday);
$totalRows_birthday = mysql_num_rows($birthday);

$maxRows_viewstaffs = 15;
$pageNum_viewstaffs = 0;
if (isset($_GET['pageNum_viewstaffs'])) {
  $pageNum_viewstaffs = $_GET['pageNum_viewstaffs'];
}
$startRow_viewstaffs = $pageNum_viewstaffs * $maxRows_viewstaffs;

mysql_select_db($database_twconn, $twconn);
$query_viewstaffs = "SELECT id, Name, DOB, Singer, Prayer, Preacher FROM tb1";
$query_limit_viewstaffs = sprintf("%s LIMIT %d, %d", $query_viewstaffs, $startRow_viewstaffs, $maxRows_viewstaffs);
$viewstaffs = mysql_query($query_limit_viewstaffs, $twconn) or die(mysql_error());
$row_viewstaffs = mysql_fetch_assoc($viewstaffs);

if (isset($_GET['totalRows_viewstaffs'])) {
  $totalRows_viewstaffs = $_GET['totalRows_viewstaffs'];
} else {
  $all_viewstaffs = mysql_query($query_viewstaffs);
  $totalRows_viewstaffs = mysql_num_rows($all_viewstaffs);
}
$totalPages_viewstaffs = ceil($totalRows_viewstaffs/$maxRows_viewstaffs)-1;

mysql_select_db($database_twconn, $twconn);
$query_dissinger = "SELECT Name FROM tb1 WHERE Singer = 'yes' ORDER BY rand() limit 5";
$dissinger = mysql_query($query_dissinger, $twconn) or die(mysql_error());
$row_dissinger = mysql_fetch_assoc($dissinger);
$totalRows_dissinger = mysql_num_rows($dissinger);

mysql_select_db($database_twconn, $twconn);
$query_pray1 = "SELECT Name FROM tb1 WHERE Prayer = 'yes' ORDER BY rand() limit 5";
$pray1 = mysql_query($query_pray1, $twconn) or die(mysql_error());
$row_pray1 = mysql_fetch_assoc($pray1);
$totalRows_pray1 = mysql_num_rows($pray1);

mysql_select_db($database_twconn, $twconn);
$query_pray2 = "SELECT Name FROM tb1 WHERE Prayer = 'yes' ORDER BY rand() limit 5";
$pray2 = mysql_query($query_pray2, $twconn) or die(mysql_error());
$row_pray2 = mysql_fetch_assoc($pray2);
$totalRows_pray2 = mysql_num_rows($pray2);

mysql_select_db($database_twconn, $twconn);
$query_pray3 = "SELECT Name FROM tb1 WHERE Prayer = 'yes' ORDER BY rand() limit 5";
$pray3 = mysql_query($query_pray3, $twconn) or die(mysql_error());
$row_pray3 = mysql_fetch_assoc($pray3);
$totalRows_pray3 = mysql_num_rows($pray3);

mysql_select_db($database_twconn, $twconn);
$query_pray4 = "SELECT Name FROM tb1 WHERE Prayer = 'yes' ORDER BY rand() limit 5";
$pray4 = mysql_query($query_pray4, $twconn) or die(mysql_error());
$row_pray4 = mysql_fetch_assoc($pray4);
$totalRows_pray4 = mysql_num_rows($pray4);

mysql_select_db($database_twconn, $twconn);
$query_preacher = "SELECT Name FROM tb1 WHERE Preacher = 'yes' ORDER BY rand() limit 5";
$preacher = mysql_query($query_preacher, $twconn) or die(mysql_error());
$row_preacher = mysql_fetch_assoc($preacher);
$totalRows_preacher = mysql_num_rows($preacher);

mysql_select_db($database_twconn, $twconn);
$query_Recordset1 = "SELECT * FROM content WHERE id = 'bday'";
$Recordset1 = mysql_query($query_Recordset1, $twconn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_twconn, $twconn);
$query_wed = "SELECT * FROM content WHERE id = 'wed'";
$wed = mysql_query($query_wed, $twconn) or die(mysql_error());
$row_wed = mysql_fetch_assoc($wed);
$totalRows_wed = mysql_num_rows($wed);

mysql_select_db($database_twconn, $twconn);
$query_extra = "SELECT * FROM content WHERE id = 'extra'";
$extra = mysql_query($query_extra, $twconn) or die(mysql_error());
$row_extra = mysql_fetch_assoc($extra);
$totalRows_extra = mysql_num_rows($extra);

mysql_select_db($database_twconn, $twconn);
$query_extra2 = "SELECT * FROM content WHERE id = 'extra2'";
$extra2 = mysql_query($query_extra2, $twconn) or die(mysql_error());
$row_extra2 = mysql_fetch_assoc($extra2);
$totalRows_extra2 = mysql_num_rows($extra2);

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
    <title>True Worshiper Admin</title>
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

    

    <div id="header">
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
                      <li><a href="#header">Admin</a></li>
                        <li><a href="#monthlyroster">Monthly roster</a></li>
                        <li><a href="#staffs">Staffs</a></li>
                        <li><a href="#news">Content Manager</a></li>
                        <li><a href="<?php echo $logoutAction ?>">Logout</a></li>

                    </ul>
                </div><!--/.navbar-collapse -->
              </div><!-- container -->
      </div><!-- menu -->

            <div class="center text-right">
                <div class="container">
                  <div class="banner white-text-with-blue-shadow" >
                        <h1 class="condensed">True</h1>
                        <h1 class="condensed">Worshiper</h1>
                  </div>
                    <div class="subtitle"><h4>Its a new day.</h4></div>
                </div>
            </div>
        <div class="bottom">
            <div class="text-right container hidden-xs"><a id="scrollDownArrow" href="#"><i class="ion-ios7-arrow-thin-down"></i></a></div>
            
            <div class="signupForm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                           
                        </div>
                        
                    </div>
                </div><!-- container -->
            </div><!--/signupForm-->
        </div>
    </div>
    <!-- /#header -->



    <div id="monthlyroster" class="cyan-wrapper">
      <div class="container inner">
            <div class="row">
              <div class="col-sm-12">
                <div class="col-wrapper">
                  <h1 class="giant-heading text-center"><span class="btn-group-sm"><span class="btn"><span class="h1">Monthly Prayer Roster <br/>
                  </span></h1>

  <p class="text-right ">This is a list of staffs on duty for the Month.</p>
  
  <button type="button" class="text-danger" data-toggle="modal" data-target="#modallist">Generate Random list</button>
  
                </div>
              </div>
              
     
              <table border="1">
               <table class="table table-striped table-bordered table-hover table-condensed">
              
              
              
              </table>
              </table>
               
</div>
</div>
</div>
                
       <div class="bottom">
         
<div class="signupForm">
    <div class="container">
        <div class="row">
           <div class="col-md-6">
                           
          </div> 
                        
        </div>
    </div><!-- container -->
    </div><!--/signupForm-->
</div>
   
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
            <td>DOB</td>
            <td>Singer</td>
            <td>Prayer</td>
            <td>Preacher</td>
            <td colspan="3">Edit</td>
  </tr>
  <?php do { ?>
    
  <tr>
    <td><?php echo $row_viewstaffs['id']; ?></td>
    <td><?php echo $row_viewstaffs['Name']; ?></td>
    <td><?php echo $row_viewstaffs['DOB']; ?></td>
    <td><?php echo $row_viewstaffs['Singer']; ?></td>
    <td><?php echo $row_viewstaffs['Prayer']; ?></td>
    <td><?php echo $row_viewstaffs['Preacher']; ?></td>
    <td><button type="button" class="text-info" data-toggle="modal" data-target="#modaledit<?php echo $row_viewstaffs['id']; ?>">Edit</button></td>
    <td><button type="button" class="text-danger" data-toggle="modal" data-target="#modaldelete<?php echo $row_viewstaffs['id']; ?>"">Delete</button></td>
      
  </tr>
  
  <div class="modal fade" id="modaledit<?php echo $row_viewstaffs['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
   <form action="<?php echo $editFormAction; ?>" method="POST" name="former">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="Name"></label>
          <input type="text" name="Name" class="form-control" id="Name" value="<?php echo $row_viewstaffs['Name']; ?>">
          <span class="textfieldRequiredMsg">A value is required.</span>
            </span>
        </div>
        <div class="form-group">
          <label for="DOB"></label>
     <input type="date" name="DOB" class="form-control" id="DOB" value="<?php echo $row_viewstaffs['DOB']; ?>">
        </div>
        <div class="form-group">
          <label for="singer"></label>
          <input type="text" name="singer" class="form-control" id="singer" value="<?php echo $row_viewstaffs['Singer']; ?>">
          <span class="textfieldRequiredMsg">A value is required.</span>
            </span>
        </div>
        <div class="form-group">
          <label for="prayer"></label>
          <input type="text" name="prayer" class="form-control" id="prayer" value="<?php echo $row_viewstaffs['Prayer']; ?>">
          <span class="textfieldRequiredMsg">A value is required.</span>
            </span>
        </div>
        <div class="form-group">
          <label for="preacher"></label>
          <input type="text" name="preacher" class="form-control" id="preacher" value="<?php echo $row_viewstaffs['Preacher']; ?>">
          <span class="textfieldRequiredMsg">A value is required.</span>
            </span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      <input type="hidden" name="MM_update" value="former">
    </form>
    </div>
  
    </div>
  
    </div>
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
        Are you sure you want to delete this staff?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>
  
  <?php } while ($row_viewstaffs = mysql_fetch_assoc($viewstaffs)); ?>
  
</table>
  </table>


<!--modal-->

<div class="modal fade" id="modallist" tabindex="-1" role="dialog" aria-labelledby="modaladdnewLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-md">
     <form name="form" action="" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="modaladdnewLabel">Random list</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">              
		<table border="1" >
<table class="table table-striped table-bordered table-hover table-condensed " !important>

        <td>
           <tr class="info">
            <td>Date</td>
             <td>Singer</td>
             <td>Prayer1</td>
              <td>Prayer2</td>
             <td>Prayer3</td>
              <td>Prayer4</td>
             <td>Preacher</td>
           </tr>
           <?php do { ?>
             <tr>
               <td>Mon</td>
               <td><?php echo $row_dissinger['Name']; ?></td>
                <td><?php echo $row_pray1['Name']; ?></td>
                <td><?php echo $row_pray2['Name']; ?></td>
                <td><?php echo $row_pray3['Name']; ?></td>
                <td><?php echo $row_pray4['Name']; ?></td>
       		    <td><?php echo $row_preacher['Name']; ?></td>
                
           <?php    ($row_pray1 = mysql_fetch_assoc($pray1))  ?>
           <?php      ($row_pray2 = mysql_fetch_assoc($pray2))  ?>
           <?php      ($row_pray3 = mysql_fetch_assoc($pray3))  ?>
           <?php      ($row_pray4 = mysql_fetch_assoc($pray4))  ?>
             <?php      ($row_preacher = mysql_fetch_assoc($preacher))  ?>
             </tr>
  <?php } while ($row_dissinger = mysql_fetch_assoc($dissinger))  ?>
             
             </td>
             
			
 		  </table>
         </table>
      </div>
      <div class="modal-footer">
        <input name="submit" type="submit">
	   
      </div>
      </form>
    </div>
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
                          <label for="Name"></label>
                          <input type="text" name="Name" class="form-control" id="Name">
                          <span class="textfieldRequiredMsg">A value is required.</span></span>
                           </div>
                           <div class="form-group">
						 <label for="DOB"></label>
                         <input type="date" name="DOB" class="form-control" id="DOB">
             			 </div>           
		    <span id="sprycheckbox1">
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
		    </span>
                               
						  
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
 

<table class="btn btn default" border="1" align="right" cellpadding="3" cellspacing="3" >
<tr>
<td>
<?php if ($pageNum_viewstaffs > 0) { // Show if not first page ?>
  <a href="<?php printf("%s?pageNum_viewstaffs=%d%s", $currentPage, max(0, $pageNum_viewstaffs - 1), $queryString_viewstaffs); ?>">Previous</a>
  <?php } // Show if not first page ?> </td>
  <td>
<?php if ($pageNum_viewstaffs < $totalPages_viewstaffs) { // Show if not last page ?>
  <a href="<?php printf("%s?pageNum_viewstaffs=%d%s", $currentPage, min($totalPages_viewstaffs, $pageNum_viewstaffs + 1), $queryString_viewstaffs); ?>">Next</a>
  <?php } // Show if not last page ?> </td>
  <tr>
</table>
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
                    <img  style="max-height:100%; max-width:100%" src="<?php echo $row_extra['images']; ?>">
                    </div>
                    <div class="col-sm-8">
<form  action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form7">
          <input class="form-control" name="Title" type="text" value="<?php echo $row_extra['Title']; ?>">
<input class="form-control" type="hidden" name="id" value="<?php echo $row_extra['id']; ?>"> 
<textarea class="form-control" name="word" cols="25" rows="5" ><?php echo $row_extra['words']; ?></textarea>
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
                    <img  style="max-height:100%; max-width:100%" src="<?php echo $row_extra2['images']; ?>">
                    </div>
                    <div class="col-sm-8">
<form  action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form8">
          <input class="form-control" name="Title" type="text" value="<?php echo $row_extra2['Title']; ?>">
<input class="form-control" type="hidden" name="id" value="<?php echo $row_extra2['id']; ?>"> 
<textarea class="form-control" name="word" cols="25" rows="5" ><?php echo $row_extra2['words']; ?></textarea>
                       <input class="form-control" style="display:inline" name="imager" type="file">
                      <input class="form-control btn-info" name="upload" type="submit" value="Save">
                      <input type="hidden" name="MM_update" value="form8">
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
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1", {isRequired:false, minSelections:2});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>
<?php
mysql_free_result($birthday);

mysql_free_result($viewstaffs);

mysql_free_result($dissinger);

mysql_free_result($pray1);

mysql_free_result($pray2);

mysql_free_result($pray3);

mysql_free_result($pray4);

mysql_free_result($preacher);

mysql_free_result($Recordset1);

mysql_free_result($wed);

mysql_free_result($extra);

mysql_free_result($extra2);
?>
