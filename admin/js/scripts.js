//this is for wisywgt the editor staff but its from the future i have not yet planned for it

//tinymce.init({selector:'textarea'});


$('#selectAllBoxes').click(function(event){
	if(this.checked) {
		$('.checkBoxes').each(function(){
			this.checked = true;
		});
	}else{
		if(this.checked) {
		$('.checkBoxes').each(function(){
			this.checked = false;
		});
	}
}});
//div_box variable to store load screen and loader ids
var div_box = "<div id='load_screen'><div id='loading></div></div>'";
//launching it before the body section in our html
$("body").prepend(div_box);
//set the loaderimage to delay for 700ms
$("load_screen").delay(700).fadeout(600 function(){
//removing the image after the time has complete
	$(this).remove();
});
//}});

//we need to automatically load data from database 
function loadUsersOnline(){


	$.get("function.php?onlineusers=result",function(data){
		$(".usersonline").text(data);
	})
}
//we need to call this function to keep checking the database for every couple of seconds so that it keeps refreshing and obtaining new information

setInterval(function(){

loadUsersOnline();

},500)
