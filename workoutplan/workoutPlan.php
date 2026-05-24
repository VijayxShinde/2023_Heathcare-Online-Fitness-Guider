<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Workout Plan</title>
    <link rel="stylesheet" href="workoutPlan.css" />
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
<body>
<a href="../Excersices/Exercises.php" class="btn btn--white btn--animated"
          >See More Exercises Here</a
        >
	<div class="regform">
		<h1>Make Workout Plan</h1>
	</div>
	<div class="main">

        <form method="POST" id="form" action="../workoutPlanDB.php">
           <div class="plan">
            <h2 class="name"> Activity-level </h2>
            <select class="al" name="activity_lvl">
                <option value = "Beginner"> Beginner
                </option>
                <option value = "Intermidiate"> Intermidiate
                </option>
                <option value = "Advanced"> Advanced
                </option>
    
                </select>
            <h2 class="name" >Goal </h2>
            <select class="al" name="goal">
                <option value = "Get In Shape"> Get In Shape
                </option>
                <option value = "Lose Weight"> Lose Weight
                </option>
                <option value = "Gain Weight"> Gain Weight
                </option>
                </select>
                <h2 class="name">Email-Id</h2>
          <input class="al" id="email" type="email" name="email" required/>
        </div>
         <button type="submit" id="submit" onclick="dietplan()">CUSTOMIZE</button>
        </form>
    </div>
<p class="copyright">
        Copyright &copy;2022-2023 Computer Engineering Group, All Rights
        Reserved
      </p>
</body>
</html>
