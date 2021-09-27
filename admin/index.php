<?php
require '../config/database.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = mysqli_real_escape_string($connect,htmlspecialchars($_POST['email']));
    $pass = mysqli_real_escape_string($connect,htmlspecialchars($_POST['password']));
    $check = $connect->query("select email,password,role from users where email='$email' and password='$pass' and role='admin'");
    if($check->num_rows){
        $check=$check->fetch_assoc();
        $_SESSION['role'] = $check['role'];
        header("location:dashboard.php");
    }else{
        $fail = "<span style='color:red'>البريد الألكتروني او كلمة المرور خاطئه</span>";
    }
}


?>
<html dir="ltr">
    <head>
        <title>لوحة التحكم</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <link rel="stylesheet" href="style/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>

        <div class="login">
            <?php
            if(isset($fail)){
                echo $fail;
            }
            ?>
            <h2 style="color:white;opacity: 1">لوحة التحكم</h2>

        <form class="forms" action="" method="post">
            <input id="email" class="filed" type="text" name="email" placeholder="البريد الألكتروني"><i class="fas fa-user"></i><br>
            <input id="pass" class="filed" type="password" name="password" placeholder="كلمة المرور" ><i class="fas fa-key"></i><br>
            <input class="submit" type="submit" value="دخول">

        </form>
        </div>
    </body>

</html>
<script src="js/index.js"></script>