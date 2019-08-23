$().ready(function(){
    $('[rel="tooltip"]').tooltip();

    $('a.scroll-down').click(function(e){
        e.preventDefault();
        scroll_target = $(this).data('href');
        $('html, body').animate({
            scrollTop: $(scroll_target).offset().top - 60
        }, 1000);
    });
});

function rotateCard(btn){
    const $card = $(btn).closest('.card-container');

    if($card.hasClass('hover')) {
        $card.removeClass('hover');
    } else {
        $card.addClass('hover');
    }
}