<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>welcome</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/m_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="66%" height="68%" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td valign="top"><p>��ӭ���롵���� </p>
      <p><br>���߿���ϵͳ </p>
		�����˻���Ϣ��
      <p class="td2">
	  <?php
	  session_start();
	  include_once 'conn.php';
	  $login=$_POST["login"];
	  $username=$_POST['username'];
	  $pwd=$_POST['pwd'];
	  $cx=$_POST['cx'];
	  
	  ?></p>
      <p class="td2">�绰:XXXXX</p>
      <p class="td2">�ֻ�:XXXX</p>
      <p class="td2">����:XXXXX</p>
      <p class="td2">��ַ:XXXXXXXXXXXXX<a href="mailto:zhouyufay@126.com"></a></p>
      <p class="welcome">&nbsp;</p></td>
  </tr>
</table>
<p class="welcome">&nbsp;</p>
</body>
</html>

