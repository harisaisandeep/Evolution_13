<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery1.7.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		
		
		window.setTimeout(function(){
						$('#robo').stop().animate({
                        left: -270
                    }, 1000
                    );
					},5000);
			
			
			
			
		
		
		$('#robo').bind('hover',function(event){
			
			$('#robo').stop().animate({
                        left: -15
                    }, 1000
                    );
			
			
			});
			$('#robo').bind('mouseleave',function(event){
			window.setTimeout(function(){
						$('#robo').stop().animate({
                        left: -270
                    }, 1000
                    );
					},500);
			
			
			
			});
	});

</script>


</head>

<body>
        <a href="http://goo.gl/pywqt" target="_blank" >
<img id="robo" style="position:absolute; top:20%; left:-15px;" src="images/robo.png" /></a>

</body>
</html>