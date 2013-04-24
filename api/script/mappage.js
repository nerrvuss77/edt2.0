var map;
// map[<etage>],[<salle>],[<point>],[<axe>]

map = [
	/*
	 * Rez-de-Chaussée
	 */
	[
		// Bibliothèque
		// id: 1
		[[415,377],[491,379],[489,534],[412,513]],
		// Amphithéatre
		// id: 2
		[[531,202],[656,274],[667,257],[675,235],[676,213],[676,194],[665,182],[656,172],[640,158],[612,148],[581,150],[559,161],[543,177]],
		// CROUSS
		// id: 3
		[[521,180],[521,148],[495,149],[495,119],[505,120],[506,88],[603,92],[603,75],[644,79],[684,97],[729,105],[728,168],[664,167],[657,172],[640,158],[612,148],[581,150],[559,161],[543,177],[535,189]]
	],
	
	/*
	 * 1er étage
	 */
	[
		//Bureau de Christine Virlouvet : Salle 109
		// id: 1
		[[409,550],[451,550],[452,518],[409,518]],

		//Bureau de Regine Laleau : Salle 107
		// id: 2
		[[452,518],[409,518],[410,487],[453,487]],
		 
		//WC à côté du bureau de Régine Laleau : Salle 108
		// id: 3
		[[452,516],[468,516],[468,497],[452,497]],

		//Bureau de Konstantin Verchinine : Salle 106
		// id: 4
		[[410,487],[453,487],[453,457],[411,454]],
		 
		//WC à côté du bureau de Konstantin Verchinine : Salle 105
		// id: 5
		[[451,474],[468,474],[468,456],[451,456]],

		//Secrétariat du département Informatique : Salle 103
		// id: 6
		[[411,454],[445,452],[447,407],[457,407],[457,392],[410,391]],
		 
		//Photocopieuse : Salle 104
		// id: 7
		[[468,407],[445,407],[447,446],[468,446]],

		//Bureau du chef de département : Salle 102
		// id: 8
		[[411,391],[457,391],[458,346],[411,346]],

		//Bureau de Patrick Cegielsky : Salle 111
		// id: 9
		[[487,574],[533,584],[535,552],[488,552]],
		 
		//Bureau de Marie-Hélène Renaud et Patricia Crouan-Veron : Salle 112
		// id: 10
		[[488,552],[535,552],[535,518],[488,518]],

		//Bureau de Didier Diaz et Pierre Valarcher : Salle 113
		// id: 11
		[[488,518],[535,518],[535,487],[488,487]],

		//Bureau de Oleg Loukianov et Denis Monnerat (Dieu Vivant) : Salle 114
		// id: 12
		[[488,487],[535,487],[535,456],[489,456]],

		//Bureau de Luc Hernandez et Annabelle Demule-Thenon : Salle 115
		// id: 13 - (d)base16
		[[489,456],[535,456],[535,424],[490,424]],

		//Salle de repos des professeurs : Salle 116
		// id: 14
		[[496,369],[492,390],[490,424],[535,424],[537,380]],

		//Mini-Amphi Info : Salle 140
		// id: 15
		[[439,86],[438,197],[405,206],[293,206],[295,152],[340,122]],

		//Toilette 1er etage : Salle 136 à 139
		// id: 16
		[[439,128],[437,180],[470,165],[519,154],[520,128]],
		 
		//Amphithéatre
		// id: 17
		[[547,246],[607,279],[626,273],[644,257],[654,232],[655,209],[587,166],[566,176],[556,183],[546,202],[542,219],[544,236]],
		
		//Bureau de Selma Naboulsi  Salle 110
		// id: 18
		[[408,587],[467,602],[469,553],[409,550]],
	],
	
	/*
	 * 2e étage
	 */
	[
		// Salle 201
		// id: 1
		[[415,312],[469,327],[471,384],[415,382]],
		// Salle 202
		// id: 2
		[[415,382],[471,384],[470,449],[413,448]],
		// Salle 203
		// id: 3
		[[413,448],[470,449],[469,511],[411,510]],
		// Salle 204
		// id: 4
		[[411,510],[469,511],[467,594],[412,578]],
		// Salle 205
		// id: 5
		[[488,511],[533,512],[531,575],[489,566]],
		// Salle 206
		// id: 6
		[[488,450],[534,451],[533,512],[488,511]],
		// Salle 207
		// id: 7
		[[489,432],[496,430],[497,449],[488,450]],
		// Salle 208
		// id: 8
		[[489,380],[534,380],[534,451],[497,449],[496,430],[489,432]],
		// Salle 209 - Toilettes
		// id: 9
		[[489,360],[520,366],[520,380],[489,380]],
		// Salle 221 - Salle Multimédia
		// id: 10
		[[726,77],[726,128],[665,126],[666,67]],
		// Salle 222
		// id: 11
		[[665,126],[666,67],[600,64],[600,125]],
		// Salle 223
		// id: 12
		[[600,64],[600,125],[586,126],[585,120],[546,121],[546,126],[535,126],[535,67]],
		// Salle 224
		// id: 13
		[[535,67],[534,149],[471,148],[472,77]],
		// Salle 225
		// id: 14
		[[471,148],[472,77],[406,91],[406,147]],
		// Salle 226 & 227 & 228 - Toilettes
		// id: 15
		[[406,147],[405,196],[458,174],[459,148]],
		// Salle 229
		// id: 16
		[[406,91],[405,196],[388,200],[389,177],[341,176],[341,118]],
		// Salle 230
		// id: 17
		[[388,200],[389,177],[341,176],[341,204],[369,204]],
		// Salle 231
		// id: 18
		[[341,118],[341,204],[280,202],[280,161]],
		// Salle 232 - Bureau de Régis BROUARD
		// id: 19
		[[432,224],[432,201],[483,183],[483,224]],
		// Salle 233 - Salle des Serveurs
		// id: 20
		[[483,183],[483,224],[525,224],[526,211],[528,197],[531,189],[534,182],[541,172],[535,166],[482,168]],
		// Salle 234
		// id: 21
		[[605,153],[630,168],[599,218],[534,182],[541,172],[548,164],[557,157],[569,149],[579,146],[595,143],[610,143]],
		// Salle 235
		// id: 22
		[[657,183],[630,168],[599,218],[663,254],[666,248],[670,239],[672,230],[673,218],[673,208],[671,197],[665,184],[660,175]]
	]
	/*
	 * 3e étage
	 */
];


