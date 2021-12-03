import React from 'react';
import './BestSellersMenu.scss'

const BestSellersMenu = ({itm_name, itm_image, itm_description, itm_price, itm_qty, itm_id, itm_original_qty}) => (
    <div style={{
        backgroundImage: `url(${itm_image})`
    }} className='menu-item'>
        <div >
            <h1 className={'title'}>{itm_name.toUpperCase()}</h1>
        </div>
    </div>

)

export default BestSellersMenu;