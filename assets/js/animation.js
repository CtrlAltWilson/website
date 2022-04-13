    /*------------------------------------------------------------------
                        ABOUT PHOTO
    -------------------------------------------------------------------*/
    var CVtoPopl = 0;
    const onImg  = "assets/images/profile_pics/selfie.jpg";
    const offImg = "assets/images/profile_pics/poplQR.PNG";
    new Image().src = "assets/images/profile_pics/poplQR.PNG";

    const poplLink = 'https://poplme.co/pocki/a';
    const resumeLink = 'https://py.wilsonngo.com';

    document.getElementById("profilepic").addEventListener("click", about);
    document.getElementById("profilebtn").addEventListener("click", popl);
    $('#profilebtn').attr('data-label',"Dashboard");
    //#document.getElementById("clickProfilead").innerHTML = "Click on my profile picture to connect!"

    function about(){
      CVtoPopl = CVtoPopl === 0 ? 1 : 0;
      this.src = CVtoPopl === 0 ? onImg : offImg;
      if(CVtoPopl){
        $('#profilebtn').attr('data-label',"Connect");
      } else {
        $('#profilebtn').attr('data-label',"Dashboard");
      }
      $('#profilebtn').toggleClass("CVBtn");
      $('#profilebtn').toggleClass("downloadCV");
      //document.getElementById("clickProfilead").innerHTML = "<br>"
    }

    function popl(){
        var currentLink = CVtoPopl === 0 ? resumeLink : poplLink;
        window.open(currentLink);
    }


    /*------------------------------------------------------------------
                        DOWNLOAD BUTTON
    -------------------------------------------------------------------*/

    var loading = function(e) {
      e.preventDefault();
      e.stopPropagation();
      e.target.classList.add('loading');
      e.target.setAttribute('disabled','disabled');
      setTimeout(function(){
        e.target.classList.remove('loading');
        e.target.removeAttribute('disabled');
      },1500);
    };

    var btns = document.querySelectorAll('button');
    for (var i=btns.length-1;i>=0;i--) {
      btns[i].addEventListener('click',loading);
    }