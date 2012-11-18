<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Tests For tipy!</title>
    <link rel="stylesheet" href="source/tipy.css">
    <link rel="stylesheet" href="css/demo.css">
    <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="source/tipy.js"></script>
</head>
<body>

<div href="#" data-tipy="This one is a Top left tipy! and it's position is defined automatically" class="demo-tipy top left" >Top Left</div>
<div href="#" data-tipy="This one is a Top center tipy! and it's position is defined automatically" class="demo-tipy top left right" >Top</div>
<div href="#" data-tipy="This one is a Top Right tipy! and it's position is defined automatically" class="demo-tipy top right" >Top Right</div>
<div href="#" data-tipy="This one is a Right tipy! and it's position is defined automatically" class="demo-tipy right top bottom" >Right</div>
<div href="#" data-tipy="This one is a Bottom Right tipy! and it's position is defined automatically" class="demo-tipy bottom right" >Bottom Right</div>
<div href="#" data-tipy="This one is a Bottom tipy! and it's position is defined automatically" class="demo-tipy bottom left right" >Bottom</div>
<div href="#" data-tipy="This one is a Bottom Left tipy! and it's position is defined automatically" class="demo-tipy bottom left" >Bottom Left</div>
<div href="#" data-tipy="This one is a Left tipy! and it's position is defined automatically" class="demo-tipy top bottom left" >Left</div>

<div class="top right bottom left" id="center-div">
    <div class="demo-tipy top right left" data-tipy="This is a tipy! with class 'red'" data-tipy-pos="l" data-tipy-class="red">Red tipy!</div>
    <div class="demo-tipy top bottom right left" data-tipy="This is a tipy! with class 'yellow'"  data-tipy-pos="r"  data-tipy-class="yellow">Yellow tipy!</div>
    <div class="demo-tipy bottom right left" data-tipy="This is a tipy! with class 'shaky'"  data-tipy-pos="l"  data-tipy-class="shaky">Shaky tipy!</div>
</div>
<script type="text/javascript">
</script>
</body>
</html>