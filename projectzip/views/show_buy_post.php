
                    <div class="emne">  
            				<h2 align="center"> কৃষি বার্তা </h2>
                            
							<?php foreach($image->result_array() as $row){?>
							<table align="center">
  							 	<tr><td>বিক্রয় নম্বর</td>
    								<td><?php echo $row['buy_id']?></td>
  								</tr>
  								<tr><td>পণ্য</td>
    								<td><?php echo $row['title']?></td>
  								</tr>
  								<tr><td>বিবরণ</td>
                                	<td><?php echo $row['description']?></td>
  								</tr>
 								<tr><td>তারিখ</td>
    								<td><?php echo $row['require_date']?></td>
  								</tr>
  								<tr><td>পরিমান</td>
    								<td><?php echo $row['amount']?> কেজি</td>
  								</tr>
  								<tr><td>মূল্য</td>
    								<td><?php echo $row['price']?> (প্রতি কেজি)</td>
  								</tr>
  								<tr><td>স্থান</td>
    								<td><?php echo $row['location']?></td>
  								</tr>
						</table>
 					<br /><br/>

					<?php } ?>
         			</div>
                  