<section class="content">
<div class="mission__content">
<article class="userlist__navigation">

      <a href="index.php?page=index"><img class="userlist__logo" src="./assets/img/logo.png" alt="Logo rebel planner"></a>

    <div class="userlist__title__container">

      <p class="userlist__title">Mission details</p>

      <p class="userlist__username"> Welcome <?php echo $_SESSION['username']?></p>

    </div>

    <div class="userlist__logout">
      <a href="index.php?page=logout" class="userlist__logout__button">log out</a>
    </div>

</article>
<article class="mission__detail__navigation__wrapper">
<div class="mission__detail__navigation">
    <button class="detail__nav__button" onClick="document.getElementById('supplies').scrollIntoView();">Supplies</button>
    <button class="detail__nav__button" onClick="document.getElementById('ships').scrollIntoView();">Ships</button>
    <button class="detail__nav__button" onClick="document.getElementById('comments').scrollIntoView();">Comments</button>
  </div>
</article>
<?php if(empty($mission)): ?>
    <p class="notfound">This mission could not be found</p>
  <?php else: ?>
    <article class="mission__section__header">
    <div class="mission__detail__header__container">
      <div class="mission__text__container">
        <p class="mission__detail__date"><?php echo $mission['date'];?></p>
        <h2 class="mission__detail__title mission__detail__title__header"><?php echo $mission['title'];?></h2>
        <p class="mission__detail__description"><?php echo $mission['description'];?></p>
      </div>
    <?php if(empty($planet)): ?>
      <div class="planet__picture__container">
      <img class="planet__picture" src="./assets/planets/<?php echo $planetData['picture'];?>" width="256" height="256"></img>
      </div>
  <div class=mission__planet__info>
    <h3 class="planet__name"><?php echo $planetData['planet']; ?></h3>
    <div class="mission__planet__coordinates">
      <p class="planet__coordinate_ra"><?php echo $planetData['coordinate_ra']; ?></p>
      <p class="planet__coordinate_dec"><?php echo $planetData['coordinate_dec']; ?></p>
    </div>
  </div>
       <?php endif; ?>
           <?php if($userHigherup === 1): ?>

  <div class="update__wrapper">
  <!-- add JS to open -->
    <h3 class="update__title__title">Change text</h3>
        <form method="post" action="index.php?page=detail&amp;id=<?php echo $mission['id']; ?>&amp;planet_id=<?php echo $mission['planet_id']; ?>">
          <input type="hidden" name="actionUpdate" value="updateTitle"/>
            <p class="uptitle" >update title</p>
            <div class="update__container">
              <input type="text" class="updatetitle__input" name="updatetitle">
            </div>
            <span class="error errorupdate"><?php if (!empty($errors['updatetitle'])) echo $errors['updatetitle']; ?></span>
           </label>
            <p class="updescription">update description</p>
            <div class="update__container">
              <textarea class="updatetext__input" name="updatetext"></textarea>
            </div>
            <span class="error errorupdate"><?php if (!empty($errors['updatetext'])) echo $errors['updatetext']; ?></span>
            </label>
        <div class="submit__container  submitupdate">
          <button type="submit" class="detailsubmit">Update title</button>
        </div>
        </form>
    </div>
  <?php endif; ?>
    </div>
    </article>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<div class="ships__supplies__container">
  <article id="supplies" class="section__supply">
  <h2  class="mission__detail__title">Supplies</h2>
  <div class="details__container">
    <?php if ($supplyData->count() == 0): ?>
      <p class="nothingfound">No Supplies needed</p>
    <?php endif; ?>
  <?php
  if(!empty($supplyData)){
    foreach ($supplyData as $supply){
              echo('<div class="supply">
              <p class="supply__name">' . $supply->supplyname . '</p>
              <div class="supply__innercontainer">
              <p class="supply__amount">' . $supply->amount . '</p>
              ');
              if($userHigherup === 1){
                echo('<a class="delete__supply__button" href="index.php?page=detail&id='. $mission->id .'&planet_id='. $mission->planet_id .'&action=deleteSupply&supply_id='. $supply->id .'">X</a>');
              }
              echo('</div></div>');
    };
  }
  ?>
  </div>
    <?php if($userHigherup === 1): ?>
      <div class="addsupply__container">
    <h3 class="addsupply__title">Add Supply</h3>
        <form method="post" action="index.php?page=detail&amp;id=<?php echo $mission['id']; ?>&amp;planet_id=<?php echo $mission['planet_id']; ?>&#supplies">
          <input type="hidden" name="actionSupply" value="addSupply"/>
            <div class="supplyname__container">
              <input type="text" class="supplyname
              <?php
            if(!empty($errors['supplyname'])){
            echo 'redborder';
            }
            ?>" name="supplyname" placeholder="supply name">
            </div>
            <span class="error errorsupply"><?php if (!empty($errors['supplyname'])) echo $errors['supplyname']; ?></span>
          </label>
        <div class="supplyamount__container">
          <label class="supplyamount__title">amount</label>
        <input type="number" class="supplyamount <?php
          if(!empty($errors['supplyamount'])) {
            echo "redborder";
          }?>" name="supplyamount" min="1" max="100" value="1">
        </div>
        <span class="error errorsupply"><?php if (!empty($errors['supplyamount'])) echo $errors['supplyamount']; ?></span>
        <div class="submit__container">
          <button type="submit" class="detailsubmit">Add supply</button>
        </div>
        </form>
        </div>
  <?php endif; ?>
  </article>
  <article  id="ships" class="section__ship">
  <h2 class="mission__detail__title">Ships</h2>
  <div class="details__container">
    <?php if ($shipData->count() == 0): ?>
      <p class="nothingfound">No ships needed</p>
    <?php endif; ?>
  <?php
  if(!empty($shipData)){
    foreach ($shipData as $ship){
              echo('<div class="ship">
              <div class="ship__doublecontainer">
              <img class="ship__image" src="./assets/spaceships/'. $ship->picture .'" alt="image of ship">
              <div class="ship__type__container">
              <p class="ship__name">' . $ship->shipname . '</p>
              <p class="ship__type">' . $ship->type . '</p>
              </div>
              </div>
              <div class="ship__innercontainer">
              <p class="ship__amount">' . $ship->amount . '</p>
              ');
              if($userHigherup === 1){
                echo('<a class="delete__ship__button" href="index.php?page=detail&id='. $mission->id .'&planet_id='. $mission->planet_id .'&action=deleteShip&ship_id='. $ship->id .'">X</a>');
              }
              echo('</div></div>');
    };
  }
  ?>
  </div>
  <?php if($userHigherup === 1): ?>
    <div class="addsupply__container">
    <h3 class="addsupply__title">Add Ship</h3>
    <form method="post" action="index.php?page=detail&amp;id=<?php echo $mission['id']; ?>&amp;planet_id=<?php echo $mission['planet_id']; ?>&#ships">
    <input type="hidden" name="actionShip" value="addShip" />
    <div class="shipname__container">
    <select class="shipselect" name="shipselect">
    <?php
    if(!empty($allshipData)){
      foreach ($allshipData as $allship){
              echo('<option value=' . $allship->ship_id . '>' . $allship->shipname . '</option>
              ');
      };
    }
      ?>
      </select>
  </div>
  <?php
          if (!empty($_POST['ship'])) echo $_POST['ship'];?>
            <span class="error errorsupply"><?php if (!empty($errors['ship'])) echo $errors['ship']; ?></span>
      <div class="shipamount__container">
          <label class="shipamount__title" for="shipamount">amount</label>
        <input type="number" class="shipamount <?php
          if(!empty($errors['shipamount'])) {
            echo "redborder";
          }?>" name="shipamount" min="1" max="5" value="1">
      </div>
      <span class="error errorsupply"><?php if (!empty($errors['shipamount'])) echo $errors['shipamount']; ?></span>
      <div class="submit__container">
          <button type="submit" class="detailsubmit">Add ship</button>
        </div>
    </form>
  </div>
  <?php endif; ?>

  </article>
</div>

  <article id="comments" class="mission__section section__comments">
  <h3 class="mission__detail__title">Comments</h3>
  <div class="details__container">
    <?php if ($comments->count() == 0): ?>
      <p class="nothingfound">No comments yet</p>
    <?php endif; ?>
    <?php
  if(!empty($comments)){
    foreach ($comments as $comment){

              echo('<div class="');
              if($comment->username !== $_SESSION['username']) {
              echo('comment');
              }else{
              echo('mycomment');};

              echo('">
              <p class="comment__');
              if($comment->username !== $_SESSION['username']) {
              echo('name');
              }else{
              echo('myname');
              };
              echo('">' . $comment->username . '</p>
              <p class="comment__');
              if($comment->username !== $_SESSION['username']) {
              echo('text');
              }else{
              echo('mytext');
              };
              echo('">' . $comment->text . '</p>
              </div>');
              };
  };
  ?>
  </div>
  <div class="addsupply__container">
  <h3 class="addcomment__title">Add Your Comment</h3>
        <form method="post" action="index.php?page=detail&amp;id=<?php echo $mission['id']; ?>&amp;planet_id=<?php echo $mission['planet_id']; ?>&#comments">
          <input type="hidden" name="action" value="addComment" />
          <label class="addcomment__container">
            <span class="label__addcoment">Your Comment as <?php echo $_SESSION['username']; ?>:</span>
            <textarea class="commentname <?php
          if(!empty($errors['text'])) {
            echo "redborder";
          }?>" name="text"><?php
            if (!empty($_POST['text'])) echo $_POST['text'];
            ?></textarea>
          </label>
          <span class="error"><?php if (!empty($errors['text'])) echo $errors['text']; ?></span>
        <div class="submit__container">
          <button type="submit" class="detailsubmit">Submit</button>
        </div>
        </form>
  </div>
  </article>
  <?php endif; ?>
</div>
</section>
