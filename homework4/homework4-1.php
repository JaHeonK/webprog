<!DOCTYPE HTML>  
<title>homework4-1</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php
    if($_POST){  
      $number = 1;  
      //getting value from input text box 'number'  
      $number = $_POST['number'];  
      echo "1~$number<br>";  
     
  }

    if($_POST){  
        $sum = 0;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Sum of $number:<br>";  
        for($i=1; $i<= $number ; $i++){
          $sum = $sum + $i;
          }
          echo $sum . "<br>";
    }

    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  

    }  
?>  
</body>  
</html>  