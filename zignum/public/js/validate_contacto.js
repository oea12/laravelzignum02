//Click para validar la edad
$("#form #send").click(function(){
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var comment = document.getElementById('comment').value;
		if(name!=""&&email!=""&&comment!=""){
			
			$("#note2").css("display","block");
			$("#note2").animate({opacity:1},800);
			$("#exit_note2").css("left",($("#note2 p").position().left + $("#note2 p").width() + 20));
			$("#cont").css("overflow","hidden");
			
			$("#name").val("");
			$("#email").val("");
			$("#comment").val("");
			var formData = {
				s_name: String(name),
				s_email: String(email),
				s_comment: String(comment)
			};
			console.log(formData);
			$.ajax({
    	url : "/sendmail",
    	type: "POST",
    	data : formData,

    	success: function(data, textStatus, jqXHR){
        //data - response from server
    	},
    	error: function (jqXHR, textStatus, errorThrown){
 
    }
		});
	}else{
		$("#note").css("display","block");
		$("#note").animate({opacity:1},800);
		$("#exit_note").css("left",($("#note p").position().left + $("#note p").width() + 20));
		$("#cont").css("overflow","hidden");
	}
});

$("#borrar").click(function(){
	$("#name").val("");
	$("#email").val("");
	$("#comment").val("");
});

//Salir de la ventada de acceso denegado
function exitNote() {
	$("#note").velocity({opacity:0},800,function(){
		$("#note").css("display","none");
		$("#cont").css("overflow","visible");
	});
}

//Salir de la ventada de acceso denegado
function exitNote2() {
	$("#note2").velocity({opacity:0},800,function(){
		$("#note2").css("display","none");
		$("#cont").css("overflow","visible");
	});
}
$("#send").hover(
	function(){
		$("#form > :nth-child(15)").animate({left: "5%", "margin-top": "-5%"})
	},function(){
		$("#form > :nth-child(15)").animate({left: "0%", "margin-top": "0%"})
});
$("#borrar").hover(
	function(){
		$("#form > :nth-child(17)").animate({right: "-5%", "margin-top": "-5%"})
	},function(){
		$("#form > :nth-child(17)").animate({right: "0%", "margin-top": "0%"})
});