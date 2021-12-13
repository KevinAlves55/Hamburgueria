'use strict'

const getProdutos = async () => {

    const url = `http://localhost/BurguerGods/admin/API/produtos`
    const response = await fetch(url)
    const dados = await response.json()
    return dados

}

const getProdutosPesquisa = async (nome) => {

    const url = `http://localhost/BurguerGods/admin/API/produtos?nome=${nome}`
    const response = await fetch(url)
    const dados = await response.json()
    return dados

}

export {

    getProdutos,
    getProdutosPesquisa

}