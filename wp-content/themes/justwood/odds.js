var $j = jQuery.noConflict();

$j(function(){
    $j('#cycleright').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
    $j('#cycleleft').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
});
