
function updateHeader() {

    $("#headerText").prepend(window.location.pathname.substring(window.location.pathname.lastIndexOf("/")+1, window.location.pathname.indexOf(".")));
}

function highlightNavOption() {

    $.each($("#navigation").find('.mdl-navigation').find('a'), function() {
      $(this).toggleClass('is-active',
       $(this).attr('href') == window.location.pathname.substring(window.location.pathname.lastIndexOf("/")+1,window.location.pathname.length))
    

    });
}

function updateFooter() {
    $.each($("#footer").find('.mdl-logo'), function() {
       $(this).prepend(window.location.pathname.substring(window.location.pathname.lastIndexOf("/")+1, window.location.pathname.indexOf(".")));
        
    })
}

                function loadHeaderAndFooter() {
                       highlightNavOption();
                             updateHeader();
                        $("#footer").load('lib/footer.html', function() {
                       updateFooter();
                            });
}

function contact(email, subject, body) {
    
     'use strict';
       var contactButton = document.querySelector('#ContactSubmission');

       var contactContainer = document.querySelector('#contact-info');
  var handler = function(event) {
    contactButton.style.backgroundColor = '';
  };
    contactButton.style.backgroundColor = '#' +
        Math.floor(Math.random() * 0xFFFFFF).toString(16);
    var data = {
      message: 'Opening Email Client.',
      timeout: 10000,
      actionHandler: handler,
      actionText: 'Close'
    };
    contactContainer.MaterialSnackbar.showSnackbar(data);

        window.open('mailto:'+email+'?subject='+encodeURIComponent(subject)+'&body='+encodeURIComponent(body))

}