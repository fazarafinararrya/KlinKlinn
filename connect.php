<?php
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root','','login');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into signup(Username, Email, Password) values(?, ?, ?)");
        $stmt->bind_param("sss",$Username, $Email, $password);
        $stmt->execute();
        echo "signup Successfully...";
        $stmt->close();
        $conn->close();
    }

?>