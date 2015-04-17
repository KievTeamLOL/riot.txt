//-------------------------------------------------------------
//-------------------------------------------------------------
$('.hg').hover(function(){
   $(this).next('.inblock').stop(true).animate({top: "0"}, 200);
});
 
$('.hg').mouseout(function(){
   $(this).next('.inblock').stop(true).animate({top: "42"}, 200);
});
//-----------------------------------------------------------
$('.menutopli').hover(function(){
$(this).stop(true).animate({backgroundColor: "#f63"}, 200);
});
$('.menutopli').mouseout(function(){
$(this).stop(true).animate({backgroundColor: "transparent"}, 200);
});
//-------------------------------------------------------------
//-------------------------------------------------------------
window.onscroll = function(){
 var gtml = document.documentElement, body = document.body;
 var BlkStyle = document.getElementById('bottommenu');
 if(gtml.scrollTop>208||body.scrollTop>208) { 
BlkStyle.className="ghgt";
 } else BlkStyle.className="bottommenu";
}
//-------------------------------------------------------------
//-------------------------------------------------------------