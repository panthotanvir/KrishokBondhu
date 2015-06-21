
                    <div class="emne">  
            				<h2 align="center">প্রোফাইল</h2>
                        
								<?php $id="";
									foreach($check->result_array() as $row){
									//echo "XXXX";
									$id = $row['national_id'];
									echo $row['user_name']. "<br/>"; 
									echo $row['division']. "<br/>";
									echo $row['district_name']. "<br/>";
									echo $row['subdistrict_name']. "<br/>";
									echo $row['phone_no']. "<br/>";
									echo $row['address']. "<br/>";
									}
									?>
                               
                                   
								
         			</div>
                       