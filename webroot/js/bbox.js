$(document).ready(function(){



				$(".alert").click(function(){

						bootbox.alert("<img class='img-responsive img-thumbnail' src='images/"+this.dataset.photo+"'>");
				});

				$(".frm").click(function(){
					bootbox.alert("Hello");

				});







});