function getMap(ctx, i_floor){
	
	ctx.beginPath();
	var floor = map[i_floor];
	for(var i_salle in floor){
		ctx.beginPath();
		var salle = floor[i_salle];
		var isFirst = true;
		for(var i_point in salle){
			var point = salle[i_point]
			if(isFirst){
				isFirst = false;
				ctx.moveTo(point[0],point[1]);
			}else{
				ctx.lineTo(point[0],point[1]);
			}
		}
		ctx.lineTo(salle[0],[0],salle[0],[1]);
		var couleur = parseInt(i_salle)+1;
		ctx.fillStyle="rgb("+couleur+",0,0)";
		ctx.fill();
		ctx.closePath();
	}
	
	return map;
}

function iut_map0_onclick(e){
	var x, y, border;
	var filtre_map0 = document.getElementById('filtre_map0');
	border = 0;
	x = e.pageX - $(e.target).offset().left - border;
	y = e.pageY - $(e.target).offset().top - border;
	var ctx_filtre0 = filtre_map0.getContext('2d');
	var pixel = ctx_filtre0.getImageData(x, y, 1, 1).data; 
	var red = pixel[0];
	if(red == 1){
		alert("Bibliotheque");
	}
	else if(red == 2){
		alert("Amphitheatre");
	}
	else if(red == 3){
		alert("CROUSS");
	}
}

