var $j = jQuery.noConflict();
$j(function() {
    $j('#s4').before('<div id="nav" class="nav">').cycle({
        fx:     'fade',
       speed:  2500,
        timeout: 2500,
	    pager:  '#nav',
        before: function() { if (window.console) console.log(this.src); }
    });
});// JavaScript Document