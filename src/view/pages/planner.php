<section class="content--planner">
  <section class="userlist__navigation">

      <a href="index.php?page=index"><img class="userlist__logo" src="./assets/img/logo.png" alt="Logo rebel planner"></a>
    <div class="planner__title__container">

      <p class="userlist__title">Planner Home<!--Planner--></p>

      <p class="userlist__username"> Welcome <?php echo $_SESSION['username']?></p>

    </div>
    <div class="button__container">

       <?php if($userHigherup === 1): ?>
        <div class="planner__manageaccounts">
        <a href="index.php?page=userlist" class="userlist__manage__button">Manage accounts</a>
        </div>
        <?php endif; ?>

    <div class="userlist__logout">
      <a href="index.php?page=logout" class="userlist__logout__button">log out</a>
    </div>
    </div>

</section>


<section class="planner">

  <div class="planner__welcome">Hey <?php echo $userData->rank?> <?php echo $userData->username?>. Welcome to the planner.</div>

  <section class="today">
    <div class="title__wrapper">
      <h2 class="today__title">todays missions</h2>
    </div>
    <div class="today_missions">

        <?php if ($todaysMissions->count() == 0): ?>
        <p class="nomissions_today">No Missions for today</p>
        <?php else: ?>
        <?php foreach($todaysMissions as $todaysMission): ?>
          <a class="missions__mission" href="index.php?page=detail&id=<?php echo $todaysMission->id?>&planet_id=<?php echo $todaysMission->planet_id?>">
        <div class="mission__wrapperwrapper">
          <div class="mission__wrapper">
            <h3 class="mission__title"><?php echo $todaysMission->title?></h3>
            <p  class="mission__description"><?php echo $todaysMission->description?></p>
            <div class="tags__wrapper">
              <?php if ($todaysMission->length):?>
              <div class="mission__tag mission__tag--length"><p class="tag__content"><?php echo $todaysMission->length?></p></div>
              <?php endif; ?>
              <?php if ($todaysMission->type):?>
              <div class="mission__tag mission__tag--type"><p class="tag__content"><?php echo $todaysMission->type?></p></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </a>
        <?php endforeach; ?>
        <?php endif; ?>
      </section>
    </div>
  </section>


  <section class="planner__missions">
<?php if($userHigherup === 1): ?>
<div id="createmission_id" class="missions__create__container">
<div class="create__header__container">
  <h2 class="missions__create__title">Create a mission</h2>
  <!--<i class="fa fa-plus"></i>-->
