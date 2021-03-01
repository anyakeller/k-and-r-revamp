<style>
    .ctrl-png img {
        user-drag: none;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }

    .ctrl-png:hover {
        background: rgba(255, 126, 0, 0.9372197309417041);
    }

    .hover-up:hover {
        background: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(255, 126, 0, 0.9372197309417041) 20%);
    }

    .hover-right:hover {
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 126, 0, 0.9372197309417041) 20%);
    }

    .hover-down:hover {
        background: linear-gradient(180deg, rgba(255, 255, 255, 1) 0%, rgba(255, 126, 0, 0.9372197309417041) 20%);
    }

    .hover-left:hover {
        background: linear-gradient(270deg, rgba(255, 255, 255, 1) 0%, rgba(255, 126, 0, 0.9372197309417041) 20%);
    }

    .clip-circle {
        cursor: pointer;
    }

    .clip-circle-120 {
        /* clip-path: circle(56px at center); */
        clip-path: ellipse(53px 54px at center);
        cursor: pointer;
    }

    .clip-circle-130 {
        /* clip-path: circle(56px at center); */
        clip-path: ellipse(54px 53px at center);
        cursor: pointer;
    }
</style>
<div class="d-flex align-items-center mb-4">
    <div id="zoomPngs" class="clip-circle clip-circle-120">
        <img draggable="false" (dragstart)="false;" class="ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_zoom_in_transparent.png')"
            data-command="in" />
        <img draggable="false" (dragstart)="false;" class="ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_zoom_out_transparent.png')"
            data-command="out" />
    </div>
    <div id="lookPngs" class="clip-circle clip-circle-120">
        <img draggable="false" (dragstart)="false;" class="ctrl-png hover-left"
            style="display: inline-block;"
            src="@asset('images/labcam-imgs/mid_look_left_transparent.png')"
            data-command="left" /><div style="display: inline-block">
            <img draggable="false" (dragstart)="false;"
                class="ctrl-png hover-up" style="display: block;"
                src="@asset('images/labcam-imgs/mid_look_up_transparent.png')" />
            <img draggable="false" (dragstart)="false;"
                src="@asset('images/labcam-imgs/mid_middle_transparent.png')" />
            <img draggable="false" (dragstart)="false;"
                class="ctrl-png hover-down" style="display: block;"
                src="@asset('images/labcam-imgs/mid_look_down_transparent.png')" />
        </div><img draggable="false" (dragstart)="false;" class="ctrl-png hover-right"
            style="display: inline-block;"
            src="@asset('images/labcam-imgs/mid_look_right_transparent.png')"
            data-command="right" />
    </div>
    <div id="walkPngs" class="clip-circle clip-circle-120">
        <img draggable="false" (dragstart)="false;" class="ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_walk_forward_transparent.png')"
            data-command="in" />
        <img draggable="false" (dragstart)="false;" class="ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_walk_man_transparent.png')" />
        <img draggable="false" (dragstart)="false;" class="ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_walk_backward_transparent.png')"
            data-command="out" />
    </div>
</div>
<div>
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