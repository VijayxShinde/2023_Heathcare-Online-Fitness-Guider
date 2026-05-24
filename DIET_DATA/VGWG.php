<!DOCTYPE html>
<html>
<head>
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
<h3>Veg Diet Plan For <strong>Weight Gain !!</strong></h3>
<div id="label">
	<h4>Admin will be sending you details about your diet plannon your email......
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
    <td>veggies brown bread sandwich<br> + 1 cup milk <br>+ 4 almonds</td>
    <td>3 onion stuffed paratha <br>+ 1 cup curd <br>+ 3 cashews <br>+ 4 almonds</td>
    <td>3 paneer stuffed besan <br>+ green chutney <br>+ 1 cup curd <br>+ 3 cashew <br>+ 4 almonds</td>
    <td>1.5 cup upma <br>+ 1 cup milk <br>+ 4 almonds</td>
    <td>1 orange juice <br>+ 3 cashews <br>+ 2 walnuts<br> + 4 almonds</td>
    <td>2 cup poha <br> + 1 cup curd <br> + 3 cashews <br>+ almonds</td>
    <td>1 cup strawberry shake <br>+ 1 chashews <br>+ 4 almonds</td>
		
		
		
		
		
		
  </tr>
  <tr>
		<td><img src="Lunch.png" alt="Lunch" width="60%"><br>(2:00 to 2:30 PM)</td>
    <td>1 cup arhar dal <br>+ 1 cup potato curry <br>+ 3 chapatti <br>+ 1/2 cup rice <br>+ salad</td>
    <td>1 cup moond dal <br>+ 3 chapatti  <br>+ 1/2 cup rice <br>+ salad</td>
    <td>1 cup masoor dal <br>+ 3 chapati <br>+ 1/2 cup rice <br>+ salad</td>
    <td>1 cup rajma curry <br>+ 1 cup spinach potato <br>+ 3 chapatti <br>+ 1/2 cup rice <br>+ salad</td>
    <td>1 cup white chana <br>+ 3 chapatti <br>+ 1/2 cup rice <br>+ salad</td>
    <td>1 cup chana dal <br>+ 3 chapatti <br>+ 1/2 cup rice <br>+ salad</td>
    <td>1 cup mix dal <br>+  1 cup soya0bean curry <br>+ 3 chapatti <br>+ salad </td>
		
		
		
		
		
  </tr>
  <tr id="D">
		<td><img src="Dinner.png" alt="Dinner" width="60%"><br>(8:00 to 8:30 PM)</td>
    <td>1.5 cup kathal curry <br>+ 3 chapati <br>+ salad</td>
    <td>1 cup beans potato vegetable <br>+ 3 chapati <br>+ salad</td>
    <td>1 cup carrot peas vegetable <br>+ 3 chapatti <br>+ salad</td>
    <td>1.5 cup parwal vegetable <br>+ 3 chapatti <br>+ salad</td>
    <td>1 cup cauliflower potato vegetable <br>+ 3 chapatti <br>+ salad</td>
    <td>1 cup peas mushroom vegetable <br>+ 3 chapatti <br>+ salad</td>
    <td>1 cup karela vegetable <br>+ 3 chapatti <br>+ salad</td>
  </tr>
</table>
<br>
<center>
	<a href="../Excersices/services.php" class="btn btn--white btn--animated">Back To Service Page</a>
</center>
<p class="copyright">
	Copyright &copy;2022-2023 Computer Engineering Group, All Rights
  Reserved
</p>
</body>
</html>