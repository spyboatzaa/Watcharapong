<!DOCTYPE html>
<html>
<head>
<title>Text Fields </title>
</head>
<body>
<form name="register" >
<h1>ข้อมูลส่วนตัวเบื้องต้น 1</h1> 
ชื่อ : 
<br> 
<input type="text" name="Fname" value="วัชรพงศ์" size="20" maxlength="10" readonly/>
<br> 
ชื่อนามสุกล : 
<br> 
<input type="text" name="Fname" value="กิจนพศรี" size="20" maxlength="10" disabled/>
<br>
Email : 
<br> 
<input type="text" name="Fname" value="" size="50" maxlength="10" />
<br>
Pin : 
<br> 
<input type="number" id="quantity" name="quantity" min="1" max="30">
<br>
<br>
<input type="button" value="ยกเลิก">
<input type="submit" value="บันทึก">
</form>
</body>
</html>
