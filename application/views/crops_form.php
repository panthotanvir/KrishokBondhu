<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>crops update </title>
</head>

<body>
     <table cellpadding='0' cellspacing='2' border='0' width='125%' id="test">
                           
			<?php echo "<form method=\"post\" action=\"". base_url() . "index.php/crop/cropsUpdate\">" ;?>
			<table align="center">
                    
                    	<th>ফসল </th>
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
                              পণ্যের জাত 
                              </td>
                              <td>
                              <input  type="text" name="product_type" />
                              </td>
                        </tr>
                        
                          <tr>
                                 <td>
                              পণ্যের উপজাত
                              </td>
                              <td>
                              <input  type="text" name="product_subtype" />
                              </td>
                        </tr>
                        <tr>
                                 <td>
                              পণ্যের বিবরণ
                              </td>
                               <td>
                              <input  type="text" name="product_info" />
                              </td>
                        </tr>
                       <tr>
                               <td>
                               চাষাবাদ
                               </td>
                               <td>
                               <input type="text" name="cultivation"/>
                               </td>
                               </td>
                               </td>
                       </tr>
                       
                        <tr>
                           <td>
                           সার 
                           </td>
                           <td>
                           <input type="text" name="product_seed"</td>
                           </td>
                           </td>
                       </tr>
                        <tr>
                           <td>
                           কীটনাশক
                           </td>
                           <td>
                           <input type="text" name="product_insect"</td>
                           </td>
                           </td>
                       </tr>
                       
                       <tr >
                       <td>
                       </td>
                       
                       <td align="right">
                        <input type="submit"  name="upload" value="আপলোড"/>
                        </td>
                        </tr>
                        
                    </table>
		</table>
</body>
</html>