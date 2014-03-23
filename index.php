<!DOCTYPE html>
<head>
<title>Atlas Electoral de Andy Tow - Elecciones 2013 en tiempo real</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- <META http-equiv="REFRESH" content="300; url=general.php"> -->

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	
	
	<link href="mapa/style.css" rel="stylesheet" type="text/css" />	
	
    	<script type="text/javascript" src="mapa/lib/d3.v2.min.js"></script>
		<script type="text/javascript" src="mapa/lib/colorbrewer.js"></script>
    	<script type="text/javascript" src="mapa/lib/topojson.js"></script>
    	<script type="text/javascript" src="mapa/lib/cartogram.js"></script>
        <script type="text/javascript" src="mapa/lib/tooltip.js"></script>  	
		
<link rel="stylesheet" type="text/css" href="http://andytow.com/blog/standard_general.css" title="standard" />

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<style type="text/css">
 a:hover {
  cursor:pointer;
 }

 iframe {
    border:none;
}

    .about {

	background-color:#FFFFFF;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:2px solid #81BEF7;
	display:inline-block;
	font-weight:bold;
	padding:2px 2px;

     }

    .about:hover {
	background-color:#7ac8d8;
     }

    .about:active {
	position:relative;
	top:1px;
     }
</style>
<link rel="shortcut icon" href="http://andytow.com/atlas/totalpais/favicon.ico">

<script type="text/javascript">

 var tablacapital = document.getElementById('tablacapital'); 
 var tablacapitals = document.getElementById('tablacapitals'); 
 var tablabuenosaires = document.getElementById('tablabuenosaires'); 
 var tablacatamarca = document.getElementById('tablacatamarca'); 
 var tablacordoba = document.getElementById('tablacordoba'); 
 var tablacorrientes = document.getElementById('tablacorrientes'); 
 var tablachaco = document.getElementById('tablachaco'); 
 var tablachacos = document.getElementById('tablachacos');  
 var tablachubut = document.getElementById('tablachubut'); 
 var tablaentrerios = document.getElementById('tablaentrerios'); 
 var tablaentrerioss = document.getElementById('tablaentrerioss');  
 var tablaformosa = document.getElementById('tablaformosa'); 
 var tablajujuy = document.getElementById('tablajujuy'); 
 var tablalapampa = document.getElementById('tablalapampa'); 
 var tablalarioja = document.getElementById('tablalarioja'); 
 var tablamendoza = document.getElementById('tablamendoza'); 
 var tablamisiones = document.getElementById('tablamisiones'); 
 var tablaneuquen = document.getElementById('tablaneuquen'); 
 var tablaneuquens = document.getElementById('tablaneuquens');  
 var tablarionegro = document.getElementById('tablarionegro'); 
 var tablarionegros = document.getElementById('tablarionegros');  
 var tablasalta = document.getElementById('tablasalta'); 
 var tablasaltas = document.getElementById('tablasaltas');  
 var tablasanjuan = document.getElementById('tablasanjuan'); 
 var tablasanluis = document.getElementById('tablasanluis'); 
 var tablasantacruz = document.getElementById('tablasantacruz'); 
 var tablasantafe = document.getElementById('tablasantafe'); 
 var tablasantiago = document.getElementById('tablasantiago'); 
 var tablasantiagos = document.getElementById('tablasantiagos');  
 var tablatucuman = document.getElementById('tablatucuman'); 
 var tablatierradelfuego = document.getElementById('tablatierradelfuego'); 
 var tablatierradelfuegos = document.getElementById('tablatierradelfuegos');  
 
 var tablacapitaldp = document.getElementById('tablacapitaldp');    
 var tablabuenosairesdp = document.getElementById('tablabuenosairesdp'); 
 var tablabuenosairessp = document.getElementById('tablabuenosairessp'); 
 var tablacatamarcadp = document.getElementById('tablacatamarcadp'); 
 var tablacatamarcasp = document.getElementById('tablacatamarcasp'); 
 var tablachacodp = document.getElementById('tablachacodp'); 
 var tablajujuydp = document.getElementById('tablajujuydp'); 
 var tablalariojadp = document.getElementById('tablalariojadp'); 
 var tablamendozadp = document.getElementById('tablamendozadp'); 
 var tablamendozasp = document.getElementById('tablamendozasp'); 
 var tablasanluisdp = document.getElementById('tablasanluisdp');
 var tablasanluissp = document.getElementById('tablasanluissp');
 
 var tablanacion = document.getElementById('tablanacion');   
 var tablaprovincias = document.getElementById('tablaprovincias');    
 
 var loading = document.getElementById('loading'); 

</script>

<script type="text/javascript" src="http://andytow.com/blog/pointer.js"></script>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44953017-1', 'elecciones.andytow.com');
  ga('send', 'pageview');

</script>


