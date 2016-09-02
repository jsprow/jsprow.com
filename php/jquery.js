$(function() {
    var waypoint = new Waypoint({
        element: document.getElementById('basic-waypoint'),
        handler: function(direction) {
            $('#form').fadeOut()
        },
        offset: 25%
    })
});
