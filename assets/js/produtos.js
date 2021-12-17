'use strict'

const getProdutos = async () => {

    const url = `http://localhost/ds2t20212/Kevin/BurguerGods/admin/API/produtos`
    const response = await fetch(url)
    const dados = await response.json()
    return dados

}

const getProdutosPesquisa = async (nome) => {

    const url = `http://localhost/ds2t20212/Kevin/BurguerGods/admin/API/produtos?nome=${nome}`
    const response = await fetch(url)
    const dados = await response.json()
    return dados

}

const getProdutosCategoria = async (id) => {

    const url = `http://localhost/ds2t20212/Kevin/BurguerGods/admin/API/produtos?id=${id}`
    const response = await fetch(url)
    const dados = await response.json()
    return dados

}

export {

    getProdutos,
    getProdutosPesquisa,
    getProdutosCategoria

}