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

Ext.define('app.controller.edicionAgencias', {
    extend: 'Ext.app.Controller',
    alias: 'controller.agencias',
    refs: {
        edicionagencias: {
            autoCreate: true,
            selector: 'edicionagencias',
            xtype: 'edicionagencias'
        }
    },
    control: {
        "#paisCombo": {
            select: 'cargaEstado'
        },
        "#estadoCombo": {
            select: 'cargaCiudad'
        },
         "#agenciacorporativo": {
            change: 'cargaAgenciaCorporativo',
            select: 'agenciasCorporativa'
        }
        

    },
    cargaEstado: function (dv, records, item, index, e) {

        var me = this;
        pais = records[0];
        comboEstado = me.getEdicionagencias().down("#estadoCombo");
        estado_store = comboEstado.getStore();
        comboEstado = comboEstado.clearValue();
        estado_store.load({
            params: {
                paisId: pais.get('id')
            }
        });
    },
     cargaCiudad: function (dv, records, item, index, e) {

        var me = this;
        estado = records[0];
        comboCiudad = me.getEdicionagencias().down("#ciudadCombo");
        ciudado_store = comboCiudad.getStore();
        comboCiudad = comboCiudad.clearValue();
        ciudado_store.load({
            params: {
                estadoId: estado.get('id')
            }
        });
    },
    cargaAgenciaCorporativo: function (field, newValue, oldValue, eOpts) {
        var me = this;
        agencia = newValue;
        console.log(oldValue+" "+newValue)
        comboAgencia = me.getEdicionagencias().down("#agenciacorporativo");
        Agencia_store = comboAgencia.getStore();
        Agencia_store.load({
            params: {
                agencia: agencia
            }
        });
    },
    agenciasCorporativa:  function (dv, records, item, index, e) {
        
       agenciaId = records[0].get('id');
       this.getEdicionagencias().down("#agenciacorporativoId").setValue(agenciaId);
       
    }
});
