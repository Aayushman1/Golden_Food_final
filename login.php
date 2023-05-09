<?php
$servername = "localhost";
$username = "Aayushman";
$password = "Aayushman1234$";
$dbName = "golden_food";
$db = new mysqli($servername, $username, $password, $dbName);

$logpass = $_POST['password'];
$sql="SELECT * FROM login WHERE password=?";
$stmt = $db->prepare($sql);
$stmt->bind_param("s", $logpass);
$stmt->execute();
$result = $stmt->get_result();

if($row=mysqli_fetch_array($result)) {
    header("Location: admin.html");
} elseif(!$row=mysqli_fetch_array($result)){
    echo "<script>if(window.confirm('Login fehlgeschlagen!')){";
    echo "window.location='loginScreen.html'";
    echo "}else{";
    echo "window.location='loginScreen.html'";
    echo "}</script>";
}
?>