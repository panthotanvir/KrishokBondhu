<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ক্রেতা নিবন্ধন </title>
</head>

<body>
<div id="register_form"> 
<?php echo "<form method=\"post\" action=\"". base_url() . "index.php/krishifirst/sign\">" ;?>
<table width="500" border="1" align="center" >
  <tr>
    <th scope="col" align="center" valign="middle">ক্রেতা নিবন্ধন ফর্ম </th>
    
  </tr>
  <tr>
    <td>নাম</td>
    <td><input type="text" name="customer_name" /></td>
  </tr>
  <tr>
    <td>পাসওয়ার্ড</td>
    <td><input type="password" name="customer_password" /></td>
  </tr>
  <tr>
    <td>লাইসেন্স নম্বর </td>
    <td><input type="text" name="customer_lid" /></td>
  </tr>
  <tr>
    <td>জাতীয় পরিচয়পত্র নম্বর </td>
    <td><input type="text" name="customer_nid" /></td>
  </tr>
  <tr>
    <td>বাসার ঠিকানা </td>
    <td><input type="text" name="customer_residence" /></td>
  </tr>
  <tr>
    <td>দোকানের ঠিকানা</td>
    <td><input type="text" name="farmer_shop"</td>
  </tr>
  <tr>
    <td>মোবাইল নম্বর</td>
    <td><input type="text" name="farmer_mobile" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="customer_submit" /></td>
    
  </tr>
</table>
</div>
</body>
</html>