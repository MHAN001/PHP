<?php 
session_start();
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$yonghuming=$_POST["yonghuming"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$dianhua=$_POST["dianhua"];$xingbie=$_POST["xingbie"];$youxiang=$_POST["youxiang"];$shenfenzheng=$_POST["shenfenzheng"];$dizhi=$_POST["dizhi"];$zhaopian=$_POST["zhaopian"];
	$sql="update kaosheng set yonghuming='$yonghuming',mima='$mima',xingming='$xingming',dianhua='$dianhua',xingbie='$xingbie',youxiang='$youxiang',shenfenzheng='$shenfenzheng',dizhi='$dizhi',zhaopian='$zhaopian' where yonghuming='".$_SESSION['username']."'";
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='kaosheng_updt2.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改考生</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>修改个人信息： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from kaosheng where yonghuming='".$_SESSION['username']."'";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>用户名：</td><td><input name='yonghuming' type='text' id='yonghuming' value='<?php echo mysql_result($query,$i,yonghuming);?>' />
      *此项不得修改</td>
      </tr><tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='<?php echo mysql_result($query,$i,mima);?>' /></td></tr><tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='<?php echo mysql_result($query,$i,xingming);?>' /></td></tr><tr><td>电话：</td><td><input name='dianhua' type='text' id='dianhua' value='<?php echo mysql_result($query,$i,dianhua);?>' /></td></tr><tr><td>性别：</td><td><input name='xingbie' type='text' id='xingbie' value='<?php echo mysql_result($query,$i,xingbie);?>' /></td></tr><tr><td>邮箱：</td><td><input name='youxiang' type='text' id='youxiang' value='<?php echo mysql_result($query,$i,youxiang);?>' /></td></tr><tr><td>身份证：</td><td><input name='shenfenzheng' type='text' id='shenfenzheng' size='50' value='<?php echo mysql_result($query,$i,shenfenzheng);?>' /></td></tr><tr><td>地址：</td><td><input name='dizhi' type='text' id='dizhi' size='50' value='<?php echo mysql_result($query,$i,dizhi);?>' /></td></tr><tr><td>照片：</td><td><input name='zhaopian' type='text' id='zhaopian' size='50'  value='<?php echo mysql_result($query,$i,zhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

