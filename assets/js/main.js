'use strict'

import { getProdutos, getProdutosPesquisa } from "./produtos.js";
import { getCategorias } from "./categorias.js";

// const CriarOwl = ({imagem}) => {

//     const carrousel = document.createElement('div')

//     carrousel.innerHTML = 
//     `
//         <div class="owl-img">
//             <img src="admin/arquivos/${imagem}" alt="Destaques">
//         </div>
//     `

// }

// const carregarImagens = async () => {

//     const container = document.querySelector('.owl-track')
//     const produtos = await getProdutos()
//     const owl = produtos.map(CriarOwl)
//     container.replaceChildren(...owl)

// }

const CriarCard = ({nome, imagem, percentual, descricao}) => {

    const card = document.createElement('div')
    
    card.innerHTML = 
    `
        <div class="cards">
            <div class="card-foto">
                <img src="admin/arquivos/${imagem}" alt="Produto">
            </div>
            <div class="card-nome">
                <h3>${nome}</h3>
            </div>
            <div class="card-descricao">
                <p>${descricao}</p>
            </div>
            <div class="informacoes">
                <button>saiba mais</button>
                <span>R$ ${percentual.toString().replace('.', ',')}</span>
            </div>
        </div>
    `

    return card

}

const CriarCardapio = ({nome}) => {

    const card = document.createElement('li')

    card.innerHTML = 
    `
        <li>${nome}</li>
    `

    return card

}

const carregarProdutosPrincipais = async () => {

    const container = document.querySelector('#produtos')
    const produtos = await getProdutos()
    const cards = produtos.map(CriarCard)
    container.replaceChildren(...cards)

}

const pesquisarProdutos = async () => {

    const nome = document.getElementById('search').value
    const container = document.querySelector('#produtos')
    const produtos = await getProdutosPesquisa(nome)
    const cards = produtos.map(CriarCard)
    container.replaceChildren(...cards)

}

const carregarCategorias = async () => {

    const container = document.querySelector('#categorias')
    const categorias = await getCategorias()
    const cards = categorias.map(CriarCardapio)
    container.replaceChildren(...cards)

}

carregarProdutosPrincipais()
carregarCategorias()
document.getElementById('pesquisar').addEventListener('click', pesquisarProdutos)
// carregarImagens()