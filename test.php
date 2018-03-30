<?php
$name = $_POST['user_name'];
$password =$_POST['user_password'];

echo "ID :".$name."<br>";
echo"PASSWORD :".$password."<br>";

echo"암호화된 아이디는 :".hash('sha256',$name)."<br>";

echo"암호화된 비밀번호 :".hash('sha256',$password);
?>