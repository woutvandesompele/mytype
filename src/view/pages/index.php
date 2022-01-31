<header class="header">
  <div class="header__nav"><a href="https://www.slanted.de/" class="header__link"><img class="header__slanted" src="./assets/img/slanted.png"></img></a></div>
</header>

<main class="main">
  <section class="intro">
    <div class="intro__title">
      <picture class="intro__img">
        <source
          sizes="(min-width: 1500px) 100vw,
                 (min-width: 320px) 50vw"
          srcset="./assets/img/header_mobile.svg 100w,
                  ./assets/img/header_desktop.svg 1050w"
          type="image/svg+xml" />
        <img class="intro__img" src="./assets/img/header_desktop.jpg"></img>
      </picture>
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
    <div class="reveal__wrapper">
      <div class="unthinkable__reveal">
        <img class="reveal__margherita" src="./assets/img/margherita.png"></img>
        <img class="reveal__layer1" src="./assets/img/layer1.png"></img>
        <img class="reveal__layer2" src="./assets/img/layer2.png"></img>
      </div>
    </div>
    <div class="unthinkable__content">
      <h2 class="unthinkable__title"><?php echo $unthinkable_title ?></h2>
      <div class="unthinkable__text">
        <p>
          <?php
            echo $unthinkable;
          ?>
        </p>
      </div>
    </div>
  </section>

  <div class="black">
  <section class="italy">
    <div class="italy__content">
      <h2 class="italy__title"><?php echo $italy_title ?></h2>
      <div class="italy__text">
        <p class="italy__p1 italy__p"><?php echo $italy1;?></p>
        <p class="italy__p2 italy__p"><?php echo $italy2;?></p>
        <p class="italy__p3 italy__p"><?php echo $italy3;?></p>
      </div>
    </div>
  </section>


  <section class="righthand">
    <div class="righthand__title">
      <img src="./assets/img/B.svg" alt="B" class="title__B">
      <div class="title__words">
        <h2><span>odoni</span>'s</h2>
        <h2 class="title__words--right">right</h2>
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

<div class="uncertainty-shadow__wrapper">
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
          <div class="uncertainty__text--mobile">
            <p>
              <?php
                echo $uncertainty;
              ?>
            </p>
          </div>
          <div class="uncertainty__text--desktop">
            <img src="./assets/img/Q_text.svg" alt="uncertainty of Bodoni" class="uncertainty__Q">
          </div>
      </div>
    </section>
