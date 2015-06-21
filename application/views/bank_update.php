<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ব্যাংক </title>
</head>

    <body>
    	<table>
        
        	 <tr><td> </td> <td><h1></h1>  </td> <td> </td></tr>
            
          
        <tr>
        	<td>
            </td>
            <td>
            		<table align="center">
                    <?php echo "<form method=\"post\" action=\"". base_url() . "index.php/crop/bankUpdate\">" ;?>
                    	<th>ব্যাংক তথ্য বিবরণী </th>
                      
                        <tr> <td>ব্যাঙ্কের নাম</td><td><input  type="text" name="bank_name" /></td></tr>
                         <tr> <td>ঋণের বিবরণ</td><td><input  type="text" name="bank_loan" /></td></tr>
                          <tr> <td>ব্যাঙ্কের ওয়েবসাইট </td><td><input   type="text" name="bank_website" /></td></tr>
                          
                           
                        
                       
                       <tr ><td></td>  <td align="right"> <input type="submit"  name="upload" value="আপলোড"/></td></tr></form>
                        
                    
                        
                    </table>
            </td>	
            <td>
            </td>
        </tr>
        </table>
    </body>
</html>