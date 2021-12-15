'use strict'

const getCategorias = async () => {

    const url = `http://localhost/ds2t20212/Kevin/BurguerGods/admin/API/categorias`
    const response = await fetch(url)
    const dados = await response.json()
    return dados

}

export {

    getCategorias

}