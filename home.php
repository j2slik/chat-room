<?php
define("PAGE_TITLE", "Chat Room");
?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<!--constant PAGE_TITLE-->
<title> <?php echo PAGE_TITLE; ?>
</title>
</head>
<body>
~

<div class='wrapper'>

<div class='header'>
<h1>Welcome to the Chat Room</h1>
</div>
<div class='content'>

<div id="chatbox"> 
</div>

 <form name="message" action="">
		<input name="usermsg" type="text" id="usermsg" size="63" />
		<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
	</form>
</div>
</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){

});
</script>


</body>
</html>

