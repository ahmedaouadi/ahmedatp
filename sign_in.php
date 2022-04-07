<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="css.css">
</head>

<body id="body">

<p class="p">
    
<a href="http://localhost/my_second_web_site/sign_in.php?q1=" style="color: white; text-decoration: none;   font-size: 25px; position: absolute; left: 800px; top:15px"> اضافة موظف |</a>
        <a href="http://localhost/my_second_web_site/home.html" style="color: white; text-decoration: none;   font-size: 25px; position: absolute; left: 660px; top:15px"> تسجيل الخروج |</a>
        <a href="fun/amdininformation.php" style="color: white; text-decoration: none;font-size: 25px; position: absolute; left: 930px; top:15px"> المعلومات الشخصية |</a>
<a href="fun/adminlistemp.php" style="color: white; text-decoration: none;font-size: 25px; position: absolute; left: 1110px; top:15px"> قائمة الموظفين |</a>

            <a href="fun/adminpages.php" style="color: white; text-decoration: none;font-size: 25px; position: absolute; left: 1250px; top:15px"> قاىمة المهمام|</a>
          

            </p>
            <h3 style="color :red ;  text-align: center;  ">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
$q1=$_GET['q1'];
if($q1 == 1){

echo "اسم المستخدم موحود مسبقا";
}

?>
</h3>
        </p>
      <form action="fun/action.php" method="get">


        <p style="width: 340px; height: 460px; background-color: rgba(0, 0, 0, 0.774); position: absolute; top: 60px; color: white;left: 35%; border-radius: 20px; text-align: right; padding-top: 35px; padding-right: 30px; font-size: 25px;">
            <input type="text" style="position: absolute; right: 145px; border-radius: 4px; font-size: 15px" name="first_name"> :الاسم
            <br><br>
            <input type="text" style="position: absolute; right: 145px; border-radius: 4px; font-size: 15px" name="last_name"> :اللقب
            <br> <br>
            <input type="text" style="position: absolute; right: 145px; border-radius: 4px; font-size: 15px" name="age"> :العمر
            <br> <br>
            <input type="email" style="position: absolute; right: 145px; border-radius: 4px; font-size: 15px" name="emile"> :الايميل
            <br> <br>
            <select  id="" style="position: absolute; right: 105px;border-radius: 4px; font-size: 20px" name="job_work" >
            <option value="قسم الاشهار والاعلانات" style="font-size: 20px"  > قسم الاشهار والاعلانات</option>
            <option value="قسم برمجة وتطوير التطبيقات" style="font-size: 20px" >قسم برمجة وتطوير التطبيقات</option>
            <option value="قسم تصميم وتعديل واجهة التطبيقات" style="font-size: 20px" >قسم تصميم وتعديل واجهة التطبيقات</option>
            <option value="قسم استقبال واستلام طلبات الزبائن" style="font-size: 20px" >قسم استقبال واستلام طلبات الزبائن</option>
            <option value="اصلاح الحواسيب والاجهزة المعطلة" style="font-size: 20px"  >اصلاح الحواسيب والاجهزة المعطلة</option> 
        </select>            :الوظيفة
            <br> <br>
            <input type="text" style="position: absolute; right: 145px;border-radius: 4px; font-size: 15px" name="user_name"> :اسم المستخدم
            <br> <br>
            <input type="password" style="position: absolute; right: 145px;border-radius: 4px; font-size: 15px" name="password"> :كلمة السر
            <br>
            <br>
           



<br>
            <input type="submit" value="تأكيد" style="text-align: center; position:absolute; left: 21%; font-size: 27px; border-radius: 9px; width: 210px;">

        </p>


    </form>
</body>

</html>