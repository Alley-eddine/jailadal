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
                    itm_description: 'Le meilleur burger que vous avez jamais gouté!',
                    itm_price: 25.3,
                    itm_image: 'https://i.ibb.co/GCCdy8t/womens.png',
                    itm_qty: 7,
                    itm_original_qty: 200
                },
                {
                    itm_id: 2,
                    itm_name: 'caviar',
                    itm_description: 'Du bon caviar!',
                    itm_price: 12.5,
                    itm_image: 'https://i.ibb.co/GCCdy8t/womens.png',
                    itm_qty: 10,
                    itm_original_qty: 20
                },
                {
                    itm_id: 3,
                    itm_name: 'Panini',
                    itm_description: 'Panini!',
                    itm_price: 127.5,
                    itm_image: 'https://i.ibb.co/GCCdy8t/womens.png',
                    itm_qty: 20,
                    itm_original_qty: 30
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