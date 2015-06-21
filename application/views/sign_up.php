<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up </title>
</head>

<body>
<?php echo "<form method=\"post\" action=\"". base_url() . "index.php/housing/signup\">" ;
?>
<table align="right" cellpadding="0" border="0">
            <th>USER INFORMATION</th>
            <tr><td>User name:</td><td><input type="text" name="user" /></td></tr>
            <tr><td>Full name:</td><td><input type="text" name="fullname" /></td></tr>
            <tr><td>Password:</td><td><input type="password" name="password" /></td></tr>
            <tr><td>Retype password:</td><td><input type="password" name="re_password" /></td></tr>
            <tr><td>Email Id:</td><td><input type="text" name="email" /></td></tr>
            <tr><td>Session:</td><td><input type="text"  size="5" name="session1" />
            to<input type="text"  size="5.5" name="session2" /></td></tr>
            <tr><td>Admission Year:</td><td><input type="text" name="admissionyear" /></td></tr>
            <tr><td>Unit:</td><td><select name="unit"  >
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    </select>
            </td></tr>
 			 <tr><td>Faculty:</td><td><select name="faculty"  >
                    <option value="Science">Science</option>
                    <option value="Bio_Science">Bio_Science</option>
                    <option value="Farmacy">Farmacy</option>
                    <option value="Earth & Environment">Earth & Environment</option>
                    <option value="Engineering & Technology">Engineering & Technology</option>
                    <option value="Nutrition & Food">Nutrition & Food</option>
                    <option value="Statistics & Research">Statistics & research</option>
                    <option value="Information Technology">Information Technology</option>
                    
                    </select>
            </td></tr>
            <tr><td>Department:</td><td><input type="text" name="department" /></td></tr>
            <tr><td>Date Of Birth(//):</td><td><input type="text" name="date_of_birth" /></td></tr>
             <tr><td>Phone no:</td><td><input type="text" name="phone_no" /></td></tr>
            <tr><td></td><td><input type="submit" name="signup"  value="SignUp"/></td></tr>


</table>

</body>
</html>