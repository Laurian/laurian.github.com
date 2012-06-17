<?php

foreach($_COOKIE as $cookie => $value) {
	//echo $cookie . "\n";
	setcookie($cookie, NULL, -1);
}

?>
<pre>
</pre>
<hr/>
<?php phpinfo(); ?>
