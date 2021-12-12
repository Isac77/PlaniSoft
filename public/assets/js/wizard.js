$(function() {
  'use strict';

  $("#wizard").steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "slideLeft",
      labels: {
          finish: "Guardar",
          next: "Siguiente",
          previous: "Anterior",
          loading: "Cargando ..."
      }
  });

  $("#wizardVertical").steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: 'vertical'
  });
});
