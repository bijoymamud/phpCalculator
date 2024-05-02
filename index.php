<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>

      .main_section{
        width: 450px;
            margin: 40px auto;
           
            border: 1px solid #ccc;
            border-radius: 10px;
            background:#1c1e1f ;
            

      }

      .bottom{
        text-align: right;
        color: white;
        padding: 0 20px;
      }
        .calculator {
           
            display: flex;
            align-items: center; 
            gap: 50px;
            padding: 20px 30px;
            
            
           
        }

        .text{
         
          color:#09d2e0

        }
      

        input, select, button {
            margin: 10px;
            padding: 5px;
            border-radius: 5px;
            background-color: #cccfce;
            color:gray;
            font-weight:bold;
            text-align:center;
            
        }

        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight:bold;
            font-family:sans-serif;
        }

        .button:hover {
            background-color: #069946;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
  
<section class="main_section">
<div class="calculator">
       
       <div class="text">
         <h2>PHP</h2>
         <h2>Calculator</h2>
       </div>
   
   
       <form method="POST">
       <input class="num1" type="number" name="num1" placeholder="Enter first number">
           <input type="number" name="num2" placeholder="Enter second number">
           <select name="operation">
               <option value="add">Addition</option>
               <option value="sub">Subtraction</option>
               <option value="mul">Multiplication</option>
               <option value="div">Division</option>
           </select>
         
           <!-- <button onclick="calculate()">Calculate</button>
           <div id="result"> -->
             <input class="button" name="submit"  type="submit" value="Submit">
       </form>
   
           
    
       </div>
       <p class="bottom">


    
<?php

  
   
   if (isset($_POST['submit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

  switch ($operation) {
    case 'add':
      $sum = $num1 + $num2;
      echo 'Addition of two number is :' .$sum;
      break;

      case 'sub':
        $sum = $num1 - $num2;
        echo 'Subtraction of two number is : ' .$sum;
        break;

        case 'mul':
          $sum = $num1 * $num2;
          echo 'Multiplication of two number is : ' .$sum;
        break;

        case 'div':
          $sum = $num1 / $num2;
          echo 'Division of two number is : ' .$sum;
        break;
    
    default:
      echo "There is a problem. Try again..!";
      break;
  }


}
  

?>

</p>
</section>
  
</body>
</html>
