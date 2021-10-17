"use strict"

function caracteresInvalidos(nome) {
    nome.value = nome.value.replace(/[\[\]}.!'-@,><|://#"%$\\;&*()_+={]/g, "")
    nome.value = nome.value.replace(/[^\D]/g, "")

}