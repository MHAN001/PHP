<?php
   header("content-type:text/html;charset=utf-8");
   
   $name=$_POST['name'];
   $password=$_POST['pass'];
   
   //���ݿ����ʵ����
	//��һ�����������ݿ�
	$link = mysqli_connect("localhost", "root", "940105")/* or die("�������ݿ�ʧ��")*/;
	
	if(!$link)//�ж������Ƿ�ɹ�
	{
		echo "���ݿ�����ʧ��";
		echo mysqli_error($link);	//������ɹ����ش�����Ϣ
	}
	//�ڶ��������ò���
	//�����ַ���
	mysqli_query($link, "set names utf8");
	
	//ѡ��һ�����ݿ���ΪĬ�ϲ������ݿ�
	mysqli_select_db($link, "test_php");
	
   $sql="select*from students where name='$name' and sno=$password";
   
   $reslut=mysqli_query($link, $sql);
   $cols=mysqli_num_rows($reslut);
   
   if($cols){
      header("location:stuchoose.html");
	  exit();
   }
   else{
      header("location:stulogin.html");
    }
   mysqli_close($link);
?>
