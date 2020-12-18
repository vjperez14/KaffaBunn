<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kaffa Bunn Cafe</title>
  <link rel="icon" href="images/logo.png" type="image/gif">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <img src="images/logo.png" width="50" height="55" style="margin-bottom: 15px;"> &nbsp
      <a class="navbar-brand" href="index.php" style="color: #CD853F;">Kaffa Bunn<small style="color: #CD853F;">Cafe</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="orders.php" class="nav-link" style="font-family: 'Antic Slab';">Order
              Transactions</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <script>
    $(document).ready(function() {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
  </script>
  <br><br><br><br>
  <center>
    <span class="subheading" style="font-size: 50px; font-family: Lobster; color: #CD853F;">Order Transactions Database
      <i class="fa fa-users" aria-hidden="true"></i></span>
    <h2 style="font-size: 20px; color: black;"><i class="fa fa-pagelines"></i> Administrator Access</h2><br>
    <center>
      <table id="dtBasicExample" class="table" width="100%">
        <thead>
          <tr>
            <th class="th-sm">ID
            </th>
            <th class="th-sm">Name
            </th>
            <th class="th-sm">Deliver Address
            </th>
            <th class="th-sm">Phone
            </th>
            <th class="th-sm">Email
            </th>
            <th class="th-sm">Orders
            </th>
            <th class="th-sm">Total Amount
            </th>
            <th class="th-sm">Mode of Payment
            </th>
            <th class="th-sm">Action
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          include('php/config.php');
          $sql = "SELECT * FROM orders_table";
          $res = mysqli_query($con, $sql);
          $product;
          $quantity;
          $count = 0;
          while ($rows = mysqli_fetch_array($res)) {
            $product = explode(",", $rows['cart']);
            $quantity = explode(",", $rows['quantity']);
            
            echo "<tr>";
                echo "<td>"; echo $rows['orders_id']; echo "</td>";
                echo "<td>"; echo $rows['cust_name']; echo "</td>";
                echo "<td>"; echo $rows['address']; echo "</td>";
                echo "<td>"; echo $rows['phone']; echo "</td>";
                echo "<td>"; echo $rows['email']; echo "</td>";
                echo "<td>"; 
                  foreach ($product as $key => $item) {
                    if ($key != 0) {
                      $query1 = "SELECT * FROM `products` WHERE product_id=$item";
                      $reslut1 = mysqli_query($con, $query1) or die(mysqli_error($con));
                      $category = $name = $desc = $price = '';
                      if (mysqli_num_rows($reslut1) > 0) {
                        while ($row = mysqli_fetch_array($reslut1)) {
                          $name = $row["name"];
                          $category = $row["category"];
                          $desc = $row["description"];
                          $price = $row["price"];
                          echo $name." x".$quantity[$key]."<br>";
                        }
                      }
                    }
                  }
                echo "</td>";
                echo "<td>"; echo "₱".$rows['amount'].".00"; echo "</td>";
                echo "<td>"; echo $rows['status']; echo "</td>";
                echo "<td>"; echo "<button name='deliver".$count."' id='deliver".$count."' value=".$rows['orders_id']." type='submit' class='btn btn-success'>Deliver</button>"; echo "</td>";
              echo "</tr>";
              $count++;
          }
          ?>
      </table>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="script/admin.js"></script>
</body>

</html>