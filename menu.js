/*function cache (addr){.getElementById('hide').style.visibility= "hidden"}*/
$(function() {	
	balise_a = $('.menunav');
	var contenu_a = balise_a.html();
	
	
	$('#btnClickMe').click(function() {
		if(!balise_a.hasClass('hide')) {
			balise_a.addClass('hide');			
			$('hide').fadeOut('slow');
			
			$('#btnClickMe').attr('src', 'Icones/menu.png');
		} else {
			balise_a.removeClass('hide');	
			
			$('#btnClickMe').attr('src', 'Icones/menublanc.png');
		}
	});
	
}); 	
/*
window.onload {function cache}*/
/*var action = document.getElementById('btnClickMe');

action.addEventListener("click", function(){
   var etat = document.getElementById('menu').style.visibility;
   if(etat=="hidden"){
   document.getElementById('menu').style.visibility="visible";
   }
   else{
   document.getElementById('menu').style.visibility="hidden";
   }  
}, false);*/