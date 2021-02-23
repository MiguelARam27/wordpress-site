let galleryTimeline = gsap.timeline({ paused: true });
let navTimeLine = gsap.timeline({ paused: true });

navTimeLine
  .fromTo(
    '.header__logo',
    {
      x: -200,
      opacity: 0,
      ease: 'ease-in',
    },
    {
      x: 0,
      opacity: 1,
      ease: 'slow',
      duration: 0.8,
      stagger: 0.1,
    }
  )
  .fromTo(
    '.header__menu li',
    {
      y: -200,
      opacity: 0,
      ease: 'ease-in',
    },
    {
      y: 0,
      opacity: 1,
      ease: 'slow',
      duration: 0.8,
      stagger: 0.2,
    },
    '-=1'
  );
//   Product animation
galleryTimeline
  .fromTo(
    '.projects__card',
    1,
    {
      opacity: 0,
      ease: 'ease-in',
    },
    {
      opacity: 1,
      ease: 'ease-in',
      duration: 1.2,
      stagger: 0.4,
    }
  )
  .fromTo(
    '.projects__card__info__tech__info',
    {
      x: 200,
      opacity: 0,
      ease: 'ease-in',
    },
    {
      x: 0,
      opacity: 1,
      ease: 'slow',
      duration: 0.8,
      stagger: 0.1,
    },
    '-=1'
  )
  .fromTo(
    '.projects__card__info__tech__icon',
    {
      x: -200,
      opacity: 0,
      ease: 'ease-in',
    },
    {
      x: 0,
      opacity: 1,
      ease: 'slow',
      duration: 0.8,
      stagger: 0.1,
    },
    '-=1'
  )
  .fromTo(
    '.projects__card__summary__info',
    {
      opacity: 0,
      ease: 'ease-in',
    },
    {
      opacity: 1,
      ease: 'slow',
      duration: 0.8,
      stagger: 0.1,
    },
    '-=1'
  );

setTimeout(() => {
  galleryTimeline.play();
  navTimeLine.play();
}, 1000);
