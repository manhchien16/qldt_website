<?php
    // Get data from form
    $User = $_POST["User"];
    $Password = $_POST["Password"];

    // Database connection details
    $host = "yepps.mysql.database.azure.com";
    $username = "baoanhhihi";
    $password = "Vuchien@123";
    $database = "utt";

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM account WHERE User = '$User' and Password = '$Password'");
    // $stmt->bind_param("ss", $User, $Password);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $count = $result->num_rows;

    if($count == 1){
        session_start();
        $_SESSION['User_name'] = $User;
        header('Location: index.php');
    } else{
        header('Location: login.html');
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
?>
