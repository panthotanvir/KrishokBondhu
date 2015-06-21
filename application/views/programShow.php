
                    <div class="emne">  
            				<h2 align="center"> Program Information</h2>
                            
							
							<table align="center" cellpadding="2" cellspacing="1" bordercolor="#000000" bgcolor="#000000" >
  							 	
  							<tr><td>প্রোগ্রামের নাম</td><td>চ্যানেলের নাম</td><td>সময়সূচী </td><td>পরিদর্শন </td>
    					 			<?php foreach($result->result_array() as $row){?>
                                    <tr><td><?php echo $row['program_name']?></td>
                                        <td><?php echo $row['channel_name']?></td>
                                        <td><?php echo $row['program_schedule']?></td>
  								        <td><?php echo $row['program_overview']?> </td>
                                       
                                        </tr>
                                        <?php } ?>
  								
  								
						</table>
 					<br /><br/>

					
         			</div>
                  