'use strict'

import { getProdutos, getProdutosPesquisa, getProdutosCategoria } from "./produtos.js";
import { getCategorias } from "./categorias.js";

const CriarCard = ({nome, imagem, percentual, limit}) => {

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
                <p>${limit}</p>
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

const CriarCardDesconto = ({nome, imagem, percentual, valor, limit}) => {

    const descontos = document.createElement('div')

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
                <p>${limit}</p>
            </div>
            <div class="informacoes">
                <button>saiba mais</button>
                <i>R$ ${valor.toString().replace('.', ',')}</i>
                <span>R$ ${percentual.toString().replace('.', ',')}</span>
            </div>
        </div>
    `

    return descontos

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

const carregarProdutosPrincipais = async () => {

    const container = document.querySelector('#produtos')
    const produtos = await getProdutos()
    const produtosComuns = produtos.filter(({desconto, destaque}) => desconto <= 0 && destaque == 0)
    const cards = produtosComuns.map(CriarCard)
    container.replaceChildren(...cards)

}

const pesquisarProdutos = async () => {
    
    const error = document.getElementById('erro')
    const nome = document.getElementById('search').value
    const container = document.querySelector('#produtos')

    if (nome != '') {
        
        const produtos = await getProdutosPesquisa(nome)
        
        if (produtos.hasOwnProperty('message')) {

            error.textContent = `A pesquisa - ${nome} - não corresponde aos resultados de produtos`
            container.innerText = ''

        } else {

            const cards = produtos.map(CriarCard)
            container.replaceChildren(...cards)
            error.textContent = ''

        }

    } else {

        container.innerText = ''
        error.textContent = 'Digite uma palavra chave'

    }

}

const carregarCategorias = async () => {

    const container = document.querySelector('#categorias')
    const categorias = await getCategorias()
    const cards = categorias.map(CriarCardapio)
    container.replaceChildren(...cards)

}

const carregarProdutosCatgegoria = async ({target}) => {
 
    const error = document.getElementById('erro')
    const idCategoria = target.dataset.id
    const container = document.querySelector('#produtos')
    const produtos = await getProdutosCategoria(idCategoria)
    
    if (produtos.hasOwnProperty('message')) {

        error.textContent = 'A categoria selecionada não contém produtos'
        container.innerText = ''

    } else {

        error.textContent = ''
        const cards = produtos.map(CriarCard)
        container.replaceChildren(...cards)

    }

}

const carregarImagens = async () => {

    const container = document.querySelector('.owl-track')
    const destaques = await getProdutos()
    const owl = destaques.map(CriarOwl)
    container.replaceChildren(...owl)

}

const carregarProdutosDesconto = async () => {

    const container = document.querySelector('.itens-promocoes')
    const produtos = await getProdutos()
    const produtosDesconto = produtos.filter(({desconto}) => desconto >= 1)
    const cards = produtosDesconto.map(CriarCardDesconto)
    container.replaceChildren(...cards)

}

carregarProdutosPrincipais()
carregarCategorias()
carregarImagens()
carregarProdutosDesconto()
document.querySelector('#categorias').addEventListener('click', carregarProdutosCatgegoria)
document.getElementById('pesquisar').addEventListener('click', pesquisarProdutos)