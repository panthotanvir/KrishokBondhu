<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>বিজ্ঞাপন</title>
</head>

    <body>
    	<table>
        
        	 <tr><td> </td> <td><h1></h1>  </td> <td> </td></tr>
            
          
        <tr>
        	<td>
            </td>
            <td>
            		<table align="center">
                    <?php echo "<form method=\"post\" action=\"". base_url() . "index.php/crop/bazarUpdate\">" ;?>
                    	<th>বাজার </th>
                      
                        <tr> <td>পণ্যের নাম</td><td><input  type="text" name="product_name" /></td></tr>
                         <tr> <td>পণ্যের মূল্য(প্রতি কেজি)</td><td><input  type="text" name="product_price" /></td></tr>
                          <tr> <td>পণ্য উৎপাদনের জেলা </td><td><input  type="text" name="product_district" /></td></tr>
                           <tr> <td>তারিখ</td><td><input  type="date" name="product_date" /></td></tr>
                           
                        
                       
                       <tr ><td></td>  <td align="right"> <input type="submit"  name="upload" value="আপলোড"/></td></tr></form>
                        
                    
                        
                    </table>
            </td>	
            <td>
            </td>
        </tr>
        </table>
    </body>
</html>