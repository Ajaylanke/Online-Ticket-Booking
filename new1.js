$(document).ready(function() {
	createseating();
})
var selectedSeats = Array();
function createseating(){
	var seatingValue=[];
	for(var i=0;i<10;i++){
		for(var j=0;j<10;j++){
			var seatingStyle="<div id='"+(i*10+j)+"' class='seat available'></div>";
			seatingValue.push(seatingStyle);
			
			if(j==9){
				var seatingStyle="<div class='clearfix'></div>";
				seatingValue.push(seatingStyle);
			}
		}
	}
	$('#messagePanel').html(seatingValue);
		$(function(){
			$('.seat').on('click',function(){
				if($(this).hasClass("selected")){
					$(this).removeClass("selected");
					var tmp = selectedSeats.indexOf(this.id);
					selectedSeats.splice(tmp, 1)
				}else{
					$(this).addClass("selected");
					selectedSeats.push(this.id);
				}
			});
			
			$('.seat').mouseenter(function(){
				$(this).addClass("hovering");
				$('.seat').mouseleave(function(){
					$(this).removeClass("hovering");
				});
			});
		});
};

$("#finish").click(function() {
	console.log(selectedSeats);
});
