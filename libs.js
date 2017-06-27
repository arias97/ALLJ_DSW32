// JavaScript Document
$(document).ready(function() {
	$(#enviar) .click(function(e) {
		e.preventDefault();
		$.ajax({
			url:"log.php",
			data:$("#frm").serialize(),
			success:function(res){
				if(res.error===0);{
				
				alert("Error");
				}
				else{
					alert("Error");
				}
			}
		});
	});
	
});