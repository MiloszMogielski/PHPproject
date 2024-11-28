<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php out($page_description); ?>">
	<title><?php out($page_title); ?></title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="<?php echo(_APP_URL); ?>/css/styles.css">
</head>
<body>
	<header>
    <h1><?php out($page_title); if (!isset($page_title)) {  ?> Tytuł domyślny ... <?php } ?></h1>
		<p>
		<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>
	  </p>
  </header>
  
  <div class="content">