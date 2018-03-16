$('.panel').find('.panel-body').find('.view').on('click', function(event){
	event.preventDefault();

	var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
	console.log(postBody);
	

});