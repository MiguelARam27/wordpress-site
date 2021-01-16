let galleryTimeline = gsap.timeline();

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
