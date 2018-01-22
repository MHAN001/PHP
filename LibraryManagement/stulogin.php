<?php
   header("content-type:text/html;charset=utf-8");
   
   $name=$_POST['name'];
   $password=$_POST['pass'];
   
   //数据库操作实例。
	//第一步：链接数据库
	$link = mysqli_connect("localhost", "root", "940105")/* or die("链接数据库失败")*/;
	
	if(!$link)//判断链接是否成功
	{
		echo "数据库链接失败";
		echo mysqli_error($link);	//如果不成功返回错误信息
	}
	//第二步：设置操作
	//设置字符集
	mysqli_query($link, "set names utf8");
	
	//选择一个数据库作为默认操作数据库
	mysqli_select_db($link, "test_php");
	
   $sql="select*from students where name='$name' and sno=$password";
   
   $reslut=mysqli_query($link, $sql);
   $cols=mysqli_num_rows($reslut);
   
   if($cols){
      header("location:stuchoose.html");
	  exit();
   }
   else{
      header("location:stulogin.html");
    }
   mysqli_close($link);
?>
