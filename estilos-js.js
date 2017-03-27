

$(document).ready(function(){
	$(".secundario").mouseover(function(){
		$(this).css("box-shadow", "0 0 15px");
	});
});

$(document).ready(function(){
	$(".secundario").mouseout(function(){
		$(".secundario").css("box-shadow", "0 0 1px");
	});
});

$(document).ready(function(){
    $('#a1').click(function(){
        var link = $(this);
        var anchor  = link.attr('href');
        $('body').stop().animate({
            scrollTop: jQuery(anchor).offset().top
        }, 2000);
        return false;
    });
  });