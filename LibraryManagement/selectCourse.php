<link href="css/table.css" rel="stylesheet" type="text/css" />
<?php
	header("Content-type:text/html;charset=utf-8");
	$sno=$_POST['sno'];
	$cno=$_POST['cno'];
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
	
	//$sql="insert into grade(sno,cno) values('$sno','$cno')";
	$sql="insert into grade 
	      select students.sno,course.cno,course.cname,course.tname 
		  from students,course
		  where students.sno='$sno' and course.cno='$cno'";
		 // values('$sno','$cno')";
	mysqli_query($link,$sql);
	
	if(0 < mysqli_affected_rows($link))
	{	
	    echo "<fieldset>";
        echo "<legend>您的课表</legend>";
		echo '<table width="800" align="center">';
		echo '<tr>';
        echo '<th align="center">学号</th>';
        echo '<th align="center">姓名</th>';
        echo '<th align="center">课程号</th>';
		echo '<th align="center">课程名</th>';
		echo '<th align="center">任课教师</th>';
        echo '</tr>';
		
		$sql1="select students.sno,students.name,course.cno,course.cname,course.tname from grade,students,course where students.sno=grade.sno and grade.cno=course.cno and students.sno=$sno";
	    $res = mysqli_query($link, $sql1);
		while($arr = mysqli_fetch_row($res))
	    {
			echo '<tr>';
				foreach($arr as $value)
				{
					echo '<td height="34" width="80" align="center">'.$value.'</td>';
				}
				/*echo '<td>'.$arr[sno].'</td>';
				echo '<td>'.$arr[name].'</td>';
				echo '<td>'.$arr[sex].'</td>';
				echo '<td>'.$arr[age].'</td>';*/
				//}
			echo '</tr>';
		
	    }
	    echo '</table>';
	    echo "</fieldset>";
       
	
    }
	else
	{
		echo "没有该课程<br>";
		echo mysqli_error($link);
	}
	
	mysqli_close($link);

?>