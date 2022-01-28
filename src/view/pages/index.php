<header class="header">
  <div class="header__nav"><a class="header__link"><img class="header__slanted" src="./assets/img/slanted.png"></img></a></div>
</header>

<main class="main">
  <section class="intro">
    <div class="intro__title">
      <img class="intro__img" src="./assets/img/header_mobile.svg"></img>
    </div>
  </section>

  <section class="tragedy">
    <div class="tragedy__title">
      <p><?php echo $tragedy_title ?></p><!--<span class="struck--s">s</span>
        <span class="struck--t">t</span>
        <span class="struck--r">r</span>
        <span class="struck--u">u</span>
        <span class="struck--c">c</span>
        <span class="struck--k">k</span></p>-->
      <div class="tragedy__title--struck">

      </div>
    </div>
    <div class="tragedy__text">
      <p>
        <?php
          echo $tragedy;
        ?>
      </p>
    </div>
  </section>

<section class="unthinkable">
    <div class="unthinkable__reveal">
      <img class="reveal__margherita" src="./assets/img/margherita.png"></img>
      <img class="reveal__layer1" src="./assets/img/layer1.png"></img>
      <img class="reveal__layer2" src="./assets/img/layer2.png"></img>
    </div>
    <h2 class="unthinkable__title"><?php echo $unthinkable_title ?></h2>
    <div class="unthinkable__text">
      <p>
        <?php
          echo $unthinkable;
        ?>
      </p>
    </div>
  </section>

  <div class="black">
  <section class="italy">
    <h2 class="italy__title"><?php echo $italy_title ?></h2>
    <p class="italy__text">
        <?php
          echo $italy;
        ?>
    </p>
  </section>


  <section class="righthand">
    <div class="righthand__title">
      <img src="./assets/img/B.svg" alt="B" class="title__B">
      <div class="title__words">
        <br><br>
        <h2><span>odoni</span>'s</h2>
        <h2>right</h2>
        <h2>hand</h2>
      </div>
    </div>
    <p class="righthand__text">
        <?php
          echo $righthand;
        ?>
    </p>
  </section>
  </div>

  <section class="shadow">
    <div class="shadow__title--wrapper"><img src="./assets/img/shadow.svg" alt="In the shadow of her man" class="shadow__title"></div>
    <p class="shadow__text">
        <?php
          echo $shadow;
        ?>
    </p>
  </section>

  <section class="uncertainty">
    <div class="uncertainty__content">
    <h2 class="uncertainty__title"><?php echo $uncertainty_title ?></h2>
    <div class="uncertainty__text">
      <p>
        <?php
          echo $uncertainty;
        ?>
      </p>
    </div>
    </div>
  </section>

  <section class="talents">
    <h2 class="talents__title"><?php echo $talents_title ?></h2>
    <div class="talents__reveal">
      <div class="questionmark__wrapper"><img class="talents__questionmark" src="./assets/img/questionmark.svg"></img></div>
      <div class="talents__content">
        <div  class="talents__text1">
          Passionate about music, she was elected a regular member of the Ducal Parmens Philharmonic Society on April 2, 1825.
        </div>
        <div  class="talents__text2">
          She became member of Accademia degli Unanimi , of which she was made an honorary member on 26/12/1796, with the name "L'Eccelsa."
        </div>
      </div>
    </div>
  </section>

  <section class="defines">
    <img class="defines__title" src="./assets/img/defines_mobile.svg"></img>
    <p class="defines__intro">
        <?php
          echo $defines;
        ?>
    </p>
  </section>



  <section class="end">
    <p>Thanks to</p>
    <p>Margheritta Dall'Aglio Bodoni</p>
    <p>the legacy lives on</p>
  </section>


</main>

<footer class="footer">
  <img class="footer__slanted" src="./assets/img/SLANTED_SMOL.png"></img>
  <p class="footer__text">
        <?php
          echo $footer;
        ?>
  </p>
  <div class="footer__magazine"><img class="magazine__picture" src="./assets/img/slanted_book.jpg" height=222px></img>
  <div class="magazine__content">
  <h3 class="magazine__title">CHECK OUT OUR<br> LATEST MAGAZINE</h3><p class="magazine__text">The issue celebrates happiness, joy of life, power, symbolism, and the meaning of color. We look...</p></div></div>
  <div class="footer__socials">
  <img class="socials__twitter" src="./assets/img/twitter.svg"></img>
  <img class="socials__facebook" src="./assets/img/facebook.svg"></img>
  <img class="socials__instagram" src="./assets/img/instagram.svg"></img>
  <img class="socials__youtube" src="./assets/img/youtube.svg"></img>
  </div>
  <p class="footer__license">&copy; slanted publishers 2022</p>
</footer>
