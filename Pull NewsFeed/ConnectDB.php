<?php

/**
 
 
 *  Auhtor: Stephen Kearns 
 
 */
header('Access-Control-Allow-Origin: *');
//includes congfig credentials so that they could be used within file  
require_once 'Config.php';
class ConnectDB{
    
    public function Connect(){
        
        $connect = mysqli_connect(dbhost,dbbuser,dbpassword,dbname);
        if(mysqli_connect_errno()){
          echo "Failed to connect to MySQL: ".  mysqli_connect_error();
        }
        
        return $connect;
    }
    
}

?>