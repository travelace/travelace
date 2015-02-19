/*
 * File: app/controller/agencias.js
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

Ext.define('app.controller.agencias', {
    extend: 'Ext.app.Controller',
    alias: 'controller.agencias',

    refs: {
        agencias: {
            autoCreate: true,
            selector: 'agencias',
            xtype: 'tabagencias'
        },
        edicionagencias: {
            autoCreate: true,
            selector: 'edicionagencias',
            xtype: 'edicionagencias'
        },
        productosventana: {
            autoCreate: true,
            selector: 'productosventana',
            xtype: 'productosventana'
        }
    },

    control: {
        "#editarAgencia": {
            click: 'editarAgencia'
        },
        "#buscarAgencias": {
            click: 'buscarAgencias'
        },
        "#productoSucursal": {
            click: 'productoSucursal'
        },
        "#checkcorporativo": {
            change: 'clickcorporativo'
        }
    },

    editarAgencia: function(button, e, eOpts) {
        this.getEdicionagencias().show();
    },

    buscarAgencias: function(button, e, eOpts) {
         var me=this;
                busqueda=this.getAgencias().down("#textoBusqueda").value;
                if(busqueda==''){
                     Ext.Msg.alert('Error', 'Debe buscar al menos por un caracter.');
                }
                else{
                    //////////////////////////////codigo para busqueda de agencias


                    //////////////////////////////////////////////////
                }

    },

    productoSucursal: function(button, e, eOpts) {
        this.getProductosventana().show();
    },

    clickcorporativo: function(field, newValue, oldValue, eOpts) {
        if(newValue==true){
            this.getEdicionagencias().down("#agenciacorporativo").show();}
            else{
            this.getEdicionagencias().down("#agenciacorporativo").hide();
            }
        console.log(newValue);

    }

});