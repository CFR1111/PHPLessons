<html>
	<head>
		<style>
			#peeps{
				color:red;
			}
			.list{
				color:maroon;
			}
		</style>
	</head>
	<body>
		<?php
			$myFirstVar = "Hello World";
			echo $myFirstVar;
			echo "<h1 id='peeps'>".$myFirstVar."</h1>";
			
			$testArray = array('test1','test2','test3','test4','test5');
			echo "<ol>";
			foreach($testArray as $test){
				echo "<li class='list'>".$test."</li>";
			}
			echo "</ol>";
		?>
	</body>
</html>
