let galleryTimeline = gsap.timeline({ paused: true });

console.log(galleryTimeline);
//   Product animation
galleryTimeline.fromTo(
  '.project-card',
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
);
setTimeout(() => {
  galleryTimeline.play();
}, 1000);
