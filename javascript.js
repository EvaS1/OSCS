//MENU 	APPARITION 
/*function cache (addr){.getElementById('hide').style.visibility= "hidden"}*/
/*function cache { document.getElementById(menu).style.visibility = "hidden";*/
/*
*/
$(function() {	
	balise_a = $('.menunav');
	var contenu_a = balise_a.html();
	
	
	$('#btnClickMe').click(function() {
		if(!balise_a.hasClass('hide')) {
			$('hide').hide('slow');
			balise_a.addClass('hide');		
			
		} else {
			balise_a.removeClass('hide');
						
		}
	});
	
}); 	
/*window.onload = function () {cache('hidden'); };*/
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