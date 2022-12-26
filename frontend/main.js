

$("#btnSalvar").on("click", function() {
    
    var txt_nome = $("#name").val();
    var txt_email = $("#email").val();
    var txt_comentario = $("#comment").val();
    

    $.ajax({
        url: "http://localhost/api/Mensagens.php",
        
        type: "POST",
        data: { nome: txt_nome, 
                email: txt_email,
                mensagem: txt_comentario
            },
        beforeSend: function() {
        
            console.log("Tentando enviar os dados....");

        }
    }).done(function(e) {
        alert("Dados Salvos");
    })

});






// modelo teste

/*$("#button-blue").on("click", function() {
    
    var txt_nome = $("#name").val();
    var txt_email = $("#email").val();
    var txt_comentario = $("#comment").val();

    let url = "http://172.31.100.100:9091/Mensagens.php"

    body = {
        "nome": txt_nome,
        "email": txt_email,
        "mensagem": txt_comentario
    }

    console.log(body)
    let request = new XMLHttpRequest()
    request.open("POST", url, true)
    request.setRequestHeader("Content-type", "application/json")
    request.send(body)

    request.onload= function() {
        console.log(this.responseText)
    }
    return request.responseText

});
*/

