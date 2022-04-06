<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.
    0">
    <title>workshop_4</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
 <h2>Timer: <t id = "count_up_timer"> </t> </h2>
      <button id="stop_count_up_timer" onclick="clearInterval(timerVariable)">Pause</button>
<br>
<br>
<table  Height="500px" Width="500px">
<tr>
    <td  align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td  align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td  align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
</tr>
<tr>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
</tr>
<tr>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
</tr>
<script>
         $(document).ready(function() {
        var nums = [1,2,3,4,5,6,7,8,9];
        var ranNums = [];
        var n = nums.length;
        var i = "0";
            while (n--) {
                let x = Math.floor(Math.random() * (n+1));
                 ranNums.push(nums[x]);
                 nums.splice(x,1);
                i++;
                $("p")[i-1].append(ranNums[i-1]);

            }
            })

            var timerVariable = setInterval(countUpTimer, 1000);
            var totalSeconds = 0;

            function countUpTimer() {
             ++totalSeconds;
             var hour = Math.floor(totalSeconds / 3600);
             var minute = Math.floor((totalSeconds - hour * 3600) / 60);
             var seconds = totalSeconds - (hour * 3600 + minute * 60);
             if(seconds < 10 && minute < 10){
            document.getElementById("count_up_timer").innerHTML = '0' + minute + ":"+ '0' + seconds;
                }else if(seconds > 10 && minute > 10||minute == 10 && seconds == 10){
                document.getElementById("count_up_timer").innerHTML = minute + ":" + seconds;
                }else if(seconds > 10 && minute < 10 || seconds == 10){
                document.getElementById("count_up_timer").innerHTML = '0' + minute + ":" + seconds;
                }else if(seconds < 10 && minute > 10 || minute == 10){
                document.getElementById("count_up_timer").innerHTML = minute + ":" + '0' + seconds;
                 }else{
                document.getElementById("count_up_timer").innerHTML = minute + ":"  + seconds;
                }               
            }

            $("td").click(function(){
            $(this).css("background-color", "white");
            $(this).css("color", "white");
            
            });
            

            
            
        

      </script>
    </body>
    </html> 
      