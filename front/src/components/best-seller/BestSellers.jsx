import React from 'react';
import BestSellersMenu from './BestSellersMenu'
import './BestSellers.scss';

class BestSellers extends React.Component {
    constructor() {
        super();

        this.state = {
            sections: [
                {
                    itm_id: 1,
                    itm_name: 'burger',
                    itm_description: 'Cuite au grill!!!',
                    itm_price: 25.3,
                    itm_image: 'https://cdn.pixabay.com/photo/2014/12/21/23/56/hamburger-576419_960_720.png',
                    itm_qty: 7,
                    itm_original_qty: 200
                },
                
                {
                    itm_id: 3,
                    itm_name: 'Panini',
                    itm_description: 'Pas 2 comme les notres!',
                    itm_price: 127.5,
                    itm_image: 'https://www.schaer.com/sites/default/files/styles/header_large/public/2016-07/1062_PaniniRolls_Dandy.webp',
                    itm_qty: 20,
                    itm_original_qty: 30
                },
                {
                    itm_id: 4,
                    itm_name: 'Pizza',
                    itm_description: 'La piiza de Italia',
                    itm_price: 187.9,
                    itm_image: 'https://www.delonghi.com/Global/recipes/multifry/pizza_fresca.jpg',
                    itm_qty: 34,
                    itm_original_qty: 35
                }
            ]
        };
    }

    render() {
        return (
            <div>
                <h1 className={"MenuTitle"}>BEST SELLERS</h1>
            <div className={'directory-menu'}>
                {this.state.sections.slice(0,3).map(({
                                        itm_id,
                                        itm_name,
                                        itm_description,
                                        itm_image,
                                        itm_qty,
                                        itm_price,
                                        itm_original_qty
                                    }) => (
                    <BestSellersMenu
                        itm_id={itm_id}
                        itm_name={itm_name}
                        itm_description={itm_description}
                        itm_image={itm_image}
                        itm_qty={itm_qty}
                        itm_original_qty={itm_original_qty}
                        itm_price={itm_price}
                    />
                ))}
            </div>
            </div>
        );
    }
}

export default BestSellers;