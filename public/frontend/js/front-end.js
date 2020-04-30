/* RATINGS */
$(function() {
    let listStar = $(".choose-list-ratings .fa");
    listRatingsLabel = {
        1 : 'Không thích',
        2 : 'Tạm được',
        3 : 'Bình thường',
        4 : 'Rất tốt',
        5 : 'Tuyệt vời',
    }

    listStar.mouseover(function() {
        let $this = $(this);
        let number = $this.attr("data-key");
        listStar.removeClass('ratings-active');
        $.each(listStar, function(key, value){
            if(key + 1 <= number) {
                $this.addClass('ratings-active');
            }
        })


        $(".title-choose-ratings").text("").text(listRatingsLabel[number]).show();
        //console.log($this.attr("data-key"));
    })

    // CLICK SHOW FORM RATINGS
    $(".js-send-ratings").click(function(e){
        e.preventDefault();
        // $(".form-ratings").slideToggle('fast');
        if($(".form-ratings").hasClass('hide')) {
            $(".form-ratings").addClass('active').removeClass('hide');
        }else {
            $(".form-ratings").addClass('hide').removeClass('active');
        }
    })
})