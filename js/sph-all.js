$(document).ready(function(){
	 $("input:text:visible:first").focus();
	 $('select').select2();

	 $('body').on('click','#show-adherant',function(){
		$('#add_adherant').toggle('50'); 
	 });
	 $('body').on('click','#show-coach',function(){
		 $('#add_coach').toggle('50'); 
	 });
});