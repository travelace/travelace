/*
 * File: app/store/storePrueba.js
 *
 * This file was generated by Sencha Architect version 3.1.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 5.0.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 5.0.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('app.store.storeFacturacionCombo', {
    extend: 'Ext.data.Store',
    requires: [
        'app.model.modelFacturacionCombo',
        'Ext.data.proxy.Ajax',
        'Ext.data.reader.Json'
    ],
    autoLoad: true,
    constructor: function (cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
                storeId: 'storeFacturacionCombo',
                fields: [
                    {
                        type: 'integer',
                        name: 'id'
                    },
                    {
                        type: 'string',
                        name: 'facturacion'
                    }
                ],
                data: [
                    {"id": "1", "facturacion": "Bruta a la agencia"},
                    {"id": "2", "facturacion": "Bruta al pasajero"},
                    {"id": "3", "facturacion": "Neta a la agencia"},
                    {"id": "4", "facturacion": "Sin facturar"}
                ]
            }, cfg)]);
    }
});