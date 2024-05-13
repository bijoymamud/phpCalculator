<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Conversion</title>
  <style>
    *{margin:0; padding:0; box-sizing:border-box;}
    h1{text-align:center, line-height: 20vh;}

    .main_div{
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: space-around;
        align-items:center;

    }
.img{
  max-width: 400px;
  height: 50vh;
  border
}


  </style>
</head>
<body>
  <header>
    <h1>Temperature Conversion</h1>

    <div class="main_div">


    <div class="left_side">
<img class="img" src = "images/thermometer-in-the-snow.jpg">
    </div>


    <div class="right_side">

<form  action="POST">

<input type="text" name="num" placeholder="Enter your number">

<div class="selection">
  <label for="">Celc</label>
  <input type="radio" name="units" id="" value ="cel">
  <label for="">Faren</label>
  <input type="radio" name="units" value ="feh">
</div>

<input type="submit" name="submit" value="Convert Now">
</form>
<p>






</p>

    </div>
    

    </div>


  </header>
</body>
</html>

