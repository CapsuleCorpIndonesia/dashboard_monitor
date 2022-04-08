<?php

	$file = "/Users/kevinmac/Downloads/newman.txt";
        $current = file_get_contents($file); 

        $info = date("Y-m-d H:i:s", filectime($file));
        echo '<pre>';
        print_r($info);
        print_r($current);
        echo '</pre>';
?>