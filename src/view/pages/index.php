<header class="header">

</header>

<main class="main">
  <section class="intro">
    <div class="intro__title">
      <p><span>M</span>argherita</p>
      <p>Dall'</p>
      <p><span class="pink">A</span>glio</p>
    </div>
    <div class="intro__text">
      <p>The woman who continued where Bodoni couldn't</p>
    </div>
  </section>

  <section class="tragedy">
    <div class="tragedy__title">
      <p>A tragedy has</p>
      <div class="tragedy__title--struck">
        <p class="struck--s">s</p>
        <p class="struck--t">t</p>
        <p class="struck--r">r</p>
        <p class="struck--u">u</p>
        <p class="struck--c">c</p>
        <p class="struck--k">k</p>
      </div>
    </div>
    <div class="tragedy__text">
      <p>
        In 1788 Giambattista Bodoni made published one of his biggest books ever. The <span>Manuale Tipografico</span>. It represents one of history's greatest typographical achievements. Bodoni has gotten a lot of praise for it at his time. It was made in order of the Duke of Parma. He as well showed its praise for the book: in 1789,  the Duke stated “well-designed type derived its beauty from four principles: uniformity of design, sharpness and neatness, good taste, and charm. All of which come together in La Manuale Tipografico.”
        Shortly after the release of the first book, Bodoni decided to make a second edition, showing his new aquired skills and printing an even more impressive collection of typefaces.

        But on November 30th 1813 a tragedy struck: Giambattista Bodoni <span>died</span>, leaving the second edition of the Manuale Tipografico unfinished. A great piece of history, never to be published. This would be an absolute tragedy for the world of typographers.
      </p>
    </div>
  </section>

<section class="unthinkable">
    <h2 class="unthinkable__title">Margherita does the un <span>____</span> thinkable</h2>
    <div class="unthinkable__text">
      <p>Five years after the events all hope for the Manuale was lost. Until, in 1818 Margherita Dall’ Aglio, the widow of Bodoni made a miracle happened. Margherita had managed to complete the entire book, with the help of her assistant Luigi Orsi.

      The second edition was published in two volumes, it was over 600 pages long and contained 265 pages of roman characters, “imperceptibly declining in size, romans, italics, and script types, and the series of 125 capital letters; 181 pages of Greek and Oriental characters; 1036 decorations and 31 borders; followed in the last 20 pages by symbols, ciphers, numerals, and musical examples.

      An absolute masterpiece in the world of typography. It was very impressive that the widow of Bodoni had so much skill to make this possible. Some were suprised, some may even have been sceptical of how this was possible. The question arrised: Who is Margherita Bodoni?

      And it is to her that we owe the publication in 1818, of the Manuale Tipografico of the Cavaliere Giambattista Bodoni, the typographer's immense effort that lasted a lifetime and was realized only thanks to this woman who "knew well the gravity of the load I had to carry; but I gathered all my strength; love for him and for his glory sustained them; and I bravely set out on the task, so that Italy and Europe would not be deprived of such a distinguished monument of typography".</p>
    </div>
    <img class="unthinkable__margherita" src="./assets/planets/" height="256"></img>
    <img class="unthinkable__layer1" src="./assets/planets/" height="256"></img>
    <img class="unthinkable__layer2" src="./assets/planets/" height="256"></img>
  </section>

  <section class="italy"></section>

  <section class="righthand"></section>

  <section class="shadow"></section>

  <section class="uncertainty"></section>

  <section class="hidden"></section>

  <section class="defines"></section>

  <section class="characteristics"></section>


</main>

<footer class="footer">

</footer>






























<section class="content">
<article class="login__content">
<div class="login__logo__container"><img class="login__logo" src="./assets/img/logo.png" alt="Logo rebel planner" width="50px" height="50px"></img></div>
<div class="login__title__container"><h class="login__title">Rebel Alliance Mission Planner</h></div>
<div class="login__container">
  <h2 class="login__subtitle">Login to access the rebel alliance planner</h2>
    <form method="post" action="index.php" class="form">
        <input type="hidden" name="action" value="userLogin">

        <label class="form__login__title">Username</label>

          <div class="login__input__container"><input class="login__input <?php
          if(!empty($_POST) && empty($_POST['username'])) {
            echo 'redborder';
          }
          ?>" type="text" name="username" placeholder="Username" value=""></div>

        <?php
          if(!empty($_POST) && empty($_POST['username'])) {
            echo '<p class="error__login">Please enter in a username</p>';
          }
          ?>

        <!----------------------->

          <label class="form__login__title">Password</label>

          <div class="login__input__container"><input class="login__input <?php
          if(!empty($wrongPassword)) {
            echo "redborder";
          }?>" type="password" name="password" placeholder="Password" value=""></div>

        <?php
          if(!empty($wrongPassword)) {
            echo '<p class="error__login">Wrong password</p>';
          }
          ?>

          <div class="login__submit__container"><input class="login__submit__button" type="submit" value="Log in"></div>
    </form>
<div class="login__disclaimer__container">
<p class="login__disclaimer__text">[DISCLAIMER: only for people within the rebel alliance]</p>
<p class="login__disclaimer__text">KEEP THE PLANNER SECRET</p>
</div>
</div>
</article>
</section>
