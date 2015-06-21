
                    <div class="emne">  
            				<h2 align="center"> Crop Information</h2>
                            
							<?php foreach($result->result_array() as $row){?>
							<table align="center">
  							 	
  								<tr><td>পণ্য</td>
    								<td><?php echo $row['title']?></td>
  								</tr>
  								<tr><td>পণ্যের জাত</td>
                                	<td><?php echo $row['type']?></td>
  								</tr>
 								<tr><td>পণ্যের উপজাত</td>
    								<td><?php echo $row['subtype']?></td>
  								</tr>
  								<tr><td>পণ্যের বিবরণ</td>
    								<td><?php echo $row['description']?> </td>
  								</tr>
  								<tr><td>চাষাবাদ</td>
    								<td><?php echo $row['cultivation']?> </td>
  								</tr>
  								<tr><td>কীটনাশক</td>
    								<td><?php echo $row['insecticide']?></td>
  								</tr>
                                <tr><td>সার </td>
    								<td><?php echo $row['fertilizer']?></td>
  								</tr>
  								
						</table>
 					<br /><br/>

					<?php } ?>
         			</div>
                  