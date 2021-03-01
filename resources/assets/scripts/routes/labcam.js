import CameraControllerThing from "../labcamCtrl/labcamCtrl.js";

export default {
  init() {
    const camCtrlThing = new CameraControllerThing();
    // JavaScript to be fired
    // Get control of looking buttons
    $("#panicBtn").mousedown(function () {
      console.log("PANIC PANIC PANIC");
      camCtrlThing.panic();
    });
    
    // PNG CONTROLS
    $(".zoomPng").mousedown(function (e) {
      console.log("Zoom mousedown", $(e.target).attr("data-command"));
      camCtrlThing.doCommand("continuous_zoom", $(e.target).attr("data-command"));
    }).mouseup(function () {
      console.log("Zoom mouseup");
      camCtrlThing.killAction("continuous_zoom");
    });
    $(".lookPng").mousedown(function (e) {
      console.log("look mousedown");
      camCtrlThing.doCommand("camera_look", $(e.target).attr("data-command"));
    }).mouseup(function () {
      console.log("look mouseup");
      camCtrlThing.killAction("camera_look");
    });
    $(".walkPng").mousedown(function (e) {
      console.log("walk mousedown");
      camCtrlThing.doCommand("camera_walk", $(e.target).attr("data-command"));
    }).mouseup(function (e) {
      console.log("walk mouseup");
      camCtrlThing.killAction("camera_walk", $(e.target).attr("data-command"));
    });
  },
  finalize() {
    // JavaScript to be fired after the init JS
  }
};
