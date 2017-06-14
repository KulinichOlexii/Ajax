$( document ).ready(function() {
    $(function () {
        $('li a').each(function () {
            if (window.location.href == this.href) {
                $(this).parent().addClass('active');
                $(this).parents('.dropdown').addClass('active');
            }
        });
    });
});

