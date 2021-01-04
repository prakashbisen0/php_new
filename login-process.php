<?php
	/* include($_SERVER['DOCUMENT_ROOT'].'/lib/bj-vars.php');
	include($_SERVER['DOCUMENT_ROOT'].'/lib/bj-notifications.php');
	$userName=isset($_POST['unm'])?$_POST['unm']:'';
	$pass=isset($_POST['psw'])?$_POST['psw']:'';
	$errcnt=0; */

		$mysqlConn=mysqli_connect('localhost','root','','photomgmt');
		if(isset($_POST['submit']))
		{
			if($userName=='')
			{
				$userNameError="Please enter user name";
				$errcnt++;
			}
			if($pass=='')
			{
				$passError="Please enter password";
				$errcnt++;
			}
			if($errcnt>0)
			{
			
				include('login-form.php');
			}
else
{
			if(mysqli_select_db('photomgmt'))
			{
		
				$selectDetails="SELECT * FROM admin WHERE userName='".$userName."'";
				$resultDetails=mysqli_query($selectDetails);
				if(mysqli_num_rows($resultDetails)>0)
				{
					while($loginDetails=mysqli_fetch_assoc($resultDetails))
					{
						if($userName == $loginDetails['userName'])
						{
							if($pass == $loginDetails['password'])
							{
								session_start();
								$_SESSION['isMember']=true;
								$_SESSION['id']=$loginDetails['id'];
								$_SESSION['user']=$userName;
							
						
								header('Location: '. $domain.'/dashboard');
							}
							
							
						}
						
								echo "Invalid User Name and Password".mysqli_error();
							
							
					}
					
				}
			}
		}
	}
		else
		{
			include('login-form.php');
		}
	
	

?>