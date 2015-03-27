<?php
/*
 * awebarts:: LoginController
 */
if($_POST)
{
    // Login
    if(isset($_POST['submit']) AND $_POST['submit'] == "Login" )
    {
        $username  = $_POST['username'];
        $password  = $_POST['password'];
        
        try
        {
            include './models/Login.php';
            $login = new Login($username, $password);
            
            if($login == TRUE)
            {
                session_start();
                $_SESSION['username'] = $username;
                header('Location:index.php');
            }
            
        }
        catch (Exception $exc)
        {
            echo $exc->getMessage();
        }
        
    }
    // Register
    //`id`, `name`, `username`, `password`, `email`
    if(isset($_POST['submit']) AND $_POST['submit'] == "Register" )
    {
        $data['name']       = $_POST['name'];
        $data['email']      = $_POST['email'];
        $data['username']   = $_POST['username'];
        $data['password']     = $_POST['password'];
        
        try {
            include './models/Register.php';
            new Register($data);
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
            
    }        
}
else
{
    include './Login.php';
}





?>
