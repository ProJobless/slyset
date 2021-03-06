<div id="contentAll">

  <div id="breadcrumbs">
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Artistes</a></li>
      <li><a href="#">Bob Dylan</a></li>
      <li><a href="#">Photos & Vidéos</a></li>
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
    <div class="bts_noir">
	  <div class="bt_noir">
		<a href="#"><span class="bt_left"></span><span class="bt_middle">Mettre un album à la une</span><span class="bt_right"></span></a>
	  </div>
	  <div class="bt_noir">
		<a href="#"><span class="bt_left"></span><span class="bt_middle">Ajouter un morceau</span><span class="bt_right"></span></a>
	  </div>
	</div>

  <div class="content">
	<h2>Musique de Bob Dylan</h2>
	<div class="a_la_une">
		<img src="<?php echo img_url('musicien/album_top.jpg'); ?>"/>
		<img src="<?php echo img_url('portail/alaune.png'); ?>" class="bandeau_top"/>
		<div class="player">
			<a href="#"><img src="<?php echo img_url('musicien/player_top.png'); ?>"/></a>
		</div>
		<div class="infos">
			<p class="title">Blonde on blonde</p>
			<p class="annee_crea">1966</p>
			<p><span>> </span><a href="#">Voir le livret d'album</a></p>
			<p><span>> </span><a href="#">Voir les partitions</a></p>
		</div>
	</div>
	<div class="top_album">
		<div>
			<a href="#">
				<img src="<?php echo img_url('musicien/player_top2.png'); ?>"/>
				<p> Ecouter l'album</p>
				<img src="<?php echo img_url('common/cadis.png'); ?>"/>
				<p> Acheter l'album</p>
			</a>
		</div>
		<div class="liste_titres">
			<div class="en_tete">
				<table>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre">Titre de la chanson</td>
						<td class="duree">Durée</td>
					</tr>
				</table>
			</div>
			<div class="titres">
				<table>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Rainy Day Women </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
					</tr>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Hurricane </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
					</tr>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> I Want You </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="cadis"><span>edit</span></a>
								<a href="#" class="coeur"><span>cadis</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">2:14</td>
					</tr>
				</table>
			</div>
		</div>
		<input type="button" value="Acheter" class="bt_cadis">
		<input type="button" value="Dans ma playlist" class="bt_playlist">
	</div>
	<hr />
	<div class="tout_titre">
		<input type="button" value="Acheter" class="bt_cadis"/>
		<input type="button" value="Dans ma playlist" class="bt_playlist"/>
		<a href="#">
			<img src="<?php echo img_url('musicien/player_top2.png'); ?>"/>
			<p> Ecouter l'album</p>
		</a>
		<div class="liste_titres">
			<div class="en_tete">
				<table>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre">Titre de la chanson</td>
						<td class="duree">Durée</td>
						<td class="album">Album</td>
					</tr>
				</table>
			</div>
			<div class="titres">
				<table>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre"  onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Rainy Day Women </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
						<td class="album">Blonde on blonde</td>
					</tr>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre"  onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Rainy Day Women </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
						<td class="album">Blonde on blonde</td>
					</tr>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre"  onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Rainy Day Women </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
						<td class="album">Blonde on blonde</td>
					</tr>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre"  onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Rainy Day Women </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
						<td class="album">Blonde on blonde</td>
					</tr>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre"  onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Rainy Day Women </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
						<td class="album">Blonde on blonde</td>
					</tr>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre"  onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Rainy Day Women </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
						<td class="album">Blonde on blonde</td>
					</tr>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre"  onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Rainy Day Women </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
						<td class="album">Blonde on blonde</td>
					</tr>
					<tr>
						<td class="check"><input type="checkbox"></td>
						<td class="le_titre"  onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
							<a href="#"><img src="<?php echo img_url('common/btn_play.png'); ?>" class="play"/></a>
							<p> Rainy Day Women </p>
							<div class="miniat_titre">
								<a href="#" class="add"><span>add</span></a>
								<a href="#" class="edit"><span>edit</span></a>
								<a href="#" class="coeur"><span>coeur</span></a>
								<a href="#" class="cam"><span>cam</span></a>
							</div>
						</td>
						<td class="duree">4:19</td>
						<td class="album">Blonde on blonde</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
  </div>

  <?php if(isset($sidebar_right)) echo $sidebar_right; ?>

</div>