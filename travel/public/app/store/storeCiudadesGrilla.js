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

Ext.define('app.store.storeCiudadesGrilla', {
    extend: 'Ext.data.Store',

    requires: [
        'app.model.modelCiudadesGrilla',
        'Ext.data.proxy.Ajax',
        'Ext.data.reader.Json'
    ],
    autoLoad:true,
    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'storeCiudadesGrilla',
            model: 'app.model.modelCiudadesGrilla',
            proxy: {
                type: 'ajax',
                url: './ciudades/ciudadesGrilla/',
                reader: {
                    type: 'json',
                    rootProperty: 'ciudad',
                    totalProperty: 'totalCount'
                }
            }
        }, cfg)]);
    }
});