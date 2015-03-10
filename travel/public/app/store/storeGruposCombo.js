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

Ext.define('app.store.storeGruposCombo', {
    extend: 'Ext.data.Store',

    requires: [
        'app.model.modelGruposCombo',
        'Ext.data.proxy.Ajax',
        'Ext.data.reader.Json'
    ],
    autoLoad:true,
    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'storeGruposCombo',
            model: 'app.model.modelGruposCombo',
            proxy: {
                type: 'ajax',
                url: './grupos/gruposCombo/',
                reader: {
                    type: 'json',
                    rootProperty: 'grupo',
                    totalProperty: 'totalCount'
                }
            }
        }, cfg)]);
    }
});