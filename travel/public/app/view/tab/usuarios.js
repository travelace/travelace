/*
 * File: app/view/tab/usuarios.js
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

Ext.define('app.view.tab.usuarios', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.usuarios',

    requires: [
        'app.view.tab.bancosViewModel3',
        'Ext.grid.Panel',
        'Ext.grid.column.Number',
        'Ext.grid.View',
        'Ext.toolbar.Toolbar',
        'Ext.button.Button',
        'Ext.selection.CheckboxModel'
    ],

    viewModel: {
        type: 'tabusuarios'
    },
    height: 250,
    width: 745,
    closable: true,
    icon: 'iconos/16x16/user.png',
    title: 'Usuarios',

    items: [
        {
            xtype: 'gridpanel',
            title: '',
            columns: [
                {
                    xtype: 'numbercolumn',
                    dataIndex: 'string',
                    text: 'Id',
                    flex: 1
                },
                {
                    xtype: 'gridcolumn',
                    dataIndex: 'number',
                    text: 'Nombre',
                    flex: 4
                },
                {
                    xtype: 'gridcolumn',
                    dataIndex: 'number',
                    text: 'Usuario',
                    flex: 4
                },
                {
                    xtype: 'gridcolumn',
                    dataIndex: 'number',
                    text: 'Contraseña',
                    flex: 4
                },
                {
                    xtype: 'gridcolumn',
                    dataIndex: 'number',
                    text: 'Perfil',
                    flex: 4
                }
            ],
            dockedItems: [
                {
                    xtype: 'toolbar',
                    dock: 'top',
                    items: [
                        {
                            xtype: 'button',
                            width: '',
                            icon: 'iconos/16x16/add.png',
                            text: 'Nuevo'
                        },
                        {
                            xtype: 'button',
                            icon: 'iconos/16x16/delete.png',
                            text: 'Eliminar'
                        }
                    ]
                }
            ],
            selModel: {
                selType: 'checkboxmodel'
            }
        }
    ]

});