<style type="text/css">
 #googft-mapCanvas {
  height: 380px;
  margin: 0;
  padding: 0;
  width: 580px;
}
  #googft-mapLegend
  {border:1px solid #FFF;font-family:Lucida Sans Unicode, sans-serif;font-size:12px;margin:2px;padding:0px 10px 10px;}#googft-legend p{font-weight:bold;margin-top:0;}#googft-legend div{margin-bottom:5px;}.googft-legend-range{margin-left:0;}
</style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<!--// mapa-->

<script type="text/javascript">
  function initialize() {
    google.maps.visualRefresh = true;
    var map = new google.maps.Map(document.getElementById('googft-mapCanvas'), {
      center: new google.maps.LatLng(-40.58285955085432, -52.390902960571225),
      zoom: 3,
      

    });
  map.mapTypes.set('plain', new google.maps.StyledMapType([
    { featureType: "landscape", stylers: [ { visibility: "off" } ] },
    { featureType: "road", stylers: [ { visibility: "off" } ] },
    { featureType: "water", stylers: [ { visibility: "on" }, { lightness: 50 }] },
    { featureType: "transit", stylers: [ { visibility: "off" } ] },
    { featureType: "administrative", elementType: "labels", stylers: [ { visibility: "on" } ] },
    { featureType: "landscape", stylers: [ { visibility: "on" } ] },
    { featureType: "landscape.natural", stylers: [ { visibility: "off" } ] },
    { featureType: "administrative.country", stylers: [ { lightness: 99 }, { visibility: "off" } ] }
  ]));

  map.setMapTypeId('plain');
	
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(document.getElementById('googft-mapLegend'));

    layer1 = new google.maps.FusionTablesLayer({
      map: map,
      heatmap: { enabled: false },
      query: {
        select: "col1\x3e\x3e1",
        from: "1QuKbtLPNqRO-99e1QXAVfxlfRY_N6Iul5xyt2Yk",
        where: ""
      },
      options: {
        styleId: 2,
        templateId: 2
      }
	      });
    layer2 = new google.maps.FusionTablesLayer({
      map: map,
      heatmap: { enabled: false },
      query: {
        select: "col2",
        from: "1keepH8XYHg66gIeKQlTY4SPEG-T01pVfQ30R5Do",
        where: ""
      },
      options: {
        styleId: 3,
        templateId: 3
      }	 
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>


<!--// cartograma-->

<style type="text/css">
 #googft-cartogramCanvas {
  height: 380px;
  margin: 0;
  padding: 0;
  width: 580px;
}

  #googft-cartogramLegend
  {border:1px solid #FFF;font-family:Lucida Sans Unicode, sans-serif;font-size:12px;margin:2px;padding:0px 10px 10px;}#googft-legend p{font-weight:bold;margin-top:0;}#googft-legend div{margin-bottom:5px;}.googft-legend-range{margin-left:0;}
  
</style>


<script type="text/javascript">

  function initialize() {
    google.maps.visualRefresh = true;
    var map = new  google.maps.Map(document.getElementById('googft-cartogramCanvas'), {

      center: new google.maps.LatLng(-40.58285955085432,  -52.390902960571225),
      zoom: 3,
    zoomControl: true,
    scaleControl: false,
    mapTypeControl: false,
    streetViewControl: false,    

    });
  map.mapTypes.set('plain', new google.maps.StyledMapType([
    { featureType: "landscape", stylers: [ { visibility: "off" } ] },
    { featureType: "poi", stylers: [ { visibility: "off" } ] },
    { featureType: "road", stylers: [ { visibility: "off" } ] },
    { featureType: "water", stylers: [ { visibility: "on" }, { lightness: 50  }] },
    { featureType: "transit", stylers: [ { visibility: "off" } ] },
    { featureType: "administrative", elementType: "labels", stylers: [ {  visibility: "off" } ] },
    { featureType: "landscape", stylers: [ { visibility: "off" } ] },
    { featureType: "landscape.natural", stylers: [ { visibility: "off" } ] },
    { featureType: "administrative", stylers: [ { lightness: 99 }, {  visibility: "off" } ] }
  ]));

  map.setMapTypeId('plain');
  map.mapTypeControl = false;	
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(document.getElementById('googft-cartogramLegend'));


    layer1 = new google.maps.FusionTablesLayer({

      map: map,
      heatmap: { enabled: false },
      query: {
        select: "col1\x3e\x3e1",
        from: "1MZ1SjjZCRS-rwrHRnbci1QYNlS0qWLn8CCijawQ",
        where: ""
      },
      options: {
	    
        styleId: 2,
        templateId: 2
      }
	      });
    layer2 = new google.maps.FusionTablesLayer({
      map: map,
      heatmap: { enabled: false },
      query: {
        select: "col2",
        from: "1CVdVdsUL1yJmWcjZJLj7E48XB7CrbKet3XcX0W8",
        where: ""
      },
      options: {
        styleId: 2,
        templateId: 2
      }	 
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);


</script>


</head>
<body>
<!--<div align="center">-->

<table border="0" width="1172"><tr><td>
<div class="wrapper">
<div class="cornertop">&nbsp;</div>


<center><A HREF="http://andytow.com/atlas/totalpais/index.html"><img BORDER="0" src="http://andytow.com/blog/head_wide.gif"></A></center>
<div class="wrapper2">
<iframe src="http://andytow.com/blog/header.html" align="center" height="26" width="1172" frameborder="0" scrolling="no"></iframe>

<div align="center">

<table border="0">
<tr>
<td align="center">
<h1>Elecciones nacionales y provinciales</h1>
<h2>27 de octubre de 2013</h2>
<h3>Hack en tiempo real</h3>
</td>
</tr>
</table>

<table border="0">
<tr><td>
  <div id="googft-mapCanvas"></div>
  <div id="googft-mapLegend">
  <center><p>Infomapa</p></center>
      <center><a href="googleGeneral.html" target="_blank"><img src="img/fullscreen.png" title="Fullscreen"></a></center>
	  </div>
</td><td>
  <div id="googft-cartogramCanvas"></div>
  <div id="googft-cartogramLegend">
  <center><p>Cartograma</p></center>
    <center><a href="googleGrama.html" target="_blank"><img src="img/fullscreen.png" title="Fullscreen"></a></center>
    </div>
   
</td></tr>
</table>


<?


require('qs_connection.php');
require('qs_functions.php');
//$resultdeleteleg = mysql_query("DELETE FROM general_legislatura");

?>
<!--<div align="center"><small>Datos de las Primarias Abiertas, Simultáneas y Obligatorias del 11 de agosto de 2013. Desde las 21 horas del 27 de octubre de 2013, datos actualizados del escrutinio provisorio.</small></div>-->
<table border="0" align="center"><tr><td>Última actualización: <iframe src="ahora.txt" height="20" width="200" frameborder="0" scrolling="no"></iframe></td></tr></table>

<div id="div_refresh" style="display:none"><input type="button" value="Actualizar" onClick="window.location.reload()"></div>

<table border="0" width="1160px">
<tr>
<td width="50%" align="center" valign="top">

<div id="selectdis" style="display:none">
<table align="center" width="100%"><tr><td width="33%" align="center"><b>DISTRITOS</b></td><td width="33%" align="center"><font color="Blue"><a onclick="showmapa();">INFOMAPA</a></font></td><td align="center"><font color="Blue"><a onclick="showcartograma();">CARTOGRAMA</a></font></td></tr></table>
</div>


<div id="selectdip" style="display:block">
<table align="center" width="100%"><tr><td width="33%" align="center"><font color="Blue"><a onclick="showdistritos();">DISTRITOS</a></font></td><td width="33%" align="center"><b>INFOMAPA</b></td><td align="center"><font color="Blue"><a onclick="showcartograma();">CARTOGRAMA</a></font></td></tr></table>
</div>

<div id="selectsen" style="display:none">
<table align="center" width="100%"><tr><td width="33%" align="center"><font color="Blue"><a onclick="showdistritos();">DISTRITOS</a></font></td><td width="33%" align="center"><font color="Blue"><a onclick="showmapa();">INFOMAPA</a></font></td><td align="center"><b>CARTOGRAMA</b></td></tr>
</table>
</div>

<table border="0" width="100%">
<tr>
<td valign="top" width="64%">
<div id ="tablaprovincias" style="display:block">

    <div id="container">
      <div id="map-container">
        <svg id="map"></svg>
      </div>
	</div>
	
<script>
      var width = 380,
    	  height = 555,
          active;
	
      if (!document.createElementNS) {
        document.getElementsById("map").style.display = "none";
      }



          fields = [

	{name: "(no scale)", id: "none"},
	{name: "General", id: "paso", key: "PASO%d", format: ","},

          ],

          years = [101],
          fieldsById = d3.nest()
            .key(function(d) { return d.id; })
            .rollup(function(d) { return d[0]; })
            .map(fields),
          field = fields[0],
          year = years[0],
          colors = colorbrewer.Andy[3]
            .reverse()
            .map(function(rgb) { return d3.hsl(rgb); });

      var body = d3.select("body"),
          stat = d3.select("#status");

      var fieldSelect = d3.select("#field")
        .on("change", function(e) {
          field = fields[this.selectedIndex];
          location.hash = "#" + [field.id, year].join("/");
        });

      fieldSelect.selectAll("option")
        .data(fields)
        .enter()
        .append("option")
          .attr("value", function(d) { return d.id; })
          .text(function(d) { return d.name; });

      var yearSelect = d3.select("#year")
        .on("change", function(e) {
          year = years[this.selectedIndex];
          location.hash = "#" + [field.id, year].join("/");
        });

      yearSelect.selectAll("option")
        .data(years)
        .enter()
        .append("option")
          .attr("value", function(y) { return y; })
          .text(function(y) { return y; })

      var map = d3.select("#map"),
          zoom = d3.behavior.zoom()
            .translate([500, -525])
            .scale(1)
            .scaleExtent([0.5, 10.0])
            .on("zoom", updateZoom),
          layer = map.append("g")
            .attr("id", "layer"),
          states = layer.append("g")
            .attr("id", "states")
            .selectAll("path");

      // map.call(zoom);
      updateZoom();

      function updateZoom() {
        var scale = zoom.scale();
        layer.attr("transform",
          "translate(" + zoom.translate() + ") " +
          "scale(" + [scale, scale] + ")");
      }

      var proj = d3.geo.mercator()

    .scale(4500),
          topology,
          geometries,
          rawData,
          dataById = {},
          carto = d3.cartogram()
            .projection(proj)
            .properties(function(d) {
              return dataById[d.id];
            })
            .value(function(d) {
              return +d.properties[field];
            });

      window.onhashchange = function() {
        parseHash();
      };
	  
	  datame();
	
	  function datame() {
	  
      var segmentized = location.search === "?segmentized",
          url = ["mapa/data",
            segmentized ? "argentina-provincias-segmentized.topojson" : "argentina-provincias.topojson"
          ].join("/");
      d3.json(url, function(topo) {
        topology = topo;
        geometries = topology.objects.provincias.geometries;
        d3.tsv(catigoria, function(data) {
          rawData = data;
          dataById = d3.nest()
            .key(function(d) { return d.NAME; })
            .rollup(function(d) { return d[0]; })
            .map(data);
          init();

        });
      });
}

      function init() {
        var features = carto.features(topology, geometries),
            path = d3.geo.path()
              .projection(proj);

        states = states.data(features)
          .enter()
          .append("path")
            .attr("class", "state")
            .attr("id", function(d) {
              return "feature " + d.properties.NAME;
            })
            .attr("fill","#FFFFFF")
            .attr("d", path)
			.on("click", click);	

        
		parseHash();	

      }


			
      function reset() {
	  
		d3.selectAll(".active").classed("active", false);

        stat.text("");
        body.classed("updating", false);
		
        var features = carto.features(topology, geometries),
            path = d3.geo.path()
              .projection(proj);

			  
        states.data(features)
          .transition()
            .duration(1000)
	    .attr("transform", "")
            .ease("linear")
            .attr("fill", function(d) {
              return "#" + d.properties.color1;
            })
            .attr("d", path);

        states.data(features)
        .call(d3.helper.tooltip(function(d, i)
		{return "<table border=\"0\"><tr><td valign=\"bottom\"><a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=" + d.properties.lista1 + "&c=" + cati + "\"><img src=\"mapa/img/" + d.properties.lista1 + "-" + cati + ".jpg\" width=\"100px\"></a></td><td valign=\"bottom\"><a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=" + d.properties.lista2 + "&c=" + cati + "\"><img src=\"mapa/img/" + d.properties.lista2 + "-" + cati + ".jpg\" width=\"70px\"></a></td><td valign=\"bottom\"><a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=" + d.properties.lista3 + "&c=" + cati + "\"><img src=\"mapa/img/" + d.properties.lista3 + "-" + cati + ".jpg\" width=\"50px\"></a></td></tr><tr><td valign=\"top\" align=\"center\"><font size=\"6\"><font color =\"#" + d.properties.color1 + "\">" + d.properties.pct1 + "</font></font></td><td valign=\"top\" align=\"center\"><font size=\"5\"><font color =\"#" + d.properties.color2 + "\">" + d.properties.pct2 + "</font></font></td><td valign=\"top\" align=\"center\"><font size=\"3\"><font color =\"#" + d.properties.color3 + "\">" + d.properties.pct3 + "</font></font></td></tr></table><div align=\"center\"><img src=\"http://andytow.com/atlas/totalpais/"+ d.properties.icono + "\/escudo.gif\"></div>";}));
			
        states.select("title")

          .text(function(d) {
            return d.properties.nombre_distrito;
          });
		  

      }



      function update() {
	  
        var start = Date.now();
        body.classed("updating", true);

        var key = field.key.replace("%d", year),
            fmt = (typeof field.format === "function")
              ? field.format
              : d3.format(field.format || ","),
            value = function(d) {
              return +d.properties[key];
            }
			valueX = function(d) {
              return +d.properties["X"+key];
            },

            values = states.data()
              .map(value)
              .filter(function(n) {
                return !isNaN(n);
              })
              .sort(d3.ascending),
            lo = values[0],
            hi = values[values.length - 1];

            valuesX = states.data()
              .map(valueX)
              .filter(function(n) {
                return !isNaN(n);
              })
              .sort(d3.ascending),
            loX = valuesX[0],
            hiX = valuesX[valuesX.length - 1];			

		document.getElementById('div_min').innerHTML="<p class=\"descriptionhome-subtitle\"><font color=Black> "+fmt(loX)+"%</font></p>";
		document.getElementById('div_max').innerHTML="<p class=\"descriptionhome-subtitle\"><font color=Black> "+fmt(hiX)+"%</font></p>";	
			
        var color = d3.scale.linear()
          .range(colors)
          .domain(loX < 0
            ? [loX, 0, hiX]
            : [loX, d3.mean(valuesX), hiX]);

        // normalize the scale to positive numbers
        var scale = d3.scale.linear()
          .domain([lo, hi])
          .range([1, 100]);

        // tell the cartogram to use the scaled values
        carto.value(function(d) {
          return scale(value(d));
        });

		//valores = String(values);
		//alert(valores);
		//valores = valores.replace(".", ",");
		//alert(valores);
		

        // generate the new features, pre-projected


        var features = carto(topology, geometries).features;

		states.data(features).on("click", click2);
		
        // update the data
        states.data(features)
					.on("click", click)
        .call(d3.helper.tooltip(function(d, i)
		{return [d.properties.NAME + "<br>" + fmt(value(d)) + " (" + fmt(valueX(d)) + "%)"];}));

		
        states.transition()
          .duration(1750)
          .ease("linear")
          .attr("fill", function(d) {
            return color(valueX(d));
          })
//          .attr("d", carto.path);


		  
        var delta = (Date.now() - start) / 1000;
        stat.text([" ", delta.toFixed(1), " "].join(" "));
        body.classed("actualizando", false);
		

	
      }

	  
	  
      var deferredUpdate = (function() {
        var timeout;
        return function() {
          var args = arguments;
          clearTimeout(timeout);
          stat.text(" ");
          return timeout = setTimeout(function() {
            update.apply(null, arguments);
          }, 10);
        };
		

      })();

      var hashish = d3.selectAll("a.hashish")
        .datum(function() {
          return this.href;
        });

      function parseHash() {
        var parts = location.hash.substr(1).split("/"),
            desiredFieldId = parts[0],
            desiredYear = +parts[1];

        field = fieldsById[desiredFieldId] || fields[0];
        year = (years.indexOf(desiredYear) > -1) ? desiredYear : years[0];

        fieldSelect.property("selectedIndex", fields.indexOf(field));

        if (field.id === "none") {

          yearSelect.attr("disabled", "disabled");
          reset();

        } else {

          if (field.years) {
            if (field.years.indexOf(year) === -1) {
              year = field.years[0];
            }
            yearSelect.selectAll("option")
              .attr("disabled", function(y) {
                return (field.years.indexOf(y) === -1) ? "disabled" : null;
              });
          } else {
            yearSelect.selectAll("option")
              .attr("disabled", null);
          }

          yearSelect
            .property("selectedIndex", years.indexOf(year))
            .attr("disabled", null);

          deferredUpdate();
          location.replace("#" + [field.id, year].join("/"));

          hashish.attr("href", function(href) {
            return href + location.hash;
          });
        }

	

      }

	// pour la gallerie
	  
	function click2()
	  { cambio = 1; }
	 
	function valoresComa()
	  {var valore = value(d);
	  alert(valore);}
	  
	function setCambio() { 
	cambio = 0;

	var features = carto(topology, geometries).features;
	
	states.data(features)
	    .on("click", click);	  

}

	  
 	function blank() {
			
	// des-seleccionar provincias
			
 	d3.selectAll(".active").classed("active", false);
			
	// zoom out cuando click en una provincia
	states.transition().duration(750).attr("transform", "");
			  
	// des-seleccionar provincia activa
	d3.select(this).classed("active", active = 0);
}

 	function click3(d) {	

	d3.selectAll(".active").tooltip.style("visibility", "visible");

	
	}
	
 	function click(d) {


     	if (active === d) return blank();
	   d3.selectAll(".active").classed("active", false);
	   d3.select(this).classed("active", active = d);
		var show = "show" + d.properties.icono + enlace;
		window [show]();

        var b = d3.geo.bounds(d);
   
  	//states.transition()
  		//.duration(750)
  		//.attr("transform",
      	//	"translate(" + proj.translate() + ")"
      		//+ "scale(" + .65 / Math.max((b[1][0] - b[0][0]) / width, (b[1][1] - b[0][1]) / height) + ")"
      		//+ "translate(" + -(b[1][0] + b[0][0]) / 2 + "," + -(b[1][1] + b[0][1]) / 2 + ")")

}

	cate();
	
	function cate() {

	catigoria = "mapa/data/<?$resultarchivo = mysql_query("SELECT diputados FROM general_csv");
while($row = mysql_fetch_row($resultarchivo)) {
$diputados_csv = $row[0];

echo $diputados_csv;
}?>.csv";
	cati = 3;
	enlace = "";
	d3.select('body').selectAll('div.tooltip').remove();
	datame();
	init();
	datame();
	init();
	}
	function cates() {
	catigoria = "mapa/data/<?$resultarchivos = mysql_query("SELECT senadores FROM general_csv");
while($row = mysql_fetch_row($resultarchivos)) {
$senadores_csv = $row[0];

echo $senadores_csv;
}?>.csv";
	cati = 2;
	enlace = "s";
	d3.select('body').selectAll('div.tooltip').remove();	
	datame();
	init();
	datame();
	init();	
	}	

</script>
<!--<iframe width="420" height="555" src="cartograma/index3d.html" border="0" scrolling="no" name="cartograma3d"></iframe>-->
<table border="0" width="360" height="555"><tr><td></td></tr></table>
</div>
<div id = "cartograma" style="display:none">
<iframe width="360" height="555" src="cartograma/index.php" border="0" scrolling="no" name="cartograma"></iframe>
</div>


<div id="distritos" style="display:none">
<!--<center><b>Elija distrito</b></center>-->
<table border="0" align="center" height="555">
<?
$ixx = 0;
$xxdistrito = 1;
$resultdistritos = mysql_query("SELECT distrito, icono_distrito FROM distritos");
while ($row = mysql_fetch_array($resultdistritos)) {
if( $ixx == 0 ) {
echo "<tr>";
}
$icono_distritox = $row["icono_distrito"];
$distritot = $row["distrito"];

echo "<td align=\"center\" valign=\"top\" width=\"72px\"><a onclick = \"show$icono_distritox();cate()\"><img src=\"http://andytow.com/blog/wp-content/uploads/$icono_distritox.gif\" align=\"center\" border=\"0\" title=\"$distritot\"><br><small>$distritot</small></a></td>";

$ixx++;

if ($ixx == 4) {
echo "</tr>";
}

if( $ixx == 4 ) $ixx = 0; 

$xxdistrito++;
}
echo "</table>";
echo "</div><div id=\"totales\" style=\"display:block\">";

$resulttotales = mysql_query("SELECT SUM(electores) AS sumadelectores, SUM(votantes) AS sumadevotantes, SUM(validos) AS sumadevalidos, SUM(positivos) AS sumadepositivos, SUM(enblanco) AS sumaenblanco, SUM(nulos) AS sumadenulos, SUM(recimp) AS sumaderecimp, SUM(votantes) / SUM(electores) AS escrutado, SUM(validos) / SUM(votantes) AS validospct, SUM(positivos) / SUM(votantes) AS positivospct, SUM(enblanco) / SUM(votantes) AS enblancopct, SUM(nulos) / SUM(votantes) AS nulospct, SUM(recimp) / SUM(votantes) AS recimppct, SUM(votantes) / SUM(electoresesc) AS sumadevotantes FROM general_totales WHERE categoria = 3");

while($row = mysql_fetch_row($resulttotales)) {

$electores = $row[0];
$electoresformat = number_format($electores, 0, ',', '.');
$votantes = $row[1];
$votantesformat = number_format($votantes, 0, ',', '.');
$validos = $row[2];
$validosformat = number_format($validos, 0, ',', '.');
$positivos =  $row[3];
$positivosformat = number_format($positivos, 0, ',', '.');
$enblanco = $row[4];
$enblancoformat = number_format($enblanco, 0, ',', '.');
$nulos = $row[5];
$nulosformat = number_format($nulos, 0, ',', '.');
$recimp = $row[6];
$recimpformat = number_format($recimp, 0, ',', '.');
$electorespct = $row[7];
$electorespctformat = number_format(($electorespct * 100), 1, ',', '.');
$validospct = $row[8];
$validospctformat = number_format(($validospct * 100), 1, ',', '.');
$positivospct = $row[9];
$positivospctformat = number_format(($positivospct * 100), 1, ',', '.');
$enblancopct = $row[10];
$enblancopctformat = number_format(($enblancopct * 100), 1, ',', '.');
$nulospct = $row[11];
$nulospctformat = number_format(($nulospct * 100), 1, ',', '.');
$recimppct = $row[12];
$recimppctformat = number_format(($recimppct * 100), 1, ',', '.');
$votantespct = $row[13];
$votantespctformat = number_format(($votantespct * 100), 1, ',', '.');

echo "<div align=\"center\">";
echo "<b>Electores: $electoresformat</b>";
echo "<table border=\"0\"><tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Positivos</td><td align=\"right\">$positivosformat</td><td align=\"right\">$positivospctformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>En blanco</td><td align=\"right\">$enblancoformat</td><td align=\"right\">$enblancopctformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Válidos</td><td align=\"right\">$validosformat</td><td align=\"right\">$validospctformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Nulos</td><td align=\"right\">$nulosformat</td><td align=\"right\">$nulospctformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Rec. e Imp.</td><td align=\"right\">$recimpformat</td><td align=\"right\">$recimppctformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Votantes</td><td align=\"right\">$votantesformat</td><td align=\"right\">$votantespctformat%</td></tr>";
echo "</table>";
echo "</div>";

}

?>
</div>
<?
echo "</td>";
?>
<td width="36%" align="center" valign="top"><br><a onclick = "shownacion()"><img src="http://andytow.com/blog/wp-content/uploads/escudo.gif" title="Total del país" align="center" border="0"><br>Total del país</a>
<table border="0" align="center" height="480px"><tr><td valign="bottom" align="center"><b><a class="fancybox fancybox.iframe" href="about.html" target="_blank"><font color="Blue">Acerca del Hack Electoral Legislativas 2013</font></a></b></td></tr></table>
<!--<br><br><a onclick = "showprovincias()"><img src="http://andytow.com/blog/wp-content/uploads/provincias_g.gif" title="Distritos" align="center" border="0"><br>Distritos</a>-->
</td>
</tr></table></td>
<td width="50%" valign="top" align="center">
<div id = "loading" style="display:block"><br><br><br><br><br><br><br><br><br><img src = "img/loading.gif"></div>
<?
require_once('CalculadoraEscons.php');
$ix = 0;
$xdistrito = 1;
$resultcargos = mysql_query("SELECT cargos.distrito, cargos, distritos.distrito, cargos, icono_distrito, senadores, dip_prov, sen_prov FROM cargos INNER JOIN distritos ON cargos.distrito = distritos.cod ORDER BY cargos.distrito");

while ($row = mysql_fetch_array($resultcargos)) {

// diputados-head

$iRegidors = $row["cargos"];
$nombre_distrito = $row["distrito"];
$icono_distrito = $row["icono_distrito"];
$senadores = $row["senadores"];
$dip_prov = $row["dip_prov"];
$sen_prov = $row["sen_prov"];
$xdistritoN = $row["distrito"];
echo "<div id=\"tabla$icono_distrito\" style=\"display:none\">";

// echo "<a href=\"http://andytow.com/atlas/totalpais/$icono_distrito/index.html\">";
// echo "<img src=\"http://andytow.com/atlas/totalpais/$icono_distrito/escudo.gif\" align=\"center\" border=\"0\" title=\"Elecciones en $nombre_distrito\"></a><br>";
echo "<table width=\"100%\"><tr><td width=\"60%\" align=\"center\" valign=\"top\" height=\"122px\">";
echo "<a href=\"http://andytow.com/atlas/totalpais/$icono_distrito/index.html\" title=\"Elecciones en $nombre_distrito\">";
echo "<h1>$nombre_distrito</h1></a>";
echo "<p><b>$iRegidors Diputados Nacionales</b></p>";

if ( $senadores == 1) {
echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "s();cates()\">3 Senadores Nacionales</a></font></p>";
}
if ( $senadores == 0) {
echo "";
}

if ( $dip_prov > 0) {

if ($xdistrito == 1) {echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "dp()\">$dip_prov Diputados de la Ciudad</a></font></p>";} else {echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "dp()\">$dip_prov Diputados Provinciales</a></font></p>";}
}
if ( $dip_prov == 0) {
echo "";
}

if ( $sen_prov > 0) {
echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "sp()\">$sen_prov Senadores Provinciales</a></font></p>";
}
if ( $sen_prov == 0) {
echo "";
}

echo "</td><td align=\"center\" rowspan=\"2\">";

$resulttotales = mysql_query("SELECT distrito, electores, votantes, votantespct, pctelectoresesc, nep, validos, pctvalidos, positivos, pctpositivos, enblanco, pctenblanco, nulos, pctnulos, recimp, pctrecimp FROM general_totales WHERE distrito = '$xdistritoN' AND categoria = 3");


while ($row = mysql_fetch_array($resulttotales)) {

$electores = $row["electores"];
$electoresformat = number_format($electores, 0, ',', '.');
$votantes = $row["votantes"];
$votantesformat = number_format($votantes, 0, ',', '.');
$votantespct = $row["votantespct"];
$votantespctformat = number_format(($votantespct / 100), 1, ',', '.');
$pctelectoresesc = $row["pctelectoresesc"];
$pctelectoresescformat = number_format(($pctelectoresesc / 100), 1, ',', '.');
$validos = $row["validos"];
$validosformat = number_format($validos, 0, ',', '.');
$pctvalidos = $row["pctvalidos"];
$pctvalidosformat = number_format(($pctvalidos / 100), 1, ',', '.');
$positivos =  $row["positivos"];
$positivosformat = number_format($positivos, 0, ',', '.');
$pctpositivos = $row["pctpositivos"];
$pctpositivosformat = number_format(($pctpositivos / 100), 1, ',', '.');
$enblanco = $row["enblanco"];
$enblancoformat = number_format($enblanco, 0, ',', '.');
$pctenblanco = $row["pctenblanco"];
$pctenblancoformat = number_format(($pctenblanco / 100), 1, ',', '.');
$nulos = $row["nulos"];
$nulosformat = number_format($nulos, 0, ',', '.');
$pctnulos = $row["pctnulos"];
$pctnulosformat = number_format(($pctnulos / 100), 1, ',', '.');
$recimp = $row["recimp"];
$recimpformat = number_format($recimp, 0, ',', '.');
$pctrecimp = $row["pctrecimp"];
$pctrecimpformat = number_format(($pctrecimp / 100), 1, ',', '.');
$nep = $row["nep"];
$nepformat = number_format(($nep / 100), 2, ',', '.');


echo "<table border=\"0\" align=\"center\"><tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Positivos</td><td align=\"right\">$positivosformat</td><td align=\"right\">$pctpositivosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>En blanco</td><td align=\"right\">$enblancoformat</td><td align=\"right\">$pctenblancoformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Válidos</td><td align=\"right\">$validosformat</td><td align=\"right\">$pctvalidosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Nulos</td><td align=\"right\">$nulosformat</td><td align=\"right\">$pctnulosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Rec. e Imp.</td><td align=\"right\">$recimpformat</td><td align=\"right\">$pctrecimpformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Votantes</td><td align=\"right\">$votantesformat</td><td align=\"right\">$votantespctformat%</td></tr>";


echo "</table>";
echo "<table border=\"0\" width=\"70%\" align=\"center\"><tr><td align=\"right\" width=\"70%\"><small><a href=\"http://en.wikipedia.org/wiki/Effective_number_of_parties\" target=\"_blank\">Número efectivo de partidos</a></small></td><td align=\"center\"><b>$nepformat</b></td></tr></table>";

echo "<tr><td align=\"center\">";
echo "<b>Electores: $electoresformat</b><br>(Escrutado $pctelectoresescformat%)";
echo "</td></tr>";
}

echo "</td></tr></table>";

// diputados-chart

echo "<iframe src=\"chart.php?d=";
echo $xdistritoN;
echo "&c=3\" width=\"520px\" height=\"120px\" frameborder=\"0\" scrolling=\"no\"></iframe>";

// diputados-dhondt

$sel= "SELECT general.sigla, general.votos AS votos_ FROM general LEFT JOIN colores ON general.sigla = colores.sigla WHERE distrito = '$xdistritoN' AND categoria = 3 AND dhondt > 300 ORDER BY votos_ DESC";

$rs=mysql_query($sel);

$num_results = mysql_num_rows($rs); 

if ( $num_results > 0 ) {

$ii=0;
$array = "";

while ($row = mysql_fetch_assoc($rs))
{

$array[$ii] = intval($row["votos_"]);

$ii++;

}

echo "<table border=\"0\" width=\"525px\" align=\"center\" valign=\"top\"><tr bgcolor=\"#f0f0f0\"><td align=\"center\" width=\"58%\"><b>Agrupaciones</b></td><td align=\"center\" width=\"19%\"><b>VOTOS</b></td><td align=\"center\" width=\"11%\"><b>%</b></td><td width=\"6%\"><small><b>Var.</b></small></td><td width=\"6%\"><small><b>Dip.</b></small></td></tr>";

$result = mysql_query("SELECT general.lista, general.sigla, general.votos, general.votospct, general.color, distritos.positivos, general.votospct / 10000 * distritos.positivos AS cuantia, general.nombreagrupacion, general.dif, general.cartograma, general.cartogramadash FROM general INNER JOIN distritos ON general.distrito = distritos.distrito WHERE general.distrito = '$xdistritoN' AND categoria = 3 ORDER BY votos DESC");

$aCalc = new CalculadoraEscons();
$aVots = $array;
$aRegidorsPartits = $aCalc->calcula($aVots,$iRegidors);

$iii = 0;
$celda = 0;

while ($row = mysql_fetch_array($result)) {

$lista = $row["lista"];
$sigla = $row["sigla"];
$votos = $row["votos"];
$votospct = $row["votospct"];
$color = $row["color"];
$votosformat = number_format($votos, 0, ',', '.');
$votospctformat = number_format(($votospct / 100), 2, ',', ' ');
$cuantia = $row["cuantia"];
$nombreagrupacion = $row["nombreagrupacion"];
$dif = $row["dif"];
$difformat = number_format(($dif / 100), 1, ',', ' ');
$cartograma = $row["cartograma"];
$cartogramadash = $row["cartogramadash"];

if ($celda === 1) {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#F0F0F0\"><td>";
$celda = 0;} else {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>";
$celda++;}

if ($iii === 0)
{

echo "<a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=$lista&c=3\" target=\"_blank\" title=\"Candidatos\"><font color = \"$color\"><font size=\"4\"><b>";
echo $sigla;
echo "</b></font></font></a>";
echo "</td><td align=\"right\">";
echo "<font size=\"4\">";
echo "<font color = \"$color\">";
echo $votosformat;
echo "</font>";
echo "</font>";
echo "</td><td align=\"right\">";
echo "<font size=\"4\">";
echo "<font color = \"$color\">";
echo $votospctformat;
echo "</font>";
echo "</font>";
}

if ($iii === 1) {


echo "<a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=$lista&c=3\" target=\"_blank\" title=\"Candidatos\"><font size=\"3\"><font color = \"$color\"><b>";
echo $sigla;
echo "</b></font></font></a>";
echo "</td><td align=\"right\">";
echo "<font size=\"3\"><font color = \"$color\">";
echo $votosformat;
echo "</font></font>";
echo "</td><td align=\"right\">";
echo "<font size=\"3\"><font color = \"$color\">";
echo $votospctformat;
echo "</font></font>";
}

if ($iii === 2) {

echo "<a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=$lista&c=3\" target=\"_blank\" title=\"Candidatos\"><font color = \"$color\"><b>";
echo $sigla;
echo "</b></font></a>";
echo "</td><td align=\"right\">";
echo "<font color = \"$color\">";
echo $votosformat;
echo "</font>";
echo "</td><td align=\"right\">";
echo "<font color = \"$color\">";
echo $votospctformat;
echo "</font>";
}


if ($iii > 2) {

echo "<a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=$lista&c=3\" target=\"_blank\" title=\"Candidatos\"><font color = \"$color\"><b><small>";
echo $sigla;
echo "</small></b></font></a>";
echo "</td><td align=\"right\">";
echo "<small>";
echo "<font color = \"$color\">";
echo $votosformat;
echo "</font>";
echo "</small>";
echo "</td><td align=\"right\">";
echo "<small>";
echo "<font color = \"$color\">";
echo $votospctformat;
echo "</font>";
echo "</small>";
}

echo "</td><td align=\"right\">";


if ($dif > 0) {
echo "<small>+$difformat%</small><br><img src=\"img/icon_up.gif\" title=\"+$difformat";
echo "%\"></a>";}
else {

if ($dif < 0) {
echo "<img src=\"img/icon_down.gif\" title=\"$difformat";
echo "%\"><small><br>$difformat%</small>";} else {
echo "<img src=\"img/icon_null.gif\">";}}



echo "</td><td align=\"right\">";

echo "<font color = \"$color\"><b>";

if ($aRegidorsPartits[$iii] === NULL) {
$aRegidorsPartits[$iii] = 0; }

if ($aRegidorsPartits[$iii] == 0) {
$diputados = NULL; } else { $diputados = $aRegidorsPartits[$iii];}


echo $diputados;
echo "</b></font>";


echo "</td></tr>\n";


//$resultleg = mysql_query("INSERT INTO general_legislatura (distrito, lista, sigla, cargos, cuantia, color, cartograma, cartogramadash) VALUES ('$xdistritoN', $lista, '$nombreagrupacion', $aRegidorsPartits[$iii], $cuantia, '$color', '$cartograma', '$cartogramadash')");




$iii++;


}

echo "</table>\n";

$resulttooltip = mysql_query("SELECT lista FROM general WHERE distrito = '$xdistritoN' AND categoria = 3 ORDER BY votos DESC LIMIT 1");

while ($row = mysql_fetch_array($resulttooltip)) {

$listaboleta = $row["lista"];

echo "<div id=\"div_boleta_$icono_distrito\" style=\"position:absolute;left:420px; top:920px; border:0;\"></div>";
echo "<script>";
echo "var slide$icono_distrito= \"<a class='fancybox fancybox.iframe' href='general_c.php?l=$listaboleta&c=3' target='_blank'><img src='mapa/img/";
echo $listaboleta;
echo "-3.jpg' width='150px'></a>\";\n";
echo "document.getElementById('div_boleta_$icono_distrito').innerHTML=slide$icono_distrito;";
echo "</script>";
}

echo "<br>";


}


	

echo "</div>\n";


// senadores-head

if ($senadores == 1) {

echo "<div id=\"tabla";
echo $icono_distrito;
echo "s\" style=\"display:none\">";
echo "<table width=\"100%\"><tr><td width=\"60%\" align=\"center\" valign=\"top\" height=\"122px\">";
echo "<a href=\"http://andytow.com/atlas/totalpais/$icono_distrito/index.html\">";
// echo "<img src=\"http://andytow.com/atlas/totalpais/$icono_distrito/escudo.gif\" align=\"center\" border=\"0\" title=\"Elecciones en $nombre_distrito\"></a><br>";
echo "<h1>$nombre_distrito</h1></a><p><font color = \"Blue\"><a onclick = \"show$icono_distrito();cate()\">$iRegidors Diputados Nacionales</a></font></p>";
echo "<p><b>3 Senadores Nacionales</b></p>";


if ( $dip_prov > 0) {

if ($xdistrito == 1) {echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "dp()\">$dip_prov Diputados de la Ciudad</a></font></p>";} else {echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "dp()\">$dip_prov Diputados Provinciales</a></font></p>";}

}
if ( $dip_prov == 0) {
echo "";
}

if ( $sen_prov > 0) {
echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "sp()\">$sen_prov Senadores Provinciales</a></font></p>";
}
if ( $sen_prov == 0) {
echo "";
}

echo "</td><td align=\"center\" rowspan=\"2\">";

$resulttotaless = mysql_query("SELECT distrito, electores, votantes, votantespct, pctelectoresesc, nep, validos, pctvalidos, positivos, pctpositivos, enblanco, pctenblanco, nulos, pctnulos, recimp, pctrecimp FROM general_totales WHERE distrito = '$xdistritoN' AND categoria = 2");

while ($row = mysql_fetch_array($resulttotaless)) {

$electores = $row["electores"];
$electoresformat = number_format($electores, 0, ',', '.');
$votantes = $row["votantes"];
$votantesformat = number_format($votantes, 0, ',', '.');
$votantespct = $row["votantespct"];
$votantespctformat = number_format(($votantespct / 100), 1, ',', '.');
$pctelectoresesc = $row["pctelectoresesc"];
$pctelectoresescformat = number_format(($pctelectoresesc / 100), 1, ',', '.');
$validos = $row["validos"];
$validosformat = number_format($validos, 0, ',', '.');
$pctvalidos = $row["pctvalidos"];
$pctvalidosformat = number_format(($pctvalidos / 100), 1, ',', '.');
$positivos =  $row["positivos"];
$positivosformat = number_format($positivos, 0, ',', '.');
$pctpositivos = $row["pctpositivos"];
$pctpositivosformat = number_format(($pctpositivos / 100), 1, ',', '.');
$enblanco = $row["enblanco"];
$enblancoformat = number_format($enblanco, 0, ',', '.');
$pctenblanco = $row["pctenblanco"];
$pctenblancoformat = number_format(($pctenblanco / 100), 1, ',', '.');
$nulos = $row["nulos"];
$nulosformat = number_format($nulos, 0, ',', '.');
$pctnulos = $row["pctnulos"];
$pctnulosformat = number_format(($pctnulos / 100), 1, ',', '.');
$recimp = $row["recimp"];
$recimpformat = number_format($recimp, 0, ',', '.');
$pctrecimp = $row["pctrecimp"];
$pctrecimpformat = number_format(($pctrecimp / 100), 1, ',', '.');
$nep = $row["nep"];
$nepformat = number_format(($nep / 100), 2, ',', '.');




echo "<table border=\"0\" align=\"center\"><tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Positivos</td><td align=\"right\">$positivosformat</td><td align=\"right\">$pctpositivosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>En blanco</td><td align=\"right\">$enblancoformat</td><td align=\"right\">$pctenblancoformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Válidos</td><td align=\"right\">$validosformat</td><td align=\"right\">$pctvalidosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Nulos</td><td align=\"right\">$nulosformat</td><td align=\"right\">$pctnulosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Rec. e Imp.</td><td align=\"right\">$recimpformat</td><td align=\"right\">$pctrecimpformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Votantes</td><td align=\"right\">$votantesformat</td><td align=\"right\">$votantespctformat%</td></tr>";
echo "</table>";
echo "<table border=\"0\" width=\"70%\" align=\"center\"><tr><td align=\"right\" width=\"70%\"><small><a href=\"http://en.wikipedia.org/wiki/Effective_number_of_parties\" target=\"_blank\">Número efectivo de partidos</a></small></td><td align=\"center\"><b>$nepformat</b></td></tr></table>";

echo "<tr><td align=\"center\">";
echo "<b>Electores: $electoresformat</b><br>(Escrutado $pctelectoresescformat%)";
}
echo "</td></tr></table>";

// senadores-chart

echo "<iframe src=\"chart.php?d=";
echo $xdistritoN;
echo "&c=2\" width=\"520px\" height=\"120px\" frameborder=\"0\" scrolling=\"no\"></iframe>";

// senadores-incomplete

echo "<table border=\"0\" width=\"525px\" align=\"center\" valign=\"top\"><tr bgcolor=\"#f0f0f0\"><td align=\"center\" width=\"58%\"><b>Agrupaciones</b></td><td align=\"center\" width=\"19%\"><b>VOTOS</b></td><td align=\"center\" width=\"11%\"><b>%</b></td><td width=\"6%\"><small><b>Var.</b></small></td><td width=\"6%\"><small><b>Sen.</b></small></td></tr>";

$results = mysql_query("SELECT general.lista, general.sigla, general.votos, general.votospct, general.color, distritos.positivos, general.votos / 100 * distritos.positivos AS cuantia, general.nombreagrupacion, general.dif FROM general INNER JOIN distritos ON general.distrito = distritos.distrito WHERE general.distrito = '$xdistritoN' AND categoria = 2 ORDER BY votos DESC");

$iiis = 0;
$scelda = 0;

while ($row = mysql_fetch_array($results)) {

$listas = $row["lista"];
$siglas = $row["sigla"];
$votoss = $row["votos"];
$votospcts = $row["votospct"];
$colors = $row["color"];
$votosformats = number_format($votoss, 0, ',', '.');
$votospctformats = number_format(($votospcts / 100), 2, ',', ' ');
$cuantias = $row["cuantia"];
$nombreagrupacions = $row["nombreagrupacion"];
$difs = $row["dif"];
$difformats = number_format(($difs / 100), 1, ',', ' ');



if ($scelda === 1) {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#F0F0F0\"><td>";
$scelda = 0;} else {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>";
$scelda++;}

if ($iiis === 0)
{

echo "<a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=$listas&c=2\" target=\"_blank\" title=\"Candidatos\"><font color = \"$colors\"><font size=\"4\"><b>";
echo $siglas;
echo "</b></font></font></a>";
echo "</td><td align=\"right\">";
echo "<font size=\"4\">";
echo "<font color = \"$colors\">";
echo $votosformats;
echo "</font>";
echo "</font>";
echo "</td><td align=\"right\">";
echo "<font size=\"4\">";
echo "<font color = \"$colors\">";
echo $votospctformats;
echo "</font>";
echo "</font>";
}

if ($iiis === 1) {


echo "<a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=$listas&c=2\" target=\"_blank\" title=\"Candidatos\"><font size=\"3\"><font color = \"$colors\"><b>";
echo $siglas;
echo "</b></font></font></a>";
echo "</td><td align=\"right\">";
echo "<font size=\"3\"><font color = \"$colors\">";
echo $votosformats;
echo "</font></font>";
echo "</td><td align=\"right\">";
echo "<font size=\"3\"><font color = \"$colors\">";
echo $votospctformats;
echo "</font></font>";
}

if ($iiis === 2) {

echo "<a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=$listas&c=2\" target=\"_blank\" title=\"Candidatos\"><font color = \"$colors\"><b>";
echo $siglas;
echo "</b></font></a>";
echo "</td><td align=\"right\">";
echo "<font color = \"$colors\">";
echo $votosformats;
echo "</font>";
echo "</td><td align=\"right\">";
echo "<font color = \"$colors\">";
echo $votospctformats;
echo "</font>";
}


if ($iiis > 2) {

echo "<a class=\"fancybox fancybox.iframe\" href=\"general_c.php?l=$listas&c=2\" target=\"_blank\" title=\"Candidatos\"><font color = \"$colors\"><b><small>";
echo $siglas;
echo "</small></b></font></a>";
echo "</td><td align=\"right\">";
echo "<small>";
echo "<font color = \"$colors\">";
echo $votosformats;
echo "</font>";
echo "</small>";
echo "</td><td align=\"right\">";
echo "<small>";
echo "<font color = \"$colors\">";
echo $votospctformats;
echo "</font>";
echo "</small>";
}

echo "</td><td align=\"right\">";

if ($difs > 0) {
echo "<small>+$difformats%</small><br><img src=\"img/icon_up.gif\" title=\"+$difformats";
echo "%\">";}
else {

if ($difs < 0) {
echo "<img src=\"img/icon_down.gif\" title=\"$difformats";
echo "%\"><br><small>$difformats%</small>";} else {
echo "<img src=\"img/icon_null.gif\">";}}

echo "</td>";
echo "<td align=\"right\">";

if (($senadores == 1) && ($iiis == 0)) {
$senador = 2;
echo"<font color = \"$colors\"><b>2</b></font>";
}
if (($senadores == 1) && ($iiis == 1)) {
$senador = 1;
echo "<font color = \"$colors\"><b>1</b></font>";
}
if (($senadores == 1) && ($iiis > 1)) {
$senador = 0;
}

if ($senadores == 0) {
$senador = 0;
}

echo "</td></tr>";



//$resultleg = mysql_query("INSERT INTO general_legislatura (distrito, sigla, lista, senadores, color) VALUES ('$xdistritoN', '$nombreagrupacions', $listas, $senador, '$colors')");


$iiis++;

}



echo "</table>";

$resulttooltips = mysql_query("SELECT lista FROM general WHERE distrito = '$xdistritoN' AND categoria = 2 ORDER BY votos DESC LIMIT 1");

while ($row = mysql_fetch_array($resulttooltips)) {

$listaboleta = $row["lista"];

echo "<div id=\"div_boleta_$icono_distrito";
echo "s\" style=\"position:absolute;left:420px; top:920px; border:0;\"></div>";
echo "<script>";

echo "var slide$icono_distrito";
echo "s= \"<a class='fancybox fancybox.iframe' href='general_c.php?l=$listaboleta&c=2' target='_blank'><img src='mapa/img/";
echo $listaboleta;
echo "-2.jpg' width='150px'></a>\";\n";
echo "document.getElementById('div_boleta_$icono_distrito";
echo "s').innerHTML=slide$icono_distrito";
echo "s;";
echo "</script>";
}
echo "</div>";}


// dip_prov-head

if ($dip_prov > 0) {

echo "<div id=\"tabla";
echo $icono_distrito;
echo "dp\" style=\"display:none\">";
echo "<table width=\"100%\"><tr><td width=\"60%\" align=\"center\" valign=\"top\" height=\"122px\">";
echo "<a href=\"http://andytow.com/atlas/totalpais/$icono_distrito/index.html\">";
// echo "<img src=\"http://andytow.com/atlas/totalpais/$icono_distrito/escudo.gif\" align=\"center\" border=\"0\" title=\"Elecciones en $nombre_distrito\"></a><br>";
echo "<h1>$nombre_distrito</h1></a><p><font color = \"Blue\"><a onclick = \"show$icono_distrito();cate();selectdip()\">$iRegidors Diputados Nacionales</a></font></p>";

if ( $senadores == 1) {
echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "s();cates();selectsen()\">3 Senadores Nacionales</a></font></p>";
}
if ( $senadores == 0) {
echo "";
}

if ($xdistrito == 1) {echo "<p><b>$dip_prov Diputados de la Ciudad</b></p>";} else {echo "<p><b>$dip_prov Diputados Provinciales</b></p>";}


if ( $sen_prov > 0) {
echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "sp()\">$sen_prov Senadores Provinciales</a></font></p>";
}
if ( $sen_prov == 0) {
echo "";
}

echo "</td><td align=\"center\" rowspan=\"2\">";

$resulttotalesdp = mysql_query("SELECT distrito, electores, votantes, votantespct, pctelectoresesc, nep, validos, pctvalidos, positivos, pctpositivos, enblanco, pctenblanco, nulos, pctnulos, recimp, pctrecimp FROM general_totales WHERE distrito = '$xdistritoN' AND categoria = 6");

while ($row = mysql_fetch_array($resulttotalesdp)) {

$electores = $row["electores"];
$electoresformat = number_format($electores, 0, ',', '.');
$votantes = $row["votantes"];
$votantesformat = number_format($votantes, 0, ',', '.');
$votantespct = $row["votantespct"];
$votantespctformat = number_format(($votantespct / 100), 1, ',', '.');
$pctelectoresesc = $row["pctelectoresesc"];
$pctelectoresescformat = number_format(($pctelectoresesc / 100), 1, ',', '.');
$validos = $row["validos"];
$validosformat = number_format($validos, 0, ',', '.');
$pctvalidos = $row["pctvalidos"];
$pctvalidosformat = number_format(($pctvalidos / 100), 1, ',', '.');
$positivos =  $row["positivos"];
$positivosformat = number_format($positivos, 0, ',', '.');
$pctpositivos = $row["pctpositivos"];
$pctpositivosformat = number_format(($pctpositivos / 100), 1, ',', '.');
$enblanco = $row["enblanco"];
$enblancoformat = number_format($enblanco, 0, ',', '.');
$pctenblanco = $row["pctenblanco"];
$pctenblancoformat = number_format(($pctenblanco / 100), 1, ',', '.');
$nulos = $row["nulos"];
$nulosformat = number_format($nulos, 0, ',', '.');
$pctnulos = $row["pctnulos"];
$pctnulosformat = number_format(($pctnulos / 100), 1, ',', '.');
$recimp = $row["recimp"];
$recimpformat = number_format($recimp, 0, ',', '.');
$pctrecimp = $row["pctrecimp"];
$pctrecimpformat = number_format(($pctrecimp / 100), 1, ',', '.');
$nep = $row["nep"];
$nepformat = number_format(($nep / 100), 2, ',', '.');


echo "<table border=\"0\" align=\"center\"><tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Positivos</td><td align=\"right\">$positivosformat</td><td align=\"right\">$pctpositivosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>En blanco</td><td align=\"right\">$enblancoformat</td><td align=\"right\">$pctenblancoformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Válidos</td><td align=\"right\">$validosformat</td><td align=\"right\">$pctvalidosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Nulos</td><td align=\"right\">$nulosformat</td><td align=\"right\">$pctnulosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Rec. e Imp.</td><td align=\"right\">$recimpformat</td><td align=\"right\">$pctrecimpformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Votantes</td><td align=\"right\">$votantesformat</td><td align=\"right\">$votantespctformat%</td></tr>";
echo "</table>";
echo "<table border=\"0\" width=\"70%\" align=\"center\"><tr><td align=\"right\" width=\"70%\"><small><a href=\"http://en.wikipedia.org/wiki/Effective_number_of_parties\" target=\"_blank\">Número efectivo de partidos</a></small></td><td align=\"center\"><b>$nepformat</b></td></tr></table>";
echo "<tr><td align=\"center\">";
echo "<b>Electores: $electoresformat</b><br>(Escrutado $pctelectoresescformat%)";
}
echo "</td></tr></table>";

// dip_prov-chart

echo "<iframe src=\"chart.php?d=";
echo $xdistritoN;
echo "&c=6\" width=\"520px\" height=\"120px\" frameborder=\"0\" scrolling=\"no\"></iframe>";


// dip_prov-dhondt

if ($xdistrito === 3) {
$seldp= "SELECT general.sigla, general.votos AS votos_dp FROM general LEFT JOIN colores ON general.sigla = colores.sigla WHERE distrito = '$xdistritoN' AND categoria = 6 AND dhondt > 300 ORDER BY votos_dp DESC";} else 

{if ($xdistrito === 10) {
$seldp= "SELECT general.dhondt, general.sigla, general.votos AS votos_dp FROM general LEFT JOIN colores ON general.sigla = colores.sigla WHERE distrito = '$xdistritoN' AND categoria = 6 AND dhondt > 500 ORDER BY votos_dp DESC";}

else {$seldp= "SELECT general.dhondt, general.sigla, general.votos AS votos_dp FROM general LEFT JOIN colores ON general.sigla = colores.sigla WHERE distrito = '$xdistritoN' AND categoria = 6 ORDER BY votos_dp DESC";}}


$rsdp=mysql_query($seldp);

$num_resultsdp = mysql_num_rows($rsdp); 

if ( $num_resultsdp > 0 ) {

$iidp=0;
$arraydp = "";

while ($row = mysql_fetch_assoc($rsdp))
{

$arraydp[$iidp] = intval($row["votos_dp"]);

$iidp++;

}

echo "<table border=\"0\" width=\"525px\" align=\"center\" valign=\"top\"><tr bgcolor=\"#f0f0f0\"><td align=\"center\" width=\"58%\"><b>Agrupaciones</b></td><td align=\"center\" width=\"19%\"><b>VOTOS</b></td><td align=\"center\" width=\"11%\"><b>%</b></td><td width=\"6%\"><small><b>Var.</b></small></td><td width=\"6%\"><small><b>Dip.</b></small></td></tr>";

$resultdp = mysql_query("SELECT general.lista, general.sigla, general.votos, general.votospct, general.color, distritos.positivos, general.votos / 100 * distritos.positivos AS cuantia, general.nombreagrupacion, general.dif, general.provinciales FROM general INNER JOIN distritos ON general.distrito = distritos.distrito WHERE general.distrito = '$xdistritoN' AND categoria = 6 ORDER BY votos DESC");

$aCalcdp = new CalculadoraEscons();
$aVotsdp = $arraydp;
$aRegidorsPartitsdp = $aCalcdp->calcula($aVotsdp,$dip_prov);


$iiidp = 0;
$dpcelda = 0;

while ($row = mysql_fetch_array($resultdp)) {

$listadp = $row["lista"];
$sigladp = $row["sigla"];
$votosdp = $row["votos"];
$votospctdp = $row["votospct"];
$colordp = $row["color"];
$votosformatdp = number_format($votosdp, 0, ',', '.');
$votospctformatdp = number_format(($votospctdp / 100), 2, ',', ' ');
$cuantiadp = $row["cuantia"];
$nombreagrupaciondp = $row["nombreagrupacion"];
$difdp = $row["dif"];
$difformatdp = number_format(($difdp / 100), 1, ',', ' ');
$provincialesdp = $row["provinciales"];



if ($dpcelda === 1) {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#F0F0F0\"><td>";
$dpcelda = 0;} else {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>";
$dpcelda++;}

if ($iiidp === 0)
{

echo "<font color = \"$colordp\"><font size=\"4\"><b>";
echo $sigladp;
echo "</b></font></font>";
echo "</td><td align=\"right\">";
echo "<font size=\"4\">";
echo "<font color = \"$colordp\">";
echo $votosformatdp;
echo "</font>";
echo "</font>";
echo "</td><td align=\"right\">";
echo "<font size=\"4\">";
echo "<font color = \"$colordp\">";
echo $votospctformatdp;
echo "</font>";
echo "</font>";
}

if ($iiidp === 1) {


echo "<font size=\"3\"><font color = \"$colordp\"><b>";
echo $sigladp;
echo "</b></font></font>";
echo "</td><td align=\"right\">";
echo "<font size=\"3\"><font color = \"$colordp\">";
echo $votosformatdp;
echo "</font></font>";
echo "</td><td align=\"right\">";
echo "<font size=\"3\"><font color = \"$colordp\">";
echo $votospctformatdp;
echo "</font></font>";
}

if ($iiidp === 2) {

echo "<font color = \"$colordp\"><b>";
echo $sigladp;
echo "</b></font>";
echo "</td><td align=\"right\">";
echo "<font color = \"$colordp\">";
echo $votosformatdp;
echo "</font>";
echo "</td><td align=\"right\">";
echo "<font color = \"$colordp\">";
echo $votospctformatdp;
echo "</font>";
}


if ($iiidp > 2) {

echo "<font color = \"$colordp\"><b><small>";
echo $sigladp;
echo "</small></b></font>";
echo "</td><td align=\"right\">";
echo "<small>";
echo "<font color = \"$colordp\">";
echo $votosformatdp;
echo "</font>";
echo "</small>";
echo "</td><td align=\"right\">";
echo "<small>";
echo "<font color = \"$colordp\">";
echo $votospctformatdp;
echo "</font>";
echo "</small>";
}

echo "</td><td align=\"right\">";

if ($difdp > 0) {
echo "<small>+$difformatdp%</small><br><img src=\"img/icon_up.gif\" title=\"+$difformatdp";
echo "%\">";}
else {

if ($difdp < 0) {
echo "<img src=\"img/icon_down.gif\" title=\"$difformatdp";
echo "%\"><br><small>$difformatdp%</small>";} else {
echo "<img src=\"img/icon_null.gif\">";}}


echo "</td><td align=\"right\">";
echo "<font color = \"$colordp\"><b>";


if ($xdistrito === 2 OR $xdistrito ===13 OR $xdistrito === 19 OR $xdistrito === 12) {

if ($provincialesdp == 0) {
$provincialesdp = NULL; } 

echo $provincialesdp;
} else {

if ($aRegidorsPartitsdp[$iiidp] === NULL) {
$aRegidorsPartitsdp[$iiidp] = 0; }

if ($aRegidorsPartitsdp[$iiidp] == 0) {
$diputadosprovinciales = NULL; } else { $diputadosprovinciales = $aRegidorsPartitsdp[$iiidp];}


echo $diputadosprovinciales;}
// echo "X";
echo "</b></font>";


echo "</td></tr>\n";


$iiidp++;

}
echo "</table>";
}
echo "</div>";}

// sen_prov

if ($sen_prov > 0) {

echo "<div id=\"tabla";
echo $icono_distrito;
echo "sp\" style=\"display:none\">";
echo "<table width=\"100%\"><tr><td width=\"60%\" align=\"center\" valign=\"top\" height=\"122px\">";
echo "<a href=\"http://andytow.com/atlas/totalpais/$icono_distrito/index.html\">";
// echo "<img src=\"http://andytow.com/atlas/totalpais/$icono_distrito/escudo.gif\" align=\"center\" border=\"0\" title=\"Elecciones en $nombre_distrito\"></a><br>";
echo "<h1>$nombre_distrito</h1></a><p><font color = \"Blue\"><a onclick = \"show$icono_distrito();cate();selectdip()\">$iRegidors Diputados Nacionales</a></font></p>";

if ( $senadores == 1) {
echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "s();cates();selectsen()\">3 Senadores Nacionales</a></font></p>";
}
if ( $senadores == 0) {
echo "";
}


if ( $dip_prov > 0) {
echo "<p><font color = \"Blue\"><a onclick = \"show$icono_distrito";
echo "dp()\">$dip_prov Diputados Provinciales</a></font></p>";
}
if ( $dip_prov == 0) {
echo "";
}

echo "<p><b>$sen_prov Senadores Provinciales</b></p>";

echo "</td><td align=\"center\" rowspan=\"2\">";


$resulttotalessp = mysql_query("SELECT distrito, electores, votantes, votantespct, pctelectoresesc, nep, validos, pctvalidos, positivos, pctpositivos, enblanco, pctenblanco, nulos, pctnulos, recimp, pctrecimp FROM general_totales WHERE distrito = '$xdistritoN' AND categoria = 5");

while ($row = mysql_fetch_array($resulttotalessp)) {

$electores = $row["electores"];
$electoresformat = number_format($electores, 0, ',', '.');
$votantes = $row["votantes"];
$votantesformat = number_format($votantes, 0, ',', '.');
$votantespct = $row["votantespct"];
$votantespctformat = number_format(($votantespct / 100), 1, ',', '.');
$pctelectoresesc = $row["pctelectoresesc"];
$pctelectoresescformat = number_format(($pctelectoresesc / 100), 1, ',', '.');
$validos = $row["validos"];
$validosformat = number_format($validos, 0, ',', '.');
$pctvalidos = $row["pctvalidos"];
$pctvalidosformat = number_format(($pctvalidos / 100), 1, ',', '.');
$positivos =  $row["positivos"];
$positivosformat = number_format($positivos, 0, ',', '.');
$pctpositivos = $row["pctpositivos"];
$pctpositivosformat = number_format(($pctpositivos / 100), 1, ',', '.');
$enblanco = $row["enblanco"];
$enblancoformat = number_format($enblanco, 0, ',', '.');
$pctenblanco = $row["pctenblanco"];
$pctenblancoformat = number_format(($pctenblanco / 100), 1, ',', '.');
$nulos = $row["nulos"];
$nulosformat = number_format($nulos, 0, ',', '.');
$pctnulos = $row["pctnulos"];
$pctnulosformat = number_format(($pctnulos / 100), 1, ',', '.');
$recimp = $row["recimp"];
$recimpformat = number_format($recimp, 0, ',', '.');
$pctrecimp = $row["pctrecimp"];
$pctrecimpformat = number_format(($pctrecimp / 100), 1, ',', '.');
$nep = $row["nep"];
$nepformat = number_format(($nep / 100), 2, ',', '.');


echo "<table border=\"0\" align=\"center\"><tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Positivos</td><td align=\"right\">$positivosformat</td><td align=\"right\">$pctpositivosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>En blanco</td><td align=\"right\">$enblancoformat</td><td align=\"right\">$pctenblancoformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Válidos</td><td align=\"right\">$validosformat</td><td align=\"right\">$pctvalidosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Nulos</td><td align=\"right\">$nulosformat</td><td align=\"right\">$pctnulosformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>Rec. e Imp.</td><td align=\"right\">$recimpformat</td><td align=\"right\">$pctrecimpformat%</td></tr>";
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#f0f0f0\"><td>Votantes</td><td align=\"right\">$votantesformat</td><td align=\"right\">$votantespctformat%</td></tr>";
echo "</table>";
echo "<table border=\"0\" width=\"70%\" align=\"center\"><tr><td align=\"right\" width=\"70%\"><small><a href=\"http://en.wikipedia.org/wiki/Effective_number_of_parties\" target=\"_blank\">Número efectivo de partidos</a></small></td><td align=\"center\"><b>$nepformat</b></td></tr></table>";
echo "<tr><td align=\"center\">";
echo "<b>Electores: $electoresformat</b><br>(Escrutado $pctelectoresescformat%)";
echo "</td></tr>";
}
echo "</td></tr></table>";


// sen_prov-chart

echo "<iframe src=\"chart.php?d=";
echo $xdistritoN;
echo "&c=5\" width=\"520px\" height=\"120px\" frameborder=\"0\" scrolling=\"no\"></iframe>";



// sen_prov


// $selsp= "SELECT general.sigla, general.votos AS votos_sp FROM general LEFT JOIN colores ON general.sigla = colores.sigla WHERE distrito = '$xdistritoN' AND categoria = 5 ORDER BY votos_sp DESC";

// $rssp=mysql_query($selsp);

// $num_resultssp = mysql_num_rows($rssp); 

// if ( $num_resultssp > 0 ) {

// $iisp=0;
// $arraysp = "";

// while ($row = mysql_fetch_assoc($rssp))
// {

// $arraysp[$iisp] = intval($row["votos_sp"]);

// $iisp++;

// }

echo "<table border=\"0\" width=\"525px\" align=\"center\" valign=\"top\"><tr bgcolor=\"#f0f0f0\"><td align=\"center\" width=\"58%\"><b>Agrupaciones</b></td><td align=\"center\" width=\"19%\"><b>VOTOS</b></td><td align=\"center\" width=\"11%\"><b>%</b></td><td width=\"6%\"><small><b>Var.</b></small></td><td width=\"6%\"><small><b>Sen.</b></small></td></tr>";

$resultsp = mysql_query("SELECT general.lista, general.sigla, general.votos, general.votospct, general.color, distritos.positivos, general.votos / 100 * distritos.positivos AS cuantia, general.nombreagrupacion, general.dif, general.provinciales FROM general INNER JOIN distritos ON general.distrito = distritos.distrito WHERE general.distrito = '$xdistritoN' AND categoria = 5 ORDER BY votos DESC");

// $aCalcsp = new CalculadoraEscons();
// $aVotssp = $arraysp;
// $aRegidorsPartitssp = $aCalcsp->calcula($aVotssp,$sen_prov);


$iiisp = 0;
$spcelda = 0;

while ($row = mysql_fetch_array($resultsp)) {

$listasp = $row["lista"];
$siglasp = $row["sigla"];
$votossp = $row["votos"];
$votospctsp = $row["votospct"];
$colorsp = $row["color"];
$votosformatsp = number_format($votossp, 0, ',', '.');
$votospctformatsp = number_format(($votospctsp / 100), 2, ',', ' ');
$cuantiasp = $row["cuantia"];
$nombreagrupacionsp = $row["nombreagrupacion"];
$difsp = $row["dif"];
$difformatsp = number_format(($difsp / 100), 1, ',', ' ');
$provincialessp = $row["provinciales"];


if ($spcelda === 1) {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#F0F0F0\"><td>";
$spcelda = 0;} else {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>";
$spcelda++;}

if ($iiisp === 0)
{

echo "<font color = \"$colorsp\"><font size=\"4\"><b>";
echo $siglasp;
echo "</b></font></font>";
echo "</td><td align=\"right\">";
echo "<font size=\"4\">";
echo "<font color = \"$colorsp\">";
echo $votosformatsp;
echo "</font>";
echo "</font>";
echo "</td><td align=\"right\">";
echo "<font size=\"4\">";
echo "<font color = \"$colorsp\">";
echo $votospctformatsp;
echo "</font>";
echo "</font>";
}

if ($iiisp === 1) {


echo "<font size=\"3\"><font color = \"$colorsp\"><b>";
echo $siglasp;
echo "</b></font></font>";
echo "</td><td align=\"right\">";
echo "<font size=\"3\"><font color = \"$colorsp\">";
echo $votosformatsp;
echo "</font></font>";
echo "</td><td align=\"right\">";
echo "<font size=\"3\"><font color = \"$colorsp\">";
echo $votospctformatsp;
echo "</font></font>";
}

if ($iiisp === 2) {

echo "<font color = \"$colorsp\"><b>";
echo $siglasp;
echo "</b></font>";
echo "</td><td align=\"right\">";
echo "<font color = \"$colorsp\">";
echo $votosformatsp;
echo "</font>";
echo "</td><td align=\"right\">";
echo "<font color = \"$colorsp\">";
echo $votospctformatsp;
echo "</font>";
}


if ($iiisp > 2) {

echo "<font color = \"$colorsp\"><b><small>";
echo $siglasp;
echo "</small></b></font>";
echo "</td><td align=\"right\">";
echo "<small>";
echo "<font color = \"$colorsp\">";
echo $votosformatsp;
echo "</font>";
echo "</small>";
echo "</td><td align=\"right\">";
echo "<small>";
echo "<font color = \"$colorsp\">";
echo $votospctformatsp;
echo "</font>";
echo "</small>";
}

echo "</td><td align=\"right\">";

if ($difsp > 0) {
echo "<small>+$difformatsp%</small><br><img src=\"img/icon_up.gif\" title=\"+$difformatsp";
echo "%\">";}
else {

if ($difsp < 0) {
echo "<img src=\"img/icon_down.gif\" title=\"$difformatsp";
echo "%\"><br><small>$difformatsp%</small>";} else {
echo "<img src=\"img/icon_null.gif\">";}}


echo "</td><td align=\"right\">";
echo "<font color = \"$colorsp\"><b>";
// if ($aRegidorsPartitssp[$iiisp] === NULL) {
// $aRegidorsPartitssp[$iiisp] = 0; }

// if ($aRegidorsPartitssp[$iiisp] == 0) {
// $diputadosprovinciales = NULL; } else { $diputadosprovinciales = $aRegidorsPartitssp[$iiisp];}


// echo $diputadosprovinciales;

if ($xdistrito === 2 or $xdistrito === 3 or $xdistrito === 13 OR $xdistrito===19) {

if ($provincialessp == 0) {
$provincialessp = NULL; } 

echo $provincialessp;
} else {

echo "";} 
echo "</b></font>";


echo "</td></tr>\n";


$iiisp++;

}
echo "</table>";

echo "</div>";}

$xdistrito++;
}



?>
<div id ="tablanacion" style="display:none">

<h1>Total del país</h1>

<iframe src="chart_nacion.php" width="520px" height="120px" frameborder="0" scrolling="no"></iframe>


<?




// DONUT SENADORES



?>		
<table align="center" width="400px"><tr>
<td align="center"><iframe src="donut.php" height="100" width="180" frameborder="0" marginheight="0" marginwidth="0" scrolling="no"></iframe></td>
<td align="center"><iframe src="donut_s.php" height="100" width="180" frameborder="0" marginheight="0" marginwidth="0" scrolling="no"></iframe></td>
</tr>
<tr>
<td align="center"><a class="fancybox fancybox.iframe" href="general_n.php?c=3" target="_blank"><font color="Blue">127 Diputados Nacionales</font></a> <a class="fancybox fancybox.iframe" href="general_n_paso.php?c=3" target="_blank" title="Variación"><font color="Blue"><b><small>(+ & -)</small></b></font></a></td>
<td align="center"><a class="fancybox fancybox.iframe" href="general_n.php?c=2" target="_blank"><font color="Blue">24 Senadores Nacionales</font></a> <a class="fancybox fancybox.iframe" href="general_n_paso.php?c=2" target="_blank" title="Variación"><font color="Blue"><b><small>(+ & -)</small></b></font></a></td></tr>
<!--<td align="center"><a class="fancybox fancybox.iframe" href="general_n_paso.php?c=3" target="_blank"><font color="Blue"><small>Variación</small></font></a></td>
<td align="center"><a class="fancybox fancybox.iframe" href="general_n_paso.php?c=2" target="_blank"><font color="Blue"><small>Variación</small></font></a></td>-->
</tr></table>
<table width="520px" border="0">
<?
echo "<tr bgcolor=\"#F0F0F0\"><td align=\"center\"><small><b>Agrupaciones</b></small></td><td align=\"center\"><small><b>Votos<br>%</b></small></td><td align=\"center\"><small><b>Diputados</b></small></td><td align=\"center\"><small><b>Senadores</b></small></td></tr>";

$resultlegi = mysql_query("SELECT general_legislatura.sigla, SUM(general_legislatura.cargos) AS cargostotales, SUM(general_legislatura.senadores) AS senadorestotales, SUM(general_legislatura.cuantia)/20598966*100 AS porcentaje, general_legislatura.color, general_legislatura.cartograma, general_legislatura.acronimo FROM general_legislatura GROUP BY general_legislatura.sigla ORDER BY SUM(general_legislatura.cuantia)/20598966*100 DESC");
$celdat = 0;
$ixt = 0;

while ($row = mysql_fetch_array($resultlegi)) {

$siglas = $row["sigla"];
$cargos = $row["cargostotales"];
$senadores = $row["senadorestotales"];
$porcentaje = $row["porcentaje"];
$porcentajepct = number_format($porcentaje, 2, ',', ' ');
$color = $row["color"];
$cartograma = $row["cartograma"];
$acronimo = $row["acronimo"];

if ($celdat === 1) {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'f0f0f0');\" bgcolor=\"#F0F0F0\"><td>";
$celdat = 0;} else {
echo "<tr onMouseOver= \"uno(this,'ffffcc');\" onMouseOut=\"dos(this,'ffffff');\" bgcolor=\"#FFFFFF\"><td>";
$celdat++;}

if ($ixt === 0) {
echo "<font size=\"4\">";
echo "<a class=\"fancybox fancybox.iframe\" href=\"micromaps/index.php?x=$cartograma\" target=\"_blank\" title=\"Micromaps\">";
echo "<font color = \"$color\"><b>";
echo $siglas;
echo "</a></b></font></font>";
echo " <a class=\"fancybox fancybox.iframe\" href =\"detalle.php?a=$acronimo\" target=\"_blank\" title=\"Detalle\">(?)</a></td><td align=\"right\">";
echo "<font size=\"4\">";
echo "<font color = \"$color\">";
echo $porcentajepct;
echo "</font></font>";}


if ($ixt === 1) {
echo "<font size=\"3\">";
echo "<a class=\"fancybox fancybox.iframe\" href=\"micromaps/index.php?x=$cartograma\" target=\"_blank\" title=\"Micromaps\">";
echo "<font color = \"$color\"><b>";
echo $siglas;
echo "</a></b></font></font>";
echo " <a class=\"fancybox fancybox.iframe\" href =\"detalle.php?a=$acronimo\" target=\"_blank\" title=\"Detalle\">(?)</a></td><td align=\"right\">";
echo "<font size=\"3\">";
echo "<font color = \"$color\">";
echo $porcentajepct;
echo "</font></font>";}


if ($ixt > 1) {

if ($cartograma === "") {
echo "";
} else {
echo "<a class=\"fancybox fancybox.iframe\" href=\"micromaps/index.php?x=$cartograma\" target=\"_blank\" title=\"Micromaps\">";}
echo "<font color = \"$color\"><b>";
echo $siglas;
echo "</b></font>";
echo " <a class=\"fancybox fancybox.iframe\" href =\"detalle.php?a=$acronimo\" target=\"_blank\" title=\"Detalle\">(?)</a></td><td align=\"right\">";
echo "<font color = \"$color\">";
echo $porcentajepct;
echo "</font>";}


echo "</td><td align=\"right\">";

echo "<font color = \"$color\"><b>";
echo $cargos;
echo "</b></font>";
echo "</td><td align=\"right\">";
echo "<font color = \"$color\"><b>";
echo $senadores;
echo "</b></font>";
echo "</td></tr>";

$ixt++;
}
echo "</table>";
?>
<a class="fancybox fancybox.iframe" href="congreso.html" target="_blank"><img src="img/congreso.gif">
<p>Las nuevas Cámaras del Congreso<p></a>
<p><small>Agregados calculados a partir de la proyección del peso electoral de cada distrito</small></p>
<p><small>Porcentajes calculados sobre votos positivos válidamente emitidos</small></p>

</div>


</td></tr></table>



<br>
<p><small>Esta aplicación calcula la asignación de Diputados y Senadores por agrupación a partir de datos actualizados del <a href="http://www.resultados.gob.ar/inicio.htm" target="_blank">escrutinio provisorio</a>.<br>Uso exclusivo a propósitos educativos y de interés general. Prohibida su reproducción sin permiso del autor.<br>Copyright Andy Tow 2013 - Todos los derechos reservados.</small></p><br>

</div>
<iframe src="http://andytow.com/blog/footer.html" align="center" height="26" width="1172" frameborder="0" marginheight="0" marginwidth=0 scrolling="no"></iframe>

</div>


<div class="cornerbot">&nbsp;</div>
</td></tr></table>
</div>
<!--</div>-->

<script type="text/javascript" src="show.js"></script>
<script>

function showcartograma()
{
var selectdip = document.getElementById('selectdip');
selectdip.style.display = "none";
var selectsen = document.getElementById('selectsen');
selectsen.style.display = "block";
var selectdis = document.getElementById('selectdis');
selectdis.style.display = "none";
var selectcarto = document.getElementById('cartograma');
selectcarto.style.display = "block";
var selectcontrol = document.getElementById('control');
selectcontrol.style.display = "block";
var selectdistritos = document.getElementById('distritos');
selectdistritos.style.display = "none";
var selectmapa = document.getElementById('tablaprovincias');
selectmapa.style.display = "none";
d3.select('body').selectAll('div.tooltip').remove();
} 

function showmapa()
{
var selectdip = document.getElementById('selectdip');
selectdip.style.display = "block";
var selectsen = document.getElementById('selectsen');
selectsen.style.display = "none";
var selectdis = document.getElementById('selectdis');
selectdis.style.display = "none";
var selectcarto = document.getElementById('cartograma');
selectcarto.style.display = "none";
var selectcontrol = document.getElementById('control');
selectcontrol.style.display = "none";
var selectdistritos = document.getElementById('distritos');
selectdistritos.style.display = "none";
var selectmapa = document.getElementById('tablaprovincias');
selectmapa.style.display = "block";
	
} 

function showdistritos()
{
var selectdip = document.getElementById('selectdip');
selectdip.style.display = "none";
var selectsen = document.getElementById('selectsen');
selectsen.style.display = "none";
var selectdis = document.getElementById('selectdis');
selectdis.style.display = "block";
var selectcarto = document.getElementById('cartograma');
selectcarto.style.display = "none";
var selectcontrol = document.getElementById('control');
selectcontrol.style.display = "none";
var selectdistritos = document.getElementById('distritos');
selectdistritos.style.display = "block";
var selectmapa = document.getElementById('tablaprovincias');
selectmapa.style.display = "none";
d3.select('body').selectAll('div.tooltip').remove();
} 

	$(document).ready(function() {
		$(".fancybox").fancybox();
	});

function mostrarRefresh()
{
var Refresh = document.getElementById('div_refresh');
Refresh.style.display = "block";
} 
 setTimeout('mostrarRefresh()',360000);
</script>	


<div id="control" style="position:absolute;left:362px; top:916px; border:0; z-index:1001; display:none">
<table border="0" width="260px">
<tr bgcolor="#f7f7f7"><td align="center"><small>
<a class="about" href="cartograma/index.html#" target="cartograma">RESTAURAR</a></small>
<br><small><a class="about" href="cartograma/index.html#ELEC/106" target="cartograma">POBLACION (2010)</a></small>
<?

$resultespacios = mysql_query("SELECT general_legislatura.sigla, general_legislatura.cartogramadash, general_legislatura.color FROM general_legislatura WHERE cartogramadash <> '' GROUP BY sigla ORDER BY SUM(cuantia) DESC");


while ($row = mysql_fetch_array($resultespacios)) {

$siglaespacio = $row["sigla"];
$colorespacio = $row["color"];
$cartogramaespacio = $row["cartogramadash"];

echo "<br><small><a class=\"about\" href=\"cartograma/index.html#$cartogramaespacio";
echo "/$xcarto\" target=\"cartograma\"><font color=\"$colorespacio\">$siglaespacio</font></a></small>";


}

?>
</td></tr>
</table>
</div>
</body>
</html>


