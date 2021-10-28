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