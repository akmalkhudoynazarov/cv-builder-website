$(function() {
    $('.sample').hide();
    $('#sample-btn').click(function() {
        $('.sample').fadeIn();
        $('body').addClass('blur');
    })
})
$(document).mouseup(function(e) {
    var container = $(".sample");
    var body = $('body');
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.hide();
        body.removeClass('blur')
    }
});