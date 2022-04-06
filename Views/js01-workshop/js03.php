<!DOCTYPE html>
<html>
<head>
    <title>js03</title>
</head>
<body>
    <input type="password" id="input"> 
    <button type="button" onclick="showPassword()">Show password</button><br>
    The text is : <span id = "pass"> </span> 
<script>   
    function showPassword() {
    var x = document.getElementById("input").value;
    document.getElementById("pass").innerHTML = x;
}
</script>
</body>
</html>