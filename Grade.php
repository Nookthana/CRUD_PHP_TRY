<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Grade</title>
</head>
<style>
    .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
    }
</style>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Grade</a>
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
        <div align="center">
            <h1>คำนวณเกรด</h1>
            <p>ชื่อ-สกุล</p>
            <input type="text" name="name" id="name" /><br>
            <p>รหัสนักศึกษา</p>
            <input type="text" name="id_studentf" id="id_studentf" /><br>
            <p>ระบุคะแนนของคุณ</p>
            <input type="number" name="score" id="score" /><br><br>

            <button onclick="Grade(document.getElementById('name').value
                  ,document.getElementById('id_studentf').value
                  ,parseFloat(document.getElementById('score').value)
                  )">คำนวณ</button><br><br>

            <b>ชื่อของคุณคือ:</b> 
            <p id="s_name"></p>
            <b>รหัสนักศึกษาของคุณคือ:</b>
            <p id="id_student"></p>
            <b>คะแนนของคุณคือ:</b>
            <p id="s_score"></p>
            <b>เกรดของคุณคือ:</b>
            <p id="Grade"></p>
        </div>


</body>

</html>
<script>
    function Grade(a, b, c) {

        let Grade = Process(c);
        let name = a;
        let id = b;
        let C_score= c;

        console.log(C_score);
        //console.log(a);
        document.getElementById("s_name").innerHTML = name;
        document.getElementById("id_student").innerHTML = id;
        document.getElementById("s_score").innerHTML = C_score;
        document.getElementById("Grade").innerHTML = Grade;


    }

    function Process(c) {


        if (c >= 90 && c <= 100) {
            return 'A';


        } else if (c >= 80 && c <= 89.99) {
            return 'B';


        } else if (c >= 70 && c <= 79.99) {
            return 'C';


        } else if (c >= 60 && c <= 99.99) {
            return 'D';


        } else {
            return 'F';


        }

    }
</script>