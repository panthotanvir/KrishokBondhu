<div id="market_selection">
<table>
        						<tr>
        	 						<td></td>
             						<td><h1>বাজার বাছাই করুন</h1></td>
             						<td></td>
       							</tr>
        
        						<tr><td></td>
            					<td>
                               		 <?php echo validation_errors(); ?>
									<?php echo form_open_multipart('product/marketAnalysisPost');?>
            						<table align="center">
                    				
									
                    				<tr><td>জেলা</td>
                                    <td><input type="text" name="district"/></td></tr>
                                    </table>
                                    
									<tr><td></td><td><input type="submit" value="Enter" name="enter"/></td><td></td></tr>
								</form>
                                    </td>
                                    </tr>
                                    </table>
</div>