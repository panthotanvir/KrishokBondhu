<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>প্রোগ্রাম</title>
</head>

    <body>
    	<table>
        
        	 <tr><td> </td> <td><h1></h1>  </td> <td> </td></tr>
            
          
        <tr>
        	<td>
            </td>
            <td>
            		<table align="center">
                    <?php echo "<form method=\"post\" action=\"". base_url() . "index.php/crop/programUpdate\">" ;?>
                    	<th>প্রোগ্রামের বিবরণী </th>
                      
                        <tr> <td>প্রোগ্রামের নাম</td><td><input  type="text" name="program_name" /></td></tr>
                         <tr> <td>চ্যানেলের নাম</td><td><input  type="text" name="channel_name" /></td></tr>
                          <tr> <td>সময়সূচী  </td><td><input   type="datetime-local" name="program_schedule" /></td></tr>
                           <tr> <td>পরিদর্শন </td><td><input  type="text" name="program_overview" /></td></tr>
                           
                        
                       
                       <tr ><td></td>  <td align="right"> <input type="submit"  name="upload" value="আপলোড"/></td></tr></form>
                        
                    
                        
                    </table>
            </td>	
            <td>
            </td>
        </tr>
        </table>
    </body>
</html>