<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <title>Weecomi</title>
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet" type="text/css" defer="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://webinarim3.webinarim.com/v16/css/webinar.css" rel="stylesheet" type="text/css">


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>



</head>
<body >
<div id="webinar_fonVolume">
    <span><i class="fas fa-volume-mute"> </i></span>
</div>
<video autoplay="" controls="" loop="" playsinline="" muted="true"  id="webinar_fon">
    <source type="audio/mpeg" src="https://www.webinarim.com/tema/assets/images/fon/webinar_fon.mp3">
    <source type="audio/ogg" src="https://www.webinarim.com/tema/assets/images/fon/webinar_fon.mp3">
</video>

<section class="wb__bg">
    <img src="{{asset('')}}images/arkaplan_.jpg" >
    <div class="wb__cn">
        <div class="rounded bg-gradient-2 text-white shadow p-5 text-center">
            <div id="body-video">
                <div class="text-center fz35">SUNUMUN BAŞLAMASINA</div>
                
                <div id="demo" class="countdown-circles d-flex flex-wrap justify-content-center pt-4"><div class="holder m-2"><span class="h1 font-weight-bold">1</span>SAAT</div><div class="holder m-2"><span class="h1 font-weight-bold">80</span> Dk.</div><div class="holder m-2"><span class="h1 font-weight-bold">52</span> Sn.</div></div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script>
    var countDownDate = new Date("dec 01, 2020 17:00:00").getTime(); //new Date({{$some}}).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML ='<div id="demo" class="countdown-circles d-flex flex-wrap justify-content-center pt-4"><div class="holder m-2"><span class="h1 font-weight-bold">'+hours+'</span> SAAT</div><div class="holder m-2"><span class="h1 font-weight-bold">'+minutes+'</span> Dk.</div><div class="holder m-2"><span class="h1 font-weight-bold">'+seconds+'</span> Sn.</div></div>';


        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("webinar_fonVolume").style.display = "none";
            document.getElementById("body-video").innerHTML =`<video
    id="my-video"
    class="video-js"
    autoplay
>
    <source src="https://webinarim3.webinarim.com/data/webinar/video/webinar-14.mp4" type="video/mp4" />

</video>
`;

            var webinar_fon = $('#webinar_fon');
                if (webinar_fon[0]["muted"] == false) {
                    webinar_fon[0]["muted"] = true;
                }

        }
    }, 1000);

    var webinar_fon = $('#webinar_fon');
    $('#webinar_fonVolume').on('click', function () {
        if (webinar_fon[0]["muted"] == true) {
            webinar_fon[0]["muted"] = false;
            $(this).find('i').addClass('fa-volume-up').removeClass('fa-volume-mute');
        } else {
            webinar_fon[0]["muted"] = true;
            $(this).find('i').addClass('fa-volume-mute').removeClass('fa-volume-up');
        }
    });


</script>


<style>
    .video-js{
        width: 80% !important;
        height: 100% !important;
    }
    @media screen and (max-width: 992px) {
        .video-js{
            display: flex;
            align-items: center;vertical-align:center;
            justify-content: center;
            width: 100% !important;
            height: 100% !important;
        }
    }


    .wb__bg img {
        height: 100vh;
        width: 100%;
        object-fit: cover;
        position: absolute;
    }

    .wb__cn {
        position: relative;
        z-index: 999;
    }

    .countdown {
        text-transform: uppercase;
        font-weight: bold;
    }

    .countdown span {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
        font-size: 3rem;
        margin-left: 0.8rem;
    }

    .countdown span:first-of-type {
        margin-left: 0;
    }

    .countdown-circles {
        text-transform: uppercase;
        font-weight: bold;
    }

    .countdown-circles span {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.4);
        color: #000;
    }


    .countdown-circles span:first-of-type {
        margin-left: 0;
    }


    .bg-gradient-2 {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fz35 {
        font-size: 35px;
        font-weight: bold;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
    }

    #webinar_fon {
        position: absolute;
        z-index: -999;
        top: 0;
        left: 0;
    }

    #webinar_fonVolume {
        position: absolute;
        right: 30px;
        top: 30px;
        z-index: 9999;
        transform: rotate(180deg);
        overflow: hidden;
        font-size: 30px;
        color: white;
        cursor: pointer;
        line-height: 0;
    }


    #fullScreen {
        position: absolute;
        bottom: 15px;
        right: 15px;
        width: 36px;
        height: 36px;
        outline: none;
        border-radius: 6px;
        display: block;
        border: none !important;
        cursor: pointer;
        z-index: 99999;
    }

    #fullScreen:hover {
        border: 1px groove #0ef;
    }


</style>
<script>
    $(document).ready(function () {
        //$('#_myVideo').disableSelection();
    })
</script>




</body></html>