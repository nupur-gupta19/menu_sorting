<?php
    require 'config.php';

    if(isset($_POST['action'])){
        $sql = "SELECT * FROM menu WHERE Category !=''";

        if(isset($_POST['category'])){
            $category = implode("',",$_POST['category']);
            $sql .="AND Category IN('".$category."')";
        }
        if(isset($_POST['meal'])){
            $meal = implode("',",$_POST['meal']);
            $sql .="AND Meal IN('".$meal."')";
        }

        $result = $conn->query($sql);
        $output='';

        if($result){
            while($row=$result->fetch_assoc()){
                $output .= '<div class=".col-md-3 mb-2">
                <div class="card-deck">
                    <div class="card border-secondary">
                        <img src="'.$row['Image'].' " class="card-img-top dish">

                        <div class="card-body">

                            <p>
                                Name: '. $row['Name'].'<br>
                                Calories: '. $row['Calories'].'<br>
                                Category: '. $row['Category'].'<br>
                                Type: '. $row['Meal'].'<br>
                            </p>
                            <a href="#" class="btn btn-success btn-block">Buy</a>
                          
                        </div>
                    </div>
                </div>
            </div>';
            }
        }
        else{
            $output = "<h3 >No Menu Found!</h3>";
        }
        echo $output;
    }
?>
