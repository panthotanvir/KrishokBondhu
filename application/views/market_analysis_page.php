     <div class="row-fluid"> 
					<div class="span12 well">

						<table width="30%" border="1" align="center">
  <tr>
  <th scope="col">পণ্য</th>
    <th scope="col">দাম</th>
    
    <th scope="col">পণ্যের পরিসংখ্যান</th>
  </tr>
  <?php foreach($result->result_array() as $row){?>
  <tr>
  <td><?php echo $row['product_name']?></td>
    <td><?php echo $row['product_price']?></td>
    <td><?php echo $row['product_stat']?>%</td>
  </tr>
  <?php }?>
</table>
                        
</div>
</div>

