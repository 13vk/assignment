<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIC Insurance</title>
<style type="text/css">
.header{
	width:100%;
	height:100px;

	background-color:#0066FF;
	float:left;
	text-align:center;
	color:#000000;
		}
.footer{
	width:100%;
	height:200px;

	background-color:#0066FF;
	float:left;
	text-align:center;
	color:#000000;
		}		
.menu{
	width:100%;
	height:50px;
	
	background-color:green;
	float:left;
	text-align:center;
	color: #FFF;
		}
.image
	{
	width:100%;
	height:125px;
	background-image:url(../programs/1.jpg);
	float:left;
	text-align:center;
	color:#000000;
	}
.leftcontent{
	width:50%;
	height:250px;

	background-color:#FFFF66;
	float:left;
	text-align:center;
	color: #F00;
		}
.rightcontent{
	width:50%;
	height:250px;
	
	background-color: #F90;
	float:left;
	text-align:center;
	color: #FFF;
		}
.frontform{
	margin-top:10px;
}
</style>
</head>
<body>
<div class="header">
Header 
</div>
<div class="menu">
Menu
</div>
<div class="image">
Image
</div>

<div class="leftcontent">
<form method="post">
<div class="frontform">
<select name="course" required="required">
<option value="">Courses </option>
<option value="20000">Fashion Design</option>
<option value="30000">Makeup</option>
<option value="10000">Dance</option></select>
</div>
<div class="frontform"><input type="number" name="duration" id="duration" placeholder="Duration" onblur="f1()"/><div class="frontform"><input type="number" name="ta" id="ta" readonly="readonly" placeholder="total amount"/></div>

<div class="frontform"><input type="submit"/></div>
</div>
</form>
<div class="rightcontent">
**CONTACT FORM**
<form method="POST">
<div class="frontform"><input type="text" name="uname" id="uname" placeholder="Your Name" required="required" onkeyup="f2()"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" id="contact" placeholder="Your Contact" maxlength="10" onkeyup="f3()" required="required"  /></div>
<div class="frontform"><textarea name="YOUR QUERY" required="required"> Your Query..? </textarea></div>

<div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option><option value="Noida">Noida</option><option value="Gurgaon">Gurgaon</option><option value="Ghaziabad">Ghaziabad</option>
</select>
<input type="submit" name="submit"  />
</div>
</div>
</form>
<div class="footer">
footer
</div>

</body>
</html>