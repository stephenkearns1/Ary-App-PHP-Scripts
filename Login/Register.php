
<?php


include("ConnectDB.php");

//error checking 

error_reporting(E_ALL);
ini_set('Display errors', 1);

//create new instances of connector
$db = new ConnectDB();


//check if variables where sent to script 
//if(isset($_POST['userName'],$_POST['password']))
if(!empty($_POST['name'])){
if(!empty($_POST['userName'])){
if(!empty($_POST['email'])){
if(!empty($_POST['password'])){

       
        
       // echo "echo from php file to check posted variables" + $userName + $password;
        
        $connect = $db->Connect();

//check if variables where sent to script 
//if(isset($_POST['username'],$_POST['name'],$_POST['email'],$_POST['password'])){
           //retrive data from application 
        
        $name = $_POST['name'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        echo $name,$userName,$email,$password;
        
       // $result = $dn->UserRegister($userName,$name,$email,$password);
       
       //prepare statement to stop sql injection
        $stmt = mysqli_prepare($connect, "INSERT INTO user (name,username,email,password) VALUES (?,?,?,?) ");
         if ( false===$stmt ) {
			die('failed error 1 ' . htmlspecialchars($sqlvalue->error));
		}
		
	
			
        mysqli_stmt_bind_param($stmt, "ssss", $name,$userName,$email,$password);
         if ( false===$stmt ) {
			die('failed error 1 ' . htmlspecialchars($sqlvalue->error));
		}
		
		 mysqli_stmt_execute($stmt);
         if ( false===$stmt ) {
			die('failed error 1 ' . htmlspecialchars($sqlvalue->error));
		}
			
       
			
        mysqli_stmt_close($stmt);
      
    }
    }
    }

}else {
    echo "post data not being recived";
}

?>


