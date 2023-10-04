"use strict";

! function(CCIH, $) {
    "use strict";

    var $win = $(window),
        $body = $('body'),
        breaks = CCIH.Break; // Variable

    var $file_dload = $('.file-dl-toast');

    CCIH.FileManager = function() {
        $file_dload.on("click", function(e) {
            e.preventDefault();
            CCIH.Toast('<h5>Downloading File</h5><p>Generating the file to start download.</p>', 'success', {
                position: 'bottom-center',
                icon: 'ni ni-download-cloud',
                ui: 'is-dark'
            });
        });
    };

    CCIH.coms.docReady.push(CCIH.FileManager);
}(CCIH, jQuery);