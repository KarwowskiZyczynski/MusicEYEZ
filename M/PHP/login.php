<?php 
	session_start();
	
	if(!isset($_POST['login'])||(!isset($_POST['password'])))
	{
		header('Location: index.php');
		exit();
	}
	
	require_once"connect.php";

	$connection=@new mysqli($host,$db_user,$db_password,$db_name);
	
	if($connection->connect_errno!=0)
	{
		echo "Error".$connection->connect_errno;
	}
	else
	{
		$login=$_POST['login'];
		$password=$_POST['password'];
	
		$login=htmlentities($login,ENT_QUOTES, "UTF8");
		$password=htmlentities($password,ENT_QUOTES, "UTF8");
	
		if($result=@$connection->query(sprintf("SELECT * FROM uzytkownicy WHERE BINARY user='%s' AND  BINARY pass='%s'",
			mysqli_real_escape_string($connection,$login),
			mysqli_real_escape_string($connection,$password))))
			{
				$count_user=$result->num_rows;
		
				if($count_user>0)
				{
					$row=$result->fetch_assoc();
					$_SESSION['logged-in']=true;
					$_SESSION['id']=$row['id'];
					$_SESSION['user']=$row['user'];
					$_SESSION['email']=$row['email'];
					unset($_SESSION['error']);
					$result->free_result();
					header('Location: signedin.php');
				}
				else
					{
						$_SESSION['error']='<span style="color:red">Niepoprawny login lub hasło!</span>';
							header('Location: index.php');
					}
			}
		$connection->close();
	}
?>