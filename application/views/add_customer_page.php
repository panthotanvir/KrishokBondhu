<div class="row-fluid"> 
	<div class="span6 offset3 well text-center"> 
		<h1>বিক্রয়ের  বিজ্ঞাপন </h1>
								
								<?php echo $error;?>
								<?php  $id = $nuser;
					//echo $id;
								?>
								<?php echo validation_errors(); ?>
								<?php echo form_open_multipart('product/do_upload');?>
								
								<table width="100%">
								<tr><td>পণ্যের নাম</td>
								<td><input type="text" name="title"/></td></tr>
								<tr><td>পরিমাণ(কেজি)</td><td><input type="text" name="amount" /></td></tr>
								<tr><td>দাম(প্রতি কেজি)</td><td><input type="text" name="price" /></td></tr>
								<tr><td>উৎপাদনের তারিখ</td><td><input type="date" name="production_date"/></td></tr>
								<tr><td>বর্ণনা</td><td><textarea name="description"></textarea></td></tr>
							
										
								
								<tr><td>ছবি</td><td><input type="file" name="userfile" /></td></tr>
								
								</table>
								<input class="btn btn-large" type="submit" value="প্রকাশ করুন" name="upload"/>
							</form>
						
				
		</td>	
		<td>
		</td>
	</tr>
	</table>
</div>
</div>
         			
                       
