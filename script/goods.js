function onhv($a) {
   //alert($a);
   var $elem = $('.newsname').eq($a);
   $elem.stop(true).animate({top: "0"}, 100);
   setTimeout(function(){
    $(".newsarea").eq($a).addClass("active");
	$(".newsname").eq($a).addClass("activename");
   } , 100);
   	$(".newsnamedesc").eq($a).css("display","block");
	$(".newsrealname").eq($a).css("background","#f63");
}
function onmo($a) {
   //alert($a);
   var $elem = $('.newsname').eq($a);
   $(".newsnamedesc").eq($a).css("display","none");
   setTimeout(function(){
   $(".newsarea").eq($a).removeClass("active");
   $(".newsname").eq($a).removeClass("activename");
   } , 100);
   $elem.stop(true).animate({top: "100"}, 100);
   $(".newsrealname").eq($a).css("background","url(../../images/design/orangebk.png)");
}