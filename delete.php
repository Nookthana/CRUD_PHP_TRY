<?php
 require 'conn.php';

 $sql="SELECT * FROM TB_customer";
 $res=$conn->query($sql);
 $data=$res->fetchAll(PDO::FETCH_ASSOC);
 //print_r($data[1]);

 
 if(isset($_REQUEST['delete'])){


      try {
        $a=$_REQUEST['delete'];
          $sql="DELETE FROM TB_customer WHERE Cust_id=?";
                $res=$conn->prepare($sql);

                if ($res->execute([$a])) {
                  $delete = "delete done";
                  header('Refresh:1; delete.php');
                }
        
      } catch (PDOException $e) {
          echo $e->getMessage();
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">CRUD PHP</a>
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
<?php
if (isset($delete)) {
    ?>
        <div class="alert alert-danger">
            <strong><?php echo $delete; ?></strong>
        </div>
    <?php } ?>
    

    <form action="CRUD.php" method="post">

<div class="container">
  <div class="row">
    <div class="col">
    <label >รหัสลูกค้า</label>
    <input type="text" class="form-control" id="id_customer" name="customer" required/>
    </div>
    <div class="col">
    <label >ชื่อลูกค้า</label>
    <input type="text" class="form-control" id="name" name="name"required/>
    </div>
  </div>
  
  <div class="form-group">
    <label >ที่อยู่ลูกค้า</label>
    <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
  </div>
  




  <div class="row">
    <div class="col">
    <label >รหัสไปรษณีย์</label>
    <input type="text" class="form-control" id="post_code" name="post_code" required/>
    </div>
    <div class="col">
    <label >เบอร์โทรศัพท์</label>
    <input type="tell" class="form-control" id="tell" name="tell"required/>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <label >เบอร์แฟกช์</label>
    <input type="text" class="form-control" id="fax"  name="fax"required/>
    </div>
    <div class="col">
    <label >อีเมลล์</label>
    <input type="email" class="form-control" id="email" name="email" required/>
    </div>
  </div>



  </form><br>

  <div class="container" align="center">
  <div class="row">
    <div class="col-sm">
    <button type="submit" name="data" class="btn btn-dark">บันทึก</button>
    </div>
    <div class="col-sm">
    <a href="edit.php" class="btn btn-secondary">แก้ไข</a>
    </div>
    <div class="col-sm">
    <a href="delete.php" class="btn btn-danger">ลบ</a>
    </div>
    <div class="col-sm">
    <a href="Report.php" class="btn btn-primary">รายงาน</a>
    </div>
  </div>
</div>

 <br><br>
  <table class="table table-dark">

    <tr align="center">
      <td scope="col">รหัสลูกค้า</td>
      <td scope="col">ชื่อลูกค้า</td>
      <td scope="col">ที่อยู่ลูกค้า</td>
      <td scope="col">รหัสไปรษณีย์</td>
      <td scope="col">เบอร์โทรศัพท์</td>
      <td scope="col">เบอร์แฟกช์</td>
      <td scope="col">อีเมลล์</td>
      <td scope="col">แก้ไข</td>
    </tr>

      <?php foreach($data as $row)
      {?>


    <tr align="center">
    <td><?php print_r($row['Cust_id']);?></td>
      <td><?php print_r($row['Cust_name']);?></td>
      <td><?php print_r($row['Cust_address']);?></td>
      <td><?php print_r($row['Cust_postcode']);?></td>
      <td><?php print_r($row['Cust_phone']);?></td>
      <td><?php print_r($row['Cust_fax']);?></td>
      <td><?php print_r($row['Cust_email']);?></td>
      <td><a class="btn btn-danger"href="?delete=<?php print_r($row['Cust_id']);?>">ลบ</a></td></td>
    </tr>

<?php } ?> 
 
</table>


</div>
</body>
</html>
