<?php require "header.php";?>

  <main>
    <!-- hero start -->
    <section class="hero">
      <section class="hero-info">
        <h1>Comida casera, saludable y <span class="line-block">vegana</span>
        </h1>
        <section id="hero-buttons">
          <button>Ver Menu</button>
          <button>Local Cerca</button>
        </section>
        <img id="hero-img" src="img/heroIcons.png" alt="icons">
      </section>
      <img src="img/koreanDish.png" alt="weird dish">
    </section>
    <!-- hero end --> 

    <?php 
      include "partials/specialties.php";
      require "partials/menu.php";
    ?>
    
    <!-- Testimonio start -->
    <section class="testimony">
      <h2 class="section-title">Testimonio <span>Cosumidor Feliz</span></h2>
      <section class="testimony-hero">
        <picture>
          <source srcset="img/testimonySmall.png" media="(max-widht:600px)">
          <source srcset="img/testimony.png">
          <img src="img/testimony.png" alt="Testimonio">
        </picture>
        <section class="testimony-text">
          <i class="fa-solid fa-quote-left testimony-quote"></i>
          <p>Este es un simple texto de relleno solo esta para rellenar, y mostra el lugar donde iria un texto real de la pagina cuando este hecha en su totalidad</p>
          <p>matias Sosa</p>
        </section>
      </section>
    </section>
    <!-- Testimonio end -->
    
    <?php 
      require "partials/experts.php";
      require "partials/reservation.php";
    ?>
    
  </main>

  <?php require "footer.php";?>

</body>
</html>