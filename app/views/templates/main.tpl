<!DOCTYPE HTML>
<html>
    <head>
        <title>Haircutter</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{$conf->app_url}/../lib/assets/css/main.css" />
        <link rel="stylesheet" href="{$conf->app_url}/../lib/simplepicker/dist/simplepicker.css">
        <noscript><link rel="stylesheet" href="{$conf->app_url}/../lib/assets/css/noscript.css" /></noscript>
         <link rel="stylesheet"   href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
	</head>
        
	<body class="is-preload landing">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="{$app_url}/index.html">Haircutter</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="{$conf->action_root}show_front_page">Strona główna</a></li>
                                                        <li><a href="{$conf->action_root}services">Usługi</a></li>
                                                        <li><a href="{$conf->action_root}gallery">Galeria</a></li>
                                                        <li><a href="{$conf->action_root}pricing">Cennik</a></li>
							<li><a href="{$conf->action_root}contact">Kontakt</a></li>
                                                        <li><a href="{$conf->action_root}reservation">Zaplanuj wizytę</a></li>
                                                        <li><a href="{$conf->action_root}my_reservations">Moje rezerwacje</a></li>

                                                        <li><a href="{$conf->action_root}register" class="button primary">Zarejestruj się</a></li>
						</ul>
					</nav>
				</header>
                        <!-- content -->    
                                <div class="content">
                                        {block name=content} Domyślna treść zawartości .... {/block}
                                </div>  
                                
                        <!-- Messages -->           
                                {block name=messages}

                                {if $msgs->isMessage()}
                                <div class="messages bottom-margin">
                                        <ul>
                                        {foreach $msgs->getMessages() as $msg}
                                        {strip}
                                                <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
                                        {/strip}
                                        {/foreach}
                                        </ul>
                                </div>
                                {/if}

                                {/block}             
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Piotr Herdzina. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		<!-- Scripts -->
			<script src="{$app_url}/../lib/assets/js/jquery.min.js"></script>
			<script src="{$app_url}/../lib/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$app_url}/../lib/assets/js/jquery.dropotron.min.js"></script>
			<script src="{$app_url}/../lib/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$app_url}/../lib/assets/js/browser.min.js"></script>
			<script src="{$app_url}/../lib/assets/js/breakpoints.min.js"></script>
			<script src="{$app_url}/../lib/assets/js/util.js"></script>
			<script src="{$app_url}/../lib/assets/js/main.js"></script>
                 </div>           
	</body>
</html>