<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Tests For tipy!</title>
    <link rel="stylesheet" href="source/tipy.css">
    <link rel="stylesheet" href="css/demo.css">
	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="source/tipy.js"></script>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-28367526-2']);
		_gaq.push(['_setDomainName', 'xpy.gr']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

</head>
<body>
<div class="right left" style="width:500px;height:50px; top:100px; text-align:center; position:absolute;">
<a style="font-family:Courgette, serif;display:inline-block; font-size: 40px " href="index.html">Back to tipy!</a>
    </div>
<div href="#" data-tipy="This one is a Bottom Right tipy! and it's position is defined automatically" class="demo-tipy top left" >Top Left</div>
<div href="#" data-tipy="This one is a Bottom center tipy! and it's position is defined automatically" class="demo-tipy top left right" >Top</div>
<div href="#" data-tipy="This one is a Bottom Left tipy! and it's position is defined automatically" class="demo-tipy top right" >Top Right</div>
<div href="#" data-tipy="This one is a Left tipy! and it's position is defined automatically" class="demo-tipy right top bottom" >Right</div>
<div href="#" data-tipy="This one is a Top Left tipy! and it's position is defined automatically" class="demo-tipy bottom right" >Bottom Right</div>
<div href="#" data-tipy="This one is a Top tipy! and it's position is defined automatically" class="demo-tipy bottom left right" >Bottom</div>
<div href="#" data-tipy="This one is a Top Right tipy! and it's position is defined automatically" class="demo-tipy bottom left" >Bottom Left</div>
<div href="#" data-tipy="This one is a Right tipy! and it's position is defined automatically" class="demo-tipy top bottom left" >Left</div>

<div class="top right bottom left" id="center-div">
    <div class="demo-tipy top right left" data-tipy="This is a tipy! with class 'red'" data-tipy-pos="l" data-tipy-class="red">Red tipy!</div>
    <div class="demo-tipy top bottom right left" data-tipy="This is a tipy! with class 'yellow'"  data-tipy-pos="r"  data-tipy-class="yellow">Yellow tipy!</div>
    <div class="demo-tipy bottom right left" data-tipy="This is a tipy! with class 'shaky'"  data-tipy-pos="l"  data-tipy-class="shaky">Shaky tipy!</div>
</div>
<script type="text/javascript">
</script>
</body>
</html>