<!DOCTYPE html>
<html>
<head>
    <title>js04</title>
</head>
<body>
    <img src="https://p4.wallpaperbetter.com/wallpaper/500/442/354/outrun-vaporwave-hd-wallpaper-preview.jpg"
    onmouseover="borderimg(this)" onmouseout="normalimg(this)" width = "350px" height="350px" >        
    <img src="https://p4.wallpaperbetter.com/wallpaper/39/346/426/digital-art-men-city-futuristic-night-hd-wallpaper-thumb.jpg"
    onmouseover="borderimg(this)" onmouseout="normalimg(this)" width = "350px" height="350px" >  
    <img src="https://i.pinimg.com/originals/bf/82/f6/bf82f6956a32819af48c2572243e8286.jpg"
    onmouseover="borderimg(this)" onmouseout="normalimg(this)" width = "350px" height="350px" >  
<script>
    function borderimg(x){
      x.style.boxShadow = "0px 0px 10px black";
    }
    function normalimg(x){
      x.style.boxShadow = "none";
    }
</script>  
</body>
</html>