import CameraControllerThing from '../labcamCtrl/labcam.js';

export default {
  init() {
    const camCtrlThing = new CameraControllerThing();
    // JavaScript to be fired
    $('#zoomInBtn')
      .mousedown(function() {
        camCtrlThing.sendCommand('continuous_zoom','in');
        // fnOnZoomIn();
      })
      .mouseup(function() {
        console.log('Zoom in up');
        camCtrlThing.sendCommand('continuous_zoom','stop');
        // fnOnZoomStop();
      });
    $('#zoomOutBtn')
      .mousedown(function() {
        console.log('Zoom out mousedown');
        camCtrlThing.sendCommand('continuous_zoom','out');
      })
      .mouseup(function() {
        console.log('Zoom out mouseup');
        camCtrlThing.sendCommand('continuous_zoom','stop');
      });
    $('.lookBtns')
      .mousedown(function(e) {
        console.log('look mousedown');
        // console.log($(e.target).val());
        camCtrlThing.sendCommand('camera_look',$(e.target).val());
      })
      .mouseup(function() {
        console.log('look mouseup');
        camCtrlThing.sendCommand('camera_look','stop');
      });
  },
  finalize() {
    // JavaScript to be fired after the init JS
  },
};
