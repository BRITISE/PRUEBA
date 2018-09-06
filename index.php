<!--#include file="funcion/funcion.inc"-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BBVA Bancomer</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
<style type="text/css">

    </style>

 <script src="jQuery-Mapael-2.0.0/js/jquery.min.js" charset="utf-8"></script>
    <script src="jQuery-Mapael-2.0.0/js/jquery.mousewheel.min.js" charset="utf-8"></script>
    <script src="jQuery-Mapael-2.0.0/js/raphael-min.js" charset="utf-8"></script>
    <script src="jQuery-Mapael-2.0.0/js/jquery.mapael.js" charset="utf-8"></script>
    <script src="jQuery-Mapael-2.0.0/js/maps/france_departments.js" charset="utf-8"></script>
    <script src="jQuery-Mapael-2.0.0/js/maps/world_countries.js" charset="utf-8"></script>
    <script src="jQuery-Mapael-2.0.0/js/maps/usa_states.js" charset="utf-8"></script>



    </script>
  <script type="text/javascript">
         $(document).ready(function () {
            $(".mapcontainer").mapael({
                map: {
                    name: "usa_states",
                    defaultArea: {
                        attrs: {
                            stroke: "#fff",
                            "stroke-width": 1
                        },
                        attrsHover: {

                            "stroke-width": 2
                        }
                    }
                },
                legend: {
                    area: {
                        title: "C A J E R O S",
                        slices: [
                              {
                                  min: 76,
                                  max: 100,
                                  attrs: {
                                      fill: "#F34747"
                                  },
                                  label: "Indice Alto de Cajeros FS"
                              },
                            {
                                max: 75.99,
                                attrs: {

                                    fill: "#5490D4"
                                },
                                label: "Indice Normal de Cajeros FS"
                            }
                          
							
                           
                        ]
                    }
                },
                areas: {
                    "AGUASCALIENTES": {
                        value: " <%=funciones.Porcentaje("AGUASCALIENTES")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Aguas Calientes</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("AGUASCALIENTES")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("AGUASCALIENTES")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("AGUASCALIENTES")%> </p><P> PORCENTAJE FS: <%=funciones.Porcentaje("AGUASCALIENTES")%> %</P>" }
                    },
                    "BCN": {
                        value: "<%=funciones.Porcentaje("BAJA CALIFORNIA")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Baja California Norte</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("BAJA CALIFORNIA")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("BAJA CALIFORNIA")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("BAJA CALIFORNIA")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("BAJA CALIFORNIA")%> %</P>" }
                    },
                    "BCS": {
                        value: "<%=funciones.Porcentaje("BAJA CALIFORNIA SUR")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Baja California Sur</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("BAJA CALIFORNIA SUR")%><p>ATMS FUERA : <%=funciones.FueraServEdo("BAJA CALIFORNIA SUR")%></p><p>ATMS EN SERVICIO :<%=funciones.TotalEdo("BAJA CALIFORNIA SUR")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("BAJA CALIFORNIA SUR")%> %</P>" }
                    },
                    "CAMPECHE": {
                        value: "<%=funciones.Porcentaje("CAMPECHE")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Campeche</span><p>ATM's Totales : <%=funciones.TotalEdo("CAMPECHE")%><br /><p>ATMS FUERA : <%=funciones.FueraServEdo("CAMPECHE")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("CAMPECHE")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("CAMPECHE")%> %</P>" }
                    },
                    "COAHUILA": {
                        value: "<%=funciones.Porcentaje("COAHUILA")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Coahuila</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("COAHUILA")%><p>ATMS FUERA : <%=funciones.FueraServEdo("COAHUILA")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("COAHUILA")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("COAHUILA")%> %</P>" }
                    },
                    "CHIAPAS": {
                        value: "<%=funciones.Porcentaje("CHIAPAS")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Chiapas/span><br /><p>ATM's Totales : <%=funciones.TotalEdo("CHIAPAS")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("CHIAPAS")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("CHIAPAS")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("CHIAPAS")%> %</P>" }
                    },
                    "HIDALGO": {
                        value: "<%=funciones.Porcentaje("HIDALGO")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Hidalgo/span><br /><p>ATM's Totales : <%=funciones.TotalEdo("HIDALGO")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("HIDALGO")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("HIDALGO")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("HIDALGO")%> %</P>" }
                        },
                    "CHIHUAHUA": {
                        value: "<%=funciones.Porcentaje("CHIHUAHUA")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Chihuaha</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("CHIHUAHUA")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("CHIHUAHUA")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("CHIHUAHUA")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("CHIHUAHUA")%> %</P>" }
                    },
                    "CIUDADDEMEXICO": {
                        value: "<%=funciones.Porcentaje("DISTRITO FEDERAL")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">CDMexico</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("DISTRITO FEDERAL")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("DISTRITO FEDERAL")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("DISTRITO FEDERAL")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("DISTRITO FEDERAL")%> %</P>" }
                    },
                    "COLIMA": {
                        value: "<%=funciones.Porcentaje("COLIMA")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Colima</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("COLIMA")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("COLIMA")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("COLIMA")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("COLIMA")%> %</P>" }
                        },
                    "DURANGO": {
                        value: "<%=funciones.Porcentaje("DURANGO")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Durango</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("DURANGO")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("DURANGO")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("DURANGO")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("DURANGO")%> %</P>" }
                    },
                    "GUANAJUATO": {
                        value: "<%=funciones.Porcentaje("GUANAJUATO")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\"Guanajuato</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("GUANAJUATO")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("GUANAJUATO")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("GUANAJUATO")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("GUANAJUATO")%> %</P>" }
                    },
                    "GUERRERO": {
                        value: "<%=funciones.Porcentaje("GUERRERO")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Guerrero</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("GUERRERO")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("GUERRERO")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("GUERRERO")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("GUERRERO")%> %</P>" }
                    },
                    "JALISCO": {
                        value: "<%=funciones.Porcentaje("JALISCO")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Jalisco</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("JALISCO")%><p>ATMS FUERA : <%=funciones.FueraServEdo("JALISCO")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("JALISCO")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("JALISCO")%> %</P>" }
                    },
                    "MEXICO": {
                        value: "<%=funciones.Porcentaje("ESTADO DE MEXICO")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Edo. México</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("ESTADO DE MEXICO")%><p>ATMS FUERA : <%=funciones.FueraServEdo("ESTADO DE MEXICO")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("ESTADO DE MEXICO")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("ESTADO DE MEXICO")%> %</P>" }
                    },
                    "MICHOACAN": {
                        value: "<%=funciones.Porcentaje("MICHOACAN")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Michoacan</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("MICHOACAN")%><p>ATMS FUERA : <%=funciones.FueraServEdo("MICHOACAN")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("MICHOACAN")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("MICHOACAN")%> %</P>" }
                    },
                    "NUEVOLEON": {
                        value: "<%=funciones.Porcentaje("NUEVO LEON")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Nuevo Leon</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("NUEVO LEON")%><p>ATMS FUERA : <%=funciones.FueraServEdo("NUEVO LEON")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("NUEVO LEON")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("NUEVO LEON")%> %</P>" }
                     },
                    "MORELOS": {
                        value: "<%=funciones.Porcentaje("MORELOS")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Morelos</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("MORELOS")%><p>ATMS FUERA : <%=funciones.FueraServEdo("MORELOS")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("MORELOS")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("MORELOS")%> %</P>" }
                    },
                    "NAYARIT": {
                        value: "<%=funciones.Porcentaje("NAYARIT")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\"Nayarit</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("NAYARIT")%><p>ATMS FUERA : <%=funciones.FueraServEdo("NAYARIT")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("NAYARIT")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("NAYARIT")%> %</P>" }
                    },
                 
                    "OAXACA": {
                        value: "<%=funciones.Porcentaje("OAXACA")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Oaxaca</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("OAXACA")%><p>ATMS FUERA : <%=funciones.FueraServEdo("OAXACA")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("OAXACA")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("OAXACA")%> %</P>" }
                    },
                    "PUEBLA": {
                        value: "<%=funciones.Porcentaje("PUEBLA")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Puebla</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("PUEBLA")%><p>ATMS FUERA : <%=funciones.FueraServEdo("PUEBLA")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("PUEBLA")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("PUEBLA")%> %</P>" }
                    },
                    "QUERETARO": {
                        value: "<%=funciones.Porcentaje("QUERETARO")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Queretaro</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("QUERETARO")%><p>ATMS FUERA : <%=funciones.FueraServEdo("QUERETARO")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("QUERETARO")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("QUERETARO")%> %</P>" }
                    },
                    "QUINTANAROO": {
                        value: "<%=funciones.Porcentaje("QUINTANA ROO")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Quintana Roo</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("QUINTANA ROO")%><p>ATMS FUERA : <%=funciones.FueraServEdo("QUINTANA ROO")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("QUINTANA ROO")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("QUINTANA ROO")%> %</P>" }
                    },
                    "SANLUISPOTOSI": {
                        value: "<%=funciones.Porcentaje("SAN LUIS POTOSI")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">San Luis Potosi</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("SAN LUIS POTOSI")%><p>ATMS FUERA : <%=funciones.FueraServEdo("SAN LUIS POTOSI")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("SAN LUIS POTOSI")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("SAN LUIS POTOSI")%> %</P>" }
                    },
                    "SINALOA": {
                        value: "<%=funciones.Porcentaje("SINALOA")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Sinaloa</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("SINALOA")%><p>ATMS FUERA : <%=funciones.FueraServEdo("SINALOA")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("SINALOA")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("SINALOA")%> %</P>" }
                    },
                    "SONORA": {
                        value:" <%=funciones.Porcentaje("sonora")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">SONORA</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("sonora")%></p><p>ATMS FUERA : <%=funciones.FueraServEdo("sonora")%></p><p>ATMS EN SERVICIO : <%=funciones.EnServicio("sonora")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("sonora")%> %</P>" }
                    },
                    "TABASCO": {
                        value: "<%=funciones.Porcentaje("TABASCO")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Tabasco</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("TABASCO")%><p>ATMS FUERA : <%=funciones.FueraServEdo("TABASCO")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("TABASCO")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("TABASCO")%> %</P>" }
                    },
                    "TAMAULIPAS": {
                        value: "<%=funciones.Porcentaje("TAMAULIPAS")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Tamaulipas</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("TAMAULIPAS")%><p>ATMS FUERA : <%=funciones.FueraServEdo("TAMAULIPAS")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("TAMAULIPAS")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("TAMAULIPAS")%> %</P>" }
                    },
                    "TLAXCALA": {
                        value: "<%=funciones.Porcentaje("TLAXCALA")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Tlaxcala</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("TLAXCALA")%><p>ATMS FUERA : <%=funciones.FueraServEdo("TLAXCALA")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("TLAXCALA")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("TLAXCALA")%> %</P>" }
                    },
                    "VERACRUZ": {
                        value: "<%=funciones.Porcentaje("VERACRUZ")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Veracruz</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("VERACRUZ")%><p>ATMS FUERA : <%=funciones.FueraServEdo("VERACRUZ")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("VERACRUZ")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("VERACRUZ")%> %</P>" }
                    },
                    "YUCATAN": {
                        value: "<%=funciones.Porcentaje("YUCATAN")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\"Yucatan</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("YUCATAN")%><p>ATMS FUERA : <%=funciones.FueraServEdo("YUCATAN")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("YUCATAN")%><P> PORCENTAJE FS: <%=funciones.Porcentaje("YUCATAN")%> %</P></p>" }
                    },
                    "ZACATECAS": {
                        value: "<%=funciones.Porcentaje("ZACATECAS")%>",
                        href: "#",
                        tooltip: { content: "<span style=\"font-weight:bold;\">Zacatecas</span><br /><p>ATM's Totales : <%=funciones.TotalEdo("ZACATECAS")%><p>ATMS FUERA : <%=funciones.FueraServEdo("ZACATECAS")%></p><p>ATMS EN SERVICIO : <%=funciones.TotalEdo("ZACATECAS")%></p><P> PORCENTAJE FS: <%=funciones.Porcentaje("ZACATECAS")%> %</P>" }
                    }

                }
            });
		 }
    </script>
	  <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
