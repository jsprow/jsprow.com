$(document).ready(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });
    $(function() {
        $( "#accordion" ).accordion({
            collapsible: true,
            heightStyle: 'content'
        });
        $(function() {
                $("#accordion").accordion({
                    autoHeight: false,
                    collapsible: true,
                    heightStyle: "content",
                    active: 0,
                    animate: 300 // collapse will take 300ms
                });
                $('#accordion h3').bind('click',function(){
                    var self = this;
                    setTimeout(function() {
                        theOffset = $(self).offset();
                        $('body,html').animate({ scrollTop: theOffset.top - 100 });
                    }, 310); // ensure the collapse animation is done
                });
        }); 
    });
})