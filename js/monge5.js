
// 画面スクロール　背景黒レイヤー追加＊＊＊＊＊＊＊＊＊＊

$(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()>0){
            $('main').css('background-color', 'rgba(0, 0, 0, 0.5)');
        } else {
            $('main').css('background-color','rgba(0, 0, 0, 0)');
        }
    })
});


// Pagetop戻りボタン出現　＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊

$(function(){
    var appear = false;
    var pagetop = $('#page-top');
    $(window).scroll(function(){
        if ($(this).scrollTop()>700){
            if (appear == false){
                appear - true;
                pagetop.stop().animate({
                    'bottom':'50px'
                }, 300);
        }
    } else {
        if(apper) {
            appear = false;
            pagetop.stop().animate({
                'bottom' : '-50px'
            }, 300);
        }
    } 
  });
pagetop.click(function(){
    $('body, html').animate({
        scrollTop:0}, 500);
        return false;
});
});

$(function(){
    $('a[href^=#]').click(function(){
        event.preventDefault();
        var target = $(this.hash);
        if (!target.length) return;

        var targetY = target.offset().top;

        $('body').animate({scrollTop: targetY}, 1000, 'swing');
    });

});


// navリストへのスクロール＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊

$(function(){
    $('nav a').click(function(){
       var id = $(this).attr('href');
       var position = $(id).offset().top;
       var rposition = position-50;
       $('html, body').animate({'scrollTop':rposition}, 500)
    })
})



