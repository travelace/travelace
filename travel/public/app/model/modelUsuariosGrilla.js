/*
 * File: app/model/modelPrueba.js
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

Ext.define('app.model.modelUsuariosGrilla', {
    extend: 'Ext.data.Model',
    alias: 'model.modelusuariosgrilla',

    requires: [
        'Ext.data.field.String',
        'Ext.data.field.Integer'
    ],

    fields: [
        {
            type: 'integer',
            name: 'id'
        },
        {
            type: 'string',
            name: 'nombre'
        },
        {
            type: 'string',
            name: 'usuario'
        },
        {
            type: 'string',
            name: 'contrasena'
        },
        {
            type: 'string',
            name: 'perfil'
        }
    ]
});