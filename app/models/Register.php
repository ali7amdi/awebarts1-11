<?php

/*
 * Register Class
 * @author Ali7amdi
 */
class Register
{    
    private $name;
    private $email;
    private $username;
    private $password;
    private $cxn;   // Database Object
    
    function __construct($data)
    {
        if(is_array($data))
        {
            $this->setData($data);
        }
        else
        {
            throw new Exception("Error: Data must be in an array.");
        }
        
        // Connect to database
        $this->connectToDb();
        // insert user data
        $this->rgisterUser();
        
    }
    
    private function setData($data)
    {
        $this->name     = $data['name'];
        $this->email    = $data['email'];
        $this->username = $data['username'];
        $this->password = $data['password'];
    }
    
    private function connectToDb()
    {
        include 'models/Database.php';
        $vars = "include/vars.php";
        $this->cxn = new Database($vars);
    }
    
    function rgisterUser()
    {
        //`users`:: `id`, `name`, `username`, `password`, `email`
        $query = "INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`) VALUES ('','$this->name','$this->username','$this->password','$this->email')";
        
        $sql = mysql_query($query);
        
        if($sql)    echo"Registered successfuly";
        else        throw new Exception("Error: not registerd");
        
    }
    function close()
    {
        $this->cxn->close();
    }
    
}

?>