</head>

<body>
    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Grupo SCANDA</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="tel:+902222222222"><i class="fa fa-phone"></i> +52 5555 5555</a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="index.html" class="navbar-brand">
					<img src="img/logo.png" alt="Post">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
				<!--<form action="checkatm.php" method="post" >-->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
					
		<!--------------------------------------------INICIA BUSCAR ATM----------------------------------------------------------------------------------->
		<!-- <FORM METHOD='POST' ACTION='index.php'>-->
		 <li class="active" ><br><input placeholder="Buscar ATM " name="Buscar" id="Buscar"type="text" Class="form-control" Height="36px" Width="134px" ></li>
				<li ><br>
		<button type="submit" Class="btn-lg btn-primary"  Height="20px" Width="20px"  pading="4px 9px"id="buscaratm" onclick="function()"><span class="glyphicon glyphicon-search" Height="value" pading="4px 9px"></span></button></input></li>
		<!--</form>-->
         <!-------------------------------  TERMINA BUSCAR ATM-------------------------------------------------------------------------------------------->
					<li class="active"><a href="index.html" title="">INICIO</a></li>
                        <li class="dropdown">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tipo de Autoservicio <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="">Bancas</a></li>
                                <li><a href="#" title="">Bancas Dispensador</a></li>
                                <li><a href="#" title="">Dispensador: Marca y modelo</a></li>
                                <li><a href="#" title="">Practicaja: Marca y modelo</a></li>
                                <li><a href="#" title=""> Tipo Local</a></li>
                                <li><a href="#" title=""> Plataforma</a></li>
                                <li><a href="#" title=""> Enlace</a></li>
                                <li><a href="#" title=""> Celula</a></li>
                                <li><a href="#" title=""> Ups</a></li>
                                <li><a href="#" title=""> Idc</a></li>
                                <li><a href="#" title=""> Etv</a></li>
                                <li><a href="#" title=""> Division</a></li>
                                <li><a href="#" title=""> Division Dispensador</a></li>
                                <li><a href="#" title=""> Division Practicaja</a></li>
                                                       
                            </ul>
                        </li>
                     
                     
                        <li><a href="login.php" title="">SALIR</a></li>

                                     <i><label for='id_accomodation' ><asp:TextBox ID="TextBox1" runat="server" Text="" CssClass="form-control" Height="36px" Width="134px"></asp:TextBox > </label></i><i><label for='id_accomodation' ><asp:LinkButton ID="LinkButton1" runat="server" Text="<span class='glyphicon glyphicon-search' Height='30px' Width='30px' pading='1px  5px'></span>" CssClass="btn-lg btn-primary"  onclick="linkButton1_Click"/></label></i>
                                <!--INICI LOGIN -->
                          
                                <!--TERMINA LOGIN -->

            <!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class='panel panel-primary dialog-panel'>
			 <div class="modal-header"  style="background-color: #337ab7;border-color:#2e6da4;color:#fff;" >
                
				 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3>Buscar por: A T M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              	<button type="submit" Class="btn-lg btn-primary"  Height="34px" Width="77px" data-toggle="tooltip" title="Descargar Archivo BUC"><span class="glyphicon glyphicon-download-alt" ></span></button>
        
                    </h3>
               
			</div>

			
                <div class="modal-body" >
                    <div class='form-horizontal' role='form'>
                

    <form class=" form-inline">
        <div class="active" align="center">
		   <!-- <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-step-backward" Height="value" pading="4px 9px"></span></button>
		    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-backward" Height="value" pading="4px 9px"></span></button>-->
            <input type="text" class=" form-control"   style="width:100px" align="center" id="bbatm" name="bbatm"/>
            <button type="submit" class="btn btn-primary"  onclick="function()" id="buscaratm"><span class="glyphicon glyphicon-search" Height="value" pading="4px 9px"></span></button>
			<!--<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-forward" Height="value" pading="4px 9px"></span></button>
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-step-forward" Height="value" pading="4px 9px"></span></button>-->
        </div>
    </form>
