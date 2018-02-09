if (typeof alexantr === 'undefined' || !alexantr) {
    var alexantr = {};
}

alexantr.colorPickerWidget = (function ($) {
    'use strict';

    var scriptUrl,
        callbacks = [],
        loading = false,
        loaded = false;

    function callPlugin(inputId, options) {
        $('#' + inputId).minicolors(options);
    }

    $.getCachedScript = function (url, options) {
        options = $.extend(options || {}, {
            dataType: 'script',
            cache: true,
            url: url
        });
        return $.ajax(options);
    };

    return {
        setScriptUrl: function (url) {
            if (!scriptUrl) {
                scriptUrl = url;
            }
        },
        register: function (inputId, options) {
            if (loaded) {
                callPlugin(inputId, options);
            } else {
                callbacks.push({inputId: inputId, options: options});
                if (!loading && scriptUrl) {
                    loading = true;
                    $.getCachedScript(scriptUrl).done(function () {
                        loaded = true;
                        loading = false;
                        for (var i = 0; i < callbacks.length; i++) {
                            callPlugin(callbacks[i].inputId, callbacks[i].options);
                        }
                    });
                }
            }
        }
    }
})(jQuery);
