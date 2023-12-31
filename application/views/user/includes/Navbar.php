<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="logo" href="<?php echo base_url('index') ?>"><img width="64px" height="160px" src="<?php echo base_url('public/assets/images/logobrain.png') ?>"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <?php
      $current_segment = $this->uri->segment(1);
      ?>
      <ul class="navbar-nav mr-auto">
         <li class="nav-item <?= $current_segment == 'index' || $current_segment == '' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('nav_home'); ?></a>
         </li>
         <li class="nav-item <?= $current_segment == 'courses' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo base_url('courses'); ?>"><?php echo $this->lang->line('nav_courses'); ?></a>
         </li>
         <li class="nav-item <?= $current_segment == 'partners' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo base_url('partners'); ?>"><?php echo $this->lang->line('nav_partners'); ?></a>
         </li>
         <li class="nav-item <?= $current_segment == 'contact' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo base_url('contact'); ?>"><?php echo $this->lang->line('nav_contact'); ?></a>
         </li>
      </ul>


      <div class="call_section">
         <ul class="d-flex flex-row align-items-center">
            <li><a target="_blank" href="https://www.facebook.com/"><img src="<?php echo base_url('public/assets/images/fb-icon.png'); ?>"></a></li>
            <li><a target="_blank" href="https://www.twitter.com/"><img src="<?php echo base_url('public/assets/images/twitter-icon.png'); ?>"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/"><img src="<?php echo base_url('public/assets/images/linkedin-icon.png'); ?>"></a></li>
            <li><a target="_blank" href="https://www.instagram.com/"><img src="<?php echo base_url('public/assets/images/instagram-icon.png'); ?>"></a></li>
           <li> <select style="text-transform:uppercase; background-color:transparent; border:none;" class="form-control form-control-sm" id="langswitch" onchange="javascript:window.location.href='<?php echo base_url(); ?>switch_lang/'+this.value;">
           <option  value="en" <?php if ($this->session->userdata('site_lang') == 'en') echo 'selected="selected"'; ?>>En</option>
               <option value="ru" <?php if ($this->session->userdata('site_lang') == 'ru') echo 'selected="selected"'; ?>>Ru</option>
               <option value="az" <?php if ($this->session->userdata('site_lang') == 'az') echo 'selected="selected"'; ?>>Az</option></select>
            
         </li>
         </ul>
      </div>
   </div>

</nav>