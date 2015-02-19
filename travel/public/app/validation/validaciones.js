/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Ext.define('SEC.validation.validaciones', {
     cargarValidaciones: function () {
          Ext.apply(Ext.form.VTypes, {
               validacionNumero: function (value, field) {
                    return /[0-9]/.test(value);
               },
               validacionNumeroText: 'Los datos ingresado no son válidos. Solo números',
               //validacionNumeroMask: /[0-9]/i,
 
               validacionLetrasConEspacios: function (value, field) {
                    return /^[A-Za-z ñ.áéíóúäëïöü\'-]*$/.test(value);
               },
               validacionLetrasConEspaciosText: 'Datos ingresados no válidos. Solo letras',
              //validacionLetrasConEspaciosMask: /^[a-z ñ.áéíóúäëïöü\'-]*$/
             /*  validacionCorreoElectronico: function (value, field) {
                 return /^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/.test(value);
               }, 
              validacionCorreoElectronicoText: 'Los datos ingresado no son válidos. Solo formato correo electrónnico',
             */
               validacionBloquearEscritura: function (value, field) {
                 return / /.test(value);
               }, 
               validacionBloquearEscrituraText: 'No. Solo formato correo electrónnico',
               
               validacionRif: function (value, field) {
                 return /V|G|J\-[0-9]{9}/.test(value);
               }, 
               validacionRifText: 'Utilizar formato:J-123456789',
         });
     }

});
/* 
 *  maskRe: /[V|G|J0-9-]/,
                                            validator: function (v) {
                                                return /V|G|J\-[0-9]{9}/.test(v) ? true : 'Utilizar formato:J-123456789';
                                            },
 * */