<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "projectsynnn"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT password, name, email FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $password = $row["password"];
        $name = $row["name"];
        $email = $row["email"];
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST["password"];
    $newName = $_POST["name"];
    $newEmail = $_POST["email"];

    if (!empty($newPassword) && !empty($newName) && !empty($newEmail)) {

        $sqlInsert = "INSERT INTO user (password, name, email) VALUES ('$newPassword', '$newName', '$newEmail')";


        if ($conn->query($sqlInsert) === true) {
            header('Location:uspesno.php');
        } else {
            echo "Ошибка при добавлении записи: " . $conn->error;
        }
    } else {
        echo "Не все значения заполнены.";
    }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn->close();
?>
