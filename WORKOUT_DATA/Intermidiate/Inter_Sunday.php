<!DOCTYPE html>
<html>
  <head>
    <title>Daily Workout Plan for Intermediater</title>
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
        background-color: #de1d5a;
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
        height: 70px;
        width: 70px;
      }
    </style>
  </head>
  
  <body>
    <table>
      <caption>Daily Workout Plan for Intermediater</caption>
      <thead>
        <tr>
          <th>Sunday</th>
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
          <td>Rest</td>
          <td>1</td>
          <td>Whole day</td>
          <td>Take Rest</td>
          <td>Take Rest</td>
        </tr>
        <tr>
          <td >Second Exercise</td>
          <td>Rest</td>
          <td>1</td>
          <td>Whole day</td>
          <td>Take Rest</td>
          <td>Take Rest</td>
        </tr>
        <tr>
          <td >Third Exercise</td>
          <td>Rest</td>
          <td>1</td>
          <td>Whole day</td>
          <td>Take Rest</td>
          <td>Take Rest</td>
        </tr>
        <tr>
          <td>Forth Exercise</td>
          <td>Rest</td>
          <td>1</td>
          <td>Whole day</td>
          <td>Take Rest</td>
          <td>Take Rest</td>
        </tr>
        <tr>
          <td>Fifth Exercise</td>
          <td>Rest</td>
          <td>1</td>
          <td>Whole day</td>
          <td>Take Rest</td>
          <td>Take Rest</td>
        </tr>
        <tr>
          <td>Sixth Exercise</td>
          <td>Rest</td>
          <td>1</td>
          <td>Whole day</td>
          <td>Take Rest</td>
          <td>Take Rest</td>
        </tr>
        <tr>
          <td>Seventh Exercise</td>
          <td>Rest</td>
          <td>1</td>
          <td>Whole day</td>
          <td>Take Rest</td>
          <td>Take Rest</td>
        </tr>
      </tbody>
    </table>
		<a href="Inter_Saturday.php" class="btn btn--white btn--animated">Saturday Workout</a>
              <a href="../../Excersices/services.php" class="btn btn--white btn--animated">Back To Service Page</a>
              <a href="Inter_Monday.php" class="btn btn--white btn--animated">Monday Workout</a>
  </body>
</html>
