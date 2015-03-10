/*
 * File: app.js
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

// @require @packageOverrides
Ext.Loader.setConfig({

});


Ext.application({
    models: [
        'modelPrueba',
        'modelGruposGrilla',
        'modelPerfilesGrilla',
        'modelBancosGrilla',
        'modelAgenciasGrilla',
        'modelSucursalGrilla',
        'modelPaisCombo',
        'modelEstadoCombo',
        'modelCiudadCombo',
        'modelEmpresasGrilla',
        'modelUsuariosGrilla',
        'modelPerfilCombo',
        'modelPaisesGrilla',
        'modelCiudadesGrilla',
        'modelGruposCombo',
        'modelEmpresasCombo',
        'modelFacturacionCombo',
        'modelAgenciasCombo',
        'modelPromotorCombo',
        'modelPromotoresAgenciasGrilla'
        
        
    ],
    stores: [
        'menuStore',
        'storePrueba',
        'storeGruposGrilla',
        'storePerfilesGrilla',
        'storeBancosGrilla',
        'storeAgenciasGrilla',
        'storeSucursalGrilla',
        'storePaisCombo',
        'storeEstadoCombo',
        'storeCiudadCombo',
        'storeEmpresasGrilla',
        'storeUsuariosGrilla',
        'storePerfilCombo',
        'storePaisesGrilla',
        'storeEstadosGrilla',
        'storeCiudadesGrilla',
        'storeGruposCombo',
        'storeEmpresasCombo',
        'storeFacturacionCombo',
        'storeAgenciasCombo',
        'storePromotorCombo',
        'storePromotoresAgenciasGrilla'
        
    ],
    views: [
        'myViewport',
        'panel.panelprincipal',
        'tab.emision',
        'tab.tab2',
        'tab.agencias',
        'ventanas.edicionAgencias',
        'tab.empresas',
        'ventanas.productosventana',
        'tab.bancos',
        'tab.paises',
        'tab.grupos',
        'tab.perfiles',
        'tab.usuarios',
        'tab.productos'
    ],
    controllers: [
        'agencias',
        'paises',
        'edicionAgencias'
    ],
    name: 'app',
    appFolder: 'public/app',

    launch: function() {
        Ext.create('app.view.myViewport');
    }

});
