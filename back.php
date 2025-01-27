<?php
$servername = "localhost";
$username = "root";
$password = "ammar12345678";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = $conn->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
        $query->bind_param("sss", $name, $email, $password);

        if ($query->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $query->error;
        }

        $query->close();

    } 
}


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = $conn->prepare("SELECT * FROM user WHERE email = ?");
        $query->bind_param("s", $email);
        $query->execute();
        $result = $query->get_result();
   
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                echo "Login successful!";
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this email.";
        }

        $query->close();

    
    }
}



$conn->close();
?>
