<?php
//http://www.w3schools.com/php/func_mysqli_fetch_assoc.asp

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
/*
$stmt = mysqli_prepare($connect,"SELECT * FROM shops");
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
*/

$sql = "SELECT * FROM shops";

//store results in array for encoding 
$shop = array();


if($result = mysqli_query($connect,$sql)){


//$i = 0;


while($row = mysqli_fetch_assoc($result)){
  
    /*$shop['id'] = $shopid;
    $shop['shopname'] = $shopname;
    $shop['shopDesc'] = $shopdesc;
    $shop['geo'] = $shopgeo; */
    //$shop[$i] = ("shopid" => $shopid, "shopname" =>$shopname, "shopdesc" => $shopdesc, "shopgeo" =>$shopgeo);
    
    $row_array['id'] = $row['id'];
    $row_array['shopname'] = $row['shopname'];
    $row_array['shopDesc'] = $row['shopDesc'];
    $row_array['geo'] = $row['geo'];
    
    array_push($shop,$row_array);
    
   // $i++;
    
    
   }


}



//encode the results to json for transporting 
echo json_encode($shop);

mysqli_close($connect);





?>