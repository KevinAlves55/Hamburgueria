"use strict"

function caracteresInvalidos(nome) {
    nome.value = nome.value.replace(/[\[\]}.!'-@,><|://#"%$\\;&*()_+={]/g, "")
    nome.value = nome.value.replace(/[^\D]/g, "")
}

$(document).on('keydown', 'input[pattern]', function(e){
    var input = $(this);
    var oldVal = input.val();
    var regex = new RegExp(input.attr('pattern'), 'g');
  
    setTimeout(function(){
      var newVal = input.val();
      if(!regex.test(newVal)){
        input.val(oldVal); 
      }
    }, 90);
});

$(document).on("input", "#descricao", function () {
    var limite = 250;
    var caracteresDigitados = $(this).val().length;
    var caracteresRestantes = limite - caracteresDigitados;
  
    $(".caracteres").text(caracteresRestantes);
});