<!DOCTYPE html>
<head>
<style>

.btn,
.btn:link,
.btn:visited {
  text-transform: uppercase;
  text-decoration: none;
  padding: 1.5rem 4rem;
  display: inline-block;
  border-radius: 2rem;
  transition: all 0.2s;
  position: relative;
  font-size: 10px;
  border: none;
  cursor: pointer;
}

.btn:hover {
  transform: translateY((-3px));
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
}
.btn:hover::after {
  transform: scaleX(1.4) scaleY(1.6);
  opacity: 0;
}
.btn:active,
.btn:focus {
	outline: none;
  transform: translateY(-1px);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}
.btn--white {
	background-color: #fff;
  color: #777;
}
.btn--white::after {
	background-color: #fff;
}
.btn::after {
	content: "";
  display: inline-block;
  height: 100%;
  width: 100%;
  border-radius: 10rem;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: all 0.4s;
}

.btn--animated {
	animation: moveInBottom 0.5s ease-out 0.75s;
  animation-fill-mode: backwards;
}

</style>
</head>
<html>
	<body>
	<a href="services.php" class="btn btn--white btn--animated"
				>Back To Services</a
			>
<h2> More Diet Meals For You !! </h2>

<?php
$conn = "";

try {
	$servername = "localhost";
	$dbname = "fitness_guide";
	$username = "root";
	$password = "";
	
	$conn = new PDO(
		"mysql:host=$servername; dbname=$dbname",
		$username, $password
	);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title></title>
  </head>
  <body>
		<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3> Dishes: </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Diet Preference</th>
                                    <th>Dish</th>
                                    <th>Calories</th>
                                    <th>Proteins</th>
                                    <th>Fats</th>
                                    <th>Meal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM food_table";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();

                                    $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                    $result = $statement->fetchAll();
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row->food_id; ?></td>
                                                <td><?= $row->diet_preference; ?></td>
                                                <td><?= $row->dish; ?></td>
                                                <td><?= $row->calories; ?></td>
                                                <td><?= $row->protein; ?></td>
                                                <td><?= $row->carbs; ?></td>
                                                <td><?= $row->fats; ?></td>
                                                <td><?= $row->meal; ?></td>
                                                <td>
                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5">No Record Found</td>
																						<?php } ?>
                                        </tr>
                                    

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>



             
</body>
</html>