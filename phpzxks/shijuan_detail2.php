<?php 
include_once 'conn.php';
session_start();
$id=$_GET["id"];
$jj=$_POST["jj"];
if ($jj=="1" )
{
	
	$sql="select * from shijuanshengcheng where id=".$id;
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	$cj=0;
	 $sql2="select * from danxuanti where id in (".mysql_result($query,$i,danxuanti).")";
	$query2=mysql_query($sql2);
	$rowscount2=mysql_num_rows($query2);
	if($rowscount2>0)
	{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
	 	//echo $_POST["xztxxa".$i2];
		//echo "666";
		//echo $_POST["xztshitida".$i2];
		//echo "<br>";
		 if ($_POST["xztxxa".$i2]==$_POST["xztshitida".$i2]) 
		 {
		 	//echo $cj;
			$cj=$cj+mysql_result($query,0,danxuanfenzhi);
		 }
	 }
	 
	 }   //��ѡ������
	 $cj2=0;
	  $sql2="select * from duoxuanti where id in (".mysql_result($query,$i,duoxuanti).")";
	$query2=mysql_query($sql2);
	$rowscount2=mysql_num_rows($query2);
	if($rowscount2>0)
	{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
	 	//echo $_POST["xztxxa".$i2];
		//echo "666";
		//echo $_POST["xztshitida".$i2];
		//echo "<br>";
		 if ($_POST["dxtxxa".$i2]==$_POST["dxtshitida".$i2]) 
		 {
		 	//echo $cj;
			$cj2=$cj2+mysql_result($query,0,duoxuanfenzhi);
		 }
	 }
	 
	 }
	 $zf=$cj+$cj2;
	$sql="insert into chengji(yonghuming,danxuanti,duoxuanti,zf,bianhao,kemu) values('".$_SESSION["username"]."',".$cj.",".$cj2.",".$zf.",'".mysql_result($query,$i,bianhao)."','".mysql_result($query,$i,kemu)."')";
	mysql_query($sql);
	echo "<script>javascript:alert('����ɹ�!�����γɼ�Ϊ����ѡ��".$cj."�֣���ѡ��".$cj2."�֣��ܷ�".$zf."��!');location.href='chengji2.php';</script>";
	 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѡ��</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<?php
$sql="select * from shijuanshengcheng where id=".$id;
$query=mysql_query($sql);//ִ�в�ѯ
$rowscount=mysql_num_rows($query);//��������е���
if($rowscount>0)
{
?>

<p>�Ծ��ţ�<?php echo mysql_result($query,$i,bianhao)?>����Ŀ��<?php echo mysql_result($query,$i,kemu)?> ʱ�䣺2Сʱ�����ڿ�ʼ��ʱ��ʣ��<SPAN id=tiao></SPAN>�� </p>
<SCRIPT language=javascript>


function clock(){i=i-1;
document.getElementById('tiao').innerHTML=i;
if(i>0) {
setTimeout("clock();",1000);//ÿ��ˢ��
}
else {

alert("����ʱ�䵽��ϵͳ�Զ�����");
document.form1.submit();
}
}
var i=7200;
clock()

</SCRIPT>


<table bgcolor="#ffffff" border="0" cellspacing="0" 
                              height="203" width="100%">
  <tbody>
    <tr>
      <td><form action="?id=<?php echo $id?>" method="post" name="form1" id="form1">
        <table width="100%" height="103" border="1" cellpadding="1" cellspacing="0" bordercolor="#F8C878">
          <tr>
            <td height="33" colspan="3">��ѡ��</td>
          </tr>
		  
		  
         <?php
$sql2="select * from danxuanti where id in (".mysql_result($query,$i,danxuanti).")";
$query2=mysql_query($sql2);
$rowscount2=mysql_num_rows($query2);
if($rowscount2>0)
{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
?>

          <tr>
            <td width="9%" height="33">���⣺</td>
            <td colspan="2">��Ŀ��<?php echo mysql_result($query2,$i2,timu)?>
                  <input name="xztshitida<?php echo $i2?>" type="hidden" id="xztshitida<?php echo $i2?>" value="<?php echo mysql_result($query2,$i2,daan)?>" /></td>
          </tr>
          <tr>
            <td rowspan="2">ѡ��</td>
            <td width="52%"><input type="radio" name="xztxxa<?php echo $i2?>" value="A" />
              ѡ��A��<?php echo mysql_result($query2,$i2,xuanxiangA)?></td>
            <td width="39%"><input type="radio" name="xztxxa<?php echo $i2?>" value="B" />
              ѡ��B��<?php echo mysql_result($query2,$i2,xuanxiangB)?></td>
          </tr>
          <tr>
            <td><input type="radio" name="xztxxa<?php echo $i2?>" value="C" />
              ѡ��C��<?php echo mysql_result($query2,$i2,xuanxiangC)?></td>
            <td><input type="radio" name="xztxxa<?php echo $i2?>" value="D" />
              ѡ��D��<?php echo mysql_result($query2,$i2,xuanxiangD)?></td>
          </tr>
		  
         <?php
		 }
	}
?> 
        </table>
		
		 <table width="100%" height="103" border="1" cellpadding="1" cellspacing="0" bordercolor="#F8C878">
          <tr>
            <td height="33" colspan="3">��ѡ��</td>
          </tr>
         <?php
$sql2="select * from duoxuanti where id in (".mysql_result($query,$i,duoxuanti).")";
$query2=mysql_query($sql2);
$rowscount2=mysql_num_rows($query2);
if($rowscount2>0)
{
	 for($i2=0;$i2<$rowscount2;$i2++)
	 {
?>
          <tr>
            <td width="9%" height="33">���⣺</td>
            <td colspan="2">��Ŀ��<?php echo mysql_result($query2,$i2,timu)?>
                  <input name="dxtshitida<?php echo $i2?>" type="hidden" id="dxtshitida<?php echo $i2?>" value="<?php echo mysql_result($query2,$i2,daan)?>" />
                  ���Ĵ𰸣�
                  <input name="dxtxxa<?php echo $i2?>" type="text" id="dxtxxa<?php echo $i2?>" /></td>
          </tr>
          <tr>
            <td rowspan="2">ѡ��</td>
            <td width="52%">              ѡ��A��<?php echo mysql_result($query2,$i2,xuanxiangA)?></td>
            <td width="39%">              ѡ��B��<?php echo mysql_result($query2,$i2,xuanxiangB)?></td>
          </tr>
          <tr>
            <td>              ѡ��C��<?php echo mysql_result($query2,$i2,xuanxiangC)?></td>
            <td>              ѡ��D��<?php echo mysql_result($query2,$i2,xuanxiangD)?></td>
          </tr>
         <?php
		 }
	}
?>
        </table>
		 <input type="submit" name="Submit" value="����" />
         <input name="jj" type="hidden" id="jj" value="1" />
      </form>
          <p>&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp; </p>
<?php
	}
?>
</body>
</html>

