<?php 
include_once 'conn.php';
$id=$_GET["id"];
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
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<p>�Ծ��ţ�<?php echo mysql_result($query,$i,bianhao)?>����Ŀ��<?php echo mysql_result($query,$i,kemu)?></p>
<table bgcolor="#ffffff" border="0" cellspacing="0" 
                              height="203" width="100%">
  <tbody>
    <tr>
      <td><form action="" method="post" name="form1" id="form1">
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
                  <input name="xztshitida<?php echo mysql_result($query2,$i2,id)?>" type="hidden" id="xztshitida<?php echo mysql_result($query2,$i2,id)?>" value="<?php echo mysql_result($query2,$i2,daan)?>" /></td>
          </tr>
          <tr>
            <td rowspan="2">ѡ��</td>
            <td width="52%"><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="A" />
              ѡ��A��<?php echo mysql_result($query2,$i2,xuanxiangA)?></td>
            <td width="39%"><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="B" />
              ѡ��B��<?php echo mysql_result($query2,$i2,xuanxiangB)?></td>
          </tr>
          <tr>
            <td><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="C" />
              ѡ��C��<?php echo mysql_result($query2,$i2,xuanxiangC)?></td>
            <td><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="D" />
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
                  <input name="xztshitida<?php echo mysql_result($query2,$i2,id)?>" type="hidden" id="xztshitida<?php echo mysql_result($query2,$i2,id)?>" value="<?php echo mysql_result($query2,$i2,daan)?>" /></td>
          </tr>
          <tr>
            <td rowspan="2">ѡ��</td>
            <td width="52%"><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="A" />
              ѡ��A��<?php echo mysql_result($query2,$i2,xuanxiangA)?></td>
            <td width="39%"><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="B" />
              ѡ��B��<?php echo mysql_result($query2,$i2,xuanxiangB)?></td>
          </tr>
          <tr>
            <td><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="C" />
              ѡ��C��<?php echo mysql_result($query2,$i2,xuanxiangC)?></td>
            <td><input type="radio" name="xztxxa<?php echo mysql_result($query2,$i2,id)?>" value="D" />
              ѡ��D��<?php echo mysql_result($query2,$i2,xuanxiangD)?></td>
          </tr>
         <?php
		 }
	}
?>
        </table>
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

