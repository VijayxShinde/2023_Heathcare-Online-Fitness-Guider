<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>search diet plan</title>
    <link rel="stylesheet" href="plan.css" />
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
	<a href="Excersices/Diet_Meal.php" class="btn btn--white btn--animated"
          >See These Dishes As Reference</a
        >
    <div class="regform">
      <h1>Welcome to Search Diet Plan</h1>
    </div>
    <div class="main">
      <form method="POST" id="form" action="dietDB.php">
        <div class="plan">
          <h2 class="name">Height in cm</h2>
          <input
            class="height"
            id="height"
            type="number"
            name="height"
            required
            onblur="calcBmi()"
          />
          <h2 class="name">Weight in kg</h2>
          <input
            class="weight"
            id="weight"
            type="number"
            name="weight"
            required
            onblur="calcBmi()"
          />
          <h2 class="name">BMI</h2>
          <input class="bmi" id="bmi" type="text" name="bmi" readonly />
          <h2 class="name">Diet-Preference</h2>
          <select class="al" name="diet_preference">
            <option value="VEG">VEG</option>
            <option value="NON-VEG">NON-VEG</option>
          </select>
          <h2 class="name">Goal</h2>
          <select class="al" name="goal">
            <option value="Weight Gain">Weight Gain</option>
            <option value="Weight Loss">Weight Loss</option>
          </select>
        </div>
        <button type="submit" id="submit" name="submit">Customize!</button>
      </form>
    </div>
    <script>
      // Get references to the input fields and BMI output field
      const heightInput = document.getElementById("height");
      const weightInput = document.getElementById("weight");
      const bmiOutput = document.getElementById("bmi");

      // Add event listeners for when the input fields lose focus
      heightInput.addEventListener("blur", calculateBmi);
      weightInput.addEventListener("blur", calculateBmi);

      function calculateBmi() {
        const height = heightInput.value;
        const weight = weightInput.value;
        if (height && weight) {
          const bmi =
            Number(weight) / (((Number(height) / 100) * Number(height)) / 100);
          bmiOutput.value = bmi;
        }
      }
    </script>
  </body>
</html>