</div>

  <hr/ size="3" width="80%" size="2px">  

                        <div >
                            <div style="Width: 280px" id="cajon1" >
							
                                <table ID="Table1"   Caption="Datos del Equipo" Height="16px" Width="280px" CellPadding="20" CellSpacing="20"  class="group">
								<caption><h4>Datos del Equipo</h4></caption>
                                    <tr  ID="tr1" border="2px color: #337AB7 " >
                                        <td ID="td1" Text="Año de Adquisicion: " >Año de Adquisicion:</td>
                                        <td ID="td2" ><input class="form-control" id="año_ad" type="text"  style="width:75px" align="center"/>  </td>
                                    </tr>

                                    <tr ID="tr2" runat="server">
                                        <td ID="td3" Text="ID Anterior: " >ID Anterior:</td>
                                        <td ID="td4" ><input class="form-control" id="Text1" type="text" style="width:75px" />  </td>
                                    </tr>

                                    <tr ID="tr3" runat="server">
                                        <td ID="td5" Text="No. Serie: " HorizontalAlign="Right">No. Serie:</td>
                                        <td ID="td6" Width="20px" ><input class="form-control" id="Text3" type="text" style="width:75px"  />  </td>
                                    </tr>

                                    <tr ID="tr4" runat="server">
                                        <td ID="td7" Text="Inventario Staff: " HorizontalAlign="Right">Inventario Staff:</td>
                                        <td ID="td8" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text4" type="text" style="width:75px"  />  </td>
                                    </tr>

                                    <tr ID="tr5" runat="server">
                                        <td ID="td9" Text="Status ATM: " HorizontalAlign="Right">Status ATM:</td>
                                        <td ID="td10" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text5" type="text" style="width:75px"  />  </td>
                                    </tr>


                                    <tr ID="tr6" runat="server">
                                        <td ID="td11" Text="1ra. Instalacion: " HorizontalAlign="Right">1ra. Instalacion:</td>
                                        <td ID="td12" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text6" type="text" style="width:75px"  />  </td>
                                    </tr>
                                </table>
                            </div>


                            <div style="Width: 280px" id="cajon2">
                                <Table ID="Table2" Class="group" Height="16px" Width="280px" ><caption><h4>Datos de la Banca</h4></caption>
                                    <tr ID="tr7" runat="server">
                                        <td ID="td13" >Banca:</td>
                                        <td ID="td14" HorizontalAlign="Center"><input class="form-control" id="Text7" type="text"  style="width:75px"/>  </td>
                                    </tr>
                                    <tr ID="tr8" runat="server">
                                        <td ID="td15">División:</td>
                                        <td ID="td16" HorizontalAlign="Center"><input class="form-control" id="Text8" type="text" style="width:75px" />  </td>
                                    </tr>
                                    <tr ID="tr9" runat="server">
                                        <td ID="td17" >Zona:</td>
                                        <td ID="td18" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text9" type="text" style="width:75px"  />  </td>
                                    </tr>
                                    <tr ID="tr10" runat="server">
                                        <td ID="td19" >CR:</td>
                                        <td ID="td20" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text10" type="text" style="width:75px"  />  </td>
                                    </tr>
                                    <tr ID="tr11" runat="server">
                                        <td ID="td21">Nominas</td>
                                        <td ID="td22" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text11" type="text" style="width:75px"  />  </td>
                                    </tr>
                                    <tr ID="tr12" runat="server">
                                        <td ID="td23" >Proyecto:</td>
                                        <td ID="td24" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text12" type="text" style="width:75px"  />  </td>
                                    </tr>
                                </Table>
                                                      </div>
                            
                            <div style="Width: 280px" id="cajon3">
                                <Table ID="Table3" class="group" ><caption><h4>Herramientas</h4></caption>
                                    <tr ID="tr13" runat="server">
                                        <td ID="td25" >SEP:</td>
                                        <td ID="td26" HorizontalAlign="Center"><input class="form-control" id="Text13" type="text"  style="width:75px"/>  </td>
                                    </tr>
                                    <tr ID="tr14" runat="server">
                                        <td ID="td27" Text="CHECKER: " HorizontalAlign="right">CHECKER:</td>
                                        <td ID="td28" HorizontalAlign="Center"><input class="form-control" id="Text14" type="text" style="width:75px" />  </td>
                                    </tr>
                                    <tr ID="tr15" runat="server">
                                        <td ID="td29" Text="RKL: " HorizontalAlign="Right">RKL:</td>
                                        <td ID="td30" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text15" type="text" style="width:75px"  />  </td>
                                    </tr>

                                </Table>
                            </div>
                           </div>
            

                <div class='panel-body'>
                    <div class='form-horizontal' role='form'>
                         <br />
                        <br />
                        <br />
                        <br />
                          <div  id="Div1">
                             <Table ID="Table4" class="group"><caption><h4>Datos del Equipo de Autoservicio</h4></caption>
                                    <tr ID="tr16" runat="server">
                                        <td ID="td31" HorizontalAlign="Right" >Dirección:&nbsp;&nbsp;</td>
                                        <td ID="td32" colspan="3" style="width:570px"><input  class="form-control" id="Text16" type="text"  style="width:570px"/>  </td>
										<td ID="td33" >No.Exterior:</td>
										<td ID="td34" Align="right" ><input class="form-control" id="Text17" type="text"  style="width:100px"/>  </td>
										
									</tr>
                                    <tr ID="tr17" runat="server">
                                        <td ID="td35" Align="left" >Calle:</td>
                                        <td ID="td36"  ><input colspan="2"class="form-control" id="Text19" type="text19" style="width:240px" />  </td>
										<td ID="td37"  >Colonia:</td>
                                        <td ID="td38"  ><input colspan="2" class="form-control" id="Text20" type="text" style="width:240px" />  </td>
										<td ID="td39" >Local:</td>
                                        <td ID="td40" Align="right"><input class="form-control" id="Text18" type="text" style="width:100px" />  </td>
                                    </tr>
                                    <tr ID="tr18" runat="server">
                                        <td ID="td41"  >Estado:</td>
                                        <td ID="td42" Width="20px" HorizontalAlign="Center"  ><input colspan="2" class="form-control" id="Text21" type="text" style="width:240px"  />  </td>
										<td ID="td43" >Ciudad:</td>
                                        <td ID="td44" ><input class="form-control"  colspan="2"id="Text22" type="text" style="width:240px" />  </td>
										<td ID="td45"  >Institución:</td>
                                        <td ID="td46" ><input class="form-control" id="Text23" type="text" style="width:100px" />  </td>
										
                                    </tr>
                                    <tr ID="tr19" runat="server">
										<td ID="td47" >Grupo:</td>
                                        <td ID="td48" ><input class="form-control" id="Text24" type="text" style="width:240px" />  </td>
                                        <td ID="td49" >Georeferencia:</td>
                                        <td ID="td50" ><input class="form-control" id="Text25" type="text" style="width:240px" />  </td>
										<td ID="td52" >ATM en site:</td>
                                        <td ID="td53" ><input class="form-control" id="Text26" type="text" style="width:100px" />  </td>
									                                    </tr>
                                    <tr ID="tr20" runat="server">
                                        <td ID="td54" >Giro:</td>
                                        <td ID="td55" ><input class="form-control" id="Text27" type="text" style="width:240px" />  </td>
										 <td ID="td56" >Sitio:</td>
                                        <td ID="td57" ><input class="form-control" id="Text28" type="text" style="width:240px" />  </td>
										 <td ID="td58" >Lat. Capital:</td>
                                        <td ID="td59" ><input class="form-control" id="Text29" type="text" style="width:100px" />  </td>
                                    </tr>
                                         <tr ID="tr21" runat="server">
                                        <td ID="td60" >Log. Capital:</td>
                                        <td ID="td61" ><input class="form-control" id="Text30" type="text" style="width:240px" />  </td>
										 <td ID="td62" >Distancia Capital:</td>
                                        <td ID="td63" ><input class="form-control" id="Text31" type="text" style="width:240px" />  </td>
										 <td ID="td64" >CP:</td>
                                        <td ID="td65" ><input class="form-control" id="Text32" type="text" style="width:100px" />  </td>
                                    </tr>
                                </Table>
                        </div>
                    </div>
				</div>
				
				 <div class='panel-body'>
                    <div class='form-horizontal' role='form'>
                      
                          <div  id="Div3">
                             <Table ID="Table6" class="group"><caption><h4>Especificaciones Tecnicas</h4></caption>
                                    <tr ID="tr22" runat="server">
                                        <td ID="td66" >Fecha Instalacion:</td>
                                        <td ID="td67" ><input class="form-control" id="Text34" type="text" style="width:120px" />  </td>
										<td ID="td68" >Marca:</td>
                                        <td ID="td69" ><input class="form-control" id="Text35" type="text" style="width:120px" />  </td>
										<td ID="td70" >Modelo:</td>
                                        <td ID="td71" ><input class="form-control" id="Text36" type="text" style="width:120px" />  </td>
										<td ID="td72" >Plataforma:</td>
                                        <td ID="td73" ><input class="form-control" id="Text37" type="text" style="width:120px" />  </td>
									</tr>
									 <tr ID="tr23" runat="server">
                                        <td ID="td74" >Tipo Autoservicio:</td>
                                        <td ID="td75" ><input class="form-control" id="Text38" type="text" style="width:120px" />  </td>
										<td ID="td76" >Vision Multivendor:</td>
                                        <td ID="td77" ><input class="form-control" id="Text39" type="text" style="width:120px" />  </td>
										<td ID="td78" >Configuración:</td>
                                        <td ID="td79" ><input class="form-control" id="Text40" type="text" style="width:120px" />  </td>
										<td ID="td80" >Carga:</td>
                                        <td ID="td81" ><input class="form-control" id="Text41" type="text" style="width:120px" />  </td>
									</tr>
									<tr ID="tr24" runat="server">
                                        <td ID="td82" >IP:</td>
                                        <td ID="td83" ><input class="form-control" id="Text42" type="text" style="width:120px" />  </td>
										<td ID="td84" >Monitor:</td>
                                        <td ID="td85" ><input class="form-control" id="Text43" type="text" style="width:120px" />  </td>
										<td ID="td86" >Garantia:</td>
                                        <td ID="td87" ><input class="form-control" id="Text44" type="text" style="width:120px" />  </td>
										<td ID="td88" >CSOS:</td>
                                        <td ID="td89" ><input class="form-control" id="Text45" type="text" style="width:120px" />  </td>
									</tr>
									<tr ID="tr25" runat="server">
                                        <td ID="td90" >Enlace:</td>
                                        <td ID="td91" ><input class="form-control" id="Text48" type="text" style="width:120px" />  </td>
										<td ID="td92" >ESQ:</td>
                                        <td ID="td93" ><input class="form-control" id="Text49" type="text" style="width:120px" />  </td>
										<td ID="td94" >Supresor de Picos:</td>
                                        <td ID="td95" ><input class="form-control" id="Text50" type="text" style="width:120px" />  </td>
										<td ID="td96" >CDO:</td>
                                        <td ID="td97" ><input class="form-control" id="Text51" type="text" style="width:120px" />  </td>
									</tr>
									<tr ID="tr26" runat="server">
                                        <td ID="td98" >UPS:</td>
                                        <td ID="td99" ><input class="form-control" id="Text52" type="text" style="width:120px" />  </td>
										<td ID="td100" >Kits Bateria Extra:</td>
                                        <td ID="td101" ><input class="form-control" id="Text53" type="text" style="width:120px" />  </td>
										<td ID="td102" >Telecontrol:</td>
                                        <td ID="td103" ><input class="form-control" id="Text54" type="text" style="width:120px" />  </td>
										<td ID="td104" >Fecha Sup Picos:</td>
                                        <td ID="td105" ><input class="form-control" id="Text55" type="text" style="width:120px" />  </td>
									</tr>
									<tr ID="tr27" runat="server">
                                        <td ID="td106" >Fecha Incio Instalacion:</td>
                                        <td ID="td107" ><input class="form-control" id="Text56" type="text" style="width:120px" />  </td>
										<td ID="td108" >Fecha UPS:</td>
                                        <td ID="td109" ><input class="form-control" id="Text57" type="text" style="width:120px" />  </td>
										<td ID="td110" >Sistema Operativo:</td>
                                        <td ID="td111" ><input class="form-control" id="Text58" type="text" style="width:120px" />  </td>
										<td ID="td112" >Referencia Telmex:</td>
                                        <td ID="td113" ><input class="form-control" id="Text59" type="text" style="width:120spx" />  </td>
									</tr>
                                   
                                </Table>
                        </div>
                    </div>
				</div>
				
				
				
				 <div class='panel-body'>
                    <div class='form-horizontal' role='form'>
                      
                          <div  id="Div3">
                             <Table ID="Table6" class="group"><caption><h4>Especificaciones para el Acceso</h4></caption>
                                    <tr ID="tr28" runat="server">
                                        <td ID="td114" >ID identificador:</td>
                                        <td ID="td115" ><input class="form-control" id="Text60" type="text" style="width:200px" />  </td>
										<td ID="td116" >Acuerdo Acceso:</td>
                                        <td ID="td117" ><input class="form-control" id="Text61" type="text" style="width:200px" />  </td>
										<td ID="td118" >Ubicación:</td>
                                        <td ID="td119" ><input class="form-control" id="Text62" type="text" style="width:200px" />  </td>
										
									</tr>
									 <tr ID="tr29" runat="server">
									    <td ID="td120" >Tipo Sitio:</td>
                                        <td ID="td121" ><input class="form-control" id="Text63" type="text" style="width:200px" />  </td>
                                        <td ID="td122" >Celula:</td>
                                        <td ID="td123" ><input class="form-control" id="Text64" type="text" style="width:200px" />  </td>
										<td ID="td124" >Fin Semana:</td>
                                        <td ID="td125" ><input class="form-control" id="Text65" type="text" style="width:200px" />  </td>
										
									</tr>
									<tr ID="tr41">
									<td ID="td126" >#Días Ingreso:</td>
                                        <td ID="td127" ><input class="form-control" id="Text66" type="text" style="width:200px" />  </td>
										<td ID="td128" >Fecha Ingreso:</td>
                                        <td ID="td129" ><input class="form-control" id="Text67" type="text" style="width:200px" />  </td>
									</tr>
									<tr ID="tr30" runat="server">
                                        <td ID="td130" >Ubicación de ATM:</td>
                                        <td ID="td131" colspan="6"><input class="form-control" id="Text68" type="text" style="width:750px" />  </td>
									</tr>
									
														
									<tr ID="tr37" runat="server">
                                        <td ID="td153" >ETV:</td>
                                        <td ID="td154" ><input class="form-control" id="Text78" type="text" style="width:200px" />  </td>
										<td ID="td155" >Días ETV:</td>
                                        <td ID="td156" ><input class="form-control" id="Text79" type="text" style="width:200px" />  </td>
										<td ID="td157" >Horario ETV:</td>
                                        <td ID="td158" ><input class="form-control" id="Text80" type="text" style="width:200px" />  </td>
										
									</tr>
									<tr ID="tr38" runat="server">
                                        <td ID="td159" >Condiciones ETV:</td>
                                        <td ID="td160" colspan="6"><input class="form-control" id="Text81" type="text" style="width:750px; height:150px" />  </td>
								
									</tr>
									
									<tr ID="tr39" runat="server">
                                        <td ID="td161" IDC:</td>
                                        <td ID="td162" ><input class="form-control" id="Text82" type="text" style="width:200px" />  </td>
										<td ID="td163" >Días IDC:</td>
                                        <td ID="td164" ><input class="form-control" id="Text83" type="text" style="width:200px" />  </td>
										<td ID="td165" >Horario IDC:</td>
                                        <td ID="td166" ><input class="form-control" id="Text84" type="text" style="width:200px" />  </td>
										
									</tr>
									<tr ID="tr40" runat="server">
                                        <td ID="td167"  >Condiciones IDC:</td>
                                        <td ID="td168" colspan="6"><input class="form-control" id="Text85" type="text" style="width:750px; height:150px" />  </td>
									</tr>
												<tr ID="tr31" runat="server">
									
                                        <td ID="td132" colspan="7" align="center"><h4>Contacto No. 1</h4></td>
                                    </tr>
									<tr ID="tr4" runat="server">
                                       	<td ID="td133" >Nombre:</td>
                                        <td ID="td134" ><input class="form-control" id="Text69" type="text" style="width:200px" />  </td>
										<td ID="td135" >Telefono:</td>
                                        <td ID="td136" ><input class="form-control" id="Text70" type="text" style="width:200px" />  </td>
										<td ID="td137" >Mail:</td>
                                        <td ID="td138" ><input class="form-control" id="Text71" type="text" style="width:200px" />  </td>
									</tr>
									
									<tr ID="tr33" runat="server">
                                        <td ID="td139" colspan="7" align="center"><h4>Contacto No. 2</h4></td>
                                    </tr>
									<tr ID="tr34" runat="server">
                                       	<td ID="td140" >Nombre:</td>
                                        <td ID="td141" ><input class="form-control" id="Text72" type="text" style="width:200px" />  </td>
										<td ID="td142" >Telefono:</td>
                                        <td ID="td143" ><input class="form-control" id="Text73" type="text" style="width:200px" />  </td>
										<td ID="td144" >Mail:</td>
                                        <td ID="td145" ><input class="form-control" id="Text74" type="text" style="width:200px" />  </td>
									</tr>
									
									<tr ID="tr35" runat="server">
                                        <td ID="td146" colspan="7" align="center"><h4>Contacto No. 3</h4></td>
                                    </tr>
									<tr ID="tr36" runat="server">
                                       	<td ID="td147" >Nombre:</td>
                                        <td ID="td148" ><input class="form-control" id="Text75" type="text" style="width:200px" />  </td>
										<td ID="td149" >Telefono:</td>
                                        <td ID="td150" ><input class="form-control" id="Text76" type="text" style="width:200px" />  </td>
										<td ID="td151" >Mail:</td>
                                        <td ID="td152" ><input class="form-control" id="Text77" type="text" style="width:200px" />  </td>
									</tr>
                                   
                                </Table>
                        </div>
                    </div>
				</div>
				
								                <div class='panel-body'>
                    <div class='form-horizontal' role='form'>
                
                        <div id="map"><h4>Ubicación Geografica</h4></div>
						
    <script>
	
      function initMap() {
        var uluru = {lat:19.027129, lng: -98.206696};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCABq1YYQIbDutyUWwkM807TJWQnsnn_A&callback=initMap">
    </script>
				</div>
				
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

            
            
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
	
    <main class="site-main">
        <section class="hero_area">
            <div class="hero_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                          <h2 class="category-title">Base Unica de Cajeros</h2>
                        </div>
                    </div>
					
	<div class="mapcontainer">
        <div class="map">
            <span>Alternative content for the map</span>
        </div>
        <div class="areaLegend">
            <span>Alternative content for the legend</span>
        </div>
    </div>
					
					
                </div>
            </div>
        </section>
        <section class="boxes_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>MAPA</h3>
                            <p>Muestra la información mas relevante de los ATM en los estados de la República Mexicana.</p>
                            <i class="fa fa-map"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>ESTADISTICAS</h3>
                            <p>Representación grafica de la Base Unica de Cajeros.</p>
                            <i class="fa fa-line-chart "></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>DESCARGAR</h3>
                            <p>Es la informacion completa pra descargar de la BUC</p>
                            <i class="fa fa-download"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>Grupo SCANDA</h4>
                    <p class="text">BUC (Base Unica de Cajeros)</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>SERVICES</h4>
                    <ul class="big">
                        <li><a href="#" title="">M A P A</a></li>
                        <li><a href="#" title="">ESTADISTICAS</a></li>
                        <li><a href="#" title="">DESCARGAS</a></li>
                        <li><a href="#" title="">ATM</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>CONTENT</h4>
                    <ul class="big">
                        <li><a href="#" title="">Tipo de Autoservicio</a></li>
                        <li><a href="#" title="">Banca</a></li>
                        <li><a href="#" title="">ETV</a></li>
                        <li><a href="#" title="">IDC</a></li>
                        <li><a href="#" title="">Dispensador</a></li>
                        <li><a href="#" title="">Practicaja</a></li>
                        <li><a href="#" title="">Ubicacion Geografica</a></li>

                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>B U C </h4>
                    <p class="text">Base Unica de Cajeros Automaticos</p>
                    <p><a href="tel:+902222222222"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +52 5555 5555</a></p>
                    <p><a href="mailto:soporte.buc.contractor@bbva.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> soporte.buc.contractor@bbva.com</a></p>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left">&copy; 2018 Grupo SCANDA</p>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline navbar-right">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Tipo de Autoservicio</a></li>
                            <li><a href="#">Buscar</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>    
	<input type="hidden" id="hidden_user_id">		
    </footer>

	<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
	

		/////////////////////modal_f
		$( document ).ready(function() {
			$("#buscaratm").button().click(function(){
				var bla = $('#Buscar').val();

				Set
				$('#bbatm').val(bla);
				//$('#add_new_record_modal').modal('show');
				GetUserDetails(bla);
			});
			
			//MAPS
			        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });
			
			console.log( "ready!" );
			
		});


		
    </script>
		
</body>
</html>
	