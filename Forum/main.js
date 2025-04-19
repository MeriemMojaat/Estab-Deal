// $ jquery library m js tetzed b lien thotou fel header 
var myVar = setInterval(LoadData, 2000); // Set a delay 

http_request = new XMLHttpRequest(); // taaml exchange mtaa data f server behind the scenes 

function LoadData(){
$.ajax({ // Asynchronous JavaScript and XML tnajem tekhou les données maghir ma taffichi el page 
url: 'view.php',
type: "POST",
dataType: 'json',  //format mtaa ktiba mtaa données 
success: function(data) {
    $('#MyTable tbody').empty(); // taamel tcheck ken table feragh wale 
    for (var i=0; i<data.length; i++) { // partie mtaa l comment lowel 
        var commentId = data[i].id;
        if(data[i].parent_comment == 0){ // commentaire original 
        var row = $('<tr><td><b><img src="avatar.jpg" width="30px" height="30px" />' + data[i].name + ' :<i> '+ data[i].datef + ':</i></b></br><p style="padding-left:80px">' + data[i].content + '</br><a data-toggle="modal" data-id="'+ commentId +'" title="Add this item" class="open-ReplyModal" href="#ReplyModal">Reply</a>'+'</p></td></tr>');
		 // y affichi fih e data li tsubmittet mel view php 
        $('#record').append(row); // izid fel #record el row li tssan3et 
        for (var r = 0; (r < data.length); r++) // partie reply
                {
                    if ( data[r].parent_comment == commentId) // reply l commentaire mouaayen 
                    {
                        var comments = $('<tr><td style="padding-left:80px"><b><img src="avatar.jpg" width="30px" height="30px" />' + data[r].name + ' :<i> ' + data[r].datef + ':</i></b></br><p style="padding-left:40px">'+ data[r].content +'</p></td></tr>');
                        $('#record').append(comments);
                    }
                }
        }
    }
},

});
}



$(document).on("click", ".open-ReplyModal", function () {
     var commentid = $(this).data('id');
     $(".modal-body #commentid").val( commentid );
});


		
//Post data to the server
$(document).ready(function() {
	$('#butsave').on('click', function() { // tsavi el comment 
		$("#butsave").attr("disabled", "disabled"); // madech tnajem teclicki alih l moda mouaayna 
		// houni chtemchi tjib l data li thatou fel form kif tekteb fel message 
		var id = document.forms["frm"]["Pcommentid"].value;
		var name = document.forms["frm"]["name"].value;
		var msg = document.forms["frm"]["msg"].value;
		if(name!="" && msg!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					id: id,
					name: name,
					msg: msg,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult); // tetaada f lista men donnée l donnée  irajaaa el data li tsavet 
					if(dataResult.statusCode==200){ // code 200 mtaa success 
						$("#butsave").removeAttr("disabled"); // inahi el disabled button 
						// houni chifaraghlek e table 
						document.forms["frm"]["Pcommentid"].value = "";
						document.forms["frm"]["name"].value = "";
						document.forms["frm"]["msg"].value = "";
						LoadData(); 						
					}
					else if(dataResult.statusCode==201){ // code mtaa el error 
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});

//Reply comment
$(document).ready(function() {
	$('#btnreply').on('click', function() { // houni baid manzel al button reply bech twali l disabled l moda mouaayna 
		$("#btnreply").attr("disabled", "disabled");
		// Houni chtemchi tjib l data li thattet fel response 
		var id = document.forms["frm1"]["Rcommentid"].value;
		var name = document.forms["frm1"]["Rname"].value;
		var msg = document.forms["frm1"]["Rmsg"].value;
		if(name!="" && msg!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					id: id,
					name: name,
					msg: msg,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#btnreply").removeAttr("disabled");
						document.forms["frm1"]["Rcommentid"].value = "";
						document.forms["frm1"]["Rname"].value = "";
						document.forms["frm1"]["Rmsg"].value = "";
						LoadData(); 
						$("#ReplyModal").modal("hide");
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});




	