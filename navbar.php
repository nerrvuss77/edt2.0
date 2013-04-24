<div class="navbar navbar-static-top navbar-inverse">
	<div class="navbar-inner">
		<a class="brand" href="<?php echo $conf_globale["root"]; ?>/"><?php include("/bann.php"); ?></a>
		<ul class="nav">
			<li<?php if($is_api) echo " class=\"active\""; ?>><a href="<?php echo $conf_globale["root"]; ?>/api/">API</a></li>
			<li<?php if($is_carte) echo " class=\"active\""; ?>><a href="<?php echo $conf_globale["root"]; ?>/map/">Carte</a></li>
			<li<?php if($is_edt) echo " class=\"active\""; ?>><a href="<?php echo $conf_globale["root"]; ?>/">EDT</a></li>
			<li class="divider"></li>
		</ul>
		<ul class="nav pull-right">
			<li><a href="http://www.cyril-defaye.fr/" target="_blank">by Cyril DEFAYE</a></li>
		</ul>
	</div>
</div>