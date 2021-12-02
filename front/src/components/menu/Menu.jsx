import React from 'react';
import './Menu.scss'

const Menu = ({itm_name, itm_image, itm_description, itm_price, itm_qty, itm_id, itm_original_qty}) => (
    <div style={{
        backgroundImage: `url(${itm_image})`
    }} className='menu-item'>
        <div className={'content'}>
            <h1 className={'title'}>{itm_name}</h1>
            <span className={'subtitle'}>{itm_description}</span>
            <p>{itm_price}</p>
            <p>Quantité: {itm_qty}</p>
        </div>
    </div>

)

export default Menu;