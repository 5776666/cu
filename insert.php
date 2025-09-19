<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'create';

conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
$first_name = $_POST['fisrt_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirum_password = ['confirum_password'];

if($password !== $confirum_password){
    die('كلمة المرور غير متطابقة')
}

$sql = "INSERT INTO user (first_name, last_name, email, phone, password,) VALUES ('$first_name', '$last_name' , '$email' , '$phone' , 
'$password)";

if ($conn->query($sql) === TRUE) {
    echo "🎉 تم التسجيل بنجاح";
} else {
    echo "خطأ: " . $conn->error;
}

$conn->close();
?>