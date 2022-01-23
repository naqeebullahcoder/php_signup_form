<?php      
    $firstname = $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST ['password'];

    // Database Connection

    $conn = new mysqli('localhost', 'root', '' ,'php_signup_form');

    if($conn->connect_error){
        die('Connection Faild:' .$conn->connect_error);

    }else{
        $query = $conn->prepare("insert into registration (firstname, lastname, email, password) 
           values(?, ?, ? ,?) ");
        $query->bind_param("ssss", $firstname, $lastname, $email, $password);
        $query->execute();
        echo "Registration Successfully ";
        $query->close();
        $conn->close();
    
    }

?>  