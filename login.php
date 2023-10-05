<?php
    // lay dulieu tu form dangnhap
    $User = $_POST["User"];
    $Password = $_POST["Password"];

    //tao ket noi
    $host = "yepps.mysql.database.azure.com";
    $username = "baoanhhihi";
    $password = "Vuchien@123";
    $database = "utt";
    
    
        //tao ket noi
        $conn = new mysqli($host, $username, $password, $database);
    
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    $sql_insert_account ="SELECT * FROM `account` WHERE User = '$User' and Password = '$Password'";


    //thuc hien truy van
    $result = mysqli_query($conn, $sql_insert_account);
    $count = mysqli_num_rows($result);

    if($count == 1){
        $_SESSION['User_name'] = $User;
        header('Location: index.html');
    } else{
        header('Location: login.html');
    }
?>
