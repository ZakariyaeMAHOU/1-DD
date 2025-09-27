import React from 'react'

function Product(props) {
    return (
        <div className='col'>
            <div className='card'>
                <img src={`images/${props.img}`} className='card-img-top' />
                <div className='card-body'>
                    <p className='card-title'>{props.title}</p>
                    <p className='card-text'>{props.text}</p>
                    <button className='btn btn-outline-secondary'>Ajouter au panier</button>
                </div>
            </div>
        </div>
    )
}

export default Product