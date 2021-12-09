'use strict'

/*{ <div class="cards">
                    <div class="card-foto">
                        <img src="assets/img/produto1.jpg" alt="Hamburguer dos deuses">
                    </div>
                    <div class="card-nome">
                        <h3>Despertar da Athena</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe suscipitet Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="informacoes">
                        <button>saiba mais</button>
                        <span>R$ 35,99</span>
                    </div>
                </div> }*/

import { getProdutos } from "./produtos.js";

const CriarCard = ({nome, imagem, preco, descricao}) => {

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
                <span>R$ ${preco}</span>
            </div>
        </div>  
    `

    return card

}

const CriarCardDesconto = ({nome, imagem, preco, descricao, percentual}) => {

    const destaque = document.createElement('div')
    destaque.innerHTML = 
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
                <i>R$ ${preco}</i>
                <span>R$ ${percentual}</span>
            </div>
        </div>  
    `

    return destaque

}

const carregarProdutos = async () => {

    const container = document.querySelector('#produtos')
    const produtos = await getProdutos()
    const cards = produtos.map(CriarCard)
    container.replaceChildren(...cards)

}

const carregarProdutosDesconto = async () => {

    const container = document.querySelector('.itens-promocoes')
    const produtos = await getProdutos()
    const cardsDesconto = produtos.map(CriarCardDesconto)
    container.replaceChildren(...cardsDesconto)

}

carregarProdutos()
// carregarProdutosDesconto()