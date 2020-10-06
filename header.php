<html>
<head> 
<link rel="stylesheet" type="text/css" href="main.css"> 
</head>
<body bgcolor="53e060">
<div id="topofpage"><img src="Logo.png" align=center alt="Lafeberhof Woonerf">Lafeberhof.nl</div>
<?php
$menu = file('site.menu',FILE_IGNORE_NEW_LINES); 
print("<div id=\"navbar\">\n");
foreach ($menu as $menuitem) 
	{
	if ($menuitem==$PageName) 
		{
	print("<a id=\"active\" href=\"$menuitem.php\">$menuitem</a>\n") ;
		}
 	else 
		{
	print("<a href=\"$menuitem.php\">$menuitem</a>\n") ;
		}
        }
?>
</div>
<h3>
<?php echo $PageTitle ?>
</h3>

