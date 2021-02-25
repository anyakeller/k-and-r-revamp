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
    $(".zoomBtns").mousedown(function (e) {
      console.log("Zoom in mousedown");
      camCtrlThing.doCommand("continuous_zoom", $(e.target).val());
    }).mouseup(function () {
      console.log("Zoom in mouseup");
      camCtrlThing.killAction("continuous_zoom");
    });
    $(".lookBtns").mousedown(function (e) {
      console.log("look mousedown");
      camCtrlThing.doCommand("camera_look", $(e.target).val());
    }).mouseup(function () {
      console.log("look mouseup");
      camCtrlThing.killAction("camera_look");
    });
    $(".walkBtns").mousedown(function (e) {
      console.log("walk mousedown");
      camCtrlThing.doCommand("camera_walk", $(e.target).val());
    }).mouseup(function (e) {
      console.log("walk mouseup");
      camCtrlThing.killAction("camera_walk", $(e.target).val());
    });
    $("#zoomPngs").mousedown(function (e) {
      console.log("Zoom mousedown", $(e.target).attr("data-command"));
      camCtrlThing.doCommand("continuous_zoom", $(e.target).attr("data-command"));
    }).mouseup(function () {
      console.log("Zoom mouseup");
      camCtrlThing.killAction("continuous_zoom");
    });
  },
  finalize() {
    // JavaScript to be fired after the init JS
  }
};
