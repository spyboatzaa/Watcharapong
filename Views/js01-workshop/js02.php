<!DOCTYPE html>
<html>
<head>
    <title>js02</title>
</head>
<body>
    <button type="button" onclick="Color1()">Red</button>
    <button type="button" onclick="Color2()">Blue</button>
    <button type="button" onclick="Color3()">Green</button>
    <h1 id="p">The Text</h1>
<script>   
    function Color1() {
    document.getElementById("p").style.color = "red";
}
    function Color2() {
    document.getElementById("p").style.color = "blue";
}
    function Color3() {
    document.getElementById("p").style.color = "green";
}
</script>
</body>
</html>