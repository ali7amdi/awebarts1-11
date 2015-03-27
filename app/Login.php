<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>awebarts</title>

        <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="resources/css/style.css" type="text/css">

        <script src="resources/js/bootstrap.min.js"></script>
        <script src="resources/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="contents logincont">
                <div class="regiter">
                    <form action="LoginController.php" method="post">
                        <h1>Register new user:</h1>
                        <input required="required" name="name" class="input-lg" type="text" placeholder="Please write your name">
                        <input required="required" name="email" class="input-lg" type="email" placeholder="Please write your email">
                        <input required="required" name="username" class="input-lg" type="text" placeholder="please enter a username">
                        <input required="required" name="password" class="input-lg" type="password" >                    
                        <input class="btn-primary btn-lg" type="submit" name="submit" value="Register">

                    </form>
                </div>
                <div class="login">
                    <h1>Login :</h1>
                    <form action="LoginController.php" method="post">
                        <input required="required" name="username" class="input-lg" type="text" placeholder="please enter a username">
                        <input required="required" name="password" class="input-lg" type="password" > 
                        <input class="btn-primary btn-lg" type="submit" name="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
