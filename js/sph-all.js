$(document).ready(function(){
	 $("input:text:visible:first").focus();
	 $('select').select2();

	 $('body').on('click','#show-adherent',function(){
		$('#add_adherent').toggle('50'); 
	 });
	 $('body').on('click','#show-coach',function(){
		 $('#add_coach').toggle('50'); 
	 });
});