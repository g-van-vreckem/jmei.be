<?php
	include 'common.php';
	$title .= '';
	$description .='';
	$pageId = 'realisations';
	include 'header.php';
	include 'nav.php';

?>
			<div class="row">
				<div class="span3">
				<!--Sidebar content-->
					<div>
						<ul id="leftnav" class="nav nav-tabs nav-stacked">
							<li class="nav-header">Featured Customization</li>
							<li class="active"><a href="#2013-12">December 2013 <i class="icon-chevron-right pull-right"></i></a></li>
							<li><a href="#blog-2013-11">November 2013 <i class="icon-chevron-right pull-right"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="span9">
				<!--Body content-->
					<section id="blog-2013-12">
						<h3>RCB3000 bidirectionelle</h3>
						<img class="img-polaroid blog" src="../img/custom-product/2013-12-3000.jpg" alt="Custom RCB3000 Decembre 2013">
						<p>RCB3000 réalisée sur-mesure selon le cahier des charges du client. <br>
					    Modèle avec retour d'informations sur afficheurs 7 segments: Affichage de poid, température et pression.<br>
					    Des validations de mouvements (venant du récepteur) sont indiquées par voyants LED au dessus de chaque manipulateur.
						</p>
					</section>
					<hr>
					<section id="blog-2013-11">
						<h3>RCB700 - OEM groupe Warzee Agri</h3>
						<img class="img-polaroid blog" src="../img/custom-product/2013-11-700.jpg" alt="Custom Hélice Decembre 2013">
						<p>RCB700 entièrement personnalisée.<br>
						  Commande à distance d'une dérouleuse déportée (sur la fourche d'une machine agricole) depuis la cabine de la machine par radio-fréquence JMei.
						</p>
					</section>
					<hr>
				</div>
			</div>
 <?php include 'footer.php';?>
