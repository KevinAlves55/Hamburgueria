'use strict'

import { getProdutos, getProdutosPesquisa, getProdutosCategoria } from "./produtos.js";
import { getCategorias } from "./categorias.js";

const CriarCard = ({nome, imagem, percentual, descricao, destaque, desconto}) => {

    const card = document.createElement('div')
    
    if (desconto == 0 && destaque == 0) {

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

    }

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

const CriarCardCategoria = ({nomeProduto, imagem, percentual, descricao}) => {

    const card = document.createElement('div')
    
    card.innerHTML = 
    `
        <div class="cards">
            <div class="card-foto">
                <img src="admin/arquivos/${imagem}" alt="Produto">
            </div>
            <div class="card-nome">
                <h3>${nomeProduto}</h3>
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

const CriarCardapio = ({nome, id}) => {

    const card = document.createElement('li')

    card.innerHTML = 
    `
        <li data-id="${id}" class="item">${nome}</li>
    `

    return card

}

const carregarCategorias = async () => {

    const container = document.querySelector('#categorias')
    const categorias = await getCategorias()
    const cards = categorias.map(CriarCardapio)
    container.replaceChildren(...cards)

}

const filtarId = async ({target}) => {
 
    const idCategoria = target.dataset.id
    const container = document.querySelector('#produtos')
    const produtos = await getProdutosCategoria(idCategoria)
    const cards = produtos.map(CriarCardCategoria)
    container.replaceChildren(...cards)

}

const CriarOwl = ({imagem}) => {

    const carrousel = document.createElement('div')

    carrousel.innerHTML = 
    `
        <div class="owl-img">
            <img src="admin/arquivos/${imagem}" alt="Destaques">
        </div>
    `

    return carrousel

}

const carregarImagens = async () => {

    const container = document.querySelector('.owl-track')
    const destaques = await getProdutos()
    const owl = destaques.map(CriarOwl)
    container.replaceChildren(...owl)

}

const CriarCardDesconto = ({nome, imagem, percentual, descricao, preco, desconto}) => {

    const descontos = document.createElement('div')

    if (desconto >= 1) {

        descontos.innerHTML =
        `
            <div class="cards espaco">
                <div class="card-foto">
                    <img src="admin/arquivos/${imagem}" alt="Hamburguer dos deuses">
                </div>
                <div class="card-nome">
                    <h3>${nome}</h3>
                </div>
                <div class="card-descricao">
                    <p>${descricao}</p>
                </div>
                <div class="informacoes">
                    <button>saiba mais</button>
                    <i>R$ ${preco.toString().replace('.', ',')}</i>
                    <span>R$ ${percentual.toString().replace('.', ',')}</span>
                </div>
            </div>
        `

    }

    return descontos

}

const carregarProdutosDesconto = async () => {

    const container = document.querySelector('.itens-promocoes')
    const produtos = await getProdutos()
    const cards = produtos.map(CriarCardDesconto)
    container.replaceChildren(...cards)

}

carregarProdutosPrincipais()
carregarCategorias()
carregarImagens()
carregarProdutosDesconto()
document.querySelector('#categorias').addEventListener('click', filtarId)
document.getElementById('pesquisar').addEventListener('click', pesquisarProdutos)