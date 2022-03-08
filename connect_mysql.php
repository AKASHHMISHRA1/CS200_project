
<?php
    $servername = "localhost";
    $username = "epiz_31235380";
    $password = "6LNul7nOIDOX3L";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

?>