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

    let formClick = $("#formClick");
    let formModal = $("#form");

    console.log(formClick);
    formClick.click(function(){
        if(formModal.is(":visible")){
            formModal.hide();
            return;
        }
        formModal.show();
    })

   
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
   

    
});//fIN DU DOCUMENT.READY

$(window).on("resize", resetBoxes);
function resetBoxes() {
    $(".box").each(function () {
        let x = $(this).offset().left + $(this).width() / 2;
        let y = $(this).offset().top + $(this).height() / 2;
        $(this).attr("data-x", x);
        $(this).attr("data-y", y);
    });
}
