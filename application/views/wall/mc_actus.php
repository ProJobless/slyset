<div id="contentAll">
<?php // print_r($infos_profile); 
?>
  <div id="breadcrumbs">
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Artistes</a></li>
      <li><a href="#"><?php print $login = (empty($infos_profile)) ? $this->session->userdata('login') : $infos_profile->login; ?></a></li>
      <li><a href="#">Fil d'actualité</a></li>
    </ul>
  </div>

  <div id="cover" style="background-image:url(<?php print files('profiles/'.$cover = (empty($infos_profile)) ? $this->session->userdata('cover') : $infos_profile->cover); ?>);">
    <div id="infos-cover">
          <h2><?php print $login = (empty($infos_profile)) ? $this->session->userdata('login') : $infos_profile->login; ?></h2>
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

  <div class="content">
    <div class="actus_post">
      <div class="actus_post_links">
        <a href="#comments-msg" class="active">Message</a>
        <a href="#comments-photo">Photo</a>
        <a href="#comments-link-video">Lien/Vidéo</a>
      </div>
      <?php
        $form_comments_1 = array("id" => "comments-msg", "style" => "display:block;");
        echo form_open('mc_actus/form_wall_musicien_message/'.$uid = (empty($infos_profile)) ? $this->session->userdata('uid') : $infos_profile->id, $form_comments_1);
        
          $textarea = array("name" => "comment1", "placeholder" => "Votre message ici ...");
          echo form_textarea($textarea);
          echo form_error('comment1', '<span class="error-form">', '</span>');
          
          echo form_submit('submit','Valider');
        echo form_close();
        
        
        $form_comments_2 = array("id" => "comments-photo", "style" => "display:none;");
        echo form_open_multipart('mc_actus/form_wall_musicien_photo'.$uid = (empty($infos_profile)) ? $this->session->userdata('uid') : $infos_profile->id, $form_comments_2);
          $textarea = array("name" => "comment2","placeholder" => "Votre description ici ...");
          echo form_textarea($textarea);
          echo form_error('comment2', '<span class="error-form">', '</span>');
      ?>
          <div class="upload-file-container container-photo">
            <input type="file" name="photo" size="200" id="upload-photo-comments" />
          </div>
          <span class="upload_photo_name_file"></span>
      <?php
          echo form_submit('submit','Valider');
        echo form_close();
        
        
        $form_comments_3 = array("id" => "comments-link-video", "style" => "display:none;");
        echo form_open('mc_actus/form_wall_musicien_link'.$uid = (empty($infos_profile)) ? $this->session->userdata('uid') : $infos_profile->id, $form_comments_3);
        
          $textarea = array("name" => "comment3","placeholder" => "Votre description ici ...");
          echo form_textarea($textarea);
          echo form_error('comment3', '<span class="error-form">', '</span>');
          
          echo form_input('linkurl',set_value('linkurl'),'placeholder="L’URL de votre lien youtube, ex : http://www.youtube.com/watch?v=9I9Ar6upx34"');
          echo form_error('linkurl', '<span class="error-form">', '</span>');
          
          echo form_submit('submit','Valider');
        echo form_close();
      ?>
    </div>
    
    <div class="empty"></div>
    
    <?php foreach($messages as $message): ?>
        <?php if(empty($message->photo) && empty($message->video)): ?>
            <div class="artist_post simple_message">
                <div class="top">
                    <a href="<?php print site_url('mc_actus/delete/'.$message->id); ?>" class="post_delete"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
                </div>
                <div class="left">
                    <a href="<?php print site_url('home/'.$message->idU); ?>"><img src="<?php print files('profiles/'.$message->thumbU); ?>" alt="Photo Profil" /></a>
                </div>
                <div class="right">
                    <span class="ico_citation"></span>
                    <p class="msg_post"><?php print $message->markup_message; ?></p>
                </div>
                <div class="bottom">
                    <span class="infos_publi"><?php print $message->loginU; ?> - Le <?php print date('d-m-Y', strtotime(str_replace('-', '/', $message->created)))?> à <?php print date('H:i', strtotime(str_replace('-', '/', $message->created)))?></span>
                    
                    <?php 
                        $cpt_comment = 0;
                        foreach($commentaires as $commentaire){
                            if($message->id == $commentaire->wallidB){
                                $cpt_comment++;
                            }
                        }
                    ?>
                    
                    <span class="infos_coms"><?php print count_comments($cpt_comment); ?></span>
                </div>
              
                <?php foreach($commentaires as $commentaire): ?>
                    <?php if($message->id == $commentaire->wallidB): ?>
                        <div class="comments">
                            <div class="com_left">
                              <a href="<?php print site_url('home/'.$commentaire->idU); ?>"><img src="<?php print files('profiles/'.$commentaire->thumbU); ?>" alt="Photo Profil" /></a>
                            </div>
                            <div class="com_right">
                                <div class="com_top">
                                    <a href="<?php print site_url('mc_actus/delete_comment/'.$commentaire->idB); ?>"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
                                </div>
                                <div class="com_bottom">
                                    <span class="com_publi_infos"><?php print $commentaire->loginU; ?><small> - <?php print my_time($commentaire->createdB); ?></small></span>
                                    <span class="com_publi_msg"><?php print $commentaire->commentB; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
              
                <div class="form_comments">
                    <form action="" method="post">
                        <input type="text" name="usercomment" id="usercomment" placeholder="Ajouter votre commentaire..." />
                        <input type="hidden" name="baseurl" value="<?php echo base_url(); ?>" id="baseurl" />
                        <input type="hidden" name="messageid" value="<?php print $message->id; ?>" id="messageid" />

                        <input type="submit" value="Envoyer" />
                    </form>
                    <div class="ajax_loader"></div>
                </div>
            </div>
        <?php elseif(!empty($message->photo) && empty($message->video)): ?>
            <div class="artist_post photo_message">
                <div class="top">
                    <a href="<?php print site_url('mc_actus/delete/'.$message->id); ?>" class="post_delete"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
                </div>
                <div class="left">
                    <a href="<?php print site_url('home/'.$message->idU); ?>"><img src="<?php print files('profiles/'.$message->thumbU); ?>" alt="Photo Profil" /></a>
                </div>
                <div class="right">
                    <span class="ico_citation"></span>
                    <p class="msg_post"><?php print $message->markup_message; ?></p>
                    <div class="singleWrapper">
                        <img src="<?php print files($this->session->userdata('uid').'/wall/'.$message->photo); ?>" alt="Photo message" class="single" />
                    </div>
                </div>
                <div class="bottom">
                    <span class="infos_publi"><?php print $message->loginU; ?> - Le <?php print date('d-m-Y', strtotime(str_replace('-', '/', $message->created)))?> à <?php print date('H:i', strtotime(str_replace('-', '/', $message->created)))?></span>

                    <?php 
                        $cpt_comment = 0;
                        foreach($commentaires as $commentaire){
                            if($message->id == $commentaire->wallidB){
                                $cpt_comment++;
                            }
                        }
                    ?>
                    
                    <span class="infos_coms"><?php print count_comments($cpt_comment); ?></span>
                </div>

                <?php foreach($commentaires as $commentaire): ?>
                    <?php if($message->id == $commentaire->wallidB): ?>
                        <div class="comments">
                            <div class="com_left">
                                <a href="<?php print site_url('home/'.$commentaire->idU); ?>"><img src="<?php print files('profiles/'.$commentaire->thumbU); ?>" alt="Photo Profil" /></a>
                            </div>
                            <div class="com_right">
                                <div class="com_top">
                                    <a href="<?php print site_url('mc_actus/delete_comment/'.$commentaire->idB); ?>"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
                                </div>
                                <div class="com_bottom">
                                    <span class="com_publi_infos"><?php print $commentaire->loginU; ?><small> - <?php print my_time($commentaire->createdB); ?></small></span>
                                    <span class="com_publi_msg"><?php print $commentaire->commentB; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

                <div class="form_comments">
                    <form action="" method="post">
                        <input type="text" name="usercomment" id="usercomment" placeholder="Ajouter votre commentaire..." />
                        <input type="hidden" name="baseurl" value="<?php echo base_url(); ?>" id="baseurl" />
                        <input type="hidden" name="messageid" value="<?php print $message->id; ?>" id="messageid" />

                        <input type="submit" value="Envoyer" />
                    </form>
                    <div class="ajax_loader"></div>
                </div>
            </div>
        <?php elseif(empty($message->photo) && !empty($message->video)): ?>
            <div class="artist_post video_message">
                <div class="top">
                    <a href="<?php print site_url('mc_actus/delete/'.$message->id); ?>" class="post_delete"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
                </div>
                <div class="left">
                    <a href="<?php print site_url('home/'.$message->idU); ?>"><img src="<?php print files('profiles/'.$message->thumbU); ?>" alt="Photo Profil" /></a>
                </div>
                <div class="right">
                    <span class="ico_citation"></span>
                    <p class="msg_post"><?php print $message->markup_message; ?></p>

                    <?php 
                        $url = $message->video;
                        $url_preg = preg_replace('#http://www.youtube.com/watch\?v=(.+)+#i', '$1', $url);
                    ?>

                    <iframe width="455" height="300" src="http://www.youtube.com/embed/<?php print $url_preg; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="bottom">
                    <span class="infos_publi"><?php print $message->loginU; ?> - Le <?php print date('d-m-Y', strtotime(str_replace('-', '/', $message->created)))?> à <?php print date('H:i', strtotime(str_replace('-', '/', $message->created)))?></span>
                    
                    <?php 
                        $cpt_comment = 0;
                        foreach($commentaires as $commentaire){
                            if($message->id == $commentaire->wallidB){
                                $cpt_comment++;
                            }
                        }
                    ?>
                    
                    <span class="infos_coms"><?php print count_comments($cpt_comment); ?></span>
                </div>
              
                <?php foreach($commentaires as $commentaire): ?>
                    <?php if($message->id == $commentaire->wallidB): ?>
                        <div class="comments">
                            <div class="com_left">
                                <a href="<?php print site_url('home/'.$commentaire->idU); ?>"><img src="<?php print files('profiles/'.$commentaire->thumbU); ?>" alt="Photo Profil" /></a>
                            </div>
                            <div class="com_right">
                                <div class="com_top">
                                    <a href="<?php print site_url('mc_actus/delete_comment/'.$commentaire->idB); ?>"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
                                </div>
                                <div class="com_bottom">
                                    <span class="com_publi_infos"><?php print $commentaire->loginU; ?><small> - <?php print my_time($commentaire->createdB); ?></small></span>
                                    <span class="com_publi_msg"><?php print $commentaire->commentB; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
              
                <div class="form_comments">
                    <form action="" method="post">
                        <input type="text" name="usercomment" id="usercomment" placeholder="Ajouter votre commentaire..." />
                        <input type="hidden" name="baseurl" value="<?php echo base_url(); ?>" id="baseurl" />
                        <input type="hidden" name="messageid" value="<?php print $message->id; ?>" id="messageid" />

                        <input type="submit" value="Envoyer" />
                    </form>
                    <div class="ajax_loader"></div>
                </div>
            </div>  
        <?php endif; ?>
    <?php endforeach; ?>
    
    <p>___________________________________</p>
    
    <div class="artist_post simple_message">
      
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Bienvenue sur mon espace Slyset ! Découvrez mes derniers morceaux, mes prochains concerts, mes dernières actualités et photos !</p>
      </div>
      <div class="bottom">
        <span class="infos_publi">Bob Dylan - Le 26 Septembre 2013</span>
        <span class="infos_coms">1 commentaire</span>
      </div>
      <div class="comments">
        <div class="com_left">
          <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
        </div>
        <div class="com_right">
          <div class="com_top">
            <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
          </div>
          <div class="com_bottom">
            <span class="com_publi_infos">John Doe <small>- il y a 2 heures</small></span>
            <span class="com_publi_msg">I am a superhero, and I like this ! Nice work.</span>
          </div>
        </div>
      </div>
      <div class="form_comments">
        <form action="" method="post">
          <input type="text" placeholder="Ajouter votre commentaire..." />
          <input type="submit" value="Envoyer" />
        </form>
      </div>
    </div>

    <div class="artist_post photo_message">
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Je viens d’ajouter une photo à <a href="#">mon album “Tournée 2013”</a></p>
        <img src="<?php echo img_url('common/post_photo.jpg'); ?>" alt="Photo message" class="single" />
      </div>
      <div class="bottom">
        <span class="infos_publi">Bob Dylan - Le 26 Septembre 2013</span>
        <span class="infos_coms">1 commentaire</span>
      </div>
      <div class="comments">
        <div class="com_left">
          <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
        </div>
        <div class="com_right">
          <div class="com_top">
            <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
          </div>
          <div class="com_bottom">
            <span class="com_publi_infos">John Doe <small>- il y a 2 heures</small></span>
            <span class="com_publi_msg">I am a superhero, and I like this ! Nice work.</span>
          </div>
        </div>
      </div>
      <div class="form_comments">
        <form action="" method="post">
          <input type="text" placeholder="Ajouter votre commentaire..." />
          <input type="submit" value="Envoyer" />
        </form>
      </div>
    </div>

    <div class="artist_post simple_message">
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Trop sympô ta musique ! Si tu as l’occasion de passer par San Francisco, n’hésite pas, j’ai du LSD.<br/>Kissou, Jim.</p>
      </div>
      <div class="bottom">
        <span class="infos_publi">Jim Morisson - Le 24 Septembre 2013</span>
        <span class="infos_coms">Aucun commentaire - <a href="#">Commenter</a></span>
      </div>
    </div>

    <div class="artist_post photo_message">
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Je viens d’ajouter 3 photos à <a href="#">mon album “Souvenirs, souvenirs”</a></p>
        <img src="<?php echo img_url('common/post_ajout_photo1.jpg'); ?>" alt="Photo message" class="mosaic first" />
        <img src="<?php echo img_url('common/post_ajout_photo2.jpg'); ?>" alt="Photo message" class="mosaic" />
        <img src="<?php echo img_url('common/post_ajout_photo3.jpg'); ?>" alt="Photo message" class="mosaic last" />
      </div>
      <div class="bottom">
        <span class="infos_publi">Bob Dylan - Le 21 Septembre 2013</span>
        <span class="infos_coms">Aucun commentaire - <a href="#">Commenter</a></span>
      </div>
    </div>

    <div class="artist_post article">
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Découvrez la chronique de mon dernier album !</p>

        <div class="post_article">
          <img src="<?php echo img_url('common/article_photo.jpg'); ?>" alt="Photo d'interview" />

          <a href="#">Dylan toujours à flots après la tempête</a>
          <p>Bob Dylan revient en pleine lumière avec une collection de ballades country-blues-jazz crépusculaires. Tirés par la swinguante locomotive Duquesne Whistle...</p>
        </div>
      </div>
      <div class="bottom">
        <span class="infos_publi">Jim Morisson - Le 24 Septembre 2013</span>
        <span class="infos_coms">Aucun commentaire - <a href="#">Commenter</a></span>
      </div>
    </div>

    <div class="artist_post news_song">
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Je viens d’ajouter 2 nouveaux morceaux à <a href="#">ma musique</a></p>

        <div class="new_songs">
          <a href="#"><span class="btn_play"></span>Pretty Pegy</a>
          <a href="#"><span class="btn_play"></span>Hard Times in New York Town</a>
        </div>
      </div>
      <div class="bottom">
        <span class="infos_publi">Jim Morisson - Le 24 Septembre 2013</span>
        <span class="infos_coms">Aucun commentaire - <a href="#">Commenter</a></span>
      </div>
    </div>
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