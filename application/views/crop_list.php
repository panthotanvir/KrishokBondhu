<div class="row-fluid">
<div class="span6 offset3 well text-center">
	<h2>ফসল
	<?php
		if( $type != NULL ){
			echo ' > ' . $type;
			if($subtype != NULL){
				echo ' > ' . $subtype;
			}
		}
	?>
	</h2>
	<table width="100%">
		<tr>
			<th>
				নাম
			</th>
			<th>
				বর্ণনা
			</th>
		</tr>
	<?php foreach( $crop as $c ){ ?>
		<tr>
			<td>
				<a href="<?php echo base_url(). 'index.php/crop/view/' . $c['id']; ?>"><?php echo $c['title']; ?></a>
			</td>
			<td>
				<p>
					<?php 
						echo substr($c['description'], 0, 200); 
						if( strlen($c['description']) > 200 ) echo '...'; 
					?>
				</p>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>
</div>
