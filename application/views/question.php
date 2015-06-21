<div class="row-fluid">
	<div class="span12 well">
	<h2>নতুন প্রশ্ন</h2>
	<form method="post" action="<?php echo base_url()."index.php/crop/questionIn"; ?>">
	<table>			   
		<tr><td> বিষয়:</td>
		<td><input type="text" name="question_topic"></td></tr>
		<tr><td>প্রশ্ন:</td>
		<td><input type="text" name="question"></td></tr>
		<tr><td>প্রশ্নকারীর নাম:</td>
		<td><input type="text" name="question_name"></td></tr>
		<tr><td>প্রশ্নকারীর ঠিকানা:</td>
		<td><input type="text" name="question_address"></td></tr>
		<tr><td><input type="submit" name="enter" value="প্রবেশ করুন "></td></tr>
	</table>
	</form>
	</div>
</div>
