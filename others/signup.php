<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>signup</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="..\css\mystyl.css">
  <style>
	body{
	  margin: 0;
	  padding: 0;
	}
	.container{
  background: cornflowerblue;
  width:100vw;
  height:100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}
	.box{
		width: 600px;
		height: 600px;
		background-color: #000;
		display:flex;
	}
	.image_display{
		width: 60%;
		height: 650;
		background-image: url(../imgs/GettyImages.jpg);
		background-size: cover;
		background-opacity:0.4;
		background-repeat: no-repeat;
		background-position:-70px 0px;
		color: #fff;
		text-align: center;
		font-size: 20px;
		position:relative;
		
	}
	.overlay{
		background-color:#000;
		width:100%;
		height:100%;
		position:absolute;
		opacity: 0.5;
	}
	.signupBox{
		width:40%;
		height:auto;
		float:right;
		background-color:#fff;
		padding: 20px;
	}
	h1{
		margin: 0;
		text-align: center;
		padding: 0 0 20px;
		font-weight: bold;
	}
	.signupBox p{
		margin: 0;
		padding: 0;
		font-size: 15px;
	}
	.signupBox input{
		width: 100%;
		margin-bottom: 20px;
		font-family: sans sarif;
	}
	.signupBox input[type="text"], input[type="password"]{
		border: none;
		border-bottom: 1px solid grey;
		background: transparent;
		outline: none;
		height: 40px;
		color:#000;
		font-size:15px; 
	}
	.signupBox input[type="submit"]{
		border: none;
		outline: none;
		height: 40px;
		background: #000;
		color:#fff;
		font-size: 18px;
		padding: 5px;
	}
		form p select{
			width: 40%;
			margin-bottom:5px;
		}
  </style>
</head>
<body>
  <div class="container">
    <div class="box">
		
     <div class="image_display">
		<div class="overlay">
			<h1>SignUp Here</h1>
		</div>
	 </div>
	 <div class="signupBox">
	  <form>
		<h1 id="">SIGNUP TO QUIZUP</h1>
		  <p>UserName</p>
		  <input type="text" name="" placeholder="Enter username">
		  <p>Email</p>
			<input type="text" name="" placeholder="Enter email">
			<p>FullName</p>
		  <input type="text" name="" placeholder="Enter username">
			<p>Select Class:
			<select name="" id="">
				<option value="IT">IT</option>
				<option value="PR">PR</option>
				<option value="Law">Law</option>
			</select>
			</p>
		  <p>Password</p>
		  <input type="password" name="" placeholder="Enter password">
		  <p>Confirm Password</p>
		  <input type="password" name="" placeholder="Re-enter password">
		  <input type="submit" id="btn" value="Register">
	  </form>
     </div>
    </div>
  </div>
</body>
</html>