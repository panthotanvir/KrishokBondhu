<div class="row-fluid"> 
	<div class="span6 offset3 well text-center">
		<?php echo validation_errors(); ?> 
		<h3 align="center"> নিবন্ধন ফর্ম<h3>
		<?php echo "<form method=\"post\" action=\"". base_url() . "index.php/user/sign\">" ;?>
			<table width="100%" align="center" >
			
			<tr>
			<td>নাম</td><td><input type="text" name="user_name" /></td>
			</tr>
			<tr>
			<td>পাসওয়ার্ড</td><td><input type="password" name="password" /></td>
			</tr>
			<tr>
			<td>পাসওয়ার্ড নিশ্চিত করুন</td><td><input type="password" name="confirm_password" /></td>
			</tr>
			<tr>
			<td>জাতীয় পরিচয়পত্র নম্বর </td><td><input type="text" name="national_id" /></td>
			</tr>
			<tr>
			<td>বিভাগ</td><td><input type="text" name="division" /></td>
			</tr>
			<tr>
			<td>জেলা</td><td><input type="text" name="district_name"/></td>
			</tr>
			<tr>
			<td>উপজেলা</td><td><input type="text" name="subdistrict_name"</td>
			</tr>
			<tr>
			<td>ঠিকানা </td><td><input type="text" name="address" /></td>
			</tr>
			<tr>
			<td>মোবাইল নম্বর</td><td><input type="text" name="phone_no" /></td>
			</tr>
			</table>
			<input class="btn btn-large" type="submit" name="submit" value="নিবন্ধন করুন"/>
		</form>
	</div>
</div>
                        
