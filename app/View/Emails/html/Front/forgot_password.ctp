Hello <?php echo ucwords($userArr['User']['first_name']);?>, <br/><br/>

You seem to have forgotten your login password but we have reset the same for you.<br/><br/>
Your new login credentials are as, <br/><br/>

Username: <?php echo $userArr['User']['email'];?><br/><br/>
Password: <?php echo $tempPass;?><br/><br/>

We request you to please login to your account and change the password.
