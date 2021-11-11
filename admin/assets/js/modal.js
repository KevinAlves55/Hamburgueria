$(document).ready(function(){
    $("#container-modal").css('display', 'none');
    $("#fechar").css('display', 'none');

    // Abre Modal
    $(".pesquisar").click(function(){
         
        // recebendo id do html- trabalhamos com this para referenciar elemento clicado
        let idProdutos = $(this).data('id');
            
        //Realiza uma requisição para consumir dados de otra pagina
        $.ajax({
            
            type: "GET", //Tipo de requisição (GET, POST,PUT, etc)
            url: "visualizarDados.php", //URL dapágina que sera consumida
            data: {id: idProdutos},

            //se a requisição der certo, recebemos conteúdo na variavel dados
            success: function(dados){ 
                
                $(".modal").html(dados)//exibe dentro da div modal
            
            }
        
        });

        $("#container-modal").fadeIn(400).ready(function(){
            
            $(".modal").slideToggle(700);
            $("#fechar").slideToggle(700); 
           
        });
    });
    
    // Fecha Modal
    $("#container-modal").click(function(){
        
        $('.modal').fadeOut(400);
        $("#container-modal").fadeOut(400);
        $("#container-modal").fadeOut(400); 
    
    });
});