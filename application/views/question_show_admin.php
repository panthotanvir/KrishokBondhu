<div class="row-fluid">
<div class="span12 well">
<h2>যাচাই করুন </h2>
        
	<?php
	foreach ($update_success->result_array() as $row){
	$id= $row['question_id'];                      
	?>

	<table>			   
		<tr><td> বিষয়:</td>
		<td><?php echo $row['topic']; ?></td></tr>
		<tr><td>প্রশ্ন:</td>
		<td><?php echo $row['question']; ?></td></tr>
        <tr>
        <td>উত্তরঃ</td>
        <td><?php echo $row['answer']; ?></td></tr>
        <tr>
        <td>উত্তরকারীর নাম:</td>
        <td><?php echo $row['answer_name']; ?></td></tr>
        <tr>
        <td>উত্তরকারীর ঠিকানা:</td>
		<td><?php echo $row['answer_address']; ?></td></tr>

		<tr><td><?php echo anchor('crop/answerAccept/'.$id.'','প্রকাশ করুন');  ?></td>
        <td><?php echo anchor('crop/answerReject/'.$id.'','মুছে দিন');  ?></td></tr>
        

	</table>
	<?php } ?>
	
</div>
</div>
