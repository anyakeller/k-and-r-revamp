<div class="d-flex align-items-center mb-4">
    <div class="clip-circle clip-circle-120">
        <img draggable="false" (dragstart)="false;" class="zoomPng ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_zoom_in_transparent.png')"
            data-command="in" />
        <img draggable="false" (dragstart)="false;" class="zoomPng ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_zoom_out_transparent.png')"
            data-command="out" />
    </div>
    <div class="clip-circle clip-circle-120">
        <img draggable="false" (dragstart)="false;"
            class="lookPng ctrl-png hover-left" style="display: inline-block;"
            src="@asset('images/labcam-imgs/mid_look_left_transparent.png')"
            data-command="left" /><div style="display: inline-block">
            <img draggable="false" (dragstart)="false;"
                class="lookPng ctrl-png hover-up" style="display: block;"
                src="@asset('images/labcam-imgs/mid_look_up_transparent.png')"
                data-command="up" />
            <img draggable="false" (dragstart)="false;"
                src="@asset('images/labcam-imgs/mid_middle_transparent.png')" />
            <img draggable="false" (dragstart)="false;"
                class="lookPng ctrl-png hover-down" style="display: block;"
                src="@asset('images/labcam-imgs/mid_look_down_transparent.png')"
                data-command="down" />
        </div><img draggable="false" (dragstart)="false;"
            class="lookPng ctrl-png hover-right" style="display: inline-block;"
            src="@asset('images/labcam-imgs/mid_look_right_transparent.png')"
            data-command="right" />
    </div>
    <div class="clip-circle clip-circle-120">
        <img draggable="false" (dragstart)="false;" class="walkPng ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_walk_forward_transparent.png')"
            data-command="forward" />
        <img draggable="false" (dragstart)="false;" class="ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_walk_man_transparent.png')"
            data-command="" />
        <img draggable="false" (dragstart)="false;" class="walkPng ctrl-png"
            style="display: block;"
            src="@asset('images/labcam-imgs/labcam_walk_backward_transparent.png')"
            data-command="backward" />
    </div>
</div>
<div>
    <div class="mb-3">
        <button id="panicBtn" class="btn btn-danger"
            style="border: solid 1px rgba(0, 6, 10, 0.075); font-size: 2em;">PANIC</button>
    </div>
</div>