</div>
    <form method="post" action="index.php?page=planner#createmission_id" class="form__content">
        <input type="hidden" name="action" value="createMission">


        <!---------------->


        <label class="planner__form__title">mission title
        <div class="planner__form__title__container">
          <input class="missions__create__input <?php
          if(!empty($errors['title'])){
            echo 'redborder';
          }
          ?>" type="text" name="title" placeholder="title" min="5" value="<?php
           if(!empty($_POST['title'])){
             echo $_POST['title'];
           }
           ?>">
        </div>
        </label>
        <p class="errormissions">
        <?php
          if(!empty($errors['title'])){
            echo $errors['title'];
          }
          ?></p>


        <!---------------->

        <label class="planner__form__title">Date
        <div class="planner__date__container">
          <input class="missions__create__input <?php
          if(!empty($errors['date'])){
            echo 'redborder';
          }
          ?>" type="date" name="date" value="<?php
           if(!empty($_POST['date'])){
             echo $_POST['date'];
           }
           ?>">
        </div>
        </label>
        <p class="errormissions">
        <?php
          if(!empty($errors['date'])){
            echo $errors['date'];
          }
          ?></p>

        <!---------------->

        <label class="planner__form__title">Planet

      <div class="planner__planet__container">
        <select class="planetselect" name="planetselect">
        <?php
        if(!empty($planetData)){
          foreach ($planetData as $planet){
                  echo('<option value=' . $planet->id . '>' . $planet->planet . '</option>
                  ');
          };
        }
          ?>
          </select>
      </div>
        <?php if (!empty($_POST['planet'])) echo $_POST['planet'];?>
        </label>
        <span class="errormissions">
        <?php
          if(!empty($errors['planets'])){
            echo $errors['planets'];
          }
          ?>
        </span>

        <!---------------->

        <label class="planner__form__title">Description
        <div class="planner__description__container">
          <textarea class="missions__create__input <?php
          if(!empty($errors['description'])){
            echo 'redborder';
          }
          ?>" name="description" placeholder="Enter the description of the mission here" value="<?php if(!empty($_POST['description'])) { echo $_POST['description'];} ?>"></textarea>
        </div>
        </label>
        <p class="errormissions">
        <?php
          if(!empty($errors['description'])){
            echo $errors['description'];
          }
          ?></p>


        <!---------------->

        <label class="planner__form__title">Type of mission

        <select class="typeselect" name="typeselect">
          <option value="notype">no type</option>
          <option value="capturing">capturing</option>
          <option value="defending">defending</option>
          <option value="saving">saving</option>
          <option value="resupplying">resupplying</option>
          <option value="transport">transport</option>
          <option value="meeting">meeting</option>
          <option value="leisure">leisure</option>
        </select>
        <?php if (!empty($_POST['type'])) echo $_POST['type'];?>
        </label>
        <span class="errormissions">
        <?php
          if(!empty($errors['types'])){
            echo $errors['types'];
          }
          ?>
        </span>

        <!---------------->

        <label class="planner__form__title">Length of mission
        <select class="lengthselect" name="lengthselect">
          <option value="nolength">no duration</option>
          <option value="long">long</option>
          <option value="average">average</option>
          <option value="short">short</option>
        </select>
        <?php if (!empty($_POST['length'])) echo $_POST['length'];?>
        </label>
        <span class="errormissions">
        <?php
          if(!empty($errors['lengths'])){
            echo $errors['lengths'];
          }
          ?>
        </span>

        <!---------------->

        <div class="missions__submit__container">
            <input class="missions__submit__button" type="submit" value="Create">
        </div>
    </form>
</div>
<?php endif; ?>
<h2 class="missions__title">future missions</h2>


<div id="missionsfilter" class="missions__search__container">
<form class="missions__searchform" method="post" action="index.php?page=planner#missionsfilter">
  <input type="hidden" name="actionFilter" value="filterMissions">
        <div class="search__container">
          <label class="missions__search__title">Search Missions</label>
          <div class="missions__filter__container">
            <input class="missions__filter__input" type="text" name="searchTitle" placeholder="">
          </div>
        </div>
          <div class="search__submit__button__container">
            <input class="missions__search__submit__button" type="submit" value="Search">
          </div>
</form>

<!----->
<div class="missions">

    <?php if ($missions->count() == 0): ?>
    <p class="nomissions">No Missions found</p>
    <?php else: ?>
    <?php foreach($missions as $mission): ?>
    <div class="missions__date">
      <h3 class="date__title"><?php echo date("d-m-Y", strtotime($mission->date))?></h3>
      <a class="missions__mission" href="index.php?page=detail&id=<?php echo $mission->id?>&planet_id=<?php echo $mission->planet_id?>">
        <div class="mission__wrapperwrapper">
          <div class="mission__wrapper">
            <h3 class="mission__title"><?php echo $mission->title?></h3>
            <p  class="mission__description"><?php echo $mission->description?></p>
            <div class="tags__wrapper">
              <?php if ($mission->length):?>
                <div class="mission__tag mission__tag--length"><p class="tag__content"><?php echo $mission->length?></p></div>
              <?php endif; ?>
              <?php if ($mission->type):?>
                <div class="mission__tag mission__tag--type"><p class="tag__content"><?php echo $mission->type?></p></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </a>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </section>
</div>
</section>
</section>

<button id="scrollToday" class="scrollToday" title="Go to top">Today</button>
