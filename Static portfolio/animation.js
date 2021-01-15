let galleryTimeline = gsap.timeline();

console.log(galleryTimeline);
//   Product animation
galleryTimeline.fromTo(
  '.projects--container__projects-grid .project-card',
  {
    opacity: 0,
    y: 100,
  },
  {
    y: 0,
    opacity: 1,
    stagger: 0.3,
  }
);

GSDevTools.create();
//   }.fromTo(
//     '.project-card',
//     {
//       opacity: 0,
//     },
//     {
//       opacity: 1,
//       stagger: 0.3,
//     }
//
//   .fromTo(
//     '.features .percent-number',
//     {
//       scale: 0,
//     },
//     {
//       scale: 1,
//       duration: 1,
//     }
//   )
//   .fromTo(
//     '.features .title',
//     {
//       scale: 0,
//     },
//     {
//       scale: 1,
//     },
//     '>-1'
