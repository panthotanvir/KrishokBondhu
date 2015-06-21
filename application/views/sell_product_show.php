<div class="row-fluid"> 
	<div class="span12 well text-center">
		<h1>বিক্রয়ের বিজ্ঞাপনের তালিকা</h1>
		<?php $count = 0; foreach($result->result_array() as $row){?>
		<hr/>
		<div class="row-fluid">
			<div class="span4">
				<img height="200px" src="<?php echo base_url()."uploads/".$row['image_name']; ?>" />
			</div>
			<div class="span4">
				<table class="">
				<th>বিজ্ঞাপন</th>
				<tr><td>পণ্যের নাম</td><td><?php echo $row['title']?></td></tr>
				<tr><td>পরিমাণ(কেজি)</td><td><?php echo $row['amount']?></td></tr>
				<tr><td>দাম(প্রতি কেজি)</td><td><?php echo $row['price']?></td></tr>
				<tr><td>পণ্যের বিবরণ</td><td><?php echo $row['description']?></td></tr>
				<tr><td>উৎপাদনের তারিখ</td><td><?php echo $row['production_date']?></td></tr>
				<tr><td>বিজ্ঞাপনের তারিখ</td>
    								<td><?php echo $row['post_date']?></td>
  								</tr>
				</table>
            </div>
			<div class="span4">
				<table>
				<th>বিজ্ঞাপন দাতার তথ্য</th>
				<tr><td>নাম</td><td><?php echo $row['user_name']?></td></tr>
                <?php if($_SESSION['x']==1){?>
				<tr><td>মোবাইল নাম্বার</td><td><?php echo $row['phone_no']?></td></tr>
				<tr><td>ঠিকানা</td><td><?php echo $row['address']?></td></tr>
				<?php } ?>
                <tr><td>উপজেলা</td><td><?php echo $row['subdistrict_name']?></td></tr>
				<tr><td>জেলা</td><td><?php echo $row['district_name']?></td></tr>
				<tr><td>বিভাগ </td><td><?php echo $row['division']?></td></tr>
				</table>
			</div>
		</div>
		<hr/>
        <?php $count++;} ?>
</div>
</div>
