<?php
//��֤��½��Ϣ
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$login=$_POST["login"];
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$cx=$_POST['cx'];
	//$userpass=md5($userpass);
	if($login=="1")
	{
		if ($username!="" && $pwd!="")
		{
		if($cx=="����Ա")
		{
			$sql="select * from allusers where username='$username' and pwd='$pwd'";
		}
		else
		{
			$sql="select * from kaosheng where yonghuming='$username' and mima='$pwd'";
		}
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					if($cx=="����Ա")					
					{
						$_SESSION['cx']=mysql_result($query,0,"cx");
					}
					else
					{
						$_SESSION['cx']=$cx;
					}
					echo "<script language='javascript'>alert('��½�ɹ���');location='main.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('�û������������');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('������������');history.back();</script>";
		}
	}
	
//}
?>