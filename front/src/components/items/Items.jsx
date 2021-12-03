import React from 'react';
import Menu from '../menu/Menu';
import './items.scss';

class Items extends React.Component {
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
                    itm_id: 2,
                    itm_name: 'caviar',
                    itm_description: 'Du bon caviar!',
                    itm_price: 12.5,
                    itm_image: 'https://cdn.pixabay.com/photo/2021/07/28/23/29/sushi-6505074_960_720.png',
                    itm_qty: 10,
                    itm_original_qty: 20
                },
                {
                    itm_id: 3,
                    itm_name: 'Panini',
                    itm_description: 'Panini!',
                    itm_price: 127.5,
                    itm_image: 'https://cdn.pixabay.com/photo/2012/04/01/16/50/sandwich-23473_960_720.png',
                    itm_qty: 20,
                    itm_original_qty: 30
                },
                {
                    itm_id: 4,
                    itm_name: 'Pizza',
                    itm_description: 'La baguette de luxe',
                    itm_price: 187.9,
                    itm_image: 'https://cdn.pixabay.com/photo/2014/12/21/23/48/pizza-576085_960_720.png',
                    itm_qty: 34,
                    itm_original_qty: 35
                }
            ]
        };
    }

    render() {
        return (
            <div className={'directory-menu'}>
                {this.state.sections.map(({
                                        itm_id,
                                        itm_name,
                                        itm_description,
                                        itm_image,
                                        itm_qty,
                                        itm_price,
                                        itm_original_qty
                                    }) => (
                    <Menu
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
        );
    }
}

export default Items;