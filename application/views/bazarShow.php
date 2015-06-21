
                    <div class="emne">  
            				<h2 align="center"> বাজার দর</h2>
                            
							
							<table align="center" cellpadding="2" cellspacing="1" bordercolor="#000000" bgcolor="#000000" >
  							 	
  							<tr><td>পণ্য</td><td>পণ্যের মূল্য </td><td>পণ্যের উৎপাদনের জেলা</td><td>পণ্য উৎপাদনের তারিখ</td><td>পরিসংখ্যান</td></tr>
    					 			<?php foreach($result->result_array() as $row){?>
                                    <tr><td><?php echo $row['product_name']?></td>
                                        <td><?php echo $row['product_price']?></td>
                                        <td><?php echo $row['product_district']?></td>
  								        <td><?php echo $row['product_date']?> </td>
                                        <td><?php echo $row['product_stat']?> </td>
                                        </tr>
                                        <?php } ?>
  								
  								
						</table>
 					<br /><br/>

					
         			</div>
                  