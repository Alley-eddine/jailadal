import React from 'react';
import './Menu.scss'

const Menu = ({itm_name, itm_image, itm_description, itm_price, itm_qty, itm_id, itm_original_qty}) => (
    <div className={"common-items"}>
    <img src={itm_image} width={150} height={150} />
        <div className={'content'}>
            <h1 className={'title'}>{itm_name.toUpperCase()}</h1>
            <span className={'subtitle'}>{itm_description}</span><br />
            <span>{itm_price}</span><br />
            <span>Quantité: {itm_qty}</span>
        </div>
    </div>


)

export default Menu;