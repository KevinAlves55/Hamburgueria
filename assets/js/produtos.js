'use strict'

const url = `http://localhost/BurguerGods/admin/API/produtos`

const getProdutos = async () => {

    const response = await fetch(url)
    const dados = await response.json()
    return dados

}

export {

    getProdutos

}