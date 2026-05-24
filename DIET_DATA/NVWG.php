<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<style>
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  

  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #ffffff ;
    color: white;
  }
  #head{
    text-align: center;
    background: linear-gradient(rgba(220, 20, 60, 0.415),#ffff);

  }
  #label{
    text-align: left;  
  }
  .copyright {
    padding-top: 0.7%;
    text-align: center;
    margin-top: 170px;
    border-style: groove;
    background-color: #777;
    color: black;
  }

	.btn,
.btn:link,
.btn:visited {
  text-transform: uppercase;
  text-decoration: none;
  padding: 1.5rem 4rem;
  display: inline-block;
  border-radius: 10rem;
  transition: all 0.2s;
  position: relative;
  font-size: 1rem;
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
  <div id="head">
<h1>Weekly Diet Plan</h1>
<img src="wdp.png" width="10%">
</div>
<h3>Non-Veg Diet Plan For <strong>Weight Gain !!</strong> </h3>
<div id="label">
  <h4>Admin will be sending you details about your diet plan on your email......
  <img src="email.png.png" width="25px" height="25px" ></h4>
</div>
<table id="customers">
  <tr>
    <th></th>
    <th><img src="Sunday.png" alt="sunday" width="50%"></th>
    <th><img src="Monday.png" alt="Monday" width="50%"></th>
    <th><img src="Tuesday.png" alt="Tuesday" width="50%"></th>
    <th><img src="Wednesday.png" alt="Wednesday" width="50%"></th>
    <th><img src="Thursday.png" alt="Thursday" width="50%"></th>
    <th><img src="Friday.png" alt="Friday" width="50%"></th>
    <th><img src="Saturday.png" alt="Saturday" width="50%"></th>
  </tr>

  <tr>
    <td><img src="Breakfast.png" alt="Breakfast" width="60%"><br>(8:00 to 8:30 AM)</td>    
    <td>1 cup oats with skimmed milk</td>
    <td>1/2 cup veg miliets upma <br>+ 2 cup sauteed cottage cheese(paneer)</td>
    <td>2 idli with 1/2 bowl sambar</td>
    <td>1omelette with 2 eggs whites <br>+ grated vegetables</td>
    <td>1 cup masala oats <br>+ 2 walnuts</td>
    <td>3/4 cup poha with vegetables <br> + 1/4 lime wedge <br> + 1 boiled egg</td>
    <td>1/2 cup masala tea without sugar</td>





   
  </tr>
  <tr>
    <td><img src="Lunch.png" alt="Lunch" width="60%"><br>(2:00 to 2:30 PM)</td>
    <td>1 cup thick methi/palak dal <br>+2 cup rice</td>
    <td>1/2 cup matar paneer curry <br>+ 1 chapatti (no oil / no ghee)</td>
    <td>1 cup matar dalia pulao</td>
    <td>1 palak paratha <br>+ 1 cup raita </td>
    <td>1 cup pulao <br>+ boiled peas</td>
    <td>1 cup millets/dalia pulao with vegetables <br>+ 1 small sliced tomato</td>
    <td>2 phulk (NO Oil) <br>+  100g low fat chicken curry</td>





  </tr>
  <tr id="D">
    <td><img src="Dinner.png" alt="Dinner" width="60%"><br>(8:00 to 8:30 PM)</td>
    <td>3/4 cup panner<br>+ dalia/millets pulao</td>
    <td>2 cheela/dal dosa with tomato <br>+ ginger chutney</td>
    <td>1 cup masala oats <br>+ 1 cup vegetable soup</td>
    <td>3/4 cup masala oats/ dalia<br>+ 200g grilled fish</td>
    <td>1 chapati with no oil <br>+ 3/4 cup any vegetables</td>
    <td>200g chicken souted with<br> boiled vegetables and peppers</td>
    <td>1 cup fried rice with quinoa/dalia <br>+ eggs and 200g chicken</td>
  </tr>
</table>
<center>
	<a href="../Excersices/services.php" class="btn btn--white btn--animated">Back To Service Page</a>
</center>
<p class="copyright">
  Copyright &copy;2022-2023 Computer Engineering Group, All Rights
  Reserved
</p>
</body>
</html>