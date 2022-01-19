<section class="content">
<!-- Navigation 1 sectie met 3 divs waarvan 1 logo, 1 met 2 titels en 1 met een logout button
sectie(div[logo]div[title,username]div[manage accounts, logout]) -->
<section class="userlist__navigation">

      <a href="index.php?page=index"><img class="userlist__logo" src="./assets/img/logo.png" alt="Logo rebel planner"></a>

    <div class="userlist__title__container">

      <p class="userlist__title">Manage Users<!--Planner--></p>

      <p class="userlist__username"> Welcome <?php echo $_SESSION['username']?></p>

    </div>

    <div class="userlist__logout">
      <!-- <a href="index.php?page=userlist" class="classnaam">Manage accounts</a> -->
      <a href="index.php?page=logout" class="userlist__logout__button">log out</a>
    </div>

</section>
<?php if($userHigherup === 0): ?>
  <div class="hacking__container">
  <p class="hacking">Hacking detected:</p>
  <p class="hacking__subtitle">you are being tracked and terminated</p>
  </div>
<?php endif; ?>
<?php if($userHigherup === 1): ?>
<div class="userlist__create__container">
  <div class="userlist__HUD__container">
   <img class="userlist__HUD__img" src="./assets/img/futureHUD.png" alt="Future HUD element">
  </div>
    <form method="post" action="index.php?page=userlist" class="form">
        <h2 class="userlist__create__title">Create an account</h2>
        <input type="hidden" name="actionCreate" value="createUser">

        <label class="form__title"><p class="input__title">Username</p>
          <input class="userlist__create__input input <?php
          if(!empty($errors['username'])){
            echo 'errorborder';
          }
          ?>" type="text" name="username" placeholder="Username" min="15" value="<?php
           if(!empty($_POST['username'])){
             echo $_POST['username'];
           }
           ?>">
        </label>
        <p class="erroruserlist">
        <?php
          if(!empty($errors['username'])){
            echo $errors['username'];
          }
          ?></p>

        <!---------------->

        <label class="form__title"><p class="input__title">Rank</p>
          <select class="userlist__create__input colorcyan" name="rank">
          <?php
          if(!empty($ranksData)){
          foreach ($ranksData as $rank){
          echo('<option value=' . $rank->rank . '>' . $rank->rank . '</option>
          ');
          };
          }
    ?>
    </select>
        </label>
        <p class="erroruserlist">
        <?php
          if(!empty($errors['rank'])){
            echo $errors['rank'];
          }
          ?></p>

        <!---------------->

          <label class="form__title"><p class="input__title">Password</p>

          <input class="userlist__create__input input <?php
        if(!empty($errors['password'])){
          echo 'errorborder';
        }?>" type="password" name="password" placeholder="Password123" value="<?php
           if(!empty($_POST['password'])){
             echo $_POST['password'];
           }
           ?>" min="5">
        </label>
        <p class="erroruserlist">
        <?php
        if(!empty($errors['password'])){
          echo $errors['password'];
        }?>
        </p>


           <label class="form__title"><p class="input__title">Make Higher Up?</p>

            <select class="select" name="higherup">

              <option value="0">No</option>

              <option value="1">Yes</option>


          </select>
        </label>

        <div class="userlist__createbottom__container">
           <?php
          if(!empty($_POST['actionCreate']) && (empty($_POST['username']) || empty($_POST['rank']) || empty($_POST['password']))) {
            echo '<p class="errorall">Please fill in all fields</p>';
          }
          ?>
            <div class="userlist__submit__container">
              <input class="userlist__submit__button" type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>
<div id="searchuser" class="userlist__search__container">
<form class="userlist__searchform" method="post" action="index.php?page=userlist&#searchuser">
  <input type="hidden" name="actionFilter" value="filterUserlist">
        <label class="userlist__search__title">Search user</label>
        <div class="userlist__filter__container">
          <input class="userlist__filter__input" type="text" name="searchName" placeholder="Name">
          <select class="userlist__filter__input colorcyan" name="searchRank">
            <option value="">no rank</option>
          <?php
          if(!empty($ranksData)){
          foreach ($ranksData as $rank){
          echo('<option value=' . $rank->rank . '>' . $rank->rank . '</option>
          ');
          };
          }
    ?>
    </select>
        </div>
        <input class="userlist__submit__button" type="submit" value="Submit">
</form>
</div>
  <div class="userlist__info__container">
    <ul class="userlist__info__list">
      <li class="userlist__info__rank">Rank</li>
      <li class="userlist__info__name">Name</li>
      <li class="userlist__info__password">Password</li>
    </ul>
  </div>

  <?php
        if(!empty($userlist)){
          echo('<div class="userlist__container">
          <ul>');
          foreach ($userlist as $user){



            if($user->username !== $_SESSION['username']) {
            echo('<li class="users">');
            echo('<div class="users__container">');
            echo('
            <p class="user__rank">' . $user->rank . '</p>
            <p class="user__name">' . $user->username . '</p>

            ');
            if($user->is_higherup === 0){
              echo '<p class="user__higherup"></p>';
            }
            else if($user->is_higherup === 1) {
              echo '<img class="user__higherup" src="./assets/img/star.png" alt="Star Rank">';
            };
            if($userHigherup === 1){
              echo('<p class="user__password">' . $user->password . '</p>
              <a class="delete__user--link" href="index.php?page=userlist&action=deleteUser&user_id='. $user->id .'">Delete User</a>');
            }
            echo('</div>');
            echo('</li>');
          }
          };
        echo('</ul>
        </div>');
        }

          ?>
<?php endif; ?>
</section>
