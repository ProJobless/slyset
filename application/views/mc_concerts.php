<div id="contentAll">

  <div id="breadcrumbs">
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Artistes</a></li>
      <li><a href="#">Bob Dylan</a></li>
      <li><a href="#">Concerts</a></li>
    </ul>
  </div>

  <div id="cover">
    <div id="infos-cover">
      <h2>Bob Dylan</h2>
      <a href="#"><span class="button_left"></span><span class="button_center">Suivre</span><span class="button_right"></span></a>
    </div>
  </div>

  <div id="stats-cover">
    <div class="stats_cover_block">
      <span class="stats_number">489</span>
      <span class="stats_title">abonnés</span>
    </div>

    <div class="stats_cover_block">
      <span class="stats_number">18</span>
      <span class="stats_title">albums</span>
    </div>

    <div class="stats_cover_block">
      <span class="stats_number">278</span>
      <span class="stats_title">morceaux</span>
    </div>
  </div>
  <div class="bt_ajout_concert">
    <img src="<?php echo img_url('musicien/ajout_concert.png'); ?>" alt="ajout concert"/>
  </div>

  <div class="content">
    <div id="btn_tmp">
      <a href="#"><img src="<?php echo img_url('musicien/filtre_avenir.png'); ?>" alt="A venir"/></a>
      <a href="#"><img src="<?php echo img_url('musicien/filtre_passe.png'); ?>" alt="A venir"/></a>
    </div>
    <h2>Les concerts de Bob Dylan &agrave; venir</h2>
   
     <!-- Boucle : tous les concerts pour un artiste -->
   	  <?php 
  if($nbr_concert_par_artiste!=0)
   { 
   	   foreach($concert_all as $concert_unit): ?>
 
  		<p  class="date-heure"><span><?php
		get_date($concert_unit->date,'complete');?> <?php if(isset($concert_unit->prix))echo ' - '.$concert_unit->prix.'&euro;'?></span></p>
   		 <div class="edition"><a href="#"><span class="edit">editer</span></a><a href="#"><span class="suppr">supprimer</span></a></div>
   		 <hr/>
   			 <div class="infos_concert">
      			 <div class="calendrier"><p class="mois"><?php
		get_date($concert_unit->date,'mois_trois');?></p><p class="jour"><?php
	get_date($concert_unit->date,'jour_texte');?></p></div>
     			 <p><?php echo $concert_unit->titre ?></p>
     			 <p><?php if(isset($concert_unit->prix)) echo '+ '.$concert_unit->seconde_partie ?></p>
    		 </div>
   			 <div class="adr_concert">
     	 		<img src="<?php echo img_url('musicien/localisation.png'); ?>" />
    	 		<p class="adr_lieu"><?php echo $concert_unit->salle ?></p>
      	 		<p class="adr_rue"><?php echo $concert_unit->numero_adresse." ".$concert_unit->voie_adresse ?> <!--Bis Rue de Bagnolet--></p>
      			 <p class="adr_ville"><?php echo $concert_unit->ville.", ".$concert_unit->pays ?></p>
   		 	</div>
   		 <a href="javascript:void(0);" class="more" id="more_<?php echo $concert_unit->id ?>" onclick='showInfo(more_<?php echo $concert_unit->id ?>,more_info_<?php echo $concert_unit->id ?>)' >Voir plus d'informations</a>
    	 <a href="#" class="participer"><span class="button_left"></span><span class="button_center">J'y vais</span><span class="button_right"></span></a>
    
   
    
    
    <div class="info_sup" id="more_info_<?php echo $concert_unit->id ?>" style="display:none">
      <div class="informations">
        <p class="nom_date"><?php echo $concert_unit->titre.',' ?> <!--le 28/11/13 &agrave; 20h30--></p>
        <p class="lieu_salle"><?php echo $concert_unit->salle.',' ?></p>
        <p class="lieu_rue">168 Avenue Willy Brandt,</p>
        <p class="lieu_ville">59777, Lille</p>
        <p class="tel">Tel. : 03.20.13.50.00 </p>
        <p class="site">Site web : <a href="#">www.aeronef-spectacles.com</a></p>
        <p class="partager">partager l'&eacute;v&egrave;nement :</p>
        <div class="partage_reseaux">
          <a href="#"><span class="twitter">twitter</span></a>
          <a href="#"><span class="facebook">fb</span></a>
          <a href="#"><span class="google">g+</span></a>
        </div>
      </div>
      <div class="plan_google">

      </div>
    </div>
 <?php endforeach; }?>
   

  
   
  
     </div>

  <?php if(isset($sidebar_right)) echo $sidebar_right; ?>

  <div class="pagination">
    <a href="#" id="precedent"><span><</span></a>
    <a href="#" class="page">1</a>
    <a href="#" class="page">2</a>
    <a href="#" class="page">3</a>
    <a href="#" class="page">4</a>
    <a href="#" class="page">5</a>
    <a href="#" id="suivant"><span>></span></a>
  </div>
  
</div>