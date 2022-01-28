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
    <div class="reveal__wrapper">
      <div class="unthinkable__reveal">
        <img class="reveal__margherita" src="./assets/img/margherita.png"></img>
        <img class="reveal__layer1" src="./assets/img/layer1.png"></img>
        <img class="reveal__layer2" src="./assets/img/layer2.png"></img>
      </div>
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

  <section class="characteristics">
    <div class="container">
      <div class="img-container scroller">
        <svg
          version="1.1"
          class="characteristics__characteristics"
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
          <path
                  class="path"
              id="one"
                  data-placement="top" data-desc="Ekran"
              d="M 109.75136,208.98078 376.92387,384.13952 588.6664,207.87218 317.05949,51.559639 Z" />
            <path
              class="path"
              id="two"
                  data-toggle="tooltip" data-placement="top" data-desc="Joystick"
              d="m 555.39195,357.06568 24.6928,16.06991 h 8.62288 l 23.9089,-20.38135 0.78389,-6.27119 -21.16525,-15.28602 -7.05508,-1.56779 -7.44704,0.78389 -21.5572,18.02967 z" />
            <path
                class="path"
              id="three"
                  data-toggle="tooltip" data-placement="top" data-desc="Jakiś tam knefel"
              d="m 768.81383,551.53807 12.1946,7.20589 10.5317,6.37445 9.97739,8.8688 9.14595,4.4344 -55.42998,48.22408 -14.68895,6.92875 -8.03734,1.38575 -11.6403,-1.6629 -17.73759,-9.70025 -11.6403,-9.14595 11.91745,-8.86879 36.30663,-29.65504 24.66635,-21.0634 z"
          />
        </svg>
      </div>
      <div class="desc-container">
      </div>
    </div>
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
