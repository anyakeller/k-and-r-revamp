const formUrl = 'https://rebootalpha.local/wp-admin/admin-ajax.php';
/*
function CameraControl() {
  this.pan = 0;
  this.tilt = 0;
  this.zoom = 0;
  this.iris = 0;
  this.focus = 0;
  this.brightness = 0;
}

function fnOnLook(direction){
  $.post(
    window.formUrl,
    {
      action:"camera_look",
      lookDirection:direction
    }
  );
}

function fnOnWalk(direction) {
  $.post(
    window.formUrl,
    {
      action:"camera_walk",
      walkDirection:direction
    }
  );
}

*/
/*
function loadSettings() {
  var maxZoom = 10909;
  var tilt = window.cameraControls.tilt;
  var zoom = window.cameraControls.zoom / maxZoom * 60;
  var pan = window.cameraControls.pan + 180;
  zoom = Math.round(zoom * 10) / 10;
  tilt = Math.round(tilt);
  pan = Math.round(pan);

  $("#tiltSlider")
    .val(tilt * -1);
  $("#zoomSlider")
    .val(zoom);
  $("#panSlider")
    .val(pan + 180);

  $("#zoomLabel")
    .text(zoom);
  $("#panLabel")
    .text(pan);
  $("#tiltLabel")
    .text(tilt);
}
*/

export default class CameraControllerThing {
  constructor() {
    console.log('CameraControllerThing initialized');
    this.formUrl = formUrl;
  }

  sendCommand(action, command = 'stop') {
    console.log('poof');
    switch (action) {
      case 'continuous_zoom':
        $.post(
          this.formUrl, {
            action: 'continuous_zoom',
            zoomAction: command,
          }
        );
        break;
      case 'camera_look':
        $.post(
          window.formUrl, {
            action: 'camera_look',
            lookDirection: command,
          }
        );
        break;
      case 'camera_walk':
        $.post(
          window.formUrl, {
            action: 'camera_walk',
            walkDirection: command,
          }
        );
        break;
      default:
        console.log('');
    }
  }
}
