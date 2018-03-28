<?php require_once('../Connections/twconn.php'); ?>

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

mysql_select_db($database_twconn, $twconn);
$query_staffs = "SELECT * FROM tb1";
$staffs = mysql_query($query_staffs, $twconn) or die(mysql_error());
$row_staffs = mysql_fetch_assoc($staffs);
$totalRows_staffs = mysql_num_rows($staffs);

mysql_select_db($database_twconn, $twconn);
$query_bday = "SELECT Name, DOB FROM tb1 WHERE month(DOB)=month(curdate())";
$bday = mysql_query($query_bday, $twconn) or die(mysql_error());
$row_bday = mysql_fetch_assoc($bday);
$totalRows_bday = mysql_num_rows($bday);

mysql_select_db($database_twconn, $twconn);
$query_leaves = "SELECT id, Name, Department FROM tb1 WHERE Leaves = 'Yes'";
$leaves = mysql_query($query_leaves, $twconn) or die(mysql_error());
$row_leaves = mysql_fetch_assoc($leaves);
$totalRows_leaves = mysql_num_rows($leaves);

mysql_select_db($database_twconn, $twconn);
$query_data = "SELECT SUM(Singer = 'Yes'), SUM(Prayer= 'Yes'), SUM(Preacher= 'Yes') FROM tb1";
$data = mysql_query($query_data, $twconn) or die(mysql_error());
$row_data = mysql_fetch_assoc($data);
$totalRows_data = mysql_num_rows($data);

mysql_select_db($database_twconn, $twconn);
$query_pray = "SELECT SUM(Prayer= 'Yes')  FROM tb1;";
$pray = mysql_query($query_pray, $twconn) or die(mysql_error());
$row_pray = mysql_fetch_assoc($pray);
$totalRows_pray = mysql_num_rows($pray);

mysql_select_db($database_twconn, $twconn);
$query_preach = "SELECT SUM(Preacher= 'Yes')  FROM tb1;";
$preach = mysql_query($query_preach, $twconn) or die(mysql_error());
$row_preach = mysql_fetch_assoc($preach);
$totalRows_preach = mysql_num_rows($preach);
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Admin dashboard</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<!-- Bootstrap core CSS     -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
<!--  Material Dashboard CSS    -->
<link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="../assets/css/demo.css" rel="stylesheet" />
<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
<style type="text/css">
    .wrapper .sidebar .logo {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
    </style>
<script type="text/javascript" src="../includes/FusionCharts/dynamic/js/FusionCharts.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div style="background-color:#563622 ; color:#FFF" class="logo">
                <a style="color:#FFF" href="admin1.php" >
                    True Worshiper
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="admin1.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="monthlyroster.php">
                            <i class="material-icons">perm_contact_calender</i>
                            <p>Monthly Roaster</p>
                        </a>
                    </li>
                    <li>
                        <a href="staffs.php">
                            <i class="material-icons">supervisor_account</i>
                            <p>Staffs</p>
                        </a>
                    </li>
                    <li>
                        <a href="contentmanager.php">
                            <i class="material-icons">library_books</i>
                            <p>Content manager</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $logoutAction ?>" >

                            <i class="material-icons">bubble_chart</i>
                            <p>Logout</p>
                        </a>
                    </li>
                   
              </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav style="background-color:#563622" class="navbar navbar-inverse  navbar-absolute ">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Admin Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                           
                            
                                
                            </li>
                            <li>
                                <a href="<?php echo $logoutAction ?>">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Logout</p>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="staffs.php">
                            <div class="card card-stats">                                
                            <div class="card-header" data-background-color="orange">                                    
                            <i class="material-icons">supervisor_account</i>                               
                             </div>                               
                              <div class="card-content">                                    
                            <p class="category">Total Staffs</p>                                    
                            <h3 class="title"><?php echo $totalRows_staffs ?> </h3>                                
                            </div>                               
                             <div class="card-footer">                                   
                              <div class="stats"></div>                               
                               </div>                           
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">cake</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Birthdays</p>
                                    <h3 class="title"><?php echo $totalRows_bday ?> </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Total Staffs Birthdays for the month
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">message</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Messages</p>
                                    <h3 class="title">15</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">message</i> Total Messages
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="row">
                        
                        <div class="col-md-6">
                             <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Employees Stats</h4>
                                    <p class="category">Employees on Leave</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <td>id</td>
                                            <td>Name</td>
                                            <td>Department</td>
                                        </thead>
                                        <tbody>
                                            <?php do { ?>
                                        <tr>
                                          <td><?php echo $row_leaves['id']; ?></td>
                                          <td><?php echo $row_leaves['Name']; ?></td>
                                          <td><?php echo $row_leaves['Department']; ?></td>
                                        </tr>
                                        <?php } while ($row_leaves = mysql_fetch_assoc($leaves)); ?>
                                        </tbody>
                                    </table>
                                    
                                    
                                </div>
                                
                                
                            
                    </div>
                </div>
                        
                       <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="orange" ><h4 class="title">Welcome</h4>
                                    <p class="category">Admin</p> </div>
<div class="card-content">
                                    
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> This is your Dash Board
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        
                            <div class="card card-nav-tabs">
                                
                                <div class="card-content">
                                    <div class="tab-content">
                                        
                       
                                
                                
                            
                    </div>
                </div>
            </div>
            </div>
                                    
<footer class="footer">
                <div class="container-fluid">
                    
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.accessng.com">Access Solution Ltd</a>, Moving Forward Thinking Upward
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>
<?php
mysql_free_result($staffs);

mysql_free_result($bday);

mysql_free_result($leaves);

mysql_free_result($data);

mysql_free_result($pray);

mysql_free_result($preach);
?>
