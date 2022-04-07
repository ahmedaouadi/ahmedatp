<?php
include('../connect.php');
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$age=$_GET['age'];
$emile=$_GET['emile'];
$job_work=$_GET['job_work'];
$user_name=$_GET['user_name'];
$sql="SELECT * FROM employes WHERE user_name='$user_name'";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()){
$count =$result-> num_rows;
}
if($count >0){
    header('Location:http://localhost/my_second_web_site/sign_in.php?q1=1');
  
    exit();

}
$password=$_GET['password'];
$sql="INSERT INTO employes (first_name, last_name, age, emile, password, user_name, wjob_work)
VALUES('$first_name','$last_name','$age','$emile','$password','$user_name','$job_work')";
$result=$conn->query($sql);
header('Location:http://localhost/my_second_web_site/fun/adminpages.php');

?>