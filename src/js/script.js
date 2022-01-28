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

const initScrollTrigger = () => {
  gsap.registerPlugin(ScrollTrigger);
  gsap.to('.reveal__layer1', {
    xPercent: 25,
    ease: 'none',
    scrollTrigger: {
      trigger: '.reveal__layer2',
      // start: 'top bottom', // the default values
      // end: 'bottom top',
      scrub: true,
      start: 'top center',
      end: 'center center',
      markers: true,
      ease: Power4.easeOut
    },
  });

  gsap.to('.reveal__layer2', {
    xPercent: - 25,
    ease: 'none',
    scrollTrigger: {
      trigger: '.reveal__layer2',
      // start: 'top bottom', // the default values
      // end: 'bottom top',
      scrub: true,
      start: 'top center',
      end: 'center center',
      markers: true,
      ease: Power4.easeOut
    },
  });
};
