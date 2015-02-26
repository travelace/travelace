/*
 * File: app/view/tab/empresas.js
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

Ext.define('app.view.tab.empresas', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.empresas',

    requires: [
        'app.view.tab.empresasViewModel',
        'Ext.grid.Panel',
        'Ext.grid.View',
        'Ext.grid.column.Number',
        'Ext.toolbar.Toolbar',
        'Ext.button.Button',
        'Ext.grid.plugin.RowEditing',
        'Ext.selection.CheckboxModel'
    ],

    viewModel: {
        type: 'tabempresas'
    },
    height: 250,
    width: 400,
    closable: true,
    icon: 'iconos/16x16/house.png',
    title: 'Empresas',

    items: [
        {
            xtype: 'gridpanel',
            store: 'storeEmpresasGrilla',
            itemId: 'EmpresasGrilla',
            title: '',
            columns: [
                {
                    xtype: 'gridcolumn',
                    dataIndex: 'id',
                    text: 'id',
                    flex: 1
                },
                {
                    xtype: 'gridcolumn',
                    dataIndex: 'nombreEmpresa',
                    text: 'Nombre Empresa',
                    flex: 5,
                     editor: {
                        xtype: 'textfield'
                    }
                },
                {
                    xtype: 'gridcolumn',
                    dataIndex: 'abreviatura',
                    text: 'Abreviatura',
                    flex: 2,
                     editor: {
                        xtype: 'textfield'
                    }
                },
                {
                    xtype: 'numbercolumn',
                    dataIndex: 'iva',
                    text: 'IVA',
                    flex: 2,
                     editor: {
                        xtype: 'numberfield'
                    }
                },
                {
                    xtype: 'numbercolumn',
                    dataIndex: 'limiteRetencion',
                    text: 'Limite Retenci&oacute;n',
                    flex: 3,
                     editor: {
                        xtype: 'numberfield'
                    }
                },
                {
                    xtype: 'numbercolumn',
                    dataIndex: 'retencion',
                    text: '% Retenci&oacute;n',
                    flex: 3,
                     editor: {
                        xtype: 'numberfield'
                    }
                },
                {
                    xtype: 'numbercolumn',
                    text: '$ Oficial',
                    dataIndex: 'oficial',
                    flex: 3,
                     editor: {
                        xtype: 'numberfield'
                    }
                },
                {
                    xtype: 'numbercolumn',
                    text: '$ Mercado',
                    dataIndex: 'mercado',
                    flex: 3,
                     editor: {
                        xtype: 'numberfield'
                    }
                },
                {
                    xtype: 'numbercolumn',
                    text: '$ Especial',
                    dataIndex: 'especial',
                    flex: 3,
                     editor: {
                        xtype: 'numberfield'
                    }
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
                            text: 'Nuevo',
                             handler: function () {
                                me = this;
                                empresa = me.up("#EmpresasGrilla");
                                store_empresa = empresa.getStore();
                                store_empresa.load({
                                    params: {
                                        tipoTransaccion: 'nuevoFalso'
                                    }
                                });


                            }
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
            },
             plugins: [
                Ext.create('Ext.grid.plugin.RowEditing', {
                    clicksToEdit: 2,
                    listeners: {
                        edit: function (editor, event, eOpts) {
                            console.log(event)
                            var tipoTransaccion = event.record.data.id == 0 ? 'nuevo' : 'editar';
                            event.store.load({
                                params: {
                                    id: event.record.data.id,
                                    nombreEmpresa: event.record.data.nombreEmpresa,
                                    abreviatura: event.record.data.abreviatura,
                                    iva: event.record.data.iva,
                                    limiteRetencion: event.record.data.limiteRetencion,
                                    retencion: event.record.data.retencion,
                                    oficial: event.record.data.oficial,
                                    mercado: event.record.data.mercado,
                                    especial: event.record.data.especial,
                                    tipoTransaccion: tipoTransaccion
                                }
                            });
                        }
                    }

                })]
            
        }
    ]

});