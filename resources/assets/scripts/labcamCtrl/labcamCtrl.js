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
    this.timeOut = null; // safety precaution so the camera doesn't smash into things
    this.activeAction = null;
    this.activeCommand = null;
  }


  // direct command sender
  sendCommand(action, actionKey, command) {
    let commandQuerey = {
      action: action,
      [actionKey]: command,
    };
    $.post(
      this.formUrl, commandQuerey
    );
  }

  // helper to get stop command
  getStopCommand(action, command = null) {
    if (action === 'camera_walk') return `${command}Stop`;
    return 'stop';
  }
  // helper for building commands
  getActionKey(action) {
    switch (action) {
      case 'continuous_zoom':
        return 'zoomAction';
      case 'camera_look':
        return 'lookDirection';
      case 'camera_walk':
        return 'walkDirection';
      default:
        console.log(`Action ${action} is invalid`);
        return null;
    }
  }

  // kill an action
  killAction(actionToKill, commandToKill = null) {
    let actionKey = this.getActionKey(actionToKill);
    let stopCommand = this.getStopCommand(actionToKill, commandToKill);
    this.sendCommand(actionToKill, actionKey, stopCommand);
    clearTimeout(this.timeOut);
    this.timeOut = null;
    this.activeAction = null;
    this.activeCommand = null;
    console.log(`${actionToKill} ${commandToKill} killed`);
  }

  // universal helper to controll camera
  doCommand(action, command) {
    console.log(`Command ${action} sent to ${command}`);
    // kill and clear last action
    if (this.activeAction && this.timeOut) this.killAction(this.activeAction, this.activeCommand);
    // set the active action
    this.activeAction = action;
    this.activeCommand = command;
    // get the stop command for the new thing
    let stopCommand = this.getStopCommand(action, command);
    //run command
    if (command !== stopCommand) {
      let secondsToGo = 5;
      this.timeOut = setTimeout(this.killAction.bind(this, action, command), 1000 * secondsToGo);
    }
    let actionKey = this.getActionKey(action);
    this.sendCommand(action, actionKey, command);
  }
}
