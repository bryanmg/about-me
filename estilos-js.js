

$(document).ready(function(){
	$(".secundario").mouseover(function(){
		$(".secundario").css("box-shadow", "0 0 15px");
	});
});

$(document).ready(function(){
	$(".secundario").mouseout(function(){
		$(".secundario").css("box-shadow", "0 0 1px");
	});
});