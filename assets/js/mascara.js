// Validações

"use strict"

const celular = document.getElementById("celular").value
const nome = document.getElementById("nome").value
const email = document.getElementById("email").value

function mascaraCelular(celular) {

    celular.value = celular.value.replace(/[^\d]/g, "")
    celular.value = celular.value.replace(/(\d{2})(\d{5})(\d{4})/, "($1)$2-$3")

}

function caracteresInvalidos(nome) {
    nome.value = nome.value.replace(/[\[\]}.!'-@,><|://#"%$\\;&*()_+={]/g, "")
    nome.value = nome.value.replace(/[^\D]/g, "")

}