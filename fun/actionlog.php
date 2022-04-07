<?php
include('../connect.php');

$n1=$_GET['n1'];
$n2=$_GET['n2'];
$sql="SELECT * FROM employes WHERE user_name='$n1' AND password='$n2'";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()){
$count =$result-> num_rows;
}
if($count >0){
    if($n1 == adminadmin && $n2 == adminadmin){
        session_start();
        $_SESSION['usnm']=$n1;


        header('Location:http://localhost/my_second_web_site/fun/adminpages.php');
        exit();
    }else{
        session_start();
        $_SESSION['usnm']=$n1;
        header('Location:http://localhost/my_second_web_site/fun/mainpage.php');
    }


}else{

    header('Location:http://localhost/my_second_web_site/log_in.php');
}
//header('Location:http://localhost/my_second_web_site/fun/mainpage.html');

?>