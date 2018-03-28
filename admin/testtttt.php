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

require_once('Connections/twconn.php');
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

$roater_data = "";
/**
<?php do { ?>
             <tr>
               <td>Mon</td>
               <td><?php echo $row_dissinger['Name']; ?></td>
                <td><?php echo $row_pray1['Name']; ?></td>
                <td><?php echo $row_pray2['Name']; ?></td>
                <td><?php echo $row_pray3['Name']; ?></td>
                <td><?php echo $row_pray4['Name']; ?></td>
       		    <td><?php echo $row_preacher['Name']; ?></td>
                
           <?php    ($row_pray1 = mysqli_fetch_assoc($pray1))  ?>
           <?php      ($row_pray2 = mysqli_fetch_assoc($pray2))  ?>
           <?php      ($row_pray3 = mysqli_fetch_assoc($pray3))  ?>
           <?php      ($row_pray4 = mysqli_fetch_assoc($pray4))  ?>
             <?php      ($row_preacher = mysqli_fetch_assoc($preacher))  ?>
             </tr>
  <?php } while ($row_dissinger = mysqli_fetch_assoc($dissinger))  ?> 
  **/
$selectedUser = array();
$alternativeUsers = array();


//////////////////////////////////
//This functions should be in a class
function getRandomUser($data, $type, $anew) {
  switch ($anew) {
    case 0:
    	$selected = -1;
    	global $selectedUser;
    	$userCount = count($data) - 1;
    	for ($i=0; $i < 1000; $i++) { 
    		$chosen = rand(0, $userCount);
    		$user = $data[$chosen];
    		$chosenType = $user[$type];
    		$chosenType = strtolower($chosenType);
    		if (!in_array($chosen, $selectedUser) && $chosenType == "yes") {
    			array_push($selectedUser, $chosen);
    			$selected = $chosen;
    			break;
    		}
    	}
      break;
    case 1:
      $selected = -1;
      global $selectedUser;
      global $alternativeUsers;
    
      for ($j=0; $j < count($selectedUser); $j++) {
        if (!in_array($j, $alternativeUsers)) {
          array_push($alternativeUsers, $j);
          // reseting the alternative users only if its completed looping through them
          $alternativeUsers = count($selectedUser) == count($alternativeUsers) ? array() : $alternativeUsers;
          $chosen = $j;
          $user = $data[$chosen];
          $chosenType = $user[$type];
          $chosenType = strtolower($chosenType);
          if ($chosenType == "yes") {
            $selected = $chosen;
            break;
          }
        }
        
      }
      break;
    default:
      break;
  }
	return $selected;
}

function getRow($data) {
	$row_data = "";

	//singer
	$randSelected = getRandomUser($data, "singer",0);
	if ($randSelected != -1) {
		$user = $data[$randSelected];
		$name = $user["name"];
		$row_data .= '<td>'.$name.'</td>';
	} else {
    $randSelected = getRandomUser($data, "singer",1);
		$user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
	}
	//prayer1
  $randSelected = getRandomUser($data, "prayer",0);
  if ($randSelected != -1) {
    $user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
  } else {
    $randSelected = getRandomUser($data, "prayer",1);
		$user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
	}
	//prayer2
  $randSelected = getRandomUser($data, "prayer",0);
  if ($randSelected != -1) {
    $user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
  } else {
    $randSelected = getRandomUser($data, "prayer",1);
		$user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
	}
	//prayer3
  $randSelected = getRandomUser($data, "prayer",0);
  if ($randSelected != -1) {
    $user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
  } else {
    $randSelected = getRandomUser($data, "prayer",1);
		$user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
	}
	//prayer4
  $randSelected = getRandomUser($data, "prayer",0);
  if ($randSelected != -1) {
    $user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
  } else {
    $randSelected = getRandomUser($data, "prayer",1);
		$user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
	}
	//preacher
  $randSelected = getRandomUser($data, "preacher",0);
  if ($randSelected != -1) {
    $user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
  } else {
    $randSelected = getRandomUser($data, "preacher",1);
    $user = $data[$randSelected];
    $name = $user["name"];
    $row_data .= '<td>'.$name.'</td>';
	}



	return $row_data;
}

function resetData() {
	$selectedUser = array();
}


//should be in a class
///////////////////////

if (mysqli_num_rows($query = mysqli_query($shoogarh_conn, "SELECT * FROM tb1")) > 0) {
	$data = array();
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$name = $row["Name"];
		$singer = $row["Singer"];
		$prayer = $row["Prayer"];
		$preacher = $row["Preacher"];
		$user = array("name" => $name,"singer" => $singer,"prayer" => $prayer,"preacher" => $preacher);
		array_push($data, $user);

	}
	//in dis case... data is reusabe.. shuffle and co -------
	
	$roater_data .= '<tr><td>Mon</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Tue</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Wed</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Thu</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Fri</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Mon</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Tue</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Wed</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Thu</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Fri</td>'.getRow($data).'</tr>';
$roater_data .= '<tr><td>Mon</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Tue</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Wed</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Thu</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Fri</td>'.getRow($data).'</tr>';
$roater_data .= '<tr><td>Mon</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Tue</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Wed</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Thu</td>'.getRow($data).'</tr>';
	$roater_data .= '<tr><td>Fri</td>'.getRow($data).'</tr>';


}

/*
<td>$row_dissinger['Name']; ?></td>
<!-- <td>$row_pray1['Name']; ?></td> -->
<!-- <td>$row_pray2['Name']; ?></td> -->
<!-- <td>$row_pray3['Name']; ?></td> -->
<!-- <td>$row_pray4['Name']; ?></td> -->
<!-- <td>$row_preacher['Name']; ?></td> -->
*/

//Do not start a column with capital letter
// mysql_select_db($database_twconn, $twconn);
// $query_dissinger = "SELECT Name FROM tb1 WHERE Singer = 'yes' ORDER BY rand()  limit 5";
// $dissinger = mysqli_query($twconn,$query_dissinger) or die(mysqli_error($twconn));
// $row_dissinger = mysqli_fetch_assoc($dissinger);
// $totalRows_dissinger = mysqli_num_rows($dissinger);

// // mysql_select_db($database_twconn, $twconn);
// $query_pray1 = "SELECT Name FROM tb1 WHERE Prayer = 'yes' GROUP BY id  ORDER BY rand() limit 5";
// $pray1 = mysqli_query($twconn, $query_pray1) or die(mysqli_error($twconn));
// $row_pray1 = mysqli_fetch_assoc($pray1);
// $totalRows_pray1 = mysqli_num_rows($pray1);

// // mysql_select_db($database_twconn, $twconn);
// // $query_pray2 = "SELECT Name FROM tb1 WHERE Prayer = 'yes'  and id NOT :id  ORDER BY rand() limit 5";
// $query_pray2 = "SELECT Name FROM tb1 WHERE Prayer = 'yes'  ORDER BY rand() limit 5";
// $pray2 = mysqli_query($twconn, $query_pray2) or die(mysqli_error($twconn));
// $row_pray2 = mysqli_fetch_assoc($pray2);  
// $totalRows_pray2 = mysqli_num_rows($pray2);

// // mysql_select_db($database_twconn, $twconn);
// $query_pray3 = "SELECT Name FROM tb1 WHERE Prayer = 'yes' ORDER BY rand() limit 5";
// $pray3 = mysqli_query($twconn, $query_pray3) or die(mysqli_error($twconn));
// $row_pray3 = mysqli_fetch_assoc($pray3);
// $totalRows_pray3 = mysqli_num_rows($pray3);

// // mysql_select_db($database_twconn, $twconn);
// $query_pray4 = "SELECT Name FROM tb1 WHERE Prayer = 'yes' ORDER BY rand() limit 5";
// $pray4 = mysqli_query($twconn, $query_pray4) or die(mysqli_error($twconn));
// $row_pray4 = mysqli_fetch_assoc($pray4);
// $totalRows_pray4 = mysqli_num_rows($pray4);

// // mysql_select_db($database_twconn, $twconn);
// $query_preacher = "SELECT Name FROM tb1 WHERE Preacher = 'yes' ORDER BY rand() limit 5";
// $preacher = mysqli_query($twconn, $query_preacher) or die(mysqli_error($twconn));
// $row_preacher = mysqli_fetch_assoc($preacher);
// $totalRows_preacher = mysqli_num_rows($preacher);




?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Monthly Prayer Roaster</title>
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
                      <li><a href="admin.php">Admin</a></li>
                        <li><a href="monthlyroster.php">Monthly roster</a></li>
                        <li><a href="staffs.php">Staffs</a></li>
                        <li><a href="contentmanager.php">Content Manager</a></li>
                        <li><a href="<?php echo $logoutAction ?>">Logout</a></li>

                    </ul>
                </div><!--/.navbar-collapse -->
              </div><!-- container -->
      </div><!-- menu --></div>
    <!-- /#header -->



    <div id="monthlyroster" class="cyan-wrapper">
      <div class="container inner">
            <div class="row">
              <div class="col-sm-12">
                <div class="col-wrapper">
                  <h1 class="giant-heading text-center"><span class="btn-group-sm"><span class="btn"><span class="h1">Monthly Prayer Roster <br/>
                  </span></h1>




                  <table border="1" >
<table class="table table-striped table-bordered table-hover table-condensed " !important>

           <tr class="info">
            <td>Date</td>
             <td>Singer</td>
             <td>Prayer1</td>
              <td>Prayer2</td>
             <td>Prayer3</td>
              <td>Prayer4</td>
             <td>Preacher</td>
           </tr>
           <!-- This is where all the data from the db is outputedededed -->
           <?php echo $roater_data; ?>
 		  </table>



  <p class="text-right ">This is a list of staffs on duty for the Month.</p>
  
  <button type="button" class="text-danger" data-toggle="modal" data-target="#modallist">Generate Random list</button>
  
                </div>
              </div>
              
     
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
</div>
</div>
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

var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>
<?php
// mysql_free_result($dissinger);

// mysql_free_result($pray1);

// mysql_free_result($pray2);

// mysql_free_result($pray3);

// mysql_free_result($pray4);

// mysql_free_result($preacher);
?>