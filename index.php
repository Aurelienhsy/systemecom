<?php
if($_POST){
	$name=$_POST['pseudo'];
	$content=$_POST['comContent'];
	$handle=fopen("commentaires.php","a");
	fwrite($handle, "<b>" . $name . "</b>:<br/>" . $content . "<br/>");
	fclose($handle);
}	

?>

<?xml version="1.0" encoding="iso-8859-1" standalone="yes"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Site g�n�raliste</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Language" content="fr" />
<meta name="robots" content="all" /> 
<meta name="Copyright" content="&copy; 2016 site" /> 
<meta name="author" content="auteur" /> 
<meta name="reply-to" content ="site@site.fr" /> 
<meta name="description" content="e-commerce"/> 
<meta name="keywords" content="e-commerce"/> 
</head>

<body>

<div id="header">
</div>

<div id="menu">

</div>

<div id="corps">
<form action="" method="POST">
Pseudo : <input type="text" name="pseudo"><br/>
Commentaires : <textarea rows="10" cols="30" name="comContent"></textarea><br/>
<input type="submit" value="Commenter"><br/>
</form>
<?php include "commentaires.php";
?>
</div>
	
<div id="foot">
</div>	

</body>
</html>