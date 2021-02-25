<div class="d-flex mb-4">
    <style>
        .zoomPng img {
            user-drag: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-drag: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        .zoomPng:hover {
            background-color: orange;
        }

        .clip-circle {
            clip-path: circle(54px at center);
            cursor: pointer;
        }
    </style>
    <div id="zoomPngs" class="clip-circle">
        <img draggable="false" (dragstart)="false;" class="zoomPng"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_zoom_in_transparent.png')"
            data-command="in" />
        <img draggable="false" (dragstart)="false;" class="zoomPng"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_zoom_out_transparent.png')"
            data-command="out" />
    </div>
</div>


<div class="mb-3">
    <button id="panicBtn" class="btn btn-danger"
        style="border: solid 1px rgba(0, 6, 10, 0.075); font-size: 2em;">PANIC</button>
</div>

<div class="btn-group zoomBtns m-2" role="group" aria-label="ctrls-zoom">
    <button id="zoomInBtn" class="btn btn-primary" value="in"
        style="border: solid 1px rgba(0, 6, 10, 0.075);">Zoom
        In</button>
    <button id="zoomOutBtn" class="btn btn-primary" value="out"
        style="border: solid 1px rgba(0, 6, 10, 0.075);">Zoom
        Out</button>
</div>

<div class="btn-group lookBtns m-2" role="group" aria-label="ctrls-look">
    <button id="lookUpBtn" class="btn btn-info" value="up"
        style="border: solid 1px rgba(0, 6, 10, 0.075);">lookUpBtn</button>
    <button id="lookDownBtn" class="btn btn-info" value="down"
        style="border: solid 1px rgba(0, 6, 10, 0.075);">lookDownBtn</button>
    <button id="lookLeftBtn" class="btn btn-info" value="left"
        style="border: solid 1px rgba(0, 6, 10, 0.075);">lookLeftBtn</button>
    <button id="lookRightBtn" class="btn btn-info" value="right"
        style="border: solid 1px rgba(0, 6, 10, 0.075);">lookRightBtn</button>
</div>

<div class="btn-group walkBtns m-2" role="group" aria-label="ctrls-look">
    <button id="walkForwardBtn" class="btn btn-warning" value="forward"
        style="border: solid 1px rgba(0, 6, 10, 0.075);">walkForwardBtn</button>
    <button id="walkBackwardBtn" class="btn btn-warning" value="backward"
        style="border: solid 1px rgba(0, 6, 10, 0.075);">walkBackwardBtn</button>
</div>