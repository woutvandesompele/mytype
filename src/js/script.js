import gsap from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';

export const init = () => {
  console.log('start');
  gsap.registerPlugin(ScrollTrigger);
  initScrollTrigger();
  checkQuestionmark();
  hoverQuestionmark();
  characterHover();
  // tipoHover();
  dieHover();
};

const hoverQuestionmark = () => {

  const questionmark1 = document.querySelector('.grid__questionmark--desktop1');
  const questionmark2 = document.querySelector('.grid__questionmark--desktop2');
  const img1 = questionmark1.querySelector('img');
  const img2 = questionmark2.querySelector('img');
  const reveal1 = () => {
    img1.style.display = 'none';
  };
  const reveal2 = () => {
    img2.style.display = 'none';
  };
  const dissapear1 = () => {
    img1.style.display = 'block';
  };
  const dissapear2 = () => {
    img2.style.display = 'block';
  };
  document.querySelector('.grid__questionmark--desktop1').addEventListener('mouseover', reveal1);
  document.querySelector('.grid__questionmark--desktop1').addEventListener('mouseout', dissapear1);
  document.querySelector('.grid__questionmark--desktop2').addEventListener('mouseover', reveal2);
  document.querySelector('.grid__questionmark--desktop2').addEventListener('mouseout', dissapear2);



  // const reveal = () => {
  //   const questionmark = document.querySelectorAll('.grid__questionmark--desktopr');
  //   console.log(questionmark);
  //   var cl = Array.from(questionmark)
  //   var ll = cl.target.className;
  //   console.log(cl);
  //   //const img = questionmark.querySelector('img');
  //   if (questionmark.classList.contains('.grid__questionmark--desktop1'))
  //     img.style.display = 'none';
  //    };
  // const dissapear = () => {
  //   img.style.display = 'block';
  // };
  // const questions = document.querySelectorAll('.grid__questionmark--desktopr');
  // for (var i = 0; i < questions.length; i++) {
  //   questions[i].addEventListener('mouseover', reveal);
  //   questions[i].addEventListener('mouseout', dissapear);
  // }
};

const checkQuestionmark = () => {

  const hide = () => {
    const questionmark = document.querySelector('.questionmark__wrapper--mobile');
    const content = document.querySelector('.talents__content--mobile');
    if (questionmark.style.display === 'none') {
      questionmark.style.display = 'block';
      questionmark.style.margin = '0 auto';
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
      const desces = e.target.dataset.desc;
      console.log(desces);
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
  const span = document.querySelector('.died'),
    hover = gsap.to(body, {backgroundColor: 'black', paused: true, duration: 0.3});
  span.addEventListener('mouseenter', () => {hover.play();});
  span.addEventListener('mouseleave', () => {hover.reverse();});
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
      ease: 'Power4.easeOut'
    },
  });



  ScrollTrigger.matchMedia ({

    '(max-width: 1000px)': function() {
      const svg = document.querySelector('.characteristics__characteristics');
      const imgContainer = document.querySelector('.img-container');
      gsap.to(svg, {
        xPercent: - (imgContainer.offsetWidth / 10),
        ease: 'none',
        scrollTrigger: {
          trigger: '.img-container',
          pin: true,
          start: 'top center',
          scrub: 1,
          end: () => `+=${ (imgContainer.offsetWidth - innerWidth)}`
        }
      });
    }

  });

};

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



/*



*/