function iut_map1_onclick(e){
	var x, y, border;
	var filtre_map1 = document.getElementById('filtre_map1');
	border = 0;
	x = e.pageX - $(e.target).offset().left - border;
	y = e.pageY - $(e.target).offset().top - border;
	var ctx_filtre1 = filtre_map1.getContext('2d');
	var pixel = ctx_filtre1.getImageData(x, y, 1, 1).data; 
	var red = pixel[0];
	if (red == 1){
		alert("Salle 109 : Bureau de Christine Virlouvet");
	}
	else if (red == 2){
		alert("Salle 107 : Bureau de Régine Laleau");
	}
	else if (red == 3){
		alert("Salle 108 : WC");
	}
	else if (red == 4){
		alert("Salle 106 : Bureau de Konstantin Verchinine @lias Koko");
	}
	else if (red == 5){
		alert("Salle 105 : WC");
	}
	else if (red == 6){
		alert("Salle 103 : Secrétariat du département Informatique");
	}
	else if (red == 7){
		alert("Salle 104 : Salle de la photocopieuse");
	}
	else if (red == 8){
		alert("Salle 102 : Bureau du chef de département Informatique");
	}
	else if (red == 9){
		alert("Salle 111 : Bureau de Patrick Cegielsky @lias Patoche");
	}
	else if (red == 10){
		alert("Salle 112 : Bureau de Marie-Hélène Renaud, Prof de Com, et de Patricia Crouan-Veron, Prof d'anglais National");
	}
	else if (red == 11){
		alert("Salle 113 : Bureau de Didier Diaz, DJ Diaz, dieu de la BDD represente, et Pierre Valarcher, THE APPLE MAN");
	}
	else if (red == 12){
		alert("Salle 114 : Bureau de Denis Monnerat, notre Dieu Vivant qui lance des frisby electriques, et Oleg Loukianov, le prof Russe juste trop balèze enb math...");
	}
	else if (red == 13){
		alert("Salle 115 : Bureau de Luc Hernandez, le plus geek de tous les profs mais on l'aime bien quand même, et notre jolie Annabelle Demule-Thenon, just amazing !");
	}
	else if (red == 14){
		alert("Salle 116 : Salle de repos des professeur... salle des glandeurs");
	}
	else if (red == 15){
		alert("Salle 140 : Amphithéatre des DUTFI2");
	}
	else if (red == 16){
		alert("Salle 136 à 139 : WC");
	}
	else if (red == 17){
		alert("Amphitheatre (2e niveau)");
	}
	else if (red == 18){
		alert("Salle 110 : Bureau de Selma Naboulsi");
	}
}

function iut_map2_onclick(e){
	var x, y, border;
	var filtre_map2 = document.getElementById('filtre_map2');
	border = 0;
	x = e.pageX - $(e.target).offset().left - border;
	y = e.pageY - $(e.target).offset().top - border;
	var ctx_filtre2 = filtre_map2.getContext('2d');
	var pixel = ctx_filtre2.getImageData(x, y, 1, 1).data; 
	var red = pixel[0];
	if(red == 1)
		alert("Salle 201")
	else if(red == 2)
		alert("Salle 202")
	else if(red == 3)
		alert("Salle 203")
	else if(red == 4)
		alert("Salle 204")
	else if(red == 5)
		alert("Salle 205")
	else if(red == 6)
		alert("Salle 206")
	else if(red == 7)
		alert("Salle 207")
	else if(red == 8)
		alert("Salle 208")
	else if(red == 9)
		alert("Salle 209 - Toilettes")
	else if(red == 10)
		alert("Salle 221 - Salle Multimédia")
	else if(red == 11)
		alert("Salle 222")
	else if(red == 12)
		alert("Salle 223")
	else if(red == 13)
		alert("Salle 224")
	else if(red == 14)
		alert("Salle 225")
	else if(red == 15)
		alert("Salle 226 & 227 & 228 - Toilettes")
	else if(red == 16)
		alert("Salle 229")
	else if(red == 17)
		alert("Salle 230")
	else if(red == 18)
		alert("Salle 231")
	else if(red == 19)
		alert("Salle 232 - Bureau de Regis BROUARD")
	else if(red == 20)
		alert("Salle 233 - Salle des Serveurs")
	else if(red == 21)
		alert("Salle 234")
	else if(red == 22)
		alert("Salle 235")
}
