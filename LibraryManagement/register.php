<link href="css/table.css" rel="stylesheet" type="text/css" />
<?php
	header("Content-type:text/html;charset=utf-8");
	$password=$_POST['password'];
	$username=$_POST['username'];
	

	$link = mysqli_connect("localhost", "root", "940105");
	
	if(!$link)
	{
		echo "数据库链接失败";
		echo mysqli_error($link);
	}

	mysqli_query($link, "set names utf8");
	
	mysqli_select_db($link, "test_php");
	
	
	$sql="insert into user values('$username','$password')";
	mysqli_query($link,$sql);

	if(0 < mysqli_affected_rows($link))
		{	
	    echo "<fieldset>";
        echo "<legend>注册成功</legend>";
		echo '<table width="800" align="center">';
		echo '<tr>';
        echo '<th align="center">账号</th>';
        echo '<th align="center">密码</th>';
        echo '</tr>';
		
        $res = mysqli_query($link, "select * from user where username='$username'");
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
		echo "添加失败<br>";
		echo mysqli_error($link);
	}
	
	
	mysqli_close($link);
	
?>