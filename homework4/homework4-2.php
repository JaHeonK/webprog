<!DOCTYPE HTML>  
<title>homework4-2</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php
    if($_POST){  
      $number = 10;  
        //잘 안됩니다......//
      $number = $_POST['number']; 
      $numbers = range(10,100);
        sort($numbers);

        $arrlength = count($numbers);
        for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "sort:".rand(10,100);
        }
        
    }

?>  
</body>  
</html>  