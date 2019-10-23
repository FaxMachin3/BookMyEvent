<!DOCTYPE html>
<html>
<head>
<title>Header</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

span{
	position:fixed;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

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

.header a.active {
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
		<a href="myprofile.php">Welcome <?php echo $_SESSION['name']; ?>!</a>
		<a href="main.php">Home</a>
		<a href="signout.php">Logout</a>
	  </div>
</div>

</body>
</html>