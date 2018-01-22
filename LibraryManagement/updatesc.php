<link href="css/table.css" rel="stylesheet" type="text/css" />
<?php
	header("Content-type:text/html;charset=utf-8");
	$sno=$_POST['sno'];
	$cno=$_POST['cno'];
	$grade=$_POST['grade'];

	$link = mysqli_connect("localhost", "root", "940105");
	
	if(!$link)
	{
		echo "数据库链接失败";
		echo mysqli_error($link);
	}

	mysqli_query($link, "set names utf8");
	
	mysqli_select_db($link, "test_php");
	
	$sql="UPDATE sc SET grade=$grade  WHERE sno=$sno and cno=$cno";
	mysqli_query($link,$sql);

	if(0 < mysqli_affected_rows($link))
		{	
	    echo "<fieldset>";
        echo "<legend>添加成功</legend>";
		echo '<table width="800" align="center">';
		echo '<tr>';
        echo '<th align="center">学号</th>';
	    echo '<th align="center">姓名</th>';
        echo '<th align="center">课程号</th>';
        echo '<th align="center">课程名</th>';
        echo '<th align="center">成绩</th>';
        echo '</tr>';
		
		$sql1="select students.sno,students.name,course.cno,course.cname,sc.grade from sc,students,course where students.sno=sc.sno and sc.cno=course.cno";
		$res = mysqli_query($link, $sql1);
		
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
		echo "添加失败，请检查是否有该学生选择该课程<br>";
		echo mysqli_error($link);
	}
	
	
	mysqli_close($link);
	
?>