<?php

//error checking 

error_reporting(E_ALL);
ini_set('Display errors', 1);

include('ConnectDB.php');

//varibales
$shopid;
$shopname;
$shopdesc;
$shopgeo;

//create a new insatiance of the connect class
$db = new ConnectDB();

//connect to the database 
$connect = $db->Connect();

//select shop information from table
$stmt = mysqli_prepare($connect,"SELECT * FROM shops;");
 if ( false===$stmt ) {
			die('failed error 1 ' . htmlspecialchars($sqlvalue->error));
		}

//execute the statement to query the data
mysqli_stmt_execute($stmt);
 if ( false===$stmt ) {
			die('failed error 1 ' . htmlspecialchars($sqlvalue->error));
		}

//bind the results of the query to local varibales 
mysqli_stmt_store_result($stmt);

mysqli_stmt_bind_result($stmt,$shopid,$shopname,$shopdesc,$shopgeo);

//store results in array for encoding 
$shop = array();

while(mysqli_stmt_fetch($stmt)){
    $shop['shopid'] = $shopid;
    $shop['shopname'] = $shopname;
    $shop['shopdesc'] = $shopdesc;
    $shop['shopgeo'] = $shopgeo;
}



//encode the results to json for transporting 
echo json_encode($shop);

mysql_close($stmt);





?>