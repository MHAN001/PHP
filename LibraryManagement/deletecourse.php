<link href="css/table.css" rel="stylesheet" type="text/css" />
<?php
	header("Content-type:text/html;charset=utf-8");
	
	$cno=$_POST['cno'];
	
	$link = mysqli_connect("localhost", "root", "940105");
	
	if(!$link)
	{
		echo "数据库连接失败";
		echo mysqli_error($link);	
	}
	
	mysqli_query($link, "set names utf8");
	
	
	mysqli_select_db($link, "test_php");
	
	$sql="SELECT*from course WHERE cno=$cno ";
	$reslut=mysqli_query($link, $sql);
	$cols=mysqli_num_rows($reslut);
	if($cols)
	{
	   $sql= "DELETE FROM course WHERE cno=$cno";
	   
	   $res = mysqli_query($link,$sql);
	
	   if(0 < mysqli_affected_rows($link))
	   {	
	    echo "<fieldset>";
        echo "<legend>删除成功</legend>";
		echo '<table width="800" align="center">';
		echo '<tr>';
        echo '<th align="center">课程名</th>';
		echo '<th align="center">课程号</th>';
        echo '<th align="center">指导教师</th>';
      	
        echo '</tr>';
		
	    $res = mysqli_query($link, "select * from course");
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
		echo "删除失败<br>";
		echo mysqli_error($link);
	   }
	
	  
	}
	else
	{
	  echo "对不起，您输入的课程号不存在！";
	  //echo "返回<a href="stuDelete.html">删除界面</a>重新输入正确学号";
	}

	
	mysqli_close($link);

?>
<!--<br/>
返回<a href="stuDelete.html">删除界面</a>重新输入正确学号-->