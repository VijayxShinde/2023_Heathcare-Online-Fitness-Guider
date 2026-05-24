<!DOCTYPE html>
<html>
<body>
<h2> Hello Admin </h2>

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

include('connection.php');
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
                        <h3> Users data </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>User_id</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM users";
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
                                                <td><?= $row->user_id; ?></td>
                                                <td><?= $row->name; ?></td>
                                                <td><?= $row->surname; ?></td>
                                                <td><?= $row->gender; ?></td>
                                                <td><?= $row->email; ?></td>
                                                <td><?= $row->password; ?></td>
                                                <td>
																								<button class="btn btn-primary"><a class="text-light" href="./AdminService/UpdateUser.php?user_id=<?= $row->user_id ?>">Update</a></button>
                                                <!-- <button class="btn btn-primary"><a href="update.php" class="text-light">Update</a></button> -->
																								<button class="btn btn-danger" class="text-light"><a href="./AdminService/DeleteUser.php?deleteid=<?= $row->user_id ?>">Delete</a></button>
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

		<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3> User Workout Plan Table </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>User_id</th>
                                    <th>Email</th>
                                    <th>Activity Level</th>
                                    <th>Goal</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM workout_plan";
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
                                                <td><?= $row->user_id; ?></td>
                                                <td><?= $row->email; ?></td>
                                                <td><?= $row->activity_level; ?></td>
                                                <td><?= $row->goal; ?></td>
                                                <td>
																								<button class="btn btn-primary"><a class="text-light" href="./AdminService/Assign_Workout_Update.php?user_id=<?= $row->user_id ?>">Assign</a></button>
                                                <button class="btn btn-danger" class="text-light"><a href="./AdminService/Delete_Workout_Plan.php?deleteid=<?= $row->user_id ?>">Delete</a></button>
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
		<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>User Diet Plan Table</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>User_id</th>
                                    <th>Email</th>
                                    <th>Height</th>
                                    <th>Weight</th>
                                    <th>Diet_Preference</th>
                                    <th>Goal</th>
                                    <th>BMI(Body Mass Index)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM diet_plan";
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
                                                <td><?= $row->user_id; ?></td>
                                                <td><?= $row->email; ?></td>
                                                <td><?= $row->height; ?></td>
                                                <td><?= $row->weight; ?></td>
                                                <td><?= $row->diet_preference; ?></td>
                                                <td><?= $row->goal; ?></td>
                                                <td><?= $row->bmi; ?></td>
                                                <td>
																								<button class="btn btn-primary"><a class="text-light" href="./AdminService/Assign_Diet_Update.php?user_id=<?= $row->user_id ?>">Assign</a></button>
																								<button class="btn btn-danger" class="text-light"><a href="./AdminService/Delete_Diet_Plan.php?deleteid=<?= $row->user_id ?>">Delete</a></button>
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
		<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>User Workout Plan Record Table</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>User_id</th>
                                    <th>Activity Level</th>
                                    <th>Goal</th>
                                    <th>Date Recorded</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM user_workout_record";
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
                                                <td><?= $row->user_id; ?></td>
                                                <td><?= $row->activity_level; ?></td>
                                                <td><?= $row->goal; ?></td>
                                                <td><?= $row->date_and_time; ?></td>
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
           
		<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>User Diet Plan Record Table</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
																		<th>User_id</th>
                                    <th>Diet Preference</th>
                                    <th>Goal</th>
                                    <th>Date Recorded</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM diet_plan_record";
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
                                                <td><?= $row->user_id; ?></td>
                                                <td><?= $row->diet_preference; ?></td>
                                                <td><?= $row->goal; ?></td>
                                                <td><?= $row->date_time; ?></td>
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