import React from 'react';
import { useState } from 'react';

export default function Tables() {


        this.state = {
            tables: [
                {
                    tbl_id: 1,
                    tbl_availability: false
                },
                {
                    tbl_id: 2,
                    tbl_availability: false
                },
                {
                    tbl_id: 3,
                    tbl_availability: false
                },
                {
                    tbl_id: 4,
                    tbl_availability: false,
                },
                {
                    tbl_id: 5,
                    tbl_availability: false
                },
                {
                    tbl_id: 6,
                    tbl_availability: false
                }, {
                    tbl_id: 7,
                    tbl_availability: false
                },
                {
                    tbl_id: 8,
                    tbl_availability: false
                },
                {
                    tbl_id: 9,
                    tbl_availability: false
                },
                {
                    tbl_id: 10,
                    tbl_availability: false
                }
            ]
        }

        return (
            <div>
                {this.state.tables.map(({
                                            tbl_id,
                                            tbl_availability
                                        }) => (
                        <div>
                            {tbl_availability == true && (<div>
                                TABLE: {tbl_id} <br/>
                                DISPONIBLE

                                RESERVEZ

                            </div>)}
                        </div>
                    )
                )}
            </div>
        );

}