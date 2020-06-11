<?php
include "controller/HomeController.php"
?>
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Architecture test
      </h1>
      <h2 class="subtitle">
        <?php 
        foreach($name as $names){
          echo $names['nom'];
        }
        ?>
      </h2>
    </div>
  </div>
</section>