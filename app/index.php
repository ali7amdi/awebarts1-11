<?php
session_start();
if(!isset($_SESSION['username']))
{
    include 'LoginController.php';
    die();
}
?>
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
            <header>
                <img src="resources/images/logo.png" alt="logo">
                <h2>Welcome 
<?php if(isset($_SESSION['username']))
{
     echo $_SESSION['username']."   <a href='?page=logout'>Logout</a>";
}

?>
                </h2>
            </header>
            <div class="clear"></div>
            <div class="contents">
                <aside>
                    <nav>
                        <a class="btn-danger active" href="index.php">Home Page</a>
                        <a class="btn-danger" href="?page=MainSettings">Main Settings</a>
                        <a class="btn-danger" href="?page=Sections">Sections</a>
                        <a class="btn-danger" href="?page=Pages">Pages</a>
                        <a class="btn-danger" href="?page=Comments">Comments</a>
                        <a class="btn-danger" href="?page=Library">Library</a>
                    </nav>
                </aside>
                <section id="page">
                    <?php
                    if (@$_GET['page']) {
                        $url = $_GET['page'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo 'requested file is not found !';
                        }
                    } else {
                        include './main.php';
                    }
                    ?>
                </section>
            </div>
            <div class="clear"></div>
            <footer>
                <p>Copyright reserved - Ali Hamdi</p>
            </footer>
        </div>
    </body>
</html>
