
    </div> <!-- <<<< solo esta linea - incluido por el tema -->
    <script>

        function cambiar_color_file_repo(input){
            if (input.files && input.files[0]) {
                let clas_fondo = document.querySelector(".file-container");
                clas_fondo.style.backgroundColor = 'green';
            } else {
                input.parentElement.style.backgroundColor = '#007BFF';
            }
        }

        function cambiar_color_file_repo_lic(input){
            if (input.files && input.files[0]) {
                let clas_fondo = document.querySelector(".file-container_lic");
                clas_fondo.style.backgroundColor = 'green';
            } else {
                input.parentElement.style.backgroundColor = '#007BFF';
            }
        }

        function cambiar_color_file_repo_pass(input){
            if (input.files && input.files[0]) {
                let clas_fondo = document.querySelector(".file-container_pass");
                clas_fondo.style.backgroundColor = 'green';
            } else {
                input.parentElement.style.backgroundColor = '#007BFF';
            }
        }

        function id_modal_edit_rec(id_edit){
            var id = id_edit;
            fetch('vistas/modal/modalVercCliente.php?editar_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.cClienteFormulario').modal('show');
                document.querySelector('#contenido_modal_ccliente').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function id_modal_edit_rec_pj(id_edit){
            var id = id_edit;
            fetch('vistas/modal/modalVercClienteJuridico.php?editar_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.cClienteFormulario').modal('show');
                document.querySelector('#contenido_modal_ccliente').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function mostrar_ocultar_modal(modal_mostrar, modal_ocultar, activarOption, desactivarOption, id_campo, id){
            
                $('.' + modal_mostrar).modal('show');
                $('.' + modal_ocultar).modal('hide');
           
            if(activarOption == ''){

                console.log('no esta desactivando y activando las opciones');
            
            }else{

                $('.' + activarOption).addClass("active");
                $('.' + desactivarOption).removeClass("active");
            
            }

            if (id != '') {
                document.querySelector("#" + id_campo).value = id;
            }
 
        }

        function id_modal_eliminar_rec(id_eli){
            var id = id_eli;
            fetch('vistas/modal/modalVercCliente.php?eliminar_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.cClienteFormulario_eliminar').modal('show');
                document.querySelector('#contenido_modal_ccliente_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function id_modal_eliminar_rec_pj(id_eli){
            var id = id_eli;
            fetch('vistas/modal/modalVercClienteJuridico.php?eliminar_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.cClienteFormulario_eliminar').modal('show');
                document.querySelector('#contenido_modal_ccliente_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function modal_portada_id(id_portada){
            var id = id_portada;
            fetch('vistas/modal/modalVercCliente.php?portada_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.portada_contenido').modal('show');
                document.querySelector('#contenido_modal_portada').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        } 

        function modal_portada_pj_id(id_portada){
            var id = id_portada;
            fetch('vistas/modal/modalVercClienteJuridico.php?portada_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.portada_contenido').modal('show');
                document.querySelector('#contenido_modal_portada').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }
        
        function modal_contrato_id(id_contrato){ 
            var id = id_contrato;
            fetch('vistas/modal/modalVercCliente.php?recaudos_contratos_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.documentos_contenido').modal('show');
                document.querySelector('#contenido_modal_documentos').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function modal_contrato_id_pj(id_contrato){ 
            console.log("pasando");
            var id = id_contrato;
            fetch('vistas/modal/modalVercClienteJuridico.php?recaudos_contratos_formulario_cc_pj=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.documentos_contenido').modal('show');
                document.querySelector('#contenido_modal_documentos_pdf').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function id_model_eli_rep(id_eliminar){
            var id = id_eliminar;
            fetch('vistas/modal/modalReporte.php?eliminar_reporte=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('#eliminar_reporte').modal('show');
                document.querySelector('#reporte_modal_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function mostrar_registro_nuevo(){
            
                document.querySelector("#registro_usuario").style.display="block";
            
        }

        function nombre_completo(){

            var primer_nombre = document.querySelector("#primer_nombre").value;
            var segundo_nombre = document.querySelector("#segundo_nombre").value;
            var apellido_paterno = document.querySelector("#apellido_paterno").value;
            var apellido_materno = document.querySelector("#apellido_materno").value;
            var apellido_casada = document.querySelector("#apellido_casada").value;
            var nombre_completo = document.querySelector("#nombre_completo_inp");

            document.querySelector("#nombre_completo_inp").value = primer_nombre + ' ' + segundo_nombre + ' ' + apellido_paterno + ' ' + apellido_materno + ' ' + apellido_casada;

        }

        function guardar_temp_jdd(){
            
            var temp_nombre_completo = document.querySelector("#jd_temp_nombre_completo").value;
            var temp_cargo = document.querySelector("#jd_temp_cargo").value;
            var temp_nacionalidad = document.querySelector("#jd_temp_nacionalidad").value;
            var temp_id = document.querySelector("#jd_temp_id").value;
            var temp_correo = document.querySelector("#jd_temp_correo").value;
            var temp_telefono = document.querySelector("#jd_temp_telefono").value;
            var temp_direccion = document.querySelector("#jd_temp_direccion").value;

            const data = new URLSearchParams({
            
                jd_temp_nombre_completo :temp_nombre_completo, 
                jd_temp_cargo :temp_cargo,
                jd_temp_nacionalidad :temp_nacionalidad,
                jd_temp_id :temp_id,
                jd_temp_correo :temp_correo,
                jd_temp_telefono :temp_telefono,
                jd_temp_direccion :temp_direccion
            
            });

            fetch('vistas/modal/modalContenidosTablas.php?guardar_temp_jdd=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                })
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.junta_directiva').modal('hide');
                document.querySelector('#contenido_junta_directiva').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });

                temp_nombre_completo.value = '';
                temp_cargo.value = '';
                temp_nacionalidad.value = '';
                temp_id.value = '';
                temp_correo.value = '';
                temp_telefono.value = '';
                temp_direccion.value = '';
            
        }

        function guardar_jdd(){

            mostrar_ocultar_modal('cClienteFormulario', 'junta_directiva', 'directiva-tab', 'portada-tab', '', '');
            
            var temp_nombre_completo = document.querySelector("#jd_temp_nombre_completo").value;
            var temp_cargo = document.querySelector("#jd_temp_cargo").value;
            var temp_nacionalidad = document.querySelector("#jd_temp_nacionalidad").value;
            var temp_id = document.querySelector("#jd_temp_id").value;
            var temp_correo = document.querySelector("#jd_temp_correo").value;
            var temp_telefono = document.querySelector("#jd_temp_telefono").value;
            var temp_direccion = document.querySelector("#jd_temp_direccion").value;
            var jd_temp_id_general = document.querySelector("#jd_temp_id_general").value;

            const data = new URLSearchParams({
            
                pjdd_nombre_completo :temp_nombre_completo, 
                pjdd_cargo :temp_cargo,
                pjdd_nacionalidad :temp_nacionalidad,
                pjdd_id :temp_id,
                pjdd_correo :temp_correo,
                pjdd_telefono :temp_telefono,
                pjdd_direccion :temp_direccion, 
                id_general :jd_temp_id_general
            
            });

            fetch('vistas/modal/modalContenidosTablas.php?guardar_jdd=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                })
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    //$('.junta_directiva').modal('hide');
                document.querySelector('#contenido_junta_directiva_modal').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });

                temp_nombre_completo.value = '';
                temp_cargo.value = '';
                temp_nacionalidad.value = '';
                temp_id.value = '';
                temp_correo.value = '';
                temp_telefono.value = '';
                temp_direccion.value = '';
                
        }

        function eliminar_dd_temp(id_eliminar){

            var id = id_eliminar;
            fetch('vistas/modal/modalContenidosTablas.php?eliminar_jdd=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.junta_directiva_eliminar').modal('show');
                document.querySelector('#contenido_modal_jdd_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        async function eliminar_dd_temp_final(id_eliminar) {
            try {
                var id = id_eliminar;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_jdd_final=1&id=' + id);
                const data = await response.text();
                $('.junta_directiva_eliminar').modal('hide');
                document.querySelector('#contenido_junta_directiva').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function eliminar_dd_final(id_eliminar, id_general) {
            try {
                var id = id_eliminar;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_jdd_final_edit_modal=1&id=' + id + '&id_general=' + id_general);
                const data = await response.text();
                //$('.junta_directiva_eliminar').modal('hide');
                document.querySelector('#contenido_junta_directiva_modal').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        } 

        function guardar_temp_apoderados(){
            
            var temp_nombre_completo = document.querySelector("#a_temp_nombre_completo").value;
            var temp_cargo = document.querySelector("#a_temp_cargo").value;
            var temp_nacionalidad = document.querySelector("#a_temp_nacionalidad").value;
            var temp_id = document.querySelector("#a_temp_id").value;
            var temp_correo = document.querySelector("#a_temp_correo").value;
            var temp_telefono = document.querySelector("#a_temp_telefono").value;
            var temp_direccion = document.querySelector("#a_temp_direccion").value;

            const data = new URLSearchParams({
            
                a_temp_nombre_completo :temp_nombre_completo, 
                a_temp_cargo :temp_cargo,
                a_temp_nacionalidad :temp_nacionalidad,
                a_temp_id :temp_id,
                a_temp_correo :temp_correo,
                a_temp_telefono :temp_telefono,
                a_temp_direccion :temp_direccion
            
            });

            fetch('vistas/modal/modalContenidosTablas.php?guardar_temp_apoderados=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                })
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.apoderados').modal('hide');
                document.querySelector('#apoderados_tabla').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });

                temp_nombre_completo.value = '';
                temp_cargo.value = '';
                temp_nacionalidad.value = '';
                temp_id.value = '';
                temp_correo.value = '';
                temp_telefono.value = '';
                temp_direccion.value = '';
            
        }

        function guardar_apoderados(){
            
            var temp_nombre_completo = document.querySelector("#pja_nombre_completo").value;
            var temp_cargo = document.querySelector("#pja_cargo").value;
            var temp_nacionalidad = document.querySelector("#pja_nacionalidad").value;
            var temp_id = document.querySelector("#pja_id").value;
            var temp_correo = document.querySelector("#pja_correo").value;
            var temp_telefono = document.querySelector("#pja_telefono").value;
            var temp_direccion = document.querySelector("#pja_direccion").value;
            var temp_a_id_general = document.querySelector("#a_id_general").value;

            mostrar_ocultar_modal('cClienteFormulario', 'apoderados', 'apoderados-tab', 'portada-tab', '', '');

            const data = new URLSearchParams({
            
                pja_nombre_completo :temp_nombre_completo, 
                pja_cargo :temp_cargo,
                pja_nacionalidad :temp_nacionalidad,
                pja_id :temp_id,
                pja_correo :temp_correo,
                pja_telefono :temp_telefono,
                pja_direccion :temp_direccion, 
                id_general :temp_a_id_general
            
            });

            fetch('vistas/modal/modalContenidosTablas.php?guardar_apoderados=1&id_general='+ a_id_general +'', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                })
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    //$('.apoderados').modal('hide');
                document.querySelector('#apoderados_tabla_modal').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });

                temp_nombre_completo.value = '';
                temp_cargo.value = '';
                temp_nacionalidad.value = '';
                temp_id.value = '';
                temp_correo.value = '';
                temp_telefono.value = '';
                temp_direccion.value = '';
        }

        function eliminar_apoderados(id_eliminar, id_general){

            var id = id_eliminar;
            var id_general = id_general;
            fetch('vistas/modal/modalContenidosTablas.php?eliminar_apoderados_modal=1&id=' + id +'&id_general='+ id_general)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    //$('.apoderados_eliminar').modal('hide');
                document.querySelector('#apoderados_tabla_modal').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });

        }

        function eliminar_a_temp(id_eliminar){

            var id = id_eliminar;
            fetch('vistas/modal/modalContenidosTablas.php?eliminar_a_temp=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.apoderados_eliminar').modal('show');
                document.querySelector('#contenido_modal_apoderados_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });

        }

        function eliminar_a_temp_final(id_eliminar){

            var id = id_eliminar;
            fetch('vistas/modal/modalContenidosTablas.php?eliminar_a_temp_final=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.apoderados_eliminar').modal('hide');
                document.querySelector('#apoderados_tabla').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function guardar_temp_generaless_bf(){

            var temp_nombre_completo = document.querySelector("#gbf_temp_nombre_completo").value;
            var temp_genero = document.querySelector("#gbf_temp_genero").value;
            var temp_identificacion = document.querySelector("#gbf_temp_identificacion").value;
            var temp_nacionalidad = document.querySelector("#gbf_temp_nacionalidad").value;
            var temp_pais_nacimiento = document.querySelector("#gbf_temp_pais_nacimiento").value;
            var temp_fecha_nacimiento = document.querySelector("#gbf_temp_fecha_nacimiento").value;
            var temp_pais_residencia = document.querySelector("#gbf_temp_pais_residencia").value;
            var temp_pais_residencia_fiscal = document.querySelector("#gbf_temp_pais_residencia_fiscal").value;
            var temp_profesion = document.querySelector("#gbf_temp_profesion").value;
            var temp_lugar_trabajo = document.querySelector("#gbf_temp_lugar_trabajo").value;
            var temp_telefono = document.querySelector("#gbf_temp_telefono").value;
            var temp_correo_electronico = document.querySelector("#gbf_temp_correo_electronico").value;
            var temp_domicilio_personal = document.querySelector("#gbf_temp_domicilio_personal").value;
            var temp_participacion = document.querySelector("#gbf_temp_participacion").value;

            const data = new URLSearchParams({

                gbf_temp_nombre_completo : temp_nombre_completo,
                gbf_temp_genero : temp_genero,
                gbf_temp_identificacion : temp_identificacion,
                gbf_temp_nacionalidad : temp_nacionalidad,
                gbf_temp_pais_nacimiento : temp_pais_nacimiento,
                gbf_temp_fecha_nacimiento : temp_fecha_nacimiento,
                gbf_temp_pais_residencia : temp_pais_residencia,
                gbf_temp_pais_residencia_fiscal : temp_pais_residencia_fiscal,
                gbf_temp_profesion : temp_profesion,
                gbf_temp_lugar_trabajo : temp_lugar_trabajo,
                gbf_temp_telefono : temp_telefono,
                gbf_temp_correo_electronico : temp_correo_electronico,
                gbf_temp_domicilio_personal : temp_domicilio_personal,
                gbf_temp_participacion : temp_participacion

            });

            fetch('vistas/modal/modalContenidosTablas.php?guardar_temp_generales_bf=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                })
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.generales_beneficiarios').modal('hide');
                document.querySelector('#generales_bf').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });

                temp_nombre_completo.value = '';
                temp_genero.value = '';
                temp_identificacion.value = '';
                temp_nacionalidad.value = '';
                temp_pais_nacimiento.value = '';
                temp_fecha_nacimiento.value = '';
                temp_pais_residencia.value = '';
                temp_pais_residencia_fiscal.value = '';
                temp_profesion.value = '';
                temp_lugar_trabajo.value = '';
                temp_telefono.value = '';
                temp_correo_electronico.value = '';
                temp_domicilio_personal.value = '';
                temp_participacion.value = '';
        }

        function guardar_generaless_bf(){

            var temp_nombre_completo = document.querySelector("#gbf_temp_nombre_completo").value;
            var temp_genero = document.querySelector("#gbf_temp_genero").value;
            var temp_identificacion = document.querySelector("#gbf_temp_identificacion").value;
            var temp_nacionalidad = document.querySelector("#gbf_temp_nacionalidad").value;
            var temp_pais_nacimiento = document.querySelector("#gbf_temp_pais_nacimiento").value;
            var temp_fecha_nacimiento = document.querySelector("#gbf_temp_fecha_nacimiento").value;
            var temp_pais_residencia = document.querySelector("#gbf_temp_pais_residencia").value;
            var temp_pais_residencia_fiscal = document.querySelector("#gbf_temp_pais_residencia_fiscal").value;
            var temp_profesion = document.querySelector("#gbf_temp_profesion").value;
            var temp_lugar_trabajo = document.querySelector("#gbf_temp_lugar_trabajo").value;
            var temp_telefono = document.querySelector("#gbf_temp_telefono").value;
            var temp_correo_electronico = document.querySelector("#gbf_temp_correo_electronico").value;
            var temp_domicilio_personal = document.querySelector("#gbf_temp_domicilio_personal").value;
            var temp_participacion = document.querySelector("#gbf_temp_participacion").value;
            var id_general = document.querySelector("#id_general_bfn").value;

            mostrar_ocultar_modal('cClienteFormulario', 'generales_beneficiarios', 'generales_beneficiarios_natural-tab', 'portada-tab', '', '');

            const data = new URLSearchParams({

                pjgbf_nombre_completo : temp_nombre_completo,
                pjgbf_genero : temp_genero,
                pjgbf_identificacion : temp_identificacion,
                pjgbf_nacionalidad : temp_nacionalidad,
                pjgbf_pais_nacimiento : temp_pais_nacimiento,
                pjgbf_fecha_nacimiento : temp_fecha_nacimiento,
                pjgbf_pais_residencia : temp_pais_residencia,
                pjgbf_pais_residencia_fiscal : temp_pais_residencia_fiscal,
                pjgbf_profesion_oficio : temp_profesion,
                pjgbf_lugar_trabajo : temp_lugar_trabajo,
                pjgbf_telefono : temp_telefono,
                pjgbf_correo : temp_correo_electronico,
                pjgbf_domicilio_personal : temp_domicilio_personal,
                pjgbf_porcentaje_participacion : temp_participacion, 
                id_general : id_general

            });

            fetch('vistas/modal/modalContenidosTablas.php?guardar_generales_bf=1&id_general=' + id_general, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                })
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    //$('.generales_beneficiarios_final_natural').modal('hide');
                document.querySelector('#generales_beneficiarios_final_natural').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });

                temp_nombre_completo.value = '';
                temp_genero.value = '';
                temp_identificacion.value = '';
                temp_nacionalidad.value = '';
                temp_pais_nacimiento.value = '';
                temp_fecha_nacimiento.value = '';
                temp_pais_residencia.value = '';
                temp_pais_residencia_fiscal.value = '';
                temp_profesion.value = '';
                temp_lugar_trabajo.value = '';
                temp_telefono.value = '';
                temp_correo_electronico.value = '';
                temp_domicilio_personal.value = '';
                temp_participacion.value = '';

        } 

        async function eliminar_generales_bfn(id_eliminar, id_general){
            try {
                var id = id_eliminar;
                var id_general = id_general;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_generales_bfn=1&id=' + id +'&id_general='+id_general);
                const data = await response.text();
                //$('.generales_beneficiarios_finales').modal('hide');
                document.querySelector('#generales_beneficiarios_final_natural').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        } 

        async function solicitar_aprobacion(id_general, modal_aprobacion, contedino_aprobacion){
            try {
                var id = id_general;
                const response = await fetch('vistas/modal/modalVercCliente.php?solicitar_aprobacion=1&id=' + id);
                const data = await response.text();
                $('.cClienteFormulario').modal('hide');
                $('.solicitar_aprobacion').modal('show');
                document.querySelector('#contenido_modal_solicitar_aprobacion').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function solicitar_aprobacion_analista(id_general, modal_aprobacion, contedino_aprobacion){
            try {
                var id = id_general;
                const response = await fetch('vistas/modal/modalVercCliente.php?solicitar_aprobacion_analista=1&id=' + id);
                const data = await response.text();
                $('.cClienteFormulario').modal('hide');
                $('.solicitar_aprobacion_analista').modal('show');
                document.querySelector('#contenido_modal_solicitar_aprobacion_analista').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function solicitar_aprobacion_analista_pj(id_general, modal_aprobacion, contedino_aprobacion){
            try {
                var id = id_general;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?solicitar_aprobacion_analista_pj=1&id=' + id);
                const data = await response.text();
                $('.cClienteFormulario').modal('hide');
                $('.solicitar_aprobacion_analista_pj').modal('show');
                document.querySelector('#contenido_modal_solicitar_aprobacion_analista_pj').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function revicion_cc_pn(id_general, modal_aprobacion, contedino_aprobacion){
            try {
                var id = id_general;
                const response = await fetch('vistas/modal/modalVercCliente.php?solicitar_revicion=1&id=' + id);
                const data = await response.text();
                $('.cClienteFormulario').modal('hide');
                $('.solicitar_revicion').modal('show');
                document.querySelector('#contenido_modal_solicitar_revicion').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function aprobacion_cc_pn(id_general, modal_aprobacion, contedino_aprobacion){
            try {
                var id = id_general;
                const response = await fetch('vistas/modal/modalVercCliente.php?solicitar_revicion=1&id=' + id);
                const data = await response.text();
                $('.cClienteFormulario').modal('hide');
                $('.aprobacion').modal('show');
                document.querySelector('#contenido_modal_aprobacion').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function solicitar_aprobacion_pj(id_general, modal_aprobacion, contedino_aprobacion){
            try {
                var id = id_general;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?solicitar_aprobacion_analista=1&id=' + id);
                const data = await response.text();
                $('.cClienteFormulario').modal('hide');
                $('.solicitar_aprobacion').modal('show');
                document.querySelector('#contenido_modal_solicitar_aprobacion').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function revicion_cc_pj(id_general, modal_aprobacion, contedino_aprobacion){
            try {
                var id = id_general;
                const response = await fetch('vistas/modal/modalVercCliente.php?solicitar_revicion=1&id=' + id);
                const data = await response.text();
                $('.cClienteFormulario').modal('hide');
                $('.solicitar_revicion').modal('show');
                document.querySelector('#contenido_modal_solicitar_revicion').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function aprobacion_cc_pj(id_general, modal_aprobacion, contedino_aprobacion){
            try {
                var id = id_general;
                const response = await fetch('vistas/modal/modalVercCliente.php?solicitar_revicion=1&id=' + id);
                const data = await response.text();
                $('.cClienteFormulario').modal('hide');
                $('.aprobacion').modal('show');
                document.querySelector('#contenido_modal_aprobacion').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function eliminar_generales_bf_temp(id_eliminar){
            try {
                var id = id_eliminar;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_generales_bf=1&id=' + id);
                const data = await response.text();
                $('.generales_beneficiarios_finales').modal('show');
                document.querySelector('#contenido_modal_beneficiarios_finales').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function eliminar_generales_bf_temp_final(id_eliminar){
            try {
                var id = id_eliminar;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_generales_bf_final=1&id=' + id);
                const data = await response.text();
                $('.generales_beneficiarios_finales').modal('hide');
                document.querySelector('#generales_bf').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function guardar_temp_bf_persona_juridica(){

            var gbfpj_nombre_completo_accionista = document.querySelector("#gbfpj_temp_nombre_completo_accionista").value;
            var gbfpj_pais_constitucion = document.querySelector("#gbfpj_temp_pais_constitucion").value;
            var gbfpj_fecha_constitucion = document.querySelector("#gbfpj_temp_fecha_constitucion").value;
            var gbfpj_direccion = document.querySelector("#gbfpj_temp_direccion").value;
            var gbfpj_ruc = document.querySelector("#gbfpj_temp_ruc").value;
            var gbfpj_sector_economico = document.querySelector("#gbfpj_temp_sector_economico").value;
            var gbfpj_telefono = document.querySelector("#gbfpj_temp_telefono").value;
            var gbfpj_porcentaje_participacion = document.querySelector("#gbfpj_temp_porcentaje_participacion").value;

            const data = new URLSearchParams({

                gbfpj_temp_nombre_completo_accionista : gbfpj_nombre_completo_accionista,
                gbfpj_temp_pais_constitucion : gbfpj_pais_constitucion,
                gbfpj_temp_fecha_constitucion : gbfpj_fecha_constitucion,
                gbfpj_temp_direccion : gbfpj_direccion,
                gbfpj_temp_ruc : gbfpj_ruc,
                gbfpj_temp_sector_economico : gbfpj_sector_economico,
                gbfpj_temp_telefono : gbfpj_telefono,
                gbfpj_temp_porcentaje_participacion : gbfpj_porcentaje_participacion

            });

            try {

                const response = await fetch('vistas/modal/modalContenidosTablas.php?guardar_temp_bf_persona_juridica=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                });

                const respuestaTexto = await response.text();
                $('.generales_beneficiarios_juridicos').modal('hide');
                document.querySelector('#generales_beneficiarios_persona_juridica').innerHTML = respuestaTexto;

                gbfpj_nombre_completo_accionista = '';
                gbfpj_pais_constitucion = '';
                gbfpj_fecha_constitucion = '';
                gbfpj_direccion = '';
                gbfpj_ruc = '';
                gbfpj_sector_economico = '';
                gbfpj_telefono = '';
                gbfpj_porcentaje_participacion = '';

            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        } 

        async function guardar_bf_persona_juridica(){

            var gbfpj_nombre_completo_accionista = document.querySelector("#gbfpj_temp_nombre_completo_accionista").value;
            var gbfpj_pais_constitucion = document.querySelector("#gbfpj_temp_pais_constitucion").value;
            var gbfpj_fecha_constitucion = document.querySelector("#gbfpj_temp_fecha_constitucion").value;
            var gbfpj_direccion = document.querySelector("#gbfpj_temp_direccion").value;
            var gbfpj_ruc = document.querySelector("#gbfpj_temp_ruc").value;
            var gbfpj_sector_economico = document.querySelector("#gbfpj_temp_sector_economico").value;
            var gbfpj_telefono = document.querySelector("#gbfpj_temp_telefono").value;
            var gbfpj_porcentaje_participacion = document.querySelector("#gbfpj_temp_porcentaje_participacion").value;
            var id_general_gbfpj = document.querySelector("#id_general_gbfpj").value;
            
            mostrar_ocultar_modal('cClienteFormulario', 'generales_beneficiarios_juridicos', 'generales_beneficiarios_juridica-tab', 'portada-tab', '', '');

            const data = new URLSearchParams({

                gbfpj_nombre_completo_accionista : gbfpj_nombre_completo_accionista,
                gbfpj_pais_constitucion : gbfpj_pais_constitucion,
                gbfpj_fecha_constitucion : gbfpj_fecha_constitucion,
                gbfpj_direccion : gbfpj_direccion,
                gbfpj_ruc : gbfpj_ruc,
                gbfpj_sector_economico : gbfpj_sector_economico,
                gbfpj_telefono : gbfpj_telefono,
                gbfpj_porcentaje_participacion : gbfpj_porcentaje_participacion, 
                id_general : id_general_gbfpj

            });

            try {

                const response = await fetch('vistas/modal/modalContenidosTablas.php?guardar_bf_persona_juridica=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                });

                const respuestaTexto = await response.text();
                //$('.generales_beneficiarios_juridicos').modal('hide');
                document.querySelector('#generales_beneficiarios_persona_juridica').innerHTML = respuestaTexto;

                gbfpj_nombre_completo_accionista = '';
                gbfpj_pais_constitucion = '';
                gbfpj_fecha_constitucion = '';
                gbfpj_direccion = '';
                gbfpj_ruc = '';
                gbfpj_sector_economico = '';
                gbfpj_telefono = '';
                gbfpj_porcentaje_participacion = '';

            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function eliminar_pj_beneficiario_generales_temp(id_eliminar){
            try {
                var id = id_eliminar;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_generales_bf_pj=1&id=' + id);
                const data = await response.text();
                $('.generales_beneficiarios_finales_pj').modal('show');
                document.querySelector('#contenido_modal_beneficiarios_finales_pj').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function eliminar_pj_beneficiario_generales_temp_final(id_eliminar){

            try {
                var id = id_eliminar;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_generales_bf_pj_final=1&id=' + id);
                const data = await response.text();
                $('.generales_beneficiarios_finales_pj').modal('hide');
                document.querySelector('#generales_beneficiarios_persona_juridica').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        } 

        async function eliminar_pj_beneficiario_final_pj(id_eliminar, id_general){

            try {
                var id = id_eliminar;
                var id_general = id_general;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_bf_pj_final=1&id=' + id +'&id_general='+id_general);
                const data = await response.text();
                //$('.generales_beneficiarios_finales_pj').modal('hide');
                document.querySelector('#generales_beneficiarios_persona_juridica').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function guardar_propietarios_beneficiarios_finales(){

            var pjpbj_nombre_completo = document.querySelector("#pjpbj_temp_nombre_completo").value;
            var pjpbj_genero = document.querySelector("#pjpbj_temp_genero").value;
            var pjpbj_cedula_pasaporte = document.querySelector("#pjpbj_temp_cedula_pasaporte").value;
            var pjpbj_nacionalidad = document.querySelector("#pjpbj_temp_nacionalidad").value;
            var pjpbj_pais_nacimiento = document.querySelector("#pjpbj_temp_pais_nacimiento").value;
            var pjpbj_fecha_nacimiento = document.querySelector("#pjpbj_temp_fecha_nacimiento").value;
            var pjpbj_pais_residencia = document.querySelector("#pjpbj_temp_pais_residencia").value;
            var pjpbj_pais_residencia_fiscal = document.querySelector("#pjpbj_temp_pais_residencia_fiscal").value;
            var pjpbj_profesion_oficio = document.querySelector("#pjpbj_temp_profesion_oficio").value;
            var pjpbj_lugar_trabajo = document.querySelector("#pjpbj_temp_lugar_trabajo").value;
            var pjpbj_telefono = document.querySelector("#pjpbj_temp_telefono").value;
            var pjpbj_correo = document.querySelector("#pjpbj_temp_correo").value;
            var pjpbj_domicilio_personal = document.querySelector("#pjpbj_temp_domicilio_personal").value;
            var pjpbj_domicilio_laboral = document.querySelector("#pjpbj_temp_domicilio_laboral").value;
            var pjpbj_entidad_participa = document.querySelector("#pjpbj_temp_entidad_participa").value;
            var pjpbj_porcentaje_participacion = document.querySelector("#pjpbj_temp_porcentaje_participacion").value;

            const data = new URLSearchParams({

                pjpbj_temp_nombre_completo : pjpbj_nombre_completo,
                pjpbj_temp_genero : pjpbj_genero,
                pjpbj_temp_cedula_pasaporte : pjpbj_cedula_pasaporte,
                pjpbj_temp_nacionalidad : pjpbj_nacionalidad,
                pjpbj_temp_pais_nacimiento : pjpbj_pais_nacimiento,
                pjpbj_temp_fecha_nacimiento : pjpbj_fecha_nacimiento,
                pjpbj_temp_pais_residencia : pjpbj_pais_residencia,
                pjpbj_temp_pais_residencia_fiscal : pjpbj_pais_residencia_fiscal,
                pjpbj_temp_profesion_oficio : pjpbj_profesion_oficio,
                pjpbj_temp_lugar_trabajo : pjpbj_lugar_trabajo,
                pjpbj_temp_telefono : pjpbj_telefono,
                pjpbj_temp_correo : pjpbj_correo,
                pjpbj_temp_domicilio_personal : pjpbj_domicilio_personal,
                pjpbj_temp_domicilio_laboral : pjpbj_domicilio_laboral,
                pjpbj_temp_entidad_participa : pjpbj_entidad_participa,
                pjpbj_temp_porcentaje_participacion : pjpbj_porcentaje_participacion

            });

            try {

                const response = await fetch('vistas/modal/modalContenidosTablas.php?guardar_propietario_temp_bf=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                });

                const respuestaTexto = await response.text();
                $('.propietarios_beneficiarios_juridicos').modal('hide');
                document.querySelector('#propietarios_beneficiarios_persona_juridica').innerHTML = respuestaTexto;

                pjpbj_nombre_completo.value = '';
                pjpbj_genero.value = '';
                pjpbj_identificacion.value = '';
                pjpbj_nacionalidad.value = '';
                pjpbj_pais_nacimiento.value = '';
                pjpbj_fecha.value = '';
                pjpbj_residencia.value = '';
                pjpbj_residencia_fiscal.value = '';
                pjpbj_profesion.value = '';
                pjpbj_lugar_trabajo.value = '';
                pjpbj_telefono.value = '';
                pjpbj_correo_electronico.value = '';
                pjpbj_domicilio_personal.value = '';
                pjpbj_domicilio_laboral
                pjpbj_entidad_juridica.value = '';
                pjpbj_participacion.value = '';

            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function guardar_prbf(){

            var pjpbj_nombre_completo = document.querySelector("#pjpbj_temp_nombre_completo").value;
            var pjpbj_genero = document.querySelector("#pjpbj_temp_genero").value;
            var pjpbj_cedula_pasaporte = document.querySelector("#pjpbj_temp_cedula_pasaporte").value;
            var pjpbj_nacionalidad = document.querySelector("#pjpbj_temp_nacionalidad").value;
            var pjpbj_pais_nacimiento = document.querySelector("#pjpbj_temp_pais_nacimiento").value;
            var pjpbj_fecha_nacimiento = document.querySelector("#pjpbj_temp_fecha_nacimiento").value;
            var pjpbj_pais_residencia = document.querySelector("#pjpbj_temp_pais_residencia").value;
            var pjpbj_pais_residencia_fiscal = document.querySelector("#pjpbj_temp_pais_residencia_fiscal").value;
            var pjpbj_profesion_oficio = document.querySelector("#pjpbj_temp_profesion_oficio").value;
            var pjpbj_lugar_trabajo = document.querySelector("#pjpbj_temp_lugar_trabajo").value;
            var pjpbj_telefono = document.querySelector("#pjpbj_temp_telefono").value;
            var pjpbj_correo = document.querySelector("#pjpbj_temp_correo").value;
            var pjpbj_domicilio_personal = document.querySelector("#pjpbj_temp_domicilio_personal").value;
            var pjpbj_domicilio_laboral = document.querySelector("#pjpbj_temp_domicilio_laboral").value;
            var pjpbj_entidad_participa = document.querySelector("#pjpbj_temp_entidad_participa").value;
            var pjpbj_porcentaje_participacion = document.querySelector("#pjpbj_temp_porcentaje_participacion").value;
            
            var id_general_gprpj = document.querySelector("#id_general_gprpj").value;

            mostrar_ocultar_modal('cClienteFormulario', 'propietarios_beneficiarios_juridicos', 'propietarios_juridica-tab', 'portada-tab', '', '');

            const data = new URLSearchParams({

                pjpbj_nombre_completo : pjpbj_nombre_completo,
                pjpbj_genero : pjpbj_genero,
                pjpbj_cedula_pasaporte : pjpbj_cedula_pasaporte,
                pjpbj_nacionalidad : pjpbj_nacionalidad,
                pjpbj_pais_nacimineto : pjpbj_pais_nacimiento,
                pjpbj_fecha_nacimiento : pjpbj_fecha_nacimiento,
                pjpbj_pais_residencia : pjpbj_pais_residencia,
                pjpbj_pais_residencia_fiscal : pjpbj_pais_residencia_fiscal,
                pjpbj_profesion_oficio : pjpbj_profesion_oficio,
                pjpbj_lugar_trabajo : pjpbj_lugar_trabajo,
                pjpbj_telefono : pjpbj_telefono,
                pjpbj_correo : pjpbj_correo,
                pjpbj_domicilio_personal : pjpbj_domicilio_personal,
                pjpbj_domicilio_laboral : pjpbj_domicilio_laboral,
                pjpbj_entidad_participa : pjpbj_entidad_participa,
                pjpbj_porcentaje_participacion : pjpbj_porcentaje_participacion, 
                id_general : id_general_gprpj

            });

            try {

                const response = await fetch('vistas/modal/modalContenidosTablas.php?guardar_propietario_bf=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                });

                const respuestaTexto = await response.text();
                //$('.propietarios_beneficiarios_juridicos').modal('hide');
                document.querySelector('#propietarios_propietario_persona_juridica').innerHTML = respuestaTexto;

                pjpbj_nombre_completo.value = '';
                pjpbj_genero.value = '';
                pjpbj_identificacion.value = '';
                pjpbj_nacionalidad.value = '';
                pjpbj_pais_nacimiento.value = '';
                pjpbj_fecha.value = '';
                pjpbj_residencia.value = '';
                pjpbj_residencia_fiscal.value = '';
                pjpbj_profesion.value = '';
                pjpbj_lugar_trabajo.value = '';
                pjpbj_telefono.value = '';
                pjpbj_correo_electronico.value = '';
                pjpbj_domicilio_personal.value = '';
                pjpbj_domicilio_laboral
                pjpbj_entidad_juridica.value = '';
                pjpbj_participacion.value = '';

            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }

        }

        async function eliminar_pj_propietario_bf(id_eliminar, id_general){
            try {
                var id = id_eliminar;
                var id_general = id_general;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_propietario_bfpjf=1&id='+ id +'&id_general='+ id_general);
                const data = await response.text();
                //$('.generales_beneficiarios_finales_pj').modal('hide');
                document.querySelector('#propietarios_propietario_persona_juridica').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function eliminar_pj_propietario_bf_temp(id_eliminar){
            try {
                var id = id_eliminar;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_propietario_bf_pj=1&id=' + id);
                const data = await response.text();
                $('.propietarios_beneficiarios_finales_pj').modal('show');
                document.querySelector('#contenido_modal_propietarios_bf_pj').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function eliminar_propietario_bf_temp_final(id_eliminar){

            try {
                var id = id_eliminar;
                const response = await fetch('vistas/modal/modalContenidosTablas.php?eliminar_propietario_bf_pj_final=1&id=' + id);
                const data = await response.text();
                $('.generales_beneficiarios_finales_pj').modal('hide');
                document.querySelector('#generales_beneficiarios_persona_juridica').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function modal_eliminar(id_eliminar, modulo, modal_show, contenido_modal){

            var modulo = modulo;
            
            if (modulo == 'user') {
                try {
                    
                    var id = id_eliminar;
                    var modal_show = modal_show;
                    var contenido_modal = contenido_modal;

                    const response = await fetch('vistas/modal/modalUsuario.php?eliminar_usuario=1&id=' + id);
                    const data = await response.text();
                    $('#'+modal_show+'').modal('show');
                    document.querySelector('#'+contenido_modal+'').innerHTML = data;
                } catch (error) {
                    console.log('Error al obtener los detalles:', error);
                }
            }            

        }

        async function modal_edit(id_edit, modulo, modal_show, contenido_modal){

            var modulo = modulo;

            if (modulo == 'edit_user') {
                try {
                    
                    var id = id_edit;
                    var modal_show = modal_show;
                    var contenido_modal = contenido_modal;

                    const response = await fetch('vistas/modal/modalUsuario.php?edit_usuario=1&id=' + id);
                    const data = await response.text();
                    $('#'+modal_show+'').modal('show');
                    document.querySelector('#'+contenido_modal+'').innerHTML = data;
                } catch (error) {
                    console.log('Error al obtener los detalles:', error);
                }
            }            

        }

        async function modal_ver(id_ver, modulo, modal_show, contenido_modal){

            var modulo = modulo;

            if (modulo == 'ver_modal') {
                try {
                    
                    var id = id_ver;
                    var modal_show = modal_show;
                    var contenido_modal = contenido_modal;

                    const response = await fetch('vistas/modal/modalVercCliente.php?adjuntos_formulario_cc=1&id=' + id);
                    const data = await response.text();
                    $('#'+modal_show+'').modal('show');
                    document.querySelector('#'+contenido_modal+'').innerHTML = data;
                } catch (error) {
                    console.log('Error al obtener los detalles:', error);
                }
            }            

        }

        async function modal_ver_pj(id_ver, modulo, modal_show, contenido_modal){

            var modulo = modulo;

            if (modulo == 'ver_modal') {
                try {
                    
                    var id = id_ver;
                    var modal_show = modal_show;
                    var contenido_modal = contenido_modal;

                    const response = await fetch('vistas/modal/modalVercClienteJuridico.php?adjuntos_formulario_cc_pj=1&id=' + id);
                    const data = await response.text();
                    $('#'+modal_show+'').modal('show');
                    document.querySelector('#'+contenido_modal+'').innerHTML = data;
                } catch (error) {
                    console.log('Error al obtener los detalles:', error);
                }
            }            

        }

        async function agregar_adjuntos(id_general, modal_show, contenido_modal, ocultar_modal){

            var modulo = modulo;
            
            try {
                
                var id = id_general;
                var modal_show = modal_show;
                var contenido_modal = contenido_modal;

                const response = await fetch('vistas/modal/modalVercCliente.php?adjuntos_cc_pn_reg=1&id=' + id);
                const data = await response.text();
                $('#'+ocultar_modal+'').modal('hide');
                $('#'+modal_show+'').modal('show');
                document.querySelector('#'+contenido_modal+'').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function agregar_adjuntos_pj(id_general, modal_show, contenido_modal, ocultar_modal){

            var modulo = modulo;

            try {
                
                var id = id_general;
                var modal_show = modal_show;
                var contenido_modal = contenido_modal;

                const response = await fetch('vistas/modal/modalVercClienteJuridico.php?adjuntos_cc_pj_reg=1&id=' + id);
                const data = await response.text();
                $('#'+ocultar_modal+'').modal('hide');
                $('#'+modal_show+'').modal('show');
                document.querySelector('#'+contenido_modal+'').innerHTML = data;
            } catch (error) {
                console.log('Error al obtener los detalles:', error);
            }
        }

        async function eliminar_adjunto_pn(id_eliminar, contenido_modal, modulo, id_general){
            var modulo = modulo;
            
            if (modulo == 'modal_adjuntos_eli') {
                try {
                    
                    var id = id_eliminar;
                    var contenido_modal = contenido_modal;
                    var id_general = id_general;
                    console.log(id +' pasando por aca '+id_general);
                    const response = await fetch('vistas/modal/modalVercCliente.php?eliminar_adjuntos_gen_pn=1&id=' + id +'&id_general='+id_general);
                    const data = await response.text();
                    document.querySelector('#'+contenido_modal+'').innerHTML = data;
                } catch (error) {
                    console.log('Error al obtener los detalles:', error);
                }
            } 
        }

        // funcion para transformar la imagen y quitarle el peso digital

        function compressImage(file, quality, callback) {
            // Crear un objeto URL desde el archivo
            const url = URL.createObjectURL(file);
            const img = new Image();

            // Cuando la imagen se haya cargado
            img.onload = function() {
                // Crear un canvas
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                
                // Ajustar el tamaño del canvas al de la imagen
                canvas.width = this.naturalWidth;
                canvas.height = this.naturalHeight;

                // Dibujar la imagen en el canvas
                ctx.drawImage(this, 0, 0);

                // Extraer la imagen del canvas en un formato comprimido
                canvas.toBlob(callback, 'image/jpeg', quality);

                // Liberar el objeto URL
                URL.revokeObjectURL(url);
            };

            // Empezar a cargar la imagen
            img.src = url;
        }

        function cargar_imagen_server(identificador, tipo_doc) {

            const file = document.querySelector('#' + identificador).files[0];

            // Comprimir la imagen
            compressImage(file, 0.6, function(compressedFile) {
                // Crear un objeto FormData y agregar el archivo
            const formData = new FormData();
            formData.append('image', compressedFile, 'images.jpg');

                // Enviar el objeto FormData al servidor con fetch
                fetch('vistas/adjuntos_repo/subir_documento.php?tipo_doc='+tipo_doc, {
                    method: 'POST',
                    body: formData
                }).then(response => {
                    // Aquí puedes manejar la respuesta del servidor.
                    // Por ejemplo, puedes verificar si la carga fue exitosa.
                    if (!response.ok) {
                        throw new Error('Error en la carga');
                    }
                    return response.text();
                }).then(data => {
                    // 'data' es el cuerpo de la respuesta convertido a JSON.
                    // Aquí puedes usarlo como desees.
                }).catch(error => {
                    console.error('Error:', error);
                });
            }); 

            $('.ver_penalidad').modal('hide');
        }

    </script>
        
        <!-- END layout-wrapper  incluido por el tema -->
        <?php include 'vistas/layouts/customizer.php'; ?>
        <?php include 'vistas/layouts/vendor-scripts.php'; ?>

        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweetalerts.init.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!--datatable js-->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

        <script src="assets/js/pages/datatables.init.js"></script>
        <!-- App js -->
        <script src="vistas/assets/js/app.js"></script>
        <script>
            <?php if(isset($alerta) && $alerta == 1){ ?>
                setTimeout(document.getElementById("sa-success").click(), 2000);
            <?php }elseif(isset($alerta) && $alerta == 2){ ?> 
                setTimeout(document.getElementById("sa-close").click(), 2000);
            <?php }elseif(isset($alerta) && $alerta == 3){ ?> 
                setTimeout(document.getElementById("sa-error").click(), 2000);
            <?php } ?> 

            // desactivar la tecla enter

            document.addEventListener("keydown", function(event) {
                if (event.key === "Enter") {
                    console.log("enter nell");
                    event.preventDefault(); 
                }
            });
                        
        </script>
    </body>
</html>