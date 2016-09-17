<?php session_start(); ?>
<?php include('templates/header.php');?>
</center>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>my web page</title>
<style>
body{margin-top:-2px}
table{margin:auto;}

a{border-radius:10px;text-decoration:none;margin-left:6%;font-size:25px;font-style:italic}
a:hover{color:#00FF00;background:#660099}
</style>
</head>
<body>
<table width="100%" height="100%" border="0">
  <tr>
    <td height="165" colspan="2" bgcolor="#663399" style="background-image:url(image/logo1.JPG)"><h1 align="center"><font color="#FFFF00" face="cursive">Mail Server Project</h1></td>
  </tr>
  <tr>
    <td height="42" colspan="2" bgcolor="#FF00CC">
	<a href="index.php">HOME</a>
	<a href="index.php?option=about">ABOUT</a>
	<a href="index.php?option=service">SERVICES</a>
	<a href="index.php?option=contact">CONTACT</a>
	<a href="index.php?option=registration">REGISTRATION</a>
	<a href="index.php?option=login">LOGIN</a>
	</td>
  </tr>
  <tr>
    <td width="801" height="450" valign="top" bgcolor="#FFCCFF">
	<?php
	@$opt=$_GET['option'];
	//echo $opt;
	if($opt=="")
	{
	?>
	
	
	
	<br/>
	<?php
	}
	else
	{
	switch($opt)
	{
	case 'login';
	include('login.php');
	break;
	case 'about';
	include('about.php');
	break;
	case 'service';
	include('services.php');
	break;
	case 'registration';
	include('regis.php');
	break;
	case 'contact';
	include('contact.php');
	break;
	case 'fpass';
	include('forgotpass.php');
	break;
	}
	}
	?>
	</td>
    <td width="275" bgcolor="#999999" valign="top"><h2>Latest News</h2></td>
  </tr>
  <tr>
    <td colspan="2" align="center">Doveloped By @Osheenn</td>
  </tr>
</table>
</body>
</html>
