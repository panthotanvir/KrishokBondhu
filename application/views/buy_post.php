	<div class="row-fluid"> 
	<div class="span6 offset3 well text-center"><table align="center">
		<h1>ক্রয়ের  বিজ্ঞাপন </h1>
			
			<?php echo $error;?>
			<?php  $id = $nuser;
			?>
			<?php echo validation_errors(); ?>
			<?php echo form_open_multipart('product/buyPostConfirm');?>
			<table width="100%">
			<tr><td>পণ্যের নাম</td>
			<td><input type="text" name="title"/></td></tr>
			<tr><td>পরিমাণ(কেজি)</td><td><input type="text" name="amount" /></td></tr>
			<tr><td>দাম(প্রতি কেজি)</td><td><input type="text" name="price" /></td></tr>
			<tr><td>সময়সীমা</td><td><input type="date" name="required_date"/></td></tr>
			<tr><td>বর্ণনা</td><td><textarea name="description"></textarea></td></tr>
			
			</table>
			<input type="submit" class="btn btn-large" value="প্রকাশ করুন" name="upload"/>
		</form>
                    		
</div>
</div>
