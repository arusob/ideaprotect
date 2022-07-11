$(document).ready(function () {
    $(".counter").each(function () {
        var count = $(this);
        var countTo = count.attr('data-count');
        // console.log(countTo);
        $({countNum:count.text()}).animate({
                countNum:countTo,
            },
            {
                duration:8000,
                easing:'linear',
                step:function(){
                    count.text(Math.floor(this.countNum));
                },
                complete:function(){
                    count.text(this.countNum);
                }
            });
    });
});