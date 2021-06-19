<?php 
$connection = mysqli_connect("localhost","root","","db_myinfo");


if($_POST){
  $name = $_POST['txt1'];
  $gender = $_POST['txt2'];
  $mobile = $_POST['txt3'];
  $email = $_POST['txt4'];

  $q = mysqli_query($connection, "insert into tbl_user (user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}','{$email}')") or die(mysqli_error($connection));
  if($q){
    echo "<script>alert('Record Added sucsessfully:)')</script>";
  }
}
?>

<html>
    <body>
       <form method="post">
       Name : <input type="text" name="txt1"/></br></br>
       Gender : <select name="txt2">
                <option>Male</option>
                <option>Female</option>
       </select></br></br>
       Mobile No : <input type="number" name="txt3"/> </br></br>
       Email : <input type="email" name="txt4"/></br></br>

       <input type="submit"/>
       </form>
    </body>
</html>