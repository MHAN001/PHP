﻿<link href="css/table.css" rel="stylesheet" type="text/css" />
<?php
	header("Content-type:text/html;charset=utf-8");
	$sno=$_POST['sno'];
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
	
	
	mysqli_select_db($link, "test_php");
	$sql="select* from grade where sno=$sno";
	$res = mysqli_query($link,$sql);
	
	if(0 < mysqli_affected_rows($link))
	{	
	    echo "<fieldset>";
        echo "<legend>查询成功</legend>";
		echo '<table width="800" align="center">';
		echo '<tr>';
		 echo '<th align="center">学号</th>';
        echo '<th align="center">课程名</th>';
       
        echo '<th align="center">课程号</th>';
		echo '<th align="center">指导教师</th>';
        echo '</tr>';
		
		while($arr = mysqli_fetch_row($res))
	    {
			echo '<tr>';
				foreach($arr as $value)
				{
					echo '<td height="34" width="80" align="center">'.$value.'</td>';
				}
			echo '</tr>';
		
	    }
	    echo '</table>';
	    echo "</fieldset>";
       
	
    }
	else
	{
		echo "您还未选课<br>";
		echo mysqli_error($link);
	}
	
	mysqli_close($link);

?>