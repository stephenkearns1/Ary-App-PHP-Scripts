
<?php

/**
 
 
 *  Auhtor: Stephen Kearns 
 
 */


include("ConnectDB.php");

//error checking 

error_reporting(E_ALL);
ini_set('Display errors', 1);

//create new instances of connector
$db = new ConnectDB();


//check if variables where sent to script 
//if(isset($_POST['userName'],$_POST['password']))
if(!empty($_POST['userName'])){
if(!empty($_POST['password'])){
           //retrive data from application 
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        
       // echo "echo from php file to check posted variables" + $userName + $password;
        
        $connect = $db->Connect();
        //Login($userName, $password, $connect);
        
     //  echo "Made it to login function";
       
       
     //Protection From SQL-Injection   
       $stmt = mysqli_prepare($connect,"SELECT name,username,email,password FROM user WHERE username = ? AND password = ?");
       // $stmt = mysqli_prepare($connect,"SELECT  FROM user WHERE username = ? AND password = ?");
        if ( !$stmt ) {
         die('mysqli error: '.mysqli_error($connect));
        }
        if($stmt == false){
             die('mysqli error: '.mysqli_error($connect));
             echo "stmt returning false";
        }
      
				//bind the user name and password to the prepared statement
			
       //check what the statement is
     //  echo $stmt;
       
       mysqli_stmt_bind_param($stmt,"ss",$userName,$password);
  
       
       
       mysqli_stmt_execute($stmt);
     
       mysqli_stmt_store_result($stmt);
       
       mysqli_stmt_bind_result($stmt,$bname,$bUserName,$bemail,$bPassword);
       //echo $bUserName, $bPassword;
       
       $user = array();
       
       
       while(mysqli_stmt_fetch($stmt)){
           $user['name'] = $bname;
           $user['userName'] = $bUserName;
           $user['email'] = $bemail;
           $user['password'] = $bPassword;
           
       }
       
      echo json_encode($user);
       
      mysqli_close($connect);
       
      
}

    
}
else{
   echo "Values have not being posted to script file";
}



/*function Login($inUserName, $inUserPassword,$connect){
     echo "Made it to login function";
       
       
     //Protection From SQL-Injection   
       $stmt = mysqli_prepare($connect, "SELECT * FROM user WHERE  username = ? AND password = ?");
       $stmt->mysqli_stmt_bind_param($stmt,"ss", $userName,$userPassword);
       
       mysqli_stmt_store_result($stmt);
       mysqli_stmt_bind_result($stmt, $userName, $name, $email,$pasword);
       
       mysqli_start_execute($stmt);
       
       $user = array();
       
       
       while(mysqli_stmt_fetch($stmt)){
           $user['userName'] = $userName;
           $user['name'] = $name;
           $user['email'] = $email;
           $user['password'] = $password;
           
       }
       
      echo json_encode($user);
       
       mysqli_close($connect);
} */

?>