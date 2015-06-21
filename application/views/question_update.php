<div class="row-fluid">
<div class="span12 well">
<h2>প্রশ্নের উত্তর দিন</h2>
<table >
	<tr>
	<td>        
	<?php
	foreach ($update_success->result_array() as $row){
	$id= $row['question_id'];                      
	?>

	<td width="50" align="left"></td>
	<td>
	<form method="post" action="<?php echo base_url() . "index.php/crop/questionUpdateFinal/" . $id; ?>" >
		<table>
			<tr>
				<td> বিষয়:</td>
				<td><?php echo $row['topic']; ?></td>
			</tr>
			<tr>
				<td>প্রশ্ন:</td>
				<td><?php echo $row['question']; ?></td>
			</tr>
			<tr>
				<td>উত্তরঃ </td>
				<td><input type="text" name="answer" /></td>
			</tr>
			<tr>
				<td>উত্তকারীর নাম:</td>
				<td><input type="text" name="answer_name" /></td>
			</tr>
			<tr>
				<td>উত্তকারীর ঠিকানা:</td>
				<td><input type="text" name="answer_address" /> </td>
			</tr>
			<tr> <td> <input type="submit" name="submit" value="প্রবেশ করুন " /> </td> </tr>
		</table>
	</form>
	<?php } ?>
	</div>
	</td>
	</tr>
</table>
</div>
</div>
