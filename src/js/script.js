import gsap from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';

export const init = () => {
  console.log('start');
  gsap.registerPlugin(ScrollTrigger);
  initScrollTrigger();
  checkQuestionmark();
  characterHover();
  // tipoHover();
  dieHover();
};

const checkQuestionmark = () => {

  const hide = () => {
    const questionmark = document.querySelector('.questionmark__wrapper--mobile');
    const content = document.querySelector('.talents__content--mobile');
    if (questionmark.style.display === 'none') {
      questionmark.style.display = 'block';
      content.style.display = 'none';
    } else {
      questionmark.style.display = 'none';
      content.style.display = 'block';
    }

  };
  document.querySelector('.talents__reveal--mobile').addEventListener('click', hide);
};

const characterHover = () => {
  const imageContainer = document.querySelector('.img-container');
  const paths = imageContainer.querySelectorAll('.path');
  const desc = document.querySelector('.desc-container');
  paths.forEach(el => {
    el.addEventListener('mouseover', e => {
      desc.innerHTML = e.target.dataset.desc;
    }, false);
    el.addEventListener('mouseout', () => {
      desc.innerHTML = '';
    }, false);
  });
};

/*
const tipoHover = () => {
  const imageContainer = document.querySelector('.img-container');
  const paths = imageContainer.querySelectorAll('.path');
  const desc = document.querySelector('.desc-container');
  paths.forEach(el => {
    el.addEventListener('mouseover', e => {
      desc.innerHTML = e.target.dataset.desc;
    }, false);
    el.addEventListener('mouseout', () => {
      desc.innerHTML = '';
    }, false);
  });
};
*/

const dieHover = () => {
  const body = document.body;
  const span = document.querySelector(".died"),
    hover = gsap.to(body, {backgroundColor: "black", paused: true, duration: 0.3});
  span.addEventListener("mouseenter", () => {hover.play();});
  span.addEventListener("mouseleave", () => {hover.reverse();});
};



const initScrollTrigger = () => {
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
      ease: 'Power4.easeOut'
    },
  });

  gsap.to('.reveal__layer2', {
    xPercent: - 25,
    ease: 'none',
    scrollTrigger: {
      trigger: '.reveal__layer2',
      scrub: true,
      start: 'top center',
      end: 'center center',
      markers: true,
      ease: 'Power4.easeOut'
    },
  });





  const svg = document.querySelector('.characteristics__characteristics');
  const imgContainer = document.querySelector('.img-container');
  gsap.to(svg, {
    xPercent: - imgContainer.offsetWidth,
    ease: 'none',
    scrollTrigger: {
      trigger: '.img-container',
      pin: true,
      start: 'top center',
      scrub: 1,
      end: () => `+=${ (imgContainer.offsetWidth - innerWidth) * 10}`
    }
  });

  /*
  gsap.set('.scroller', {
  //x: -(window.innerWidth * 3.0)
    x: - (document.querySelector('.scroller').offsetWidth - window.innerWidth)
  });

  gsap.fromTo('.scroller',
    {
    // x: () => { return -(window.innerWidth * 3.0) }
      x: () => { return - (document.querySelector('.scroller').offsetWidth - window.innerWidth); }
    },
    {
      x: () => { return 0; },
      ease: 'none',
      scrollTrigger: {
        trigger: '.scroller',
        start: 'top 75%',
        end: 'bottom 25%',
        scrub: true,
        markers: true,
        invalidateOnRefresh: true,
      }
    });
*/

};

/*



*/
