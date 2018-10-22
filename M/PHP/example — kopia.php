<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>MusicEYEZ</title>

</head>
<body>
				<?php 
				if(isset($_SESSION['error']))echo $_SESSION['error']; 
				?>
</body>
</html>