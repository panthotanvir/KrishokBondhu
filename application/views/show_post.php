
                    <div class="row-fluid"> 
					<div class="span12 well"> 
            				<h2 align="center">আমার বিক্রয় বিজ্ঞাপনের তালিকা  </h2>
                            
							<?php foreach($image->result_array() as $row){?>
							<table align="center">
  							 	<tr><td>বিক্রয় নম্বর</td>
    								<td><?php echo $row['sell_id']?></td>
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
  								
  								<tr><td>পণ্যের ছবি</td>
    								<td><img src="<?php echo base_url()."uploads/".$row['image_name']; ?>" height="150px" width="150px"/></td>
  								</tr>
						</table>
 					<br /><br/>

					<?php } ?>
         			</div>
         			</div>
                  
