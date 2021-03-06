<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mc_stats extends CI_Controller 
{
    
    public function __construct()
    {
      parent::__construct();
      
      $this->layout->ajouter_css('slyset');
      
      $this->layout->ajouter_js('jquery.imagesloaded.min');
      $this->layout->ajouter_js('jquery.masonry.min');
      $this->layout->ajouter_js('jquery.stapel');
      
        $this->layout->set_id_background('stats');
    }
  
    public function index($user_id)
    {
        $uid = $this->session->userdata('uid');
        $type_account = $this->session->userdata('account');
        
        if(($user_id == $uid) && $type_account != 1){
            $this->page();
        } else {
            redirect('home/'.$uid, 'refresh');
        }
    }
  
    public function page()
    {
      $datas = array();
      $datas['sidebar_left'] = $this->load->view('sidebars/sidebar_left', '', TRUE);
      $datas['sidebar_right'] = $this->load->view('sidebars/sidebar_right', '', TRUE);
      
      //$this->layout->views('3');
      $this->layout->view('statistique/mc_stats', $datas);
    }
  
}