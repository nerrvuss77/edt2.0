<?php
	include("../config_globale.php");
	$is_edt = false;
	$is_carte = true;
	$is_api = false;
	$root = $conf_globale["root"]."/map"
?><!DOCTYPE html>
<html lang="fr">
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" lang="fr" content="plan,departement,informatique,iut,senart,fontainebleau" />
		<meta name="description" content="Plan interactif du d&eacute;partement informatique de l&#39;IUT S&eacute;nart/Fontainebleau" />
		
		<title>Plan du d&eacute;partement informatique - D&eacute;partement Informatique - IUT S&eacute;nart/Fontainebleau</title>
		
		<link type="image/png" href="<?php echo $root ; ?>/pictures/general/favicon.png" rel="icon" />
		<link type="text/css" href="<?php echo $root ; ?>/style/default.css" rel="stylesheet" />
		<link type="text/css" href="<?php echo $conf_globale["root"]; ?>/bootstrap/css/bootstrap.css" rel="stylesheet" />
		
		<script type="text/javascript" src="<?php echo $root; ?>/plugins/script/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $root; ?>/script/mappage.js"></script>
		<script type="text/javascript" src="<?php echo $conf_globale["root"]; ?>/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript"><!--
			
			/* Map Functions */
			function iut_map_onclick(e){
				var x, y, border;
				border = 0;
				x = e.pageX - $(e.target).offset().left - border;
				y = e.pageY - $(e.target).offset().top - border;
				alert("("+x+","+y+")");
			}
			/* Map Functions END */
			
			function body_start(){
				$(".iut_map").click(function(event){
					iut_map_onclick(event);
				});
				
				$("#iut_map0").attr('onclick','').unbind('click');
				$("#iut_map0").click(function(event){
					iut_map0_onclick(event);
				});
				
				$("#iut_map1").attr('onclick','').unbind('click');
				$("#iut_map1").click(function(event){
					iut_map1_onclick(event);
				});
				
				$("#iut_map2").attr('onclick','').unbind('click');
				$("#iut_map2").click(function(event){
					iut_map2_onclick(event);
				});
				
				var iut_map0 = document.getElementById('iut_map0');
				var filtre_map0 = document.getElementById('filtre_map0');
				
				var ctx = iut_map0.getContext('2d');
				var imageObj = new Image();
				imageObj.src = '<?php echo $root; ?>/pictures/map/floor0.jpg';
				ctx.drawImage(imageObj, 0, 0);
				
				var ctx = filtre_map0.getContext('2d');
				var map = getMap(ctx, 0);
				
				var iut_map1 = document.getElementById('iut_map1');
				var filtre_map1 = document.getElementById('filtre_map1');
				
				var ctx = iut_map1.getContext('2d');
				var imageObj = new Image();
				imageObj.src = '<?php echo $root; ?>/pictures/map/floor1.jpg';
				ctx.drawImage(imageObj, 0, 0);
				
				var ctx = filtre_map1.getContext('2d');
				var map = getMap(ctx, 1);
				
				var iut_map2 = document.getElementById('iut_map2');
				var filtre_map2 = document.getElementById('filtre_map2');
				
				var ctx = iut_map2.getContext('2d');
				var imageObj = new Image();
				imageObj.src = '<?php echo $root; ?>/pictures/map/floor2.jpg';
				ctx.drawImage(imageObj, 0, 0);
				
				var ctx = filtre_map2.getContext('2d');
				var map = getMap(ctx, 2);
				
			}
			
		--></script>
		
	</head>
	<body onload="body_start();">
		
		<?php include("../navbar.php"); ?>
		<h1>Plan du d&eacute;partement informatique de l&#39;IUT S&eacute;nart/Fontainebleau</h1>
		<div class="alert alert-block alert-info">
			<span class="label label-info">Info</span> Bonjour. Le site est actuellement en travaux. N'hésitez pas à repasser plus tard.
		</div>
		<div class="tabbable tabs-left">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#floor0" data-toggle="tab">RDC</a></li>
				<li><a href="#floor1" data-toggle="tab">1<sup>er</sup></a></li>
				<li><a href="#floor2" data-toggle="tab">2<sup>e</sup></a></li>
				<li><a href="#floor3" data-toggle="tab">3<sup>e</sup></a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="floor0">
					<canvas id="iut_map0" class="iut_map" width="1125" height="702">
						Votre navigateur n'est pas assez récent pour supporter le Canvas.
					</canvas>
					<canvas id="filtre_map0" class="iut_map" width="1125" height="702" style="display:none;">
						Votre navigateur n'est pas assez récent pour supporter le Canvas.
					</canvas>
				</div>
				<div class="tab-pane" id="floor1">
					<canvas id="iut_map1" class="iut_map" width="1125" height="702">
						Votre navigateur n'est pas assez récent pour supporter le Canvas.
					</canvas>
					<canvas id="filtre_map1" class="iut_map" width="1125" height="702" style="display:none;">
						Votre navigateur n'est pas assez récent pour supporter le Canvas.
					</canvas>
				</div>
				<div class="tab-pane" id="floor2">
					<canvas id="iut_map2" class="iut_map" width="1125" height="702">
						Votre navigateur n'est pas assez récent pour supporter le Canvas.
					</canvas>
					<canvas id="filtre_map2" class="iut_map" width="1125" height="702" style="display:none;">
						Votre navigateur n'est pas assez récent pour supporter le Canvas.
					</canvas>
				</div>
				<div class="tab-pane" id="floor3">
					<img id="iut_map3" class="iut_map" src="<?php echo $root; ?>/pictures/map/floor3.jpg" alt="D&eacute;sol&eacute;, mais la carte de l&#39;IUT n&#39;est pas disponible pour le moment..." height="702" width="1125"/>
				</div>
			</div>
		</div>
		<div id="copyright">
			<?php include("../copyright.php"); ?>
		</div>
		
	</body>
</html>