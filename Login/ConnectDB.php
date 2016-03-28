<?php


/**
 
 
 *  Auhtor: Stephen Kearns 
 
 */
 
header('Access-Control-Allow-Origin: *');
//includes congfig credentials so that they could be used within file  
require_once 'Config.php';


class ConnectDB{
    
   
    
    /**
     * 
     */
     
    
    
    public function Connect()
    {    
        //Create variables to hold db credentials 
      
        
        // Opens a new connection to the MySQL database and return the connection object
        $connect = mysqli_connect(dbhost, dbbuser,dbpassword, dbname);
        
        if(mysqli_connect_errno()){
          echo "Failed to connect to MySQL: ".  mysqli_connect_error();
        }
        
        
        if (!$connect) {
        // echo "Error: Unable to connect to MySQL." . PHP_EOL;
       //  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        // echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }
        
        
        //returns connection to be used by other classes  
        return $connect;
    
       // echo "Success: A proper connection to MySQL was made! user database is great." . PHP_EOL;
       //    echo "Host information: " . mysqli_get_host_info($connect) . PHP_EOL;


        
        
    }
    
    
   /* public function UserRegister($name,$userName,$password,$email){
        
        
        //connect to the database 
        $con = $this->Connect();
        //prepare statement to stop sql injection
        $stmt = mysqli_prepare($con, "INSERT INTO user (username,name,email,password) VALUES (?,?,?,?) ");
        mysqli_stmt_bind_param($stmt, "ssss", $userName,$name,$password,$email );
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        
    }
    
    
  /* public function Login($userName, $userPassword){
       echo "Made it to login function";
       $connect = $this->Connect();
       
     //Protection From SQL-Injection   
       $stmt = mysqli_prepare($connect, "SELECT * FROM user WHERE  username = ? AND password = ?");
       $stmt->mysqli_stmt_bind_param($stmt,"ss", $userName,$userPassword);
       
       mysqli_stmt_store_result($stmt);
       mysqli_stmt_bind_result($stmt, $userName, $name, $email,$pasword);
       
       mysqli_start_execute($stmt);
       
       $user = array();
       
       
       while(mysqli_stmt_fetch($stmt)){
           $user[useName] = $userName;
           $user[name] = $name;
           $user[email] = $email;
           $user[password] = $password;
           
       }
       
       return json_encode($user);
       
       mysqli_close($connect);
       
       
   }
    
    */
}








?>