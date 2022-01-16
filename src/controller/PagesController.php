<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/User.php';
require_once __DIR__ . '/../model/Mission.php';
require_once __DIR__ . '/../model/Ship.php';
require_once __DIR__ . '/../model/Supply.php';
require_once __DIR__ . '/../model/Planet.php';
require_once __DIR__ . '/../model/MissionComment.php';
require_once __DIR__ . '/../model/ShipList.php';
require_once __DIR__ . '/../model/Rank.php';


class PagesController extends Controller {

  public function index() {
  if(!empty($_SESSION['username'])){
    header('Location:index.php?page=planner');
    exit();
  }
      if (!empty($_POST['action']) && $_POST['action'] == 'userLogin') {
        if ($_POST['action'] == 'userLogin'){

          $errorsLogin = User::validateLogin($_POST['username'], $_POST['password']);

          if(empty($errorsLogin)){
            $user = User::where('username', '=', $_POST['username'])->first();
            if($user){
              if($user->password === $_POST['password']){
                $_SESSION['username'] = $user->username;
                header('Location:index.php?page=planner');
                exit();
              } else {
                $this->set('wrongPassword','Wrong password try again');
              }
            }
          } else {
            $this->set('errors',$errorsLogin);
          }
        }
      };

    $this->set('title', 'login');
  }

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  public function detail() {
    if(empty($_SESSION['username'])){
    header('Location:index.php');
    exit();
  }
    if(!empty($_GET['id'])) {

      $mission = Mission::find($_GET['id']);

      $supply = Supply::where('mission_id','=',$_GET['id'])->orderBy('id','DESC')->get();

      $ship = Ship::where('mission_id','=',$_GET['id'])->orderBy('id','DESC')->get();

      $allship = ShipList::get();

      $planet = Planet::find($_GET['planet_id']);

      $comment = MissionComment::where('mission_id','=',$_GET['id'])->orderBy('id','DESC')->get();

      if (!empty($_POST['action'])) {
        if ($_POST['action'] == 'addComment') {
          $newComment = new MissionComment;
          $newComment->text = $_POST['text'];
          $newComment->mission_id = $mission->id;
          $newComment->username = $_SESSION['username'];
          $errors = MissionComment::validateComment($newComment);
          if (empty($errors)) {
            $newComment->save();
            header('Location:index.php?page=detail&id=' . $mission->id .'&planet_id=' . $mission->planet_id . '&#comments');
            exit();
          }
          else{
            $this->set('errors', $errors);
          }
        }
      }

      if (!empty($_POST['actionSupply'])) {
        if ($_POST['actionSupply'] == 'addSupply') {
          $newSupply = new Supply;
          $newSupply->supplyname = $_POST['supplyname'];
          $newSupply->mission_id = $mission->id;
          $newSupply->amount = $_POST['supplyamount'];
          $errors = Supply::validateSupply($newSupply);
          if (empty($errors)) {
            $newSupply->save();
            header('Location:index.php?page=detail&id=' . $mission->id .'&planet_id=' . $mission->planet_id . '&#supplies');
            exit();
          }
          else{
            $this->set('errors', $errors);
          }
        }
      }

      //add ships

      if (!empty($_POST['actionShip'])) {
        if ($_POST['actionShip'] == 'addShip') {
          $newShip= new Ship;
          $newShip->shipname = ShipList::where('ship_id','=',$_POST['shipselect'])->value('shipname');
          $newShip->mission_id = $mission->id;
          $newShip->amount = $_POST['shipamount'];
          $newShip->type = ShipList::where('ship_id','=',$_POST['shipselect'])->value('type');
          $newShip->picture = ShipList::where('ship_id','=',$_POST['shipselect'])->value('picture');
          $errors = Ship::validateShip($newShip);
          if (empty($errors)) {
            $newShip->save();
            header('Location:index.php?page=detail&id=' . $mission->id .'&planet_id=' . $mission->planet_id . '&#ships');
            exit();
          }
          else{
            $this->set('errors', $errors);
          }
        }
      }

      if(!empty($_GET['id'])){
      $updateMission = Mission::find($_GET['id']);
      }

      //update title and text

      if (!empty($_POST['actionUpdate'])) {
        if ($_POST['actionUpdate'] == 'updateTitle') {
        if(!empty($_POST['updatetitle'])){
          $updateMission->title= $_POST['updatetitle'];
        }
        if(!empty($_POST['updatetext'])){
        $updateMission->description= $_POST['updatetext'];
        }
        //validate the input
        $errors = Mission::validateUpdate($updateMission);
        if (empty($errors)) {
          $updateMission->save();
          header('Location:index.php?page=detail&id=' . $mission->id .'&planet_id=' . $mission->planet_id);
          exit();
        } else {
          $this->set('errors', $errors);
        }
        }
      }

      //remove supply

      if(!empty($_GET['action'])){
      if($_GET['action'] == 'deleteSupply' && !empty($_GET['supply_id'])){

        $removedSupply = Supply::where('id','=',$_GET['supply_id'])->first();
        if (!empty($removedSupply)) {
          Supply::destroy($_GET['supply_id']);
          header('Location:index.php?page=detail&id=' . $mission->id .'&planet_id=' . $mission->planet_id . '#supplies');
        }
      }
    }

    //remove ship

    if(!empty($_GET['action'])){
      if($_GET['action'] == 'deleteShip' && !empty($_GET['ship_id'])){
        $removedShip = Ship::where('id','=',$_GET['ship_id'])->first();
        if (!empty($removedShip)) {
          Ship::destroy($_GET['ship_id']);
          header('Location:index.php?page=detail&id=' . $mission->id .'&planet_id=' . $mission->planet_id . '#ships');
        }
      }
    }


      $this->set('comments',$comment);
      $this->set('mission', $mission);
      $this->set('supplyData',$supply);
      $this->set('shipData',$ship);
      $this->set('allshipData',$allship);
      $this->set('planetData', $planet);
     }

    if(!empty($_SESSION['username'])){
      $userData = User::where('username','=',$_SESSION['username'])->first();
      $this->set('userHigherup', $userData->is_higherup);
    }
    $this->set('title', 'detail');
  }

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

   public function planner(){
  if(empty($_SESSION['username'])){
    header('Location:index.php');
    exit();
  }

  $userData = User::where('username', '=', $_SESSION['username'])->first();
  $dateToday = date('Y-m-d');

  $planet = Planet::get();

  $missions = Mission::whereDate('date', '>', $dateToday);

  $todaysMissions = Mission::whereRaw('Date(date) = CURDATE()')->get();;



  // create a new mission
  if (!empty($_POST['action'])) {
    if ($_POST['action'] == 'createMission') {
      $newMission = new Mission();
      $newMission->title = $_POST['title'];
      $newMission->date = $_POST['date'];
      $newMission->planet_id = $_POST['planetselect'];
      $newMission->description = $_POST['description'];
      if ($_POST["typeselect"] !== "notype") {
        $newMission->type = $_POST['typeselect'];
      }
      if ($_POST["lengthselect"] !== "nolength") {
        $newMission->length = $_POST['lengthselect'];
      }
      $errorsCreate = Mission::validateMission($newMission);
      if (empty($errorsCreate)) {
        $newMission->save();
        header('Location: index.php?page=planner');
        exit();
      } else {
        $this->set('errors', $errorsCreate);
      }
    }
  }

  if(!empty($_SESSION['username'])){
      $userDataLoggedPerson = User::where('username','=',$_SESSION['username'])->first();
      $this->set('userHigherup', $userDataLoggedPerson->is_higherup);
    }

/* filter user with php*/

  if (!empty($_POST['actionFilter'])) {
    if ($_POST['actionFilter'] === 'filterMissions') {
    if (!empty($_POST['searchTitle'])) {
      $missions = $missions->where('title', 'LIKE', '%' . $_POST['searchTitle'] . '%')->whereDate('date', '>=', $dateToday);
    } else {
      $missions = $missions->whereDate('date', '>=', $dateToday);
    }
    }
  }
  $missions = $missions->orderBy('date','asc')->get();


/* filter user with javascript*/

  //$missions = $this->_getFormSearchResults();
  ////$missions = $missions->orderBy('date','asc')->get();

  $this->set('planetData', $planet);
  $this->set('todaysMissions',$todaysMissions);
  $this->set('missions',$missions);
  $this->set('dateToday', $dateToday);
  $this->set('userData', $userData);
  $this->set('title', 'planner');
  }


/*-----------------------------------------------------------*/

  private function _getFormSearchResults() {
    $dateToday = date('Y-m-d');
    $missionsQuery = Mission::query();
    if (!empty($_GET['searchTitle'])) {
      $missionsQuery = $missionsQuery->where('title', 'LIKE', '%' . $_GET['searchTitle'] . '%')->whereDate('date','>=', $dateToday)->orderBy('date','asc')->get();
      } else {
        $missionsQuery = $missionsQuery->whereDate('date','>=', $dateToday)->orderBy('date','asc')->get();
      };
    return $missionsQuery;
  }


  public function apiSearch() {
    $missions = $this->_getFormSearchResults();
    echo $missions->toJson();
    exit();
  }


// ->whereDate('date', '>=', $dateToday)->orderBy('date','asc')

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  public function userlist(){
    if(empty($_SESSION['username'])){
    header('Location:index.php');
    exit();
  }

  $ranksData =  Rank::orderBy('rank','ASC')->get();

  $this->set('ranksData', $ranksData);


    if(!empty($_SESSION['username'])){
      $userDataLoggedPerson = User::where('username','=',$_SESSION['username'])->first();
      $this->set('userHigherup', $userDataLoggedPerson->is_higherup);
    }

    /* remove user */
    if(!empty($_GET['action'])){
      if($_GET['action'] == 'deleteUser' && !empty($_GET['user_id'])){

        $removedUser = User::where('id','=',$_GET['user_id'])->first();
        if (!empty($removedUser)) {
          User::destroy($_GET['user_id']);
          header('Location:index.php?page=userlist');
        }
      }
    }

    /* create user */
    if (!empty($_POST['actionCreate'])) {
    if ($_POST['actionCreate'] === 'createUser') {
      $newUser = new User();
      $newUser->rank = ucfirst($_POST['rank']);
      $newUser->username = ucfirst($_POST['username']);
      $newUser->password = $_POST['password'];
      $newUser->is_higherup = $_POST['higherup'];

      $errorsCreateUser = User::validateCreateUser($newUser, $ranks);
      if (empty($errorsCreateUser)) {
        $newUser->save();
        header('Location: index.php?page=userlist');
      } else {
        $this->set('errors', $errorsCreateUser);
      }
    }
  }

  /* filter user */
  $userlist = User::query();

  if (!empty($_POST['actionFilter'])) {
    if ($_POST['actionFilter'] === 'filterUserlist') {
    if (!empty($_POST['searchName'])) {
      $userlist = $userlist->where('username', 'LIKE', '%' . $_POST['searchName'] . '%');
      }
    if (!empty($_POST['searchRank'])) {
      $userlist = $userlist->where('rank', 'LIKE', '%' . $_POST['searchRank'] . '%');
      }
    }
  }
  $userlist = $userlist->orderBy('id','desc')->get();
    $this->set('userlist', $userlist);
    $this->set('title', 'userlist');
  }

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  public function logout() {

    $this->set('title','Logout');
  }
}
