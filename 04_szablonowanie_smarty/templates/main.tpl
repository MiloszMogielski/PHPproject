<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<title>{$page_title|default: $default_page_title}</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="{$page_description|default: $default_page_description}">
		<link rel="stylesheet" href="{$app_url}/assets/css/main.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css"></noscript>
	</head>
	<body class="is-preload">
	  <div id="wrapper">
      <div class="top">
        <header id="header">
        {block name=header}
          <a href="{$app_url}" class="logo"><strong>MM</strong>MM</a>
          <nav>
            <a href="#menu">Menu</a>
          </nav>
        {/block}
        </header>
        <nav id="menu">
        {block name=menu}
          <ul class="links">
            <li><a href="https://github.com/MiloszMogielski">Repozytorium</a></li>
          </ul>
        {/block}
        </nav>
        <div class="title">
          <header class="major">
            <h1>{$page_title|default: $default_page_title}</h1>
            <p>{$page_description|default: $default_page_description}</p>
          </header>
          <hr class="major" />
        </div>
      </div>
      <div id="main" class="middle alt">
        <div class="inner">
        {block name="content"}
          <p>Ta strona jest pusta!</p>
        {/block}
        </div>
      </div>
      <footer id="footer">
        <div class="inner">
        {block name="footer"}
          <a href="https://github.com/MiloszMogielski" class="icon brands alt fa-github" target="_blank" rel="noopener"><span class="label">GitHub</span></a>
          <ul class="copyright">
            <li>&copy; AC</li>
            <li>AUTOR: Miłosz Mogielski </li>
            <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
          </ul>
        {/block}
        </div>
      </footer>
    </div>
<!-- Scripts -->
  <script src="{$app_url}/assets/js/jquery.min.js"></script>
  <script src="{$app_url}/assets/js/jquery.scrolly.min.js"></script>
  <script src="{$app_url}/assets/js/jquery.scrollex.min.js"></script>
  <script src="{$app_url}/assets/js/browser.min.js"></script>
  <script src="{$app_url}/assets/js/breakpoints.min.js"></script>
  <script src="{$app_url}/assets/js/util.js"></script>
  <script src="{$app_url}/assets/js/main.js"></script>
</body>
</html>