<?php

	echo '<h1>PARAM A = '.$_GET['a'].'</h1><br /><br />';
	echo '<h1>PARAM B = '.$_GET['b'].'</h1><br /><br />';

	echo '<br /> <h2>######### Result ###########</h2> <br />';
	$plus = file_get_contents('http://plus.linksinnovation.com/api.php?a='.$_GET['a'].'&b='.$_GET['b'], true);

	echo '<h1>Result Plus = '.$plus.'</h1>';

	$minus = file_get_contents('http://minus.linksinnovation.com/api.php?a='.$_GET['a'].'&b='.$_GET['b'], true);

	echo '<br /><br /><h1>Result Minus = '.$minus.'</h1>';