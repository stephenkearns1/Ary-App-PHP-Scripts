/**
 
 
 *  Auhtor: Stephen Kearns 
 
 */
<?php

header('Access-Control-Allow-Origin: *');
//includes congfig credentials so that they could be used within file  
require_once 'Config.php';
class ConnectDB{
    
    private class Connect(){
        
        $connect = mysqli_connect(dbhost,dbbuser,dbpassword,dbname);
        f(mysqli_connect_errno()){
          echo "Failed to connect to MySQL: ".  mysqli_connect_error();
        }
    }
    
}

?>