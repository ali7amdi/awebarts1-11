<?php

/*
 * Login Class
 * @author Ali7amdi
 */
class Login {
    private $username;
    private $password;
    private $cxn;       // database object
            
    function __construct($username,$password)
    {
        // set data
        $this->setData($username, $password);
        // connect DB
        $this->connectToDb();
        // get Data
        $this->getData();
    }
    
    private function setData($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    
    private function connectToDb()
    {
        include 'models/Database.php';
        $vars = "include/vars.php";
        $this->cxn = new Database($vars);
    }
    
    function getData()
    {
        $query = "SELECT * FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password'";
        $sql   = mysql_query($query);
        
        if(mysql_num_rows($sql)>0)
        {
            return TRUE;
        }
        else
        {
            throw new Exception("Username or password is invalid, please try again.");
        }
        
    }
    
    function close()
    {
        $this->cxn->close();
    }
    
    
    
    
}

?>
