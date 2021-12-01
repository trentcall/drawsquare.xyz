<!DOCTYPE html>
<html>
<head>
<title>horizontal</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="ten">


<pre>
<?php

//var_dump($_GET);


$horz = $_GET['horz'];

//echo '<h1>'.$horz.'</h1>';

?>


<div class="scrollhr center">
<img src="imgtwo/<?=$horz?>.jpg" class="center">
</div>



<div class="navtwo twoa">
<a class="twoa" href="two.php?horz=payson"><b>payson</b></a>
<a class="twoa" href="two.php?horz=337wall"><b>wall</b></a>
<a class="twoa" href="two.php?horz=milk_honey"><b>m&h</b></a>
<a class="twoa" href="two.php?horz=studio"><b>studio</b></a>
</div>


</pre>

<div class="nav pink">
<h2><a href="pickles.html"><b>&lt;</b></a></h2>
<br>
<h2><a href="index.html"><b>\</b></a></h2>
<br>
<h2><a href="hamburgler.html"><b>&gt;</b></a></h2>
</div>
<div class="about">
<a href="about.html"><b alt="about" onClick="chw=window.open('about.html','NewWindow','resizable=no,scrollbars=no,status=yes,width=500,height=475'); if (chw != null) chw.focus(); return false">*</b></a>
</div>









<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6608161-5");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>