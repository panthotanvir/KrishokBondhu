<div class="row-fluid">
	<div class="span12 well">  
            				<h2 align="center">আমার ক্রয় বিজ্ঞাপনের তালিকা </h2>
                            
							<?php foreach($image->result_array() as $row){?>
							<table align="center">
  							 	<tr><td>ক্রয় নম্বর</td>
    								<td><?php echo $row['buy_id']?></td>
  								</tr>
  								<tr><td>পণ্য</td>
    								<td><?php echo $row['title']?></td>
  								</tr>
  								<tr><td>বিবরণ</td>
                                	<td><?php echo $row['description']?></td>
  								</tr
 								<tr><td>সময়শীমা</td>
    								<td><?php echo $row['require_date']?></td>
  								</tr>
  								<tr><td>পরিমান(কেজি)</td>
    								<td><?php echo $row['amount']?> </td>
  								</tr>
  								<tr><td>মূল্য(প্রতি কেজি)</td>
    								<td><?php echo $row['price']?> </td>
  								</tr>
  								
						</table>
 					<br /><br/>

					<?php } ?>
         			</div>
                    </div>
                  
