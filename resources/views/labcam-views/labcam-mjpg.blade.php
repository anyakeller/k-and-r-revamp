<div id="labcam-mjpg"> 
  <img
    src="http://labcam.kiteandrocket.com:2020/mjpg/video.mjpg?streamprofile=PlainStream"
    alt="" style="display: block;
  margin-top: 1em;
  margin-bottom: 1em;
  margin-left: auto;
  margin-right: auto;
  width: 100%;" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script>
    var url = 'http://labcam.kiteandrocket.com:2020/mjpg/video.mjpg?streamprofile=PlainStream';
    $.ajax({
        url: url,
        error: function(response){
            if(response.status==401){           
                $('<iframe src="'+url+'"></iframe>').appendTo($("#labcam-mjpg"));          
            }
        },
        success:function(){
            //your success code here
        }
    });

  </script>
</div>