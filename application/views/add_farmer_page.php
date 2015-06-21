<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>বিজ্ঞাপন</title>
</head>

    <body>
    	<table>
        <tr>
        	 <td>
             </td>
             <td>
             		<h1>আপনার  পণ্যের বিজ্ঞাপন দিন </h1>
             </td>
             <td>
             </td>
        </tr>
        
        <tr>
        	<td>
            </td>
            <td>
            		<table align="center">
                    <?php echo "<form method=\" post \" action=\"" .base_url()."index.php/krishifirst/productinfo\">";?>
                    	<th>পণ্যের বিবরণ</th>
                       <tr>
                          <td>
                          পণ্যের নাম
                          </td>
                          <td>
                          <input type="text" name="product_name" />
                          </td>
                        </tr>
                        <tr>
                        	 <td>
                          পণ্যের উৎপাদনের তারিখ
                          </td>
                          <td>
                          <input  type="date" name="product_date" />
                          </td>
                        </tr>
                        
                          <tr>
                        	 <td>
                          পণ্যের পরিমাণ (কেজি)
                          </td>
                          <td>
                          <input  type="number" name="product_amount" />
                          </td>
                        </tr>
                        <tr>
                        	 <td>
                          পণ্যের মূল্য (টাকা)
                          </td>
                           <td>
                          <input  type="number" name="product_price" />
                          </td>
                        </tr>
                        <tr>
                        	<td>
                            	ছবি সংযুক্তকরণ  
                            </td>
                            <td>
                            	<input type="checkbox" name="picture_a"/>
                                <input type="file"  name="picture_1" />
                                
                               
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            </td>
                            <td>
                                <input type="checkbox" name="picture_b"/>
                                <input type="file"  name="picture_2" />
                            </td>
                            
                        </tr>
                        <tr>
                        	<td>
                            </td>
                            <td>
                                <input type="checkbox" name="picture_c"/>
                                <input type="file"  name="picture_3" />
                            </td>
                            
                        </tr>
                        <tr>
                        	<td>
                            </td>
                            <td>
                                <input type="checkbox" name="picture_d"/>
                                <input type="file"  name="picture_4" />
                            </td>
                            
                        </tr>
                        <input type="submit"  name="upload" value="আপলোড"/>
                        </form>
                    </table>
            </td>	
            <td>
            </td>
        </tr>
        </table>
    </body>
</html>