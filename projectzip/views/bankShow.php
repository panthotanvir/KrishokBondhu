
                    <div class="emne">  
            				<h2 align="center"> ank Information</h2>
                            
							
							<table align="center" cellpadding="2" cellspacing="1" bordercolor="#000000" bgcolor="#000000" >
  							 	
  							<tr><td>ব্যাঙ্কের নাম</td><td>ঋণের বিবরণ </td><td>ব্যাংক ওয়েবসাইট </td>
    					 			<?php foreach($result->result_array() as $row){?>
                                    <tr><td><?php echo $row['bank_name']?></td>
                                        <td><?php echo $row['bank_loan']?></td>
                                        <td><a href="<?php echo $row['bank_website']?>"/><?php echo $row['bank_name']?></td>
  								        
                                       
                                        </tr>
                                        <?php } ?>
  								
  								
						</table>
 					<br /><br/>

					
         			</div>
                  