window.addEventListener('load', function () {
  new Zooom('img-zoom', {
    padding: 80,
    zIndex: 1,
    animationTime: 300,
    cursor: {
      in: 'zoom-in',
      out: 'zoom-out'
    },
    overlay: {
      color: '#fff',
      opacity: 100,
    },
  });
})