</div>

  <section class="talents--mobile">
    <h2 class="talents__title--mobile"><?php echo $talents_title ?></h2>
    <div class="talents__reveal--mobile">
      <div class="questionmark__wrapper--mobile"><img class="talents__questionmark--mobile" src="./assets/img/questionmark.svg"></img></div>
      <div class="talents__content--mobile">
        <div  class="talents__text1--mobile talents__text--mobile">
          <?php echo $talents1 ?>
        </div>
        <br><br>
        <div  class="talents__text2--mobile talents__text--mobile">
          <?php echo $talents2 ?>
        </div>
      </div>
    </div>
  </section>

  <section class="talents--desktop">
    <div class="talents__grid__wrapper--desktop">
      <div class="talents__grid--desktop">
        <div class="grid__questionmark--desktop">
          <img src="./assets/img/questup.svg">
          <img class="img-top" src="./assets/img/questup-pink.svg">
        </div>
        <div class="grid__questionmark--desktop">
          <img src="./assets/img/questdown.svg">
          <img class="img-top" src="./assets/img/questdown-pink.svg">
        </div>
        <div class="talents__title--desktop">
          <h2 class="talents__title--desktop"><?php echo $talents_title ?></h2>
        </div>
        <?php for ($i = 0; $i <= 3; $i++): ?>
            <div class="grid__questionmark--desktop">
              <img src="./assets/img/questup.svg">
              <img class="img-top" src="./assets/img/questup-pink.svg">
            </div>
            <div class="grid__questionmark--desktop">
              <img src="./assets/img/questdown.svg">
              <img class="img-top" src="./assets/img/questdown-pink.svg">
            </div>
        <?php endfor;?>
        <div class="grid__questionmark--desktop grid__questionmark--desktop1 grid__questionmark--desktopr">
          <img class="dissapear" src="./assets/img/questup.svg">
          <p class="img-top talents__text--desktop"><?php echo $talents1 ?></p>
        </div>
        <?php for ($i = 0; $i <= 3; $i++): ?>
            <div class="grid__questionmark--desktop">
              <img src="./assets/img/questdown.svg">
              <img class="img-top" src="./assets/img/questdown-pink.svg">
            </div>
            <div class="grid__questionmark--desktop">
              <img src="./assets/img/questup.svg">
              <img class="img-top" src="./assets/img/questup-pink.svg">
            </div>
        <?php endfor;?>
        <div class="grid__questionmark--desktop grid__questionmark--desktop2 grid__questionmark--desktopr">
          <img src="./assets/img/questdown.svg">
          <p class="img-top text__talents2 talents__text--desktop"><?php echo $talents2 ?></p>
        </div>
        <div class="grid__questionmark--desktop">
          <img src="./assets/img/questup.svg">
          <img class="img-top" src="./assets/img/questup-pink.svg">
        </div>
        <div class="grid__questionmark--desktop">
          <img src="./assets/img/questdown.svg">
          <img class="img-top" src="./assets/img/questdown-pink.svg">
        </div>
      </div>
    </div>
  </section>

  <div class="talents__questionmarks"><div class="questionmarks__grid"></div></div>

  <section class="defines">




      <!--<picture class="defines__title">
        <source
          sizes="(min-width: 1500px) 100vw,
                 (min-width: 320px) 50vw"
          srcset="./assets/img/defines_mobile.svg 300w,
                  ./assets/img/defines_desktop.svg 1050w"
          type="image/svg+xml" />
        <img class="defines__title"
             src="./assets/img/defines_desktop.jpg"></img>
      </picture>-->

      <picture class="defines__title">
        <source
            media="(min-width: 768px)"
            srcset="./assets/img/defines_desktop.svg"
            type="image/svg+xml">
          <source
            media="(min-width: 300px)"
            srcset="./assets/img/defines_mobile.svg"
            type="image/svg+xml">
          <img class="defines__title" src="./assets/img/defines_desktop.jpg"></img>
      </picture>




    <p class="defines__intro">
        <?php
          echo $defines;
        ?>
    </p>
  </section>

  <section class="characteristics">

    <div class="characteristics__desktop">
      <div class="img-container scroller">
        <svg
          version="1.1"
          class="characteristics__characteristics"
              >
          <image
            preserveAspectRatio="none"
            href="./assets/img/characteristics_mobile.svg"
            class="characteristics__img"
            id=""
            height="408px";
            width="1144px";
          />
        </svg>
      </div>
      <div class="desc-container--wrapper">
        <div class="desc-container">
        </div>
      </div>
    </div>



    <div class="characteristics__deskdesktop">
      <div class="img-container scroller">
        <svg
          version="1.1"
          class="characteristics__svg--desktop"
              >
          <image
            preserveAspectRatio="none"
            href="./assets/img/characteristics.svg"
            id=""
          />
          <circle class="hover1 path" cx="122.5" cy="73.5" r="20" stroke="#F8169D" stroke-width="3" fill="none" data-placement="top"  data-desc="1. Unbracketed thin serifs"/>
          <rect class="hover2 path" x="421" y="152" width="94" height="14" stroke="#F8169D" stroke-width="2" fill="none" data-desc="2. Horizontal stress"/>
          <circle class="hover3 path" cx="634" cy="162" r="19.5" stroke="#F8169D" stroke-width="3" fill="none" data-desc="3. Small aperture"/>
          <circle class="hover4 path" cx="799.5" cy="142.5" r="25" stroke="#F8169D" stroke-width="3" fill="none" data-desc="4. High contrast between thick and thin strokes "/>
          <rect class="hover5 path" x="993" y="113" width="104" height="14" transform="rotate(90 993 113)" stroke="#F8169D" stroke-width="2" fill="none" data-desc="5. Vertical axis"/>
        </svg>
      </div>
      <div class="desc-container--wrapper">
        <div class="desc-container">
        </div>
      </div>
    </div>


    <!-- <div class="characteristics__mobile">
      <div class="img-container scroller">
        <svg
          version="1.1"
          class="characteristics__img--mobile"
              >
          <image
            preserveAspectRatio="none"
            href="./assets/img/characteristics_mobile.svg"
            id=""
          />
        </svg>
        <img class="characteristics__img--mobile" src="./assets/img/characteristics_mobile.svg"></img>
      </div>
    </div>
  </section> -->

  <!--<section class="end">
    <p>Thanks to</p>
    <p>Margheritta Dall'Aglio Bodoni</p>
    <p>the legacy lives on</p>
  </section>-->


</main>

<footer class="footer">
  <img class="footer__slanted" src="./assets/img/SLANTED_SMOL.png"></img>
  <p class="footer__text">
        <?php
          echo $footer;
        ?>
  </p>
  <a href="https://www.slanted.de/"><div class="footer__font"><img class="font__picture" src="./assets/img/futura.jpeg"></img>
  <div class="font__content--wrapper">
    <div class="font__content">
    <h3 class="font__title">CHECK OUT LAST WEEKS FONT</h3><p class="font__text">When thinking of the vast amount of typefaces that have been produced over the last century, we often first recall the ones that have remained timeless even amidst the different design movements. For many designers and people alike, Futura, a sans serif typeface, is first on the list when choosing a typeface for a design....</p></div>
  </div></div></a>
  <div class="footer__socials">
  <a href="https://twitter.com/slanted_blog?s=20"><img class="socials__twitter" src="./assets/img/twitter.svg"></img></a>
  <a href="https://www.facebook.com/slanted.blog.magazine/"><img class="socials__facebook" src="./assets/img/facebook.svg"></img></a>
  <a href="https://www.instagram.com/slanted_publishers"><img class="socials__instagram" src="./assets/img/instagram.svg"></img></a>
  <a href="https://www.youtube.com/user/SLANTEDde"><img class="socials__youtube" src="./assets/img/youtube.svg"></img></a>
  </div>
  <p class="footer__license">&copy; slanted publishers 2022</p>
</footer>
