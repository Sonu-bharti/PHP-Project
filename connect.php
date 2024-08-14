<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $username = ($_POST["username"]);
    $email = ($_POST["email"]);
    $phone = ($_POST["phone"]);
    $gender = ($_POST["gender"]);
    $password = ($_POST["password"]); // missing closing parenthesis

    // Validate input data (basic example)
    

    // If no errors, process the data
    
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'test'); // missing closing parenthesis

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " .$conn->connect_error);
        }
        else{
        // Prepare and execute the SQL query
        $stmt = $conn->prepare("INSERT INTO registration (username, email, phone, gender, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $username, $email, $phone, $gender, $password);
        $stmt->execute();
        echo "Registration is successfully";
        $stmt->close();
        $conn->close();
        }
        // Check if the query was successful
        
    }
?>