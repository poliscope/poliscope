<?php
session_start();
?>
<html>
<head>
<body>
<?php
           $pi=$_POST['pid'];
		   $id=$_POST['poliid'];
		   $_SESSION['sp']=$pi;
		   $_SESSION['tempid']=$id;
		   /*if(!empty($_GET["speak"]))
		   header("Location:polispeakup.php");
	       if(!empty($_GET["comment"]))*/
		   header("Location:policomment.php");
?>
</body>
</head>
</html>