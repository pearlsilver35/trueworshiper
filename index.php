<?php require_once('Connections/twconn.php'); ?>
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

$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysqli_select_db($twconn , $database_twconn);
$query_Recordset1 = "SELECT * FROM test ORDER BY id DESC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysqli_query($twconn, $query_limit_Recordset1) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysqli_query($twconn , $query_Recordset1);
  $totalRows_Recordset1 = mysqli_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

mysqli_select_db($twconn , $database_twconn);
$query_Recordset2 = "SELECT Name, day(DOB) FROM tb1 WHERE month(DOB)=month(curdate()) ORDER BY DOB ASC";
$Recordset2 = mysqli_query($twconn, $query_Recordset2) or die(mysql_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);

mysqli_select_db($twconn , $database_twconn);
$query_bday = "SELECT * FROM content WHERE id = 'bday'";
$bday = mysqli_query($twconn, $query_bday) or die(mysql_error());
$row_bday = mysqli_fetch_assoc($bday);
$totalRows_bday = mysqli_num_rows($bday);

mysqli_select_db($twconn , $database_twconn);
$query_wed = "SELECT * FROM content WHERE id = 'wed'";
$wed = mysqli_query($twconn, $query_wed) or die(mysql_error());
$row_wed = mysqli_fetch_assoc($wed);
$totalRows_wed = mysqli_num_rows($wed);

mysqli_select_db($twconn , $database_twconn);
$query_extra = "SELECT * FROM content WHERE id = 'extra'";
$extra = mysqli_query($twconn, $query_extra) or die(mysql_error());
$row_extra = mysqli_fetch_assoc($extra);
$totalRows_extra = mysqli_num_rows($extra);

mysqli_select_db($twconn , $database_twconn);
$query_extra2 = "SELECT * FROM content WHERE id = 'extra2'";
$extra2 = mysqli_query($twconn, $query_extra2) or die(mysql_error());
$row_extra2 = mysqli_fetch_assoc($extra2);
$totalRows_extra2 = mysqli_num_rows($extra2);

mysqli_select_db($twconn , $database_twconn);
$query_extra3 = "SELECT * FROM content WHERE id = 'extra3'";
$extra3 = mysqli_query($twconn, $query_extra3) or die(mysql_error());
$row_extra3 = mysqli_fetch_assoc($extra3);
$totalRows_extra3 = mysqli_num_rows($extra3);

mysqli_select_db($twconn , $database_twconn);
$query_dscrip = "SELECT * FROM dailyscripture";
$dscrip = mysqli_query($twconn, $query_dscrip) or die(mysql_error());
$row_dscrip = mysqli_fetch_assoc($dscrip);
$totalRows_dscrip = mysqli_num_rows($dscrip);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['name'])) {
  $loginUsername=$_POST['name'];
  $password=$_POST['pwd'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "admin.php";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysqli_select_db($twconn,$database_twconn, $twconn);
  
  $LoginRS__query=sprintf("SELECT Name, Password FROM tb1 WHERE Name=%s AND Password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $twconn) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>True Worshiper</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
   

    
    <link href='http://fonts.googleapis.com/css?family=Kreon:300,400,700' rel='stylesheet' type='text/css'>
    
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>


    <link href="css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
    <link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script></head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    

    <div id="header">
        <div class="bg-overlay"></div>
            <div id="menu" class="navbar navbar-inverse navbar-fixed-top shadowb" role="navigation">
              <div class="container">
                    <div class="navbar-header ">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="ion-navicon"></i>
                        </button>
                       
                      <a class="navbar-brand " href="#"><h2>True Worshiper</h2></a>
                    </div><!-- navbar-header -->
                <div id="navbar" class="navbar-collapse collapse">

                  <ul class="nav navbar-nav navbar-right">
                   
                        <li><a href="#header">Home</a></li>
                        <li><a href="#monthlyroster">monthly roster</a></li>
                        <li><a href="#story">Daily scriptures</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="login/index.php">Login</a></li>
                      
                       

                  </ul>
                  <!--<div class="nav navbar-form navbar-right " >
                <form action="<?php echo $loginFormAction; ?>" method="POST" name="form1" onSubmit="MM_validateForm('name','','R','pwd','','R');return document.MM_returnValue">
                 
                  <span id="textfield1">
                          <label for="name"></label>
                          <input type="text" name="name" id="name" style="background-color:transparent">
                          <span class="textfieldRequiredMsg">input your name.</span></span>
                         
                          
                          <span id="password1">
                          <label for="pwd"></label>
                          <input type="password" name="pwd" id="pwd" style="background-color:transparent">
                          <span class="passwordRequiredMsg">input your password.</span></span>
                         
                          <input type="submit" name="submit" id="submit" value="Login" style="background-color:transparent">
                  </form>
                  </div>-->
                </div><!--/.navbar-collapse -->
                
                </div><!-- container -->
            </div><!-- menu -->

            <!--<div class="center text-right">
                <div class="container">
                    <div class="banner">
                        <h1 class="condensed">True</h1>
                        <h1 class="condensed">Worshiper</h1>
                    </div>
                    <div class="subtitle"><h4>Its a new day.</h4></div>
                </div>
            </div>-->
        <div class="bottom">
            <div class="text-right container hidden-xs"><a id="scrollDownArrow" href="#"><i class="ion-ios7-arrow-thin-down"></i></a></div>
            
            <div class="signupForm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                           
                        </div>
                      
                        <div class="col-md-6 text-right">
                        
                        

                            <!-- SUCCESS OR ERROR MESSAGES -->
                          <div id="subscription-response"></div>
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
                  
				 
                 
                </div>
              </div>
              
     
             <table border="1" >
<table class="table table-striped table-bordered table-hover table-condensed " !important>

           <tr class="danger">
            <td>Date & Time</td>
            <td>Opening Prayers(8:15-8:20)</td>
             <td>Moment of Praise & Worship(8:20-8:35)</td>
             <td>Prayers for Kingdom Advancement (8:20-8:35)</td>
              <td>Let’s Lift Up Nigeria (8:35-8:40)</td>
             <td>We Present this Company(8:40-8:45)</td>
              <td>Pouring Our Hearts(8:45-8:50)</td>
             <td>Admonition and Charge(8:50-8:57)</td>
             <td>Benediction(8:57-9:00)</td>

             </tr>
           <!-- This is where all the data from the db is outputedededed -->
           <?php echo $row_Recordset1['data']; ?>
 
          
 		  </table>
               
<div class="col-sm-6">
                    <div class="col-wrapper">
                   
        <div class=""></div></div></div></div>
            <!-- /.services --> 
      </div>
        <!-- /.container -->
</div><!-- #video -->




    <div id="story" class="light-wrapper">
        <div class="container inner">
            <div class="row story">
                <div class="col-sm-6">
                    <div class="col-wrapper">
                        <img class="bottom-marged" src="<?php echo $row_dscrip['image']; ?>">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="col-wrapper">
                        <p><span class="up-caps"><?php echo $row_dscrip['istletter']; ?></span><?php echo $row_dscrip['verse1']; ?> </p>
                        <p><?php echo $row_dscrip['verse2']; ?> </p>
 						<p class="text-right "><?php echo $row_dscrip['scripture']; ?></p>
                    </div>
                </div>
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
    </div><!-- #story -->


    <!-- #gallery -->


    <div id="news" class="light-wrapper">
<div class="container inner">
            <div class="title">
                <h2 class="section-title text-center">News &amp; Events</h2>
                <p class="lead main text-center">Birthdays, News and lot more</p>
            </div>

            <div class="row news">
              <?php if ($totalRows_Recordset2 > 0) { // Show if recordset not empty ?>
  <div class="col-sm-6 left">
    <div class="news clearfix">
    <div class="col-sm-6 left">   <img src="<?php echo $row_bday['images']; ?>" alt="">
     </div>
     <br>
     
         <div class="col-md-6 right">
      <table class="table-fill table-hover"   border="1">
        <tr bgcolor="#666666">
          <td>Birthday</td>
          <td>Staff</td>
        </tr>
        <?php do { ?>
          <tr class="table-hover">
          <td><?php echo $row_Recordset2['day(DOB)']; ?></td>
            <td><?php echo $row_Recordset2['Name']; ?></td>
            
          </tr>
          <?php } while ($row_Recordset2 = mysqli_fetch_assoc($Recordset2)); ?>
      </table>
</div>
<div class="col-sm-10 left">
      <h3><?php echo $row_bday['Title']; ?></h3>
      <p><?php echo $row_bday['words']; ?>
      
													   <?php /*?> <?php 
                                                                      $bdaypersoname="";
                                                                      do {
                                                                         $bdaypersoname .= $row_Recordset2['Name']." , ";
                                                                           
                                                                          } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); 
                                                                          $bdaypersoname= rtrim($bdaypersoname, " , ");
                                                                          echo $bdaypersoname;
                                                                          
                                                                          
                                                                        ?><?php */?>
        </p> 
        </div>
    </div>
    
    
  </div>
  <?php } // Show if recordset not empty ?>
<div class="col-sm-6 right">
                    <div class="news clearfix">
                     <div class="col-sm-6 left">   <img src="<?php echo $row_wed['images']; ?>" alt=""> </div>
                        <h3><?php echo $row_wed['Title']; ?></h3>
                      <p><?php echo $row_wed['words']; ?></p>
                      
              </div>
                   

            </div>
          
          <div class="col-sm-6 left">
                    <div class="news clearfix">
                     <div class="col-sm-6 left">  <img src="<?php echo $row_extra['images']; ?>" alt=""> </div>
                        <h3><?php echo $row_extra['Title']; ?></h3>
                      <p><?php echo $row_extra['words']; ?></p>
                      
              </div>
                   

            </div>
          
          
          <div class="col-sm-6 right">
                    <div class="news clearfix">
                      <div class="col-sm-6 left"> <img src="<?php echo $row_extra2['images']; ?>" alt=""></div>
                        <h3><?php echo $row_extra2['Title']; ?></h3>
                      <p><?php echo $row_extra2['words']; ?></p>
                      
              </div>
          </div>
          <div class="col-sm-6 right">
                    <div class="news clearfix">
                      <div class="col-sm-6 left"> <img src="<?php echo $row_extra3['images']; ?>" alt=""></div>
                        <h3><?php echo $row_extra3['Title']; ?></h3>
                      <p><?php echo $row_extra3['words']; ?></p>
                      
              </div>
          </div>
          
          
          
            </div>
</div>
</div>
<!-- #news -->


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
var textfield1 = new Spry.Widget.ValidationTextField("textfield1", "none", {hint:"Your name"});
var password1 = new Spry.Widget.ValidationPassword("password1" , {hint:"Password", validateOn:["change"]});
</script>
</body>
</html>
<?php
mysqli_free_result($Recordset1);

mysqli_free_result($Recordset2);

mysqli_free_result($bday);

mysqli_free_result($wed);

mysqli_free_result($extra);

mysqli_free_result($extra2);

mysqli_free_result($extra3);

mysqli_free_result($dscrip);
?>
