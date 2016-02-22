<html>
    <title>Baseball Homepage</title>
  </head>
  <body>
        <?php

        echo "<p>Hello My Name is Dan</p>
              <p>And this is the start of my website building!</p>";

	$teams = array("John", "Mike", "Justin", "Dan",
		       "Sean", "Dave", "Keith","Robert",
		       "Chad", "Kyle");

	$positions = array("Catcher", "First Base", "Second Base", "Third Base", 
			   "Shortstop", "Outfield", "Starting Pitcher",
			   "Relief Pitcher");

	echo "<p>The Teams are as follows:</p>"; 	
	foreach ($teams as $teams){
		echo "<li>$teams</li>";
	}

        ?>
  </body>
</html>



