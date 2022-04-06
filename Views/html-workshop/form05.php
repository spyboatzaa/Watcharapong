<!DOCTYPE html>
<html>
<head>
<title>HTML01</title>
</head>
<body>
<h1>แบบสอบถามข้อมูลส่วนบุคคล</h1>
<hr>
<br>
คำนำหน้า : 
<select name="ชื่อ select" >
<option value="1" selected > นาย </OPTION>
<OPTION value="2"> นาง </option> <OPTION value="3"> นางสาว </option>
</select>
<br>
<br>
ชื่อ : <input type="text" name="Fname" value="apisit" size="10" maxlength="5" />
นามสุกล : <input type="text" name="Fname" value="apisit" size="10" maxlength="5" />
<br>
<br>
วันเกิด :
<input type="date">
<br>
<br>
รหัสนิสิต :
<input type="number" id="quantity" name="quantity" min="1" >
<br>
<br>
อีเมล :
<input type="Email">
<br>
<br>
รหัสผ่าน :
<input type="Password" >
<br>
<br>
<hr>
<br>
คณะ : 
<select name="ชื่อ select" disabled>
<option value="คณะแพทยศาสตร์"> คณะแพทยศาสตร์ </OPTION>
<OPTION value="คณะพยายาลศาสตร์"> คณะพยายาลศาสตร์ </option>
<option value="คณะวิทยาการสารสนเทศ" selected="คณะวิทยาการสารสนเทศ"> คณะวิทยาการสารสนเทศ </oPTION>
</select>
<br>
<br>
ชั้นปี :
<input type="number"  min="0" max="6" size="20" value="2"disabled >
<br>
<br>
มกุล : 
<br>
<input type="Radio" name="Cluster" > Cluster 1 - Cluster 3
<br>
<input type="Radio" name="Cluster" value="Cluster 4 - Cluster 6" > Cluster 4 - Cluster 6
<br>
<input type="Radio" name="Cluster" value="Cluster 7 - Cluster 9" > Cluster 7 - Cluster 9
<br>
<br>
<br>
ภาษาที่ถนัด : 
<br>
<input type="checkbox" name="HTML" value="HTML" > HTML
<br>
<input type="checkbox" name="CSS" value="CSS" > CSS
<br>
<input type="checkbox" name="MySQL" value="MySQL" > MySQL
<br>
<input type="checkbox" name="JS" value="JS" > JS
<br>
<input type="checkbox" name="PHP" value="PHP" > PHP
<br>
<br>
<input type="button" value="ยกเลิก">
<input type="submit" value="บันทึก">
</select>
</body>
</html>
