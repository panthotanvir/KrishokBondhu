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
		<tr><td>প্রশ্নকারীর নাম:</td>
		<td><?php echo $row['question_name']; ?></td></tr>
		<tr><td>প্রশ্নকারীর ঠিকানা:</td>
		<td><?php echo $row['question_address']; ?></td></tr>
		<tr><td><?php echo anchor('crop/questionAccept/'.$id.'','প্রকাশ করুন');  ?></td>
        <td><?php echo anchor('crop/questionReject/'.$id.'','মুছে দিন');  ?></td></tr>
        

	</table>
	<?php } ?>
	
</div>
</div>
