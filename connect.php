<?php    
$servername='localhost';
$username='root';
$password='';
$dbname='tp-web-2';
$conn=new mysqli($servername,$username,$password,$dbname);
$conn->set_charset('utf8');
if($conn->connect_error){


    die("خطا");
}
echo "تم الاتصال";
?>