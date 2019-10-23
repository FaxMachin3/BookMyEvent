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

.footer {
  position:relative;
  overflow: hidden;
  opacity: 0.5;
  background-color: #000;
  padding: 1px 1px;
}

.footer a {
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

@font-face{
font-family: myfont;
src:url(font.otf);
}

.footer-right {
  float: right;
}
@media screen and (max-width: 500px) {
  .footer a {
    float: none;
    display: block;
    text-align: left;
  }
  .footer-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="footer">
  <div class="footer-right">
    <a href="javascript:void(0)">for any queries mail us at: <i>subhamraj4114@gmail.com</i></a>
  </div>
</div>

</body>
</html>
