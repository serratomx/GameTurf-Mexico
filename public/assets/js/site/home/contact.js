$(document).ready(function() {
    $('#carousel-our-clients').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#carousel-our-clients').removeClass('cS-hidden');
        } 
    }); 
});