<html>
    <head>
        <title>php loop</title>
    </head>
 <body>
     <h1>
         <?php

     //...........WHILE LOOP.................


        //  $counter = 0;
        //  while($counter <=5){
        //  echo $counter . "<br>";
        //  $counter++;


        //  }


    //  ............... FOR LOOP.................

         $counter = 0;
         $message = null;
        for ($counter = 1; $counter <= 10; $counter++){
            $message .=  $counter . "<br>";
        }
        echo $message;

         ?>

     </h1>


  </body>   

</html>
