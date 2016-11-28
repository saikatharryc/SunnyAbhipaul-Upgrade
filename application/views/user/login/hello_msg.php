<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
<div>hiii
 <?php
    $query = $this->db->query("SELECT userPic FROM `tbl_users` WHERE userName LIKE 'back1'");
     
    foreach ($query->result_array() as $row)
{   
  
   $userpic1 = $row['userPic'];
       
    } 
    
    $u = $userpic1;
    ?>
    <?php echo $u ?>
    
</div>
<div> <?php echo $u ?></div>
<?php else : ?>
<div>please register before acess
</div>
<?php endif; ?>