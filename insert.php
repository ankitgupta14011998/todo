<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 40px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}



.btnssed{
    margin-left:30%;
    margin-right:30%;
    cursor:pointer;
}

select{
width:100%;
margin-bottom:16px;
border-radius:40px;
padding:10px;
font-size:15px;
}
/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  text:white;
  text-color:white;
}

/* Style the container for inputs */
.container {
  background-color: transparent;
  padding: 20px;
  text-align: center;
  color: white;
  font-size: 25px;
}

h1{
  color: white;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

a{
  color: white;
}

body{
  margin-top: 10%;
  margin-right: 20%;
  margin-left: 20%;
  background-image: url(https://image.shutterstock.com/image-photo/bright-spring-view-cameo-island-260nw-1048185397.jpg);
 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
</head>
<body><h1 align="center">Create a To Do List</h1>
		<form action="register.php" method="post">
			
	



<div class="container">

    <label for="to_do" >Todo Name</label>
    <input type="text" id="to_do"  name="to_do" required>

<br><br><br>
        <label for="date">Deadline</label>
    <input type="Date" id="date" name="date" required>

  <br><br><br>
    <div class = btnssed>
    <input type="submit" value="Save">
    <input type="reset" value="Clear">
    <br><br>
<a href ="list.php" >ToDo List</a>

</div>
  </form>
</div>




    



</body>
</html>