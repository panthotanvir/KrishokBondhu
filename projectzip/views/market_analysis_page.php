<div id="market">
<?php foreach($result->result_array() as $row){?>
							<table align="center">
  							 
  								<tr><td>পণ্য</td>
    								<td><?php echo $row['product_name']?></td>
  								</tr>
  								<tr><td>দাম</td>
                                	<td><?php echo $row['product_price']?></td>
  								</tr>
 								<tr><td>পণ্যের পরিসংখ্যান</td>
    								<td><?php echo $row['product_stat']?>%</td>
  								</tr>
  								
  								
						</table>
                        <?php }?>
</div>