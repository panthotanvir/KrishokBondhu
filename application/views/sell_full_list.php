
                    <div class="emne">  
            				<h2 align="center"> বিক্রয়ের তালিকা </h2>
                            
							<?php foreach($sellList->result_array() as $row){?>
							<table align="center">
  							 	<tr><td>বিক্রয় নম্বর</td>
    								<td><?php echo $row['sell_id']?></td>
  								</tr>
								<tr><td>নাম</td>
    								<td><?php echo $row['user_name']?></td>
  								</tr>
  								<tr><td>মোবাইল</td>
    								<td><?php echo $row['phone_no']?></td>
  								</tr>
  								<tr><td>পণ্য</td>
    								<td><?php echo $row['title']?></td>
  								</tr>
  								<tr><td>বিবরণ</td>
                                	<td><?php echo $row['description']?></td>
  								</tr>
 								<tr><td>উৎপাদনের তারিখ</td>
    								<td><?php echo $row['production_date']?></td>
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
  								<tr><td>পণ্যের ছবি</td>
    								<td><img src="<?php echo base_url()."uploads/".$row['image_name']; ?>" height="150px" width="150px"/></td>
  								</tr>
						</table>
 					<br /><br/>

					<?php } ?>
         			</div>
                  
