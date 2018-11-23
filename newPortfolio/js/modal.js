$(document).ready(function () {
    let imgFolio = $(".imgFolio");
    let img = [];
    let modal = [];
    let close = [];
    for(let i =0; i< imgFolio.length; i++){
       img[i] = $("#img" + i);
        modal[i] = $("#modal" + i);
        close[i] = $("#close" + i);
        img[i].click(() => {
            modal[i].show();
        });
        close[i].click(() => {
            modal[i].hide();
        });
        
    }

   
        resetBoxes();
        $(".box").on("mouseover", function () {
            $(this).addClass("active");
            $(".box").each(function () {
                let difx = $(this).attr("data-x") - $(".box.active").attr("data-x");
                let dify = $(this).attr("data-y") - $(".box.active").attr("data-y");
                let dif = Math.sqrt(difx * difx + dify * dify);
                let amp = 20 - dif / 50;
                var movex = 0;
                var movey = 0;
                if (difx !== 0) {
                    movex = 0 - Math.round(difx / dif * amp);
                } else {
                    movex = 0;
                }
                if (dify !== 0) {
                    movey = Math.round(dify / dif * amp);
                } else {
                    movey = 0;
                }

                var mycss =
                    "perspective(100px) rotateX(" +
                    movey +
                    "deg) rotateY(" +
                    movex +
                    "deg)";
                $(this).css("transform", mycss);
            });
        });
        $(".box").on("mouseout", function () {
            $(this).removeClass("active");
        });
    // https://dribbble.com/shots/3084995-Fluent-Panda
    const body = document.querySelector('#panda'),
        head = document.querySelector('#head'),
        mouth = document.querySelector('#mouth'),
        eye = document.querySelector('#eyeTop'),
        ear = document.querySelector('#ear');
    zzz = document.querySelectorAll('#sleep polyline')
    TweenMax.set('svg', { visibility: 'visible' });
    TweenMax.set(zzz, { opacity: 0 });
    TweenMax.set(ear, { rotation: 3, transformOrigin: "bottom center" })


    function breathe() {
        const tl = new TimelineMax({});
        tl.to(body, 1.28, { scaleY: 1.2, transformOrigin: "bottom center", ease: Power1.easeOut }, 'in')
            .to(body, 1.12, { scaleY: 1, ease: Linear.easeNone }, 'out')
            .to(head, 1.28, { scaleY: 1.045, transformOrigin: "bottom center", ease: Power1.easeOut }, 'in')
            .to(head, 1.12, { scaleY: 1, ease: Linear.easeNone }, 'out')
            .to(ear, 1, { rotation: 7, transformOrigin: "bottom center" }, 'in')
            // Eyes 
            .to(eye, 0.8, { y: 2 }, 'in+=0.32')
            .to(eye, 0.8, { y: 0 }, 'in+=1.28')
        return tl;
    }

    function earTwitch() {
        const tl = new TimelineMax({});
        // Ear twitch
        tl.to(ear, 0.16, { y: 1.5, x: -2, ease: Power1.easeIn, transformOrigin: "bottom center", rotation: 15 })
            .to(ear, 0.16, { y: 0, x: 0, ease: Power1.easeInOut, transformOrigin: "bottom center", rotation: 3 })
        return tl;
    }
    function earTwitch2() {
        const tl = new TimelineMax({});
        // Ear twitch2 
        tl.to(ear, 0.12, { y: -0.5, transformOrigin: "bottom center", rotation: 5 })
            .to(ear, 0.12, { y: 0.5, transformOrigin: "bottom center", rotation: 10 })
            .to(ear, 0.12, { y: -0.5, transformOrigin: "bottom center", rotation: 5 })
            .to(ear, 0.12, { y: 0.5, transformOrigin: "bottom center", rotation: 10 })
            .to(ear, 0.24, { y: 0, transformOrigin: "bottom center", rotation: 7 })
        return tl;
    }
    function zzzText() {
        const tl = new TimelineMax({});
        tl.staggerFromTo(zzz, 0.24, { opacity: 0 }, { opacity: 1 }, 0.16)
            .staggerFromTo(zzz, 0.24, { opacity: 1, immediateRender: false }, { opacity: 0 }, 0.16)
        return tl;
    }
    function mouthMove() {
        const tl = new TimelineMax({});
        tl.to(mouth, 0.72, { drawSVG: '0% 65%', y: -0.5, transformOrigin: "top center" })
            .to(mouth, 0.72, { drawSVG: '0% 100%', y: 0, transformOrigin: "top center", ease: Power1.easeOut })
        return tl;
    }

    const masterTl = new TimelineMax({ repeat: -1 });

    masterTl
        .add(breathe(), 'start')
        .add(zzzText(), 'start+=1.60')
        .add(earTwitch2(), 'start+=2.4')
        .add(breathe(), 'start+=3.12')
        .add(zzzText(), 'start+=4.72')
        .add(mouthMove(), 'start+=5.82')
        .add(breathe(), 'start+=6.12')
        .add(zzzText(), 'start+=7.72')
        .add(earTwitch(), 'start+=7.24')
//GSDevTools.create();


});

$(window).on("resize", resetBoxes);
function resetBoxes() {
    $(".box").each(function () {
        let x = $(this).offset().left + $(this).width() / 2;
        let y = $(this).offset().top + $(this).height() / 2;
        $(this).attr("data-x", x);
        $(this).attr("data-y", y);
    });
}
