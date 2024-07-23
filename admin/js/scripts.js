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