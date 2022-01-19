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
