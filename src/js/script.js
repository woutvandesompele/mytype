import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';


export const init = () => {
  console.log('start');
  initScrollTrigger();
  checkQuestionmark();
};

const checkQuestionmark = () => {

  const hide = () => {
    const questionmark = document.querySelector('.questionmark__wrapper');
    const content = document.querySelector('.talents__content');
    if (questionmark.style.display === 'none') {
      questionmark.style.display = 'block';
      content.style.display = 'none';
    } else {
      questionmark.style.display = 'none';
      content.style.display = 'block';
    }

  };
  document.querySelector('.talents__reveal').addEventListener('click', hide);
};
