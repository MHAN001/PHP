<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$bianhao=$_POST["bianhao"];$kemu=$_POST["kemu"];$danxuantishu=$_POST["danxuantishu"];$danxuanfenzhi=$_POST["danxuanfenzhi"];$duoxuantishu=$_POST["duoxuantishu"];$duoxuanfenzhi=$_POST["duoxuanfenzhi"];
	$sql="select id from danxuanti where kemu='$kemu' order by rand() limit ".$danxuantishu." ";
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 {
	 	$danxuanti=$danxuanti.mysql_result($query,$i,"id").",";
	 }
	 $danxuanti=substr($danxuanti,0,strlen($danxuanti)-1);
	 
	 $sql="select id from duoxuanti order by rand() limit ".$duoxuantishu." ";
	$query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 {
	 	$duoxuanti=$duoxuanti.mysql_result($query,$i,"id").",";
	 }
	 $duoxuanti=substr($duoxuanti,0,strlen($duoxuanti)-1);
	 
	$sql="insert into shijuanshengcheng(bianhao,kemu,danxuantishu,danxuanfenzhi,duoxuantishu,duoxuanfenzhi,danxuanti,duoxuanti) values('$bianhao','$kemu','$danxuantishu','$danxuanfenzhi','$duoxuantishu','$duoxuanfenzhi','$danxuanti','$duoxuanti') ";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');location.href='shijuanshengcheng_add.php';</script>";
	
	 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>试卷生成</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>添加试卷生成： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.bianhao.value==""){alert("请输入编号");document.form1.bianhao.focus();return false;}if(document.form1.danxuantishu.value==""){alert("请输入单选题数");document.form1.danxuantishu.focus();return false;}if(document.form1.danxuanfenzhi.value==""){alert("请输入单选分值");document.form1.danxuanfenzhi.focus();return false;}if(document.form1.duoxuantishu.value==""){alert("请输入多选题数");document.form1.duoxuantishu.focus();return false;}if(document.form1.duoxuanfenzhi.value==""){alert("请输入多选分值");document.form1.duoxuanfenzhi.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>编号：</td><td><input name='bianhao' type='text' id='bianhao' value='' />&nbsp;*</td></tr>
	<tr>
	  <td>科目：</td>
	  <td><select name='kemu' id='kemu'>
	    <?php getoption("kemuxinxi","kemu")?>
	    </select>
	  </td>
    </tr>
	<tr><td>单选题数：</td><td><input name='danxuantishu' type='text' id='danxuantishu' value='' />&nbsp;*</td></tr><tr><td>单选分值：</td><td><input name='danxuanfenzhi' type='text' id='danxuanfenzhi' value='' />&nbsp;*</td></tr>
<tr><td>多选题数：</td><td><input name='duoxuantishu' type='text' id='duoxuantishu' value='' />&nbsp;*</td></tr><tr><td>多选分值：</td><td><input name='duoxuanfenzhi' type='text' id='duoxuanfenzhi' value='' />&nbsp;*</td></tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

