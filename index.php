<?php

	function saveMe($count){
		echo "I am Thanos<br>";
		if ($count != 1) {
			saveMe(--$count);
		}
	}

	saveMe(10);
?>