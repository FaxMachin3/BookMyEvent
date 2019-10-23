<!DOCTYPE html>
<html>
<head>
<title>Header</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  opacity:0.6;
  overflow: hidden;
  background-color: #000;
  padding: 10px 10px;
}

.header a {
  float: left;
  color: #fff;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  transition: background-color 0.3s;
}

.header a.logo {
  color: #fff;
  font-size: 30px;
  font-weight: bold;
  transition: background-color 0.3s;
}

.header a:hover {
  background-color: #fff;
  color: #000;
}

@font-face{
font-family: myfont;
src:url(font.otf);
}

.header a:active {
  color: white;
}

.header-right {
  float: right;
}
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
	  <a href="main.php" class="logo">BookMyEvent</a>
	  <div class="header-right">
		<a href="main.php">Home</a>
		<a href="login.php">Login</a>
		<a href="signup.php">Signup</a>
	  </div>
</div>

</body>
</html>