<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Workout Plan</title>
    <link rel="stylesheet" href="workoutPlan.css">
</head>
<body>
    <div class="regform">
        <h1>Make Workout Plan</h1>
    </div>
    <div class="main">

        <form method="POST" id="form" action="workoutPlanDB.php">
           <div class="plan">
    
            </select>
            <h2 class="name"> Activity-level </h2>
            <select class="al" name="activity_lvl">
                <option value = "Begginer"> Begginer
                </option>
                <option value = "Intermidiate"> Intermidiate
                </option>
                <option value = "Advance"> Advance
                </option>
    
                </select>
            <h2 class="name" >Goal </h2>
            <select class="al" name="goal">
                <option value = "Get in Shape"> Get In Shape
                </option>
                <option value = "Lose Weight"> Lose Weight
                </option>
                <option value = "Improve Overall Health"> Improve Overall Health
                </option>
                </select>
        </div>
         <button type="submit" id="submit" onclick="dietplan()">CUSTOMIZE</button>
        </form>
    </div>
    <p class="info">
        Infrmation About How You Your Goal will achived...
</p>
<p class="copyright">
        Copyright &copy;2022-2023 Computer Engineering Group, All Rights
        Reserved
      </p>
</body>
</html>
