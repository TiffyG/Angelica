
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background-image: url(bg-01.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            z-index: 1;
            color: #a11d4b;
            font-size: 30px;
            text-align: center;
        }
        a{
            color: #a11d4b;
            position: relative;
        }
        .login-form {
            width: 100%;
            border-radius: 10px;
            background-color: rgba(6, 6, 6, 0.43);
        }
        button{
            border-radius: 4px;
            font-size: large;
            color:  #a11d4b;

        }
        input[type=text], input[type=submit], input[type=file]{
            border-radius: 5px;
            color:  #a11d4b;
            font-size: large;
        }
    </style>
</head>
<body>
<?php session_start();
include ("connection.php");
require ("register.php");

?>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
           <h1><?php echo "<br>Welcome: ".$_SESSION['username'];?></h1>
            <form  class="login-form" method="POST" action="upload.php" enctype="multipart/form-data">
                <div>
                    Select image :<br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div>
                    <input type="text" name="pagename" placeholder="Pagename">
                </div>
                <div>
                    <input type="submit" value="Upload Image" name="submit">
                </div>
                <?php echo "<button><a href='login.php?action=logout'>Logout</button></a>";
                ?>
            </form>

        </div>
    </div>
</div>

</body>
</html>

