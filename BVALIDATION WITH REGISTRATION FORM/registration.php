<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script src="bvalidation/jquery-1.11.0.min.js"></script>
<script src="bvalidation/jquery.bvalidator.js"></script>
<script  src="bvalidation/jquery.bvalidator-yc.js"></script>
<link href="bvalidation/themes/bvalidator.theme.bootstrap.rc.css" rel="stylesheet">
<script type="text/javascript">            
    var $j = jQuery.noConflict()
    var optionsBootstrap = {
        classNamePrefix: 'bvalidator_bootstraprc_',
        position: {x:'right', y:'center'},
        offset:     {x:15, y:0},
       
    };
    
    $j(document).ready(function () {
        $j('#frmregistration').bValidator(optionsBootstrap);
    });
    
    
</script>
<style type="text/css">
/*body { font-family: sans-serif; font-size: 0.8em; padding: 20px; }*/
#result { border: 1px solid green; width: 300px; margin: 0 0 35px 0; padding: 10px 20px; font-weight: bold; }
#change-image { font-size: 0.8em; }
</style>
</head>

<body onload="document.getElementById('captcha-form').focus()">
<form name="frmregistration" action="insert_registration.php" method="post" id="frmregistration">
<table width="200" align="center">
 <tr>
	<td>
  	<fieldset>
	<legend>REGISTRATION</legend>
	<table> 
  <tr>
    <td>First&nbsp;Name</td>
    <td><input type="text" name="txtfname" data-bvalidator="alpha,required"/></td>
  </tr>
  <tr>
    <td>Last&nbsp;Name</td>
    <td><input type="text" name="txtlname" data-bvalidator="alpha,required"/></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea cols="15" rows="5" name="taadd" data-bvalidator="alphanum,required"></textarea></td>
  </tr>
  <tr>
  	<td>Zip&nbsp;Code</td>
	<td><input type="text" name="txtzipcode" data-bvalidator="digit,maxlength[8],required"/></td>
  </tr>
  <tr>
    <td>Phone&nbsp;Number</td>
    <td><input type="text" name="txtphn" data-bvalidator="number,required"/></td>
  </tr>
  <tr>
    <td>Email&nbsp;Id</td>
    <td><input type="text" name="txtemailid" data-bvalidator="email,required"/></td>
  </tr>
  <tr>
    <td>User&nbsp;Name</td>
    <td><input type="text" name="txtuname" data-bvalidator="alphanum,required"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="txtpwd" data-bvalidator="alphanum,required"/></td>
  </tr>
  <tr>
    <td>Confirm&nbsp;Password</td>
    <td><input type="password" name="txtcpwd" data-bvalidator="alphanum,required"/></td>
  </tr>
  <tr>
 

   <td>
   Write the following word</td>
  	<td>
  	<img src="cool-php-captcha-0.3.1/captcha.php" id="captcha"/>
	<br/></td>
	</tr>
	<tr>
		<td></td>
	<td>
	<a href="#" onclick="
    document.getElementById('captcha').src='cool-php-captcha-0.3.1/captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();"
    id="change-image">Not readable? Change text.</a><br />
	<input type="text" name="captcha" id="captcha-form" autocomplete="off" style="width:155px"/></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="btnsubmit" value="Submit" /></td>
  </tr>
</table>
	</fieldset>
	</td>
	</tr>
	</table>
</form>
</body>
</html>
