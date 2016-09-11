
function updateHeader() {

    $("#headerText").prepend(window.location.pathname.substring(window.location.pathname.lastIndexOf("/")+1, window.location.pathname.indexOf(".")));
}

function highlightNavOption() {

    $.each($("#navigation").find('.mdl-navigation').find('a'), function() {
      $(this).toggleClass('is-active',
       '/' + $(this).attr('href') == window.location.pathname)
    

    });
}

function updateFooter() {
    $.each($("#footer").find('.mdl-logo'), function() {
       $(this).prepend(window.location.pathname.substring(window.location.pathname.lastIndexOf("/")+1, window.location.pathname.indexOf(".")));
        
    })
}