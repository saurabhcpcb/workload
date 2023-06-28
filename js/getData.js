$(document).ready(function(){  

$("#Reference").change(function() {    

$('input[name="checkall"]').each(function() {
this.checked = false;
});
					
	var id = $(this).find(":selected").val();
	$.ajax({
	type: "POST",
	url: "getReferenceData.php",
	data:'id='+id,
	
	
		success: function(data){
		$("#Result").html(data);
		}
	} );

}) 
});
