
<html >
<head>
<style type="text/css" >
	
	a:link,a:visited
	{
				display:run-in;
				width:130px;
				font-weight:bold;
				color:#006;
				background-color:#98bf21;
				text-align:center;
				padding:9px;
				text-decoration:none;
				text-transform:uppercase;
	}
	a:hover,a:active
	{
				background-color:#36C;
	}
</style>
<title>home page</title>
</head>

<body>


<?php foreach ($userinfo->result_array() as $row){
	$id=$row['user'];
}
?>
<table >
        <tr>
            <div  id="logout" ><td width="300" height="150">
             <img src="../../hemonto.jpg">
            </td>
            </div>
            <td  width="710">
            <h1 align="center">AMADER HEMONTO BUS </h1>
            </td>
            <td width="300" align="right">
            <?php echo "<form method=\"post\" action=\"". base_url() . "index.php/housing/logout\">" ;?>
            <input type="submit" name="logout" value="LOGOUT" />
            <img src="../../du.png">
            </form>
            
            </td>
        </tr>
        <tr  >
        	<td width="300" style="background-color:rgb(14,53,82) " height="500" >
            </td>
            <td  valign="top"  width="706" style="background-color:#FFF"  style="font-size:100px">
            <?php echo "<a href=\"" .base_url(). "index.php/housing/home/".$id."\"" .">Home</a>";?>
            <?php echo "<a href=\"" .base_url(). "index.php/housing/profile/".$id."\"" .">Profile</a>";?>
            <?php echo "<a href=\"" .base_url(). "index.php/housing/archives\">Archives</a>";?>
            <?php echo "<a href=\"" .base_url(). "index.php/housing/bus_schedule\">Bus schedule</a>";?>
            <?php echo "<a href=\"" .base_url(). "index.php/housing/notice\">Notice</a>";?>
            <?php echo "<a href=\"" .base_url(). "index.php/housing/history\">History</a>";?>
            <?php echo "<a href=\"" .base_url(). "index.php/housing/contact\">Contact us</a>";?>
            </td>
             <td width="300" style="background-color:rgb(14,53,82)">
            </td>
        </tr>
</table>
</body>
</html>