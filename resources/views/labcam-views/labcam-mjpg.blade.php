<div id="labcam-mjpg">
  {{-- <img
    src="http://labcam.kiteandrocket.com:2020/mjpg/video.mjpg?streamprofile=PlainStream"
    alt="" style="display: block;
  margin-top: 1em;
  margin-bottom: 1em;
  margin-left: auto;
  margin-right: auto;
  width: 100%;" /> --}}

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
  <div id="videoHere">
   
  </div>
  <script>
    // var url = 'http://labcam.kiteandrocket.com:2020/mjpg/video.mjpg?streamprofile=PlainStream';
    // var url = 'http://labcam.kiteandrocket.com:2020/jpg/image.jpg';
    //const mjpgIframe = $(`<iframe name="videoIframe" width="600" height="500" src="${url}"></iframe>`);
    //mjpgIframe.appendTo('#videoHere');        
    var pokeHeaders = new Headers();
    pokeHeaders.append("Accept", "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9");
    pokeHeaders.append("User-Agent", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Safari/537.36");

    var myHeaders = new Headers();
    myHeaders.append("Accept", "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9");
    myHeaders.append("User-Agent", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Safari/537.36");
    myHeaders.append("Authorization", "Digest username=\"root\", realm=\"AXIS_ACCC8E304A6E\", nonce=\"undefined\", uri=\"/jpg/image.jpg\", algorithm=\"MD5\", response=\"8aaed4137db17fa28c29efcae4b54b9d\"");

    var requestOptions = {
      method: 'GET',
      headers: pokeHeaders,
      redirect: 'follow',
      mode: 'no-cors'
    };

    fetch("http://labcam.kiteandrocket.com:2020/jpg/image.jpg", requestOptions)
      .then(response => response.headers)
      .then(result => console.log(result))
      .catch(error => console.log('error', error));

    //"V6bhGf5jTy56"

  </script>
</div>