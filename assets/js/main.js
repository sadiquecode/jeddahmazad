var jq = jQuery.noConflict();

jq(document).ready(function () {
    jq('.slide').slick({
        infinite: true,
        autoplay: true,
        speed: 300
    });
});