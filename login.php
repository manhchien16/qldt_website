<?php
    // lay dulieu tu form dangnhap
    $User = $_POST["User"];
    $Password = $_POST["Password"];


 $host = $_ENV['DB_HOST'];
    $database = 'utt'; // Replace with your database name
    $username = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];



    //tao ket noi
    $conn = mysqli_connect($host, $username, $password) or die ("Không connect đc với máy chủ");
    //tim csdl de lam viec
    mysqli_select_db($conn,$database) or die;
    // cau lenh query
    $sql_insert_account ="SELECT * FROM `account` WHERE User = '$User' and Password = '$Password'";


    //thuc hien truy van
    $result = mysqli_query($conn, $sql_insert_account);
    $count = mysqli_num_rows($result);

    if($count == 1){
        $_SESSION['User_name'] = $User;
        header('Location: index.php');
    } else{
        header('Location: login.html');
    }
?>
