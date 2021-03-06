/*
 * File: app/view/tab/emision.js
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

Ext.define('app.view.tab.emision', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.emision',

    requires: [
        'app.view.tab.emisionViewModel',
        'Ext.toolbar.Toolbar',
        'Ext.button.Button',
        'Ext.form.field.ComboBox',
        'Ext.form.field.Date',
        'Ext.form.CheckboxGroup',
        'Ext.form.field.Checkbox',
        'Ext.form.FieldSet',
        'Ext.form.field.Number',
        'Ext.grid.Panel',
        'Ext.grid.column.Number',
        'Ext.grid.column.Date',
        'Ext.grid.column.Boolean',
        'Ext.grid.View'
    ],

    viewModel: {
        type: 'tabemision'
    },
    autoScroll: true,
    height: 791,
    width: 794,
    layout: 'absolute',
    closable: true,
    collapsed: false,
    collapsible: false,
    icon: 'iconos/16x16/newspaper_add.png',
    title: 'Emisi&oacute;n',

    dockedItems: [
        {
            xtype: 'toolbar',
            dock: 'bottom',
            items: [
                {
                    xtype: 'button',
                    icon: 'iconos/16x16/disk.png',
                    scale: 'medium',
                    text: 'Guardar'
                }
            ]
        }
    ],
    items: [
        {
            xtype: 'combobox',
            x: 10,
            y: 10,
            fieldLabel: 'Agencia'
        },
        {
            xtype: 'combobox',
            x: 10,
            y: 40,
            fieldLabel: 'Modalidad'
        },
        {
            xtype: 'datefield',
            x: 310,
            y: 10,
            fieldLabel: 'Fecha Emisi&oacute;n'
        },
        {
            xtype: 'checkboxgroup',
            x: 310,
            y: 40,
            width: 400,
            fieldLabel: 'Facturaci&oacute;n',
            items: [
                {
                    xtype: 'checkboxfield',
                    boxLabel: 'Al Pasajero'
                },
                {
                    xtype: 'checkboxfield',
                    boxLabel: 'A la Agencia'
                }
            ]
        },
        {
            xtype: 'fieldset',
            x: 10,
            y: 70,
            height: 70,
            width: 770,
            layout: 'absolute',
            title: 'Fecha de Viaje',
            items: [
                {
                    xtype: 'datefield',
                    x: 0,
                    y: 10,
                    fieldLabel: 'Desde'
                },
                {
                    xtype: 'datefield',
                    x: 300,
                    y: 10,
                    fieldLabel: 'Hasta'
                },
                {
                    xtype: 'textfield',
                    x: 600,
                    y: 10,
                    width: 100,
                    fieldLabel: 'D&iacute;as',
                    labelWidth: 30
                }
            ]
        },
                {
            xtype: 'gridpanel',
            x: 10,
            y: 150,
            height: 220,
            style: 'border: 2px solid #157FCC;',
            width: 770,
            title: 'Pasajero',
            columns: [
                {
                    xtype: 'gridcolumn',
                    dataIndex: 'string',
                    text: 'Nombre',
                    flex: 1
                },
                {
                    xtype: 'numbercolumn',
                    dataIndex: 'number',
                    text: 'Apellido',
                    flex: 1
                },
                {
                    xtype: 'datecolumn',
                    dataIndex: 'date',
                    text: 'Nacimiento',
                    flex: 1
                },
                {
                    xtype: 'booleancolumn',
                    dataIndex: 'bool',
                    text: 'Cedula',
                    flex: 1
                }
            ],
            dockedItems: [
                {
                    xtype: 'toolbar',
                    dock: 'top',
                    items: [
                        {
                            xtype: 'button',
                            icon: 'iconos/16x16/arrow_up.png',
                            text: 'Importar'
                        },
                        {
                            xtype: 'tbspacer',
                            flex: 2
                        },
                        {
                            xtype: 'textfield',
                            fieldLabel: 'Numero de pasajeros',
                            labelWidth: 140
                        }
                    ]
                }
            ]
        },
        {
            xtype: 'fieldset',
            x: 10,
            y: 380,
            height: 110,
            width: 770,
            layout: 'absolute',
            title: 'Producto',
            items: [
                {
                    xtype: 'combobox',
                    x: 0,
                    y: 10,
                    fieldLabel: 'Producto'
                },
                {
                    xtype: 'combobox',
                    x: 0,
                    y: 40,
                    fieldLabel: 'Destino'
                },
                 {
                    xtype: 'checkboxfield',
                    x: 300,
                    y: 10,
                    fieldLabel: 'Normal',
                    labelWidth: 50,
                    boxLabel: ''
                },
                {
                    xtype: 'label',
                    x: 380,
                    y: 14,
                    text: 'Anual:'
                },
                
                {
                    xtype: 'checkboxfield',
                    x: 420,
                    y: 10,
                    fieldLabel: '15',
                    labelWidth: 20,
                    boxLabel: ''
                },
                {
                    xtype: 'checkboxfield',
                    x: 465,
                    y: 10,
                    fieldLabel: '30',
                    labelWidth: 20,
                    boxLabel: ''
                },
                {
                    xtype: 'checkboxfield',
                    x: 515,
                    y: 10,
                    fieldLabel: '60',
                    labelWidth: 20,
                    boxLabel: ''
                },
                {
                    xtype: 'checkboxfield',
                    x: 565,
                    y: 10,
                    fieldLabel: '90',
                    labelWidth: 20,
                    boxLabel: ''
                },
                {
                    xtype: 'checkboxfield',
                    x: 630,
                    y: 10,
                    fieldLabel: 'Mayores',
                    boxLabel: '',
                    labelWidth: 60,
                },

                {
                    xtype: 'combobox',
                    x: 300,
                    y: 40,
                    fieldLabel: 'Servicio Adicional'
                },
                
            ]
        },
        {
            xtype: 'fieldset',
            x: 10,
            y: 500,
            height: 200,
            width: 770,
            layout: 'absolute',
            title: 'Tarifas y comisiones',
            items: [
                                {
                    xtype: 'combobox',
                    x: 0,
                    y: 10,
                    fieldLabel: 'Modalidad de pago',
                    width: 275,
                    labelWidth: 120,
                },{
                    xtype: 'numberfield',
                    x: 300,
                    y: 10,
                    fieldLabel: 'Descuento'
                },
                {
                    xtype: 'numberfield',
                    x: 0,
                    y: 40,
                    fieldLabel: 'Tarifa $'
                },
                {
                    xtype: 'numberfield',
                    x: 0,
                    y: 100,
                    width: 275,
                    fieldLabel: 'Agencia Comision',
                    labelWidth: 120
                },
                {
                    xtype: 'numberfield',
                    x: 0,
                    y: 130,
                    width: 275,
                    fieldLabel: 'Agente Comision',
                    labelWidth: 120
                },
                {
                    xtype: 'numberfield',
                    x: 300,
                    y: 40,
                    fieldLabel: 'Tarifa Bsf.'
                },
                {
                    xtype: 'numberfield',
                    x: 300,
                    y: 100,
                    fieldLabel: 'Importe'
                },
                {
                    xtype: 'numberfield',
                    x: 300,
                    y: 130,
                    fieldLabel: 'Importe'
                },
                {
                    xtype: 'combobox',
                    x: 0,
                    y: 70,
                    fieldLabel: 'Agente'
                }
            ]
        }

    ]

});