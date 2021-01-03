<?php
    require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Lemonada&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <style>
        #loader{
            width: 200px;
            display: none;
        }
        .item{
            margin-top: 175px;
        }
        .dish{
            width: 300px;
            height: 300px;
            padding: 10px;
            margin-left: 45px;
            margin-top: 10px;
        }
        .card{
            width: 340px;
            height: 550px;
        }
        #result{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        #menu{
          font-size: 50px;
          font-family: 'Lemonada', cursive;
          margin-top: 150px;
          }
          .filter
          {
            margin-top: 170px;
            margin-left: 20px;
            line-height: 40px;
            font-family: 'Lemonada', cursive;
          }
          .text-info{
            line-height:30px;
            font-family: 'Noto Sans JP', sans-serif;
            }
            #heading
            {
                background-image:url("image/bg.jpg");
                padding-top:70px;
               
             
            }
            #filterId
            {
              font-size: 30px;
              margin-bottom: 20px;
            }
            .nav-item
            {
              padding: 0 10px;
            }
            .navbar{
              height: 70px;
            }
    </style>

</head>
<body>
<nav class="navbar bg-secondary navbar-expand-md navbar-dark">
    <a class="navbar-brand" href="">Exotic Food</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#tog" aria-controls="tog" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="tog">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""> Place Order </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
    </ul>
    </div>
  </nav>
  <div class="row" id="heading" style="color:black;height:340px;">
     <div class="col-lg-12">
     <h1 style="font-size: 80px;font-family: 'Allura';"><b>
         <center><strong>Take a trip to Chow-Town </strong>
       </b></h1>
     <h4 style="font-size: 25px;font-family: 'Allura';"><b>
         <center><strong>Buon appetito!!</strong>
           <center>
       </b></h4>
     </div>
   <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 filter">
                <h5 id="filterId">Filter</h5>

                <hr>
                <h6 class="text-info">Category</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT Category FROM menu";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['Category']; ?>" id="category"><?= $row['Category']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
                <h6 class="text-info">Type</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT Meal FROM menu";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['Meal']; ?>" id="meal"><?= $row['Meal']; ?>
                            </label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-8">
                <h5 class="text-center" id="menu">Menu</h5>
                <hr>
                <div class="text-center">
                    <img src="image/preview.gif" id="loader">
                </div>
                <div class="row" id="result">
                    <?php
                        $sql="SELECT * FROM menu";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <div class=".col-md-3 mb-2">
                        <div class="card-deck">
                            <div class="card border-secondary">
                                <img src="<?= $row['Image']; ?>" class="card-img-top dish">
                                <!-- <div class="card-img-overlay">
                                    <h6 class="text-light bg-info text-center rounded p-1 item"><?= $row['Name']; ?></h6>
                                </div> -->
                                <div class="card-body">
                                    <!-- <h4 class="card-title text-danger">Price : <?= number_format($row['Price']); ?>/-</h4> -->
                                    <p>
                                        Name: <?= $row['Name']; ?><br>
                                        Calories: <?= $row['Calories']; ?><br>
                                        Category: <?= $row['Category']; ?><br>
                                        Type: <?= $row['Meal']; ?><br>
                                    </p>
                                    <a href="#" class="btn btn-success btn-block">Buy</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
   </div>
   <script type="text/javascript">
        $(document).ready(function(){

            $(".product_check").click(function(){
                $("#loader").show();

                var action = 'data';
                var category = get_filter_text('category');
                var meal = get_filter_text('meal');

                $.ajax({
                  url:'action.php',
                  method:'POST',
                  data:{action:action,category:category,meal:meal},
                  success:function(response){
                      $("#result").html(response);
                      $('#loader').hide();
                      $('#menu').text("Menu");
                  }
                });

            });

            function get_filter_text(text_id){
                var filterData = [];
                $('#'+text_id+':checked').each(function(){
                    filterData.push($(this).val());
                });
                return filterData;
            }

        });
    </script>
</body>
</html>
