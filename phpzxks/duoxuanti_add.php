<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$kemu=$_POST["kemu"];$timu=$_POST["timu"];$xuanxiangA=$_POST["xuanxiangA"];$xuanxiangB=$_POST["xuanxiangB"];$xuanxiangC=$_POST["xuanxiangC"];$xuanxiangD=$_POST["xuanxiangD"];$daan=$_POST["daan"];
	$sql="insert into duoxuanti(kemu,timu,xuanxiangA,xuanxiangB,xuanxiangC,xuanxiangD,daan) values('$kemu','$timu','$xuanxiangA','$xuanxiangB','$xuanxiangC','$xuanxiangD','$daan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='duoxuanti_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѡ��</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>��Ӷ�ѡ�⣺ ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.kemu.value==""){alert("�������Ŀ");document.form1.kemu.focus();return false;}if(document.form1.timu.value==""){alert("��������Ŀ");document.form1.timu.focus();return false;}if(document.form1.xuanxiangA.value==""){alert("������ѡ��A");document.form1.xuanxiangA.focus();return false;}if(document.form1.xuanxiangB.value==""){alert("������ѡ��B");document.form1.xuanxiangB.focus();return false;}if(document.form1.xuanxiangC.value==""){alert("������ѡ��C");document.form1.xuanxiangC.focus();return false;}if(document.form1.xuanxiangD.value==""){alert("������ѡ��D");document.form1.xuanxiangD.focus();return false;}if(document.form1.daan.value==""){alert("�������");document.form1.daan.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>��Ŀ��</td><td><select name='kemu' id='kemu'><?php getoption("kemuxinxi","kemu")?></select>&nbsp;*</td></tr><tr><td>��Ŀ��</td><td><textarea name='timu' cols='50' rows='8' id='timu'></textarea>&nbsp;*</td></tr><tr><td>ѡ��A��</td><td><input name='xuanxiangA' type='text' id='xuanxiangA' value='' size='50'  />&nbsp;*</td></tr><tr><td>ѡ��B��</td><td><input name='xuanxiangB' type='text' id='xuanxiangB' value='' size='50'  />&nbsp;*</td></tr><tr><td>ѡ��C��</td><td><input name='xuanxiangC' type='text' id='xuanxiangC' value='' size='50'  />&nbsp;*</td></tr><tr><td>ѡ��D��</td><td><input name='xuanxiangD' type='text' id='xuanxiangD' value='' size='50'  />&nbsp;*</td></tr><tr><td>�𰸣�</td><td><input name='daan' type='text' id='daan' value='' />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();" />
      <input type="reset" name="Submit2" value="����" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

