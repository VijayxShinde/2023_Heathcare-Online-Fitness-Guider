<!DOCTYPE html>
<html>
  <head>
    <title>Daily Workout Plan for Beginners</title>
    <style>

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



      table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
      }
      
      th, td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
      }
      
      th {
        background-color: #4CAF50;
        color: white;
      }
      
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      
      caption {
        font-size: 24px;
        margin-bottom: 20px;
      }

      img
      {
        height: 90px;
        width: 120px;
      }
    </style>
  </head>
  
  <body>
    <table>
      <caption>Daily Workout Plan for Beginners</caption>
      <thead>
        <tr>
          <th>Tuesday</th>
          <th>Workout</th>
          <th>Sets</th>
          <th>Reps</th>
          <th>Preview</th>
          <th>link</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>First Exercise</td>
          <td>Push Ups</td>
          <td>1</td>
          <td>14</td>
          <td><img src="push ups.jfif" ></td>
          <td><a href="https://youtu.be/eMQuAjuPCV0">Click here to<br> watch video</a></td>
        </tr>
        <tr>
          <td >Second Exercise</td>
          <td>Russian Twist</td>
          <td>1</td>
          <td>20</td>
          <td><img src="russian.jfif" ></td>
          <td><a href="https://youtu.be/DJQGX2J4IVw">Click here to<br> watch video</a></td>
        </tr>
        <tr>
          <td >Third Exercise</td>
          <td>Diamond Push-ups</td>
          <td>1</td>
          <td>6</td>
          <td><img src="diamond.jfif" ></td>
          <td><a href="https://youtu.be/36HgbeFenxs">Click here to<br> watch video</a></td>
        </tr>
        <tr>
          <td>Forth Exercise</td>
          <td>Backward Lunge</td>
          <td>1</td>
          <td>14</td>
          <td><img src="backward.jfif" ></td>
          <td><a href="https://youtu.be/1LQCLqHUFUI">Click here to<br> watch video</a></td>
        </tr>
        <tr>
          <td>Fifth Exercise</td>
          <td>Rest</td>
          <td>1</td>
          <td>60 sec</td>
          <td>Take Rest</td>
          <td>Take Rest</td>
        </tr>
        <tr>
          <td>Sixth Exercise</td>
          <td>Rhomboid Pulls</td>
          <td>1</td>
          <td>14</td>
          <td><img src="puls.jfif" ></td>
          <td><a href="https://www.google.com/search?q=rhomboid+pulls&source=lmns&tbm=vid&rlz=1C1CHBF_enIN1050IN1050&hl=en-GB&sa=X&ved=2ahUKEwjcoJumnL3-AhUZ-HMBHY_HAXMQ0pQJKAJ6BAgBEAY#fpstate=ive&vld=cid:fd078f62,vid:DEyDbzSudEU">Click here to<br> watch video</a></td>
        </tr>
        <tr>
          <td>Seventh Exercise</td>
          <td>Hover Push ups</td>
          <td>1</td>
          <td>8</td>
          <td><img src="hover.jfif" ></td>
          <td><a href="https://www.google.com/search?q=hover+push+ups&source=lmns&tbm=vid&rlz=1C1CHBF_enIN1050IN1050&hl=en-GB&sa=X&ved=2ahUKEwjmlublnL3-AhXhErcAHRFpCx0Q0pQJKAJ6BAgBEAY#fpstate=ive&vld=cid:36dad985,vid:HZ7iT-Hnj2U">Click here to<br> watch video</a></td>
        </tr>
      </tbody>
    </table>
		<a href="begg_Monday.php" class="btn btn--white btn--animated">Monday Workout</a>
              <a href="../../Excersices/services.php" class="btn btn--white btn--animated">Back To Service Page</a>
              <a href="begg_Wednesday.php" class="btn btn--white btn--animated">Wednesday Workout</a>
  </body>
</html>
