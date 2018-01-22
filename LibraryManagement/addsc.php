<link href="css/table.css" rel="stylesheet" type="text/css" />
<?php
	header("Content-type:text/html;charset=utf-8");
	$ccno=$_POST['ccno'];
	$ssno=$_POST['ssno'];
	$ggrade=$_POST['ggrade'];

	$link = mysqli_connect("localhost", "root", "940105");
	
	if(!$link)
	{
		echo "数据库链接失败";
		echo mysqli_error($link);
	}

	mysqli_query($link, "set names utf8");
	
	mysqli_select_db($link, "test_php");
	
	$sql="insert into sc values('$ssno','$ccno','$ggrade')";
	mysqli_query($link,$sql);

	if(0 < mysqli_affected_rows($link))
		{	
	    echo "<fieldset>";
        echo "<legend>添加成功</legend>";
		echo '<table width="800" align="center">';
		echo '<tr>';
        echo '<th align="center">学号</th>';
	    //echo '<th align="center">姓名</th>';
        echo '<th align="center">课程号</th>';
       // echo '<th align="center">课程名</th>';
        echo '<th align="center">成绩</th>';
        echo '</tr>';
		$res = mysqli_query($link, "select * from sc");
	    while($arr = mysqli_fetch_row($res))
	   {
		echo '<table width="800" align="center">';
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
		echo "添加失败<br>";
		echo mysqli_error($link);
	}
	
	
	mysqli_close($link);
	
?>