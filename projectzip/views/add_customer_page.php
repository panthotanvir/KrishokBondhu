
                    	<div class="emne">  
            				
                          	<table>
        						<tr>
        	 						<td></td>
             						<td><h1>বিক্রয়ের  বিজ্ঞাপন </h1></td>
             						<td></td>
       							</tr>
        
        						<tr><td></td>
            					<td>
            						<table align="center">
                    				<?php echo $error;?>
                  					<?php  $id = $nuser;
				  		//echo $id;
									?>
									<?php echo validation_errors(); ?>
									<?php echo form_open_multipart('product/do_upload');?>
                    				<tr><td>Product</td>
                                    <td><select name="title">
                    					<option value="rice">ধান</option>
                    					<option value="wheat">গম</option>
                    					<option value="jute">পাট</option>
                    				</select></td></tr>
									<tr><td>Amount</td><td><input type="text" name="amount" /></td></tr>
                    				<tr><td>Price</td><td><input type="text" name="price" /></td></tr>
                    				<tr><td>Production Date</td><td><input type="text" name="year"/>(year)<br/><input type="text" name="month"/>(month)<br/><input type="text" name="date"/>(date)</td></tr>
                    				<tr><td>Description</td><td><input type="text" name="description" /></td></tr>
									<tr><td>Image</td><td><input type="file" name="userfile" size="20" /></td></tr>
                    				<tr><td>Location</td><td><input type="text" name="location" /></td></tr>

									<br /><br />

				
               						
									<tr><td><input type="submit" value="upload" name="upload"/></td></tr>
								</form>
                    		</table>
                    
            </td>	
            <td>
            </td>
        </tr>
        </table>
         			</div>
                       