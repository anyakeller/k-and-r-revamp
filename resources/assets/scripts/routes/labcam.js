import CameraControllerThing from '../labcamCtrl/labcamCtrl.js';

export default {
  init() {
    const camCtrlThing = new CameraControllerThing();
    // JavaScript to be fired
    // Get control of looking buttons
    $('.zoomBtns')
      .mousedown(function(e) {
        console.log('Zoom in mousedown');
        camCtrlThing.doCommand('continuous_zoom', $(e.target)
          .val());
      })
      .mouseup(function() {
        console.log('Zoom in mouseup');
        camCtrlThing.killAction('continuous_zoom');
      });
    $('.lookBtns')
      .mousedown(function(e) {
        console.log('look mousedown');
        camCtrlThing.doCommand('camera_look', $(e.target)
          .val());
      })
      .mouseup(function() {
        console.log('look mouseup');
        camCtrlThing.killAction('camera_look');
      });
    $('.walkBtns')
      .mousedown(function(e) {
        console.log('walk mousedown');
        camCtrlThing.doCommand('camera_walk', $(e.target)
          .val());
      })
      .mouseup(function(e) {
        console.log('walk mouseup');
        camCtrlThing.killAction('camera_walk', $(e.target)
          .val());
      });
  },
  finalize() {
    // JavaScript to be fired after the init JS
  },
};
