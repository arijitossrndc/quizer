<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
<link rel="stylesheet" type="text/css" href="sheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<script type="text/javascript">
      
      function countdown() {

    var id = 0;    
    var count = 10;
    var qid=1;
    var timerId = setInterval(function() {

        count--;
        document.getElementById("timer").innerHTML=count;
           
        if(count == 0) {
             
            count = 10;
            qid=qid+1;
            id = id +1;
            if(id == 5)
    {
        window.location.href="check.php";
    }
      

            $(document).ready(function ()

            {  
            
                  
                $("#question").load("quiz2.php",{
                       newqid:qid
                });
                $("#btn1").load("quiz3.php",{
                       newqid:qid
                });
                $("#btn2").load("quiz4.php",{
                       newqid:qid
                });
                $("#btn3").load("quiz5.php",{
                       newqid:qid
                });
                $("#btn4").load("quiz6.php",{
                       newqid:qid
                });

                

                

            });
          
            
             
        }
    }, 1000);


}

countdown();
    </script>

</head>
<body>
 <p id="timer" style="text-align: center;"> </p>
    <div class="grid" >
      
        <h1 style="text-align: center"> quiz </h1>
        <hr style="margin-bottom: 20px;"><br>
        
        <p id="question" style="text-align: center;"><?php echo $questions; ?></p>
        <br>
        <form action="check.php" method="POST">

        <div class="card-body">
          
         <input id="1" type="radio" name="option[1]" value="<?php echo $btn1;?>">
           <p id="btn1"> <?php echo $btn1 ;?> </p>
          
          <input id="2" type="radio" name="option[2]" value="<?php echo $btn2;?>">
             <p id ="btn2"> <?php echo $btn2; ?></p>
           
          <input id="3" type="radio" name="option[3]" value="<?php echo $btn3;?>">
          <p id="btn3">   <?php echo $btn3; ?></p>   
           
           <input id="4" type="radio" name="option[4]" value="<?php echo $btn4;?>">
           <p id="btn4">   <?php echo $btn4; ?></p> 
           <input type="submit" name="submit" value ="submit" > 




        </div>
    </form>
</div>


        <hr style="margin-top: 50px;">
      
    </div>
    
      
      
      

</body>
</html>
