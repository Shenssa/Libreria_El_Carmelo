jQuery(document).ready(function($) {
    $('.trigger-sidebar-toggle').on('click', function() {
        $('body').toggleClass('sidebar-is-open');
    });
});