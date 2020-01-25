<?php // index.php
   /* First page of the application */
   include 'php/khp_variables.php';
   define('TITLE', $khp . $khp_title_index);
   require $khp_header;
   date_default_timezone_set('UTC');
   
?>
<section class="content-header">
   <header>
      <h1>Supporting Alaskan Families Impacted by Childhood Cancer</h1>
   </header>
</section>
<section class="content main-page">
   <figure class="main-fig">
      <img id="main-img" class="khp-img" src="img/Katie.jpg" alt="Beautiful Katie">
      <figcaption>The Beautiful Katie</figcaption>
   </figure>
   <article class="main-art">
      <p>Katie’s fight with childhood cancer is over, but there are so many families still in it and some just beginning. I know firsthand how quickly finances get drained even if the medical bills are taken care of. Katie and I were displaced from our home for over 13 months initially and then several weeks at a time over the next 15 months for various surgeries, treatments, and tests. The reality is, at least one parent will lose much of their income while their child is in treatment for cancer. If they happen to be relocated like we were or like many families from smaller Alaska communities, there are added expenses that are just not covered by insurance. If they are fortunate enough to be treated in their home city, the time needed to care for a seriously ill child is extensive and unpredictable. Through the hospitals' social workers, Katie's Handprint will offer grants to Alaskan families whose children are currently in treatment for cancer.</p>
   </article>
</section>

<?php include $khp_footer; ?>