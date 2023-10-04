<?php
    // lay dulieu tu form dangnhap
    $User = $_POST["User"];
    $Password = $_POST["Password"];



    //tao ket noi
    $conn = mysqli_connect("localhost", "root", "") or die ("Không connect đc với máy chủ");
    //tim csdl de lam viec
    mysqli_select_db($conn,"utt") or die;
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
