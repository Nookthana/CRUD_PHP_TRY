<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>calculator</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">calculator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="Grade.php">Grade </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Calculator.php">Calculate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CRUD.php">CRUD</a>
      </li>
    </ul>
  </div>
</nav>



<div class="container">
  <div class="row">
    <div class="col">
        
  <div class="form-group">
    <label>Number 1:</label>
    <input type="number" class="form-control" id="num1" name="num1" required/>
  </div>
  <div class="form-group">
    <label>Number 2:</label>
    <input type="number" class="form-control" id="num2" name="num2" required/>
  </div>
  <label>1. +</label><br>
  <label>2. -</label><br>
  <label>3. *</label><br>
  <label>4. /</label><br>
  <label>5. %</label><br>
  <label>Choose Menu:</label>
  <select name="menu" id="menu">
  <option value="1">1. +</option>
  <option value="2">2. -</option>
  <option value="3">3. *</option>
  <option value="4">4. /</option>
  <option value="5">5. %</option>
</select><br>
  <button onclick="Calculate(parseFloat(document.getElementById('num1').value)
                  ,parseFloat(document.getElementById('num2').value)
                  ,parseFloat(document.getElementById('menu').value)
                  
                  )" class="btn btn-primary">Calculate</button>
<br>
Result: <p id="Result"></p>
    </div>
    <div class="col">

    </div>
  </div>


</body>
</html>
<script>

    function Calculate(a,b,c) {
    
        switch (c) {

  case 1:
    result=a+b; document.getElementById("Result").innerHTML =  result;
    break;
  case 2:
    result=a-b; document.getElementById("Result").innerHTML =  result;
    break;
  case 3:
    result=a*b; document.getElementById("Result").innerHTML =  result;
    break;
  case 4:
    result=a/b; document.getElementById("Result").innerHTML =  result;
    break;
  case 5:
    result=a%b; document.getElementById("Result").innerHTML =  result;
    break;
    default:
    text = "Error";
}

      }
</script>