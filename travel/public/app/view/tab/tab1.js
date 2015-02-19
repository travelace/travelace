/*
 * File: app/view/tab/tab1.js
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

Ext.define('app.view.tab.tab1', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.tab1',

    requires: [
        'app.view.tab.tab1ViewModel',
        'Ext.form.FieldSet',
        'Ext.form.field.ComboBox',
        'Ext.form.field.Number',
        'Ext.toolbar.Toolbar',
        'Ext.button.Button'
    ],

    viewModel: {
        type: 'tabtab1'
    },
    closable: true,
    collapsed: false,
    collapsible: false,
    title: 'Emisi&oacute;n',

    items: [
        {
            xtype: 'fieldset',
            height: 238,
            margin: 20,
            layout: 'absolute',
            title: 'Formulario',
            items: [
                {
                    xtype: 'textfield',
                    x: 10,
                    y: 10,
                    fieldLabel: 'Nombre'
                },
                {
                    xtype: 'combobox',
                    x: 10,
                    y: 50,
                    fieldLabel: 'Agencia'
                },
                {
                    xtype: 'numberfield',
                    x: 10,
                    y: 90,
                    fieldLabel: 'Monto'
                }
            ]
        }
    ],
    dockedItems: [
        {
            xtype: 'toolbar',
            dock: 'bottom',
            items: [
                {
                    xtype: 'button',
                    scale: 'medium',
                    text: 'Guardar'
                }
            ]
        }
    ]

});