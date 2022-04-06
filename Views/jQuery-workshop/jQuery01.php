<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.
    0">
    <title>workshop_1</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>

<button>เพิ่มแถว</button>
<table id="myTable">
         <tbody>
            
         </tbody>
      </table>
<script>
         $(document).ready(function() {
            let x = "0";
         var tbody = $('#myTable').children('tbody');
         var table = tbody.length ? tbody : $('#myTable');
         
         $('button').click(function(){
           x++;
         table.append('คนที่ ' + x + ' ชื่อ<input type="text" size="20" maxlength="20" > นามสกุล<input type="text" size="20" maxlength="20" ><br>');
         })
         });
      </script>
    </body>
    </html> 
      
      

   





  
