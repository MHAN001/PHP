<?php 
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�Ծ�����</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>�����Ծ������б�</p>
<form id="form1" name="form1" method="post" action="">
  ����:���:
  <input name="bh" type="text" id="bh" />
  ��Ŀ:
  <input name="mc" type="text" id="mc" />
  <input type="submit" name="Submit" value="����" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">���</td>
    <td bgcolor='#EBE2FE'>���</td>
    <td bgcolor='#EBE2FE'>��Ŀ</td>
    <td bgcolor='#EBE2FE'>��ѡ����</td><td bgcolor='#EBE2FE'>��ѡ��ֵ</td><td bgcolor='#EBE2FE'>��ѡ����</td><td bgcolor='#EBE2FE'>��ѡ��ֵ</td>
    <td width="120" align="center" bgcolor="#EBE2FE">���ʱ��</td>
    <td width="70" align="center" bgcolor="#EBE2FE">����</td>
  </tr>
  <?php 
    $sql="select * from shijuanshengcheng where 1=1";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and bianhao like '%$nreqbh%'";
}
     if ($_POST["mc"]!="")
{
  	$nreqmc=$_POST["mc"];
  	$sql=$sql." and kemu like '%$nreqmc%'";
}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,bianhao);?></td>
    <td><?php echo mysql_result($query,$i,kemu);?></td>
    <td><?php echo mysql_result($query,$i,danxuantishu);?></td><td><?php echo mysql_result($query,$i,danxuanfenzhi);?></td><td><?php echo mysql_result($query,$i,duoxuantishu);?></td><td><?php echo mysql_result($query,$i,duoxuanfenzhi);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="70" align="center"><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=shijuanshengcheng" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="shijuan_detail.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>">�鿴</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php
		echo $rowscount;
	?>��,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" />
</p>
<p align="center"><a href="shijuanshengcheng_list.php?pagecurrent=1">��ҳ</a>, <a href="shijuanshengcheng_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="shijuanshengcheng_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="shijuanshengcheng_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

<p>&nbsp; </p>

</body>
</html>

