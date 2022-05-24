( function ($, elementor) {
    "use strict";

    var Na_plugin_scripts = {

        init: function () {

            var widgets = {
                'necessary_tabs.default': Na_plugin_scripts.Necessary_tabs,
            };

            $.each(widgets, function (widget, callback) {
                elementor.hooks.addAction('frontend/element_ready/' + widget, callback);
            });
        },
        Necessary_tabs: function ($scope) {
            const getList = $scope.find('.na-tab-nav li a');
            getList.on('click', function(e){
                e.preventDefault();
                 const displaySelector = $(this).attr('href');
                 $(this).parent('li').addClass('active');
                 $(this).parent('li').siblings().removeClass('active');
                 $(displaySelector).slideDown();('fast');
                 $(displaySelector).siblings().slideUp();;
             });
        },
    };

    $(window).on('elementor/frontend/init', Na_plugin_scripts.init);


}(jQuery, window.elementorFrontend) );