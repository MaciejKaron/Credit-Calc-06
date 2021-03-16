<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>{$page_title|default:"Tytuł domyślny"}</title>

	<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Credit-Calc-06/css/layouts/marketing.css">
    <link rel="stylesheet" href="http://localhost/Credit-Calc-06/css/main.css">
    
    {if $hide_intro }
    
    <link rel="stylesheet" href="http://localhost/Credit-Calc-06/css/style_hide_intro.css">
    {/if}
    
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<script src="http://localhost/Credit-Calc-06/js/jquery.min.js"></script>
	<script src="http://localhost/Credit-Calc-06/js/softscroll.js"></script>
</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">START</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">SCROLL UP</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">CREDIT CALCULATOR</h1>
        <p class="splash-subhead">
             _____________
        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Let's go!</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">

{block name=content} Domyślna treść zawartości .... {/block}




    </div>
    
    <div class="footer l-box is-center">
		<p>Hi :)</p>
	</div>

</div>


</body>
</html>
