 <?php
// $host = "yepps.mysql.database.azure.com";
// $username = "baoanhhihi";
// $password = "Vuchien@123";
// $database = "utt";


//     //tao ket noi
//     $conn = new mysqli($host, $username, $password, $database);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// // else {
// //     echo "Connected successfully";
// // }
//     $User = $_POST["User"];
//     $Password = $_POST["Password"];

//     //trich xuat du lieu nhap bang ham 
//     $Input_user = mysqli_real_escape_string($conn, $User);
//     $Input_pass = mysqli_real_escape_string($conn, $Password);

//     $sql = "SELECT * FROM `account` WHERE User = '$Input_user' and Password = '$Input_pass'";
   

//     $result = mysqli_query($conn, $sql);

//     // tắt hiển thị lỗi
//     // ini_set('display_errors', '0');

//     if($count == 1){
//         session_start();
//         $_SESSION['User_name'] = $User;
//         $_SESSION['id'] = 1; 
//         header('Location: index.php');
//     } else{
//         header('Location: login.html');
//     }
?>


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
