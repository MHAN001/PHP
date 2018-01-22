<link href="css/table.css" rel="stylesheet" type="text/css" />
<?php
	header("Content-type:text/html;charset=utf-8");
	
	$num=$_POST['num'];
	$name=$_POST['sname'];
	$sex=$_POST['ssex'];
	$age=$_POST['sage'];
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
	
	$sql="UPDATE students SET name='$name',sex='$sex',age=$age WHERE sno=$num";

	$res = mysqli_query($link,$sql);
	
	//判断数据库是否有变化，（受影响行数）
	if(0 < mysqli_affected_rows($link))
	{
	    echo "<fieldset>";
        echo "<legend>修改成功</legend>";
		echo '<table width="800" align="center">';
		echo '<tr>';
		    echo '<th align="center">学院</th>';
			    echo '<th align="center">专业</th>';
				    echo '<th align="center">班级</th>';
        echo '<th align="center">姓名</th>';
        echo '<th align="center">学号</th>';
        echo '<th align="center">性别</th>';
		echo '<th align="center">年龄</th>';
        echo '</tr>';
		
		$res = mysqli_query($link, "select * from students");
	    while($arr = mysqli_fetch_row($res))
	    {
			echo '<tr>';
				foreach($arr as $value)
				{
					echo '<td height="34" width="80"  align="center">'.$value.'</td>';
				}
			echo '</tr>';
		
	    }
		echo '</table>';
	    echo "</fieldset>";
    }
	else
	{
		echo "修改失败<br>";
		echo mysqli_error($link);
	}
	
	
	
	
	//关闭数据库链接	
	mysqli_close($link);

?>