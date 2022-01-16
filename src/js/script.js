export const script = () => {
  console.log('start executing this JavaScript');

  //Get the button
  const scrollButton = document.getElementById('scrollToday');

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction();};
  function scrollFunction() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
      scrollButton.style.display = 'block';
    } else {
      scrollButton.style.display = 'none';
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function scrollToday() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  //show mission form
  /*
  const $form = document.querySelector('.form__content');
  $form.classList.add('hide');
  const $plus = document.querySelector('.fa-plus');
  $plus.classList.add('show');
  $plus.addEventListener('click', showCreate);
  function showCreate() {
    $form.classList.toggle('show');
    if ($plus.classList.contains('fa-plus')) {
      $plus.classList.add('fa-minus');
      $plus.classList.remove('fa-plus');
    } else {
      $plus.classList.remove('fa-minus');
      $plus.classList.add('fa-plus');
    }
  }*/


  //filter missions

  let timeoutID;

  const handleSubmitForm = e => {
    e.preventDefault();
    submitWithJS();
  };

  const handleInputField = () => {
    //console.log('key');
    clearTimeout(timeoutID);
    timeoutID = setTimeout(() => {
      //console.log('submit');
      submitWithJS();
    }, 400);
  };

  const submitWithJS = async () => {
    const $form = document.querySelector('.missions__searchform');
    const data = new FormData($form);
    const entries = [...data.entries()];
    // console.log('entries:', entries);
    const qs = new URLSearchParams(entries).toString();
    // console.log('querystring', qs);
    const url = `index.php?page=api-search&${qs}`;
    const response = await fetch(url);
    const missions = await response.json();
    console.log(missions);
    updateList(missions);

    window.history.pushState(
      {},
      '',
      `index.php?page=planner&${qs}`
    );
  };

  const updateList = missions => {
    const $missions = document.querySelector('.missions');
    $missions.innerHTML = missions.map(mission => {
      return `
    <article class="missions__date">
      <h3 class="date__title">${moment(mission.date).format('DD-MM-YY')}</h3>
      <a class="missions__mission" href="index.php?page=detail&id=${mission.id}&planet_id=${mission.planet_id}">
        <div class="mission__wrapperwrapper">
          <div class="mission__wrapper">
            <h3 class="mission__title">${mission.title}</h3>
            <p  class="mission__description">${mission.description}</p>
          <div class="tags__wrapper">
                <div class="mission__tag mission__tag--length"><p class="tag__content">${mission.lenght}</p></div>
                <div class="mission__tag mission__tag--type"><p class="tag__content">${mission.type}></p></div>
            </div>
          </div>
        </div>
      </a>
    </article>
      `;
    }).join(``);
  };

  const init = () => {

    document.documentElement.classList.add('has-js');
    document.querySelectorAll('.missions__filter__input').forEach($field => $field.addEventListener('input', handleInputField));
    document.querySelector('.missions__searchform').addEventListener('submit', handleSubmitForm);
    document.getElementById('scrollToday').addEventListener('click', scrollToday);
  };

  init();


};
