'use strict'

const getCategorias = async () => {

    const url = `http://localhost/BurguerGods/admin/API/categorias`
    const response = await fetch(url)
    const dados = await response.json()
    return dados

}

export {

    getCategorias

}