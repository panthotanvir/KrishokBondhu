<div class="row-fluid"> 
	<div class="span12 well text-center">
    <?php if($_SESSION['y']==1){?>
    <h4> আপনার পিন নম্বর অথবা শব্দচাবি ভুল হয়েছে, পুনরায় প্রবেশ করুন।</h4><?php $_SESSION['y']=0; }else{?>
    <h4> দয়া করে প্রবেশ করুন ।</h4><?php } ?>
                       <table border="0" cellspacing="0" cellpadding="0" align="center">
                    
                    
                    <?php echo "<form method=\"post\" action=\"". base_url() . "index.php/user/login\">" ;?>
                        <tr><td colspan="2"> ব্যবহারকারীর পিন নম্বর </td><td> <input type="text" name="user"></td></tr>
                        <tr><td colspan="2"> শব্দচাবি</td><td> <input type="password" name="password"></td></tr>
                        
                        <tr><td align="right"  ><input type="submit" name="login" value="প্রবেশ করুন"></td></tr>
                        
                        
                   
                        
      
</table>
</div>
</div>
