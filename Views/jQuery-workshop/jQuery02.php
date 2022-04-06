<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.
    0">
    <title>workshop_2</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
 <h2>Timer: 00:00</h2>
<button>Pause</button>
<br>
<br>

<table  Height="500px" Width="500px">
<tr>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td> 
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td> 
</tr>
<tr>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2>  </td>
</tr>
<tr>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2> </td>
    <td align = "center" bgcolor ="#E25845"> <h2> <p></p> </h2>  </td>
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
     


      </script>
    </body>
    </html> 
      