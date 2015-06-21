<div class="row-fluid">
	<div class="span12 well">
		<table class="" align="center">
        <h3 align="center">ব্যবহারকারীর তথ্য</h3>
		<?php
			foreach($check->result_array() as $row){?>
				
                <tr>
    <td>গ্রাহক পিন নম্বর </td>
    <td><?php echo $row['user_id']?></td>
  </tr>
  <tr>
    <td>নাম </td>
    <td><?php echo $row['user_name']?></td>
  </tr>
  <tr>
    <td>বিভাগ </td>
    <td><?php echo $row['division']?></td>
  </tr>
  <tr>
    <td>জেলা </td>
    <td><?php echo $row['district_name']?></td>
  </tr>
  <tr>
    <td>ঊপজেলা </td>
    <td><?php echo $row['subdistrict_name']?></td>
  </tr>
  <tr>
    <td>ঠিকানা </td>
    <td><?php echo $row['address']?></td>
  </tr>
  <tr>
    <td>জাতীয় পরিচয়পত্র নম্বর </td>
    <td><?php echo $row['national_id']?></td>
  </tr>
  <tr>
    <td>মোবাইল নম্বর </td>
    <td><?php echo $row['phone_no']?></td>
  </tr>
		<?php	}?>
		</table>
        <p>আপনার বিক্রয়ের বিজ্ঞাপনগুলো দেখার জন্য এখানে <?php echo anchor('product/showSell/','ক্লিক করুন');?></p>
        <p>আপনার ক্রয়ের বিজ্ঞাপনগুলো দেখার জন্য এখানে <?php echo anchor('product/showBuy/','ক্লিক করুন');?></p>


	</div>		
</div>
                       
