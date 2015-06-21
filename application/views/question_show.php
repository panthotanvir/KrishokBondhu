<div class="row-fluid">
<div class="span12 well">
<?php
	$prev_id = 9999999;
	foreach ($show_success->result_array() as $row){
		$id= $row['question_id']; 

		if($id != $prev_id){              
?>
 <table><tr><td>&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;</td></tr></table>
<table>
<tr>
<td> বিষয়: </td>
<td><?php echo $row['topic']; ?></td>
</tr>
<tr>
<td>প্রশ্ন: </td>
<td><?php echo $row['question']; ?></td>
</tr>
<tr>
<td><cite>প্রশ্নকারীর নাম:</cite></td>
<td><?php echo $row['question_name']; ?></td>
</tr>
<tr>
<td><cite>প্রশ্নকারীর ঠিকানা:</cite></td>
<td><?php echo $row['question_address']; ?></td>
</tr>
<tr><td>                 
<?php 					  
echo anchor('question/questionUpdate/'.$id.'','প্রশ্নের উত্তর দিন');  ?>
</td></tr>
</table>
<?php if($row['flag']==0) continue; ?>                  
<table>
<tr>
<td width=100px>উত্তরঃ</td>
<td><?php echo $row['answer']; ?></td>
</tr>
<tr>
<td>উত্তরকারীর নাম:</td>
<td><?php echo $row['answer_name']; ?></td>
</tr>
<tr>
<td>উত্তরকারীর ঠিকানা:</td>
<td><?php echo $row['answer_address']; ?> </td>
</tr>
</table>

	<?php } else { ?>
		<table>
			<tr>
			<td width=100px>উত্তরঃ</td>
			<td><?php echo $row['answer']; ?></td>
			</tr>
			<tr>
			<td><cite>উত্তরকারীর নাম:</cite></td>
			<td><?php echo $row['answer_name']; ?></td>
			</tr>
			<tr>
			<td><cite>উত্তরকারীর ঠিকানা:</cite></td>
			<td><?php echo $row['answer_address']; ?> </td>
			</tr>
		</table>

	<?php } $prev_id = $id; ?>
   
    
	<?php } ?>

</div>
</div>
