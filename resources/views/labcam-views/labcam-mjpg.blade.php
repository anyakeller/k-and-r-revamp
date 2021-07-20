<div id="labcam-mjpg">
  {{-- <iframe name="videoIframe" width="600" height="500" src="http://labcam.kiteandrocket.com:2020/mjpg/video.mjpg?streamprofile=PlainStream"></iframe> --}}
  <img
    src="http://rebootalpha.local/wp-admin/admin-post.php?action=camera_snapshot"
    alt="" style="display: block;
  margin-top: 1em;
  margin-bottom: 1em;
  margin-left: auto;
  margin-right: auto;
  width: 100%;" />

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
  <script language="JavaScript" type="text/javascript">
    // Replace onload events with DOMContentLoaded, if supported.
      if ( document.addEventListener || document.attachEvent)
      {
        var onloadDone = false;
        
        function DCLCallback()
        {
          if ( onloadDone )
          {
            return;
          }
          onloadDone = true;
      
          if ( window.onload )
          {
            var func = window.onload;
            window.onload = null;
            func();
          }
        }
      
        function OnloadCallback()
        { 
          onloadDone = true;
        }   
      
        if (!window.addEventListener) {
          window.attachEvent("onload", OnloadCallback)
        } else {
          window.addEventListener("load", OnloadCallback);
        }
        if (!document.addEventListener) {
          document.attachEvent("DOMContentLoaded", DCLCallback)
        } else {
          document.addEventListener("DOMContentLoaded", DCLCallback);
        }
      }String.prototype.trim = function() {
        return this.replace(/^\s+|\s+$/g,"");
      }
      String.prototype.ltrim = function() {
        return this.replace(/^\s+/,"");
      }
      String.prototype.rtrim = function() {
        return this.replace(/\s+$/,"");
      }
      String.prototype.crop = function(cropLength, cropMark) {
        if (typeof(cropMark) != "string")
          cropMark = "";
      
        if (this.length > cropLength && this.length > cropMark.length)
          return this.substr(0, cropLength - cropMark.length) + cropMark;
        else
          return this;
      }
      
      function launch(url) {
        var w = 480, h = 340;
      
        if (document.all) {
          /* the following is only available after onLoad */
          w = document.body.clientWidth;
          h = document.body.clientHeight;
        }
        else if (document.layers) {
          w = window.innerWidth;
          h = window.innerHeight;
        }
      
        var popW = 475, popH = 590;
      
        var leftPos = (w-popW)/2, topPos = (h-popH)/2;
      
        self.name = "opener";
        remote = document.open(url, "helpWin", "resizable,scrollbars,status,width=" + popW + ",height="+popH+",left="+leftPos+",top="+topPos+"");
      }
      
      function openPopUp(thePage, theName, theWidth, theHeight)
      {
        theWidth = Number( theWidth ) + 10;
        theHeight = Number( theHeight ) + 20;
        var someFeatures = 'scrollbars=yes,toolbar=0,location=no,directories=0,status=0,menubar=0,resizable=1,width=' + theWidth + ',height=' + theHeight;
        var aPopUpWin = document.open(thePage, theName, someFeatures);
      
        if (navigator.appVersion.indexOf("Win") != -1) {
          aPopUpWin.focus();
        }
      
        if (navigator.appName == "Netscape") {
          aPopUpWin.focus();
        }
      }
  </script>
  <script language="JavaScript" type="text/javascript">
    <!--
    function SubmitForm()
    {
      document.WizardForm.submit();
    }
    
    function showStatus(msg)
    {
      window.status = msg
      return true
    }
    // -->
    </script>
  <div onload="langObjStrmPrew.init();doOnLoad()"></div>
  <div id="videoHere">

  </div>
  <script>
    // var url = 'http://labcam.kiteandrocket.com:2020/mjpg/video.mjpg?streamprofile=PlainStream';
    // var url = 'http://labcam.kiteandrocket.com:2020/jpg/image.jpg';
    // const streamMjpegIframe = $(`<iframe name="videoIframe" width="600" height="500" src="http://labcam.kiteandrocket.com:2020/mjpg/video.mjpg?streamprofile=PlainStream"></iframe>`);
    // streamMjpegIframe.appendTo('#videoHere');     
    const streamMjpegImg = $(`<img width="600" height="500" src="http://labcam.kiteandrocket.com:2020/mjpg/video.mjpg?streamprofile=PlainStream&user=dev&pw=V6bhGf5jTy56"/>`);
    streamMjpegImg.appendTo('#videoHere');     
      
    fetch("http://rebootalpha.local/wp-admin/admin-post.php?action=camera_snapshot", {
      method: 'GET'
    })
      .then(response => response)
      .then(result => console.log(result))
      .catch(error => console.log('error', error));
      
    fetch("http://rebootalpha.local/wp-admin/admin-post.php?action=camera_stream", {
      method: 'GET'
    })
      .then(response => response)
      .then(result => {
        console.log(result)
        // const mjpgIframe = $(`<iframe name="videoIframe" width="600" height="500" ></iframe>`);
        // mjpgIframe.appendTo('#videoHere');        
        })
      .catch(error => console.log('error', error));

    //"V6bhGf5jTy56"

  </script>
</div>