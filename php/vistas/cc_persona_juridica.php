<?php  include 'cabeza.php'; ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">PANAMA CAR RENTAL, S.A.</h4>
                        <div class="page-title-right">
                            <!--<ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>-->

                             <!-- Modal Eliminar JUNTA DIRECTIVA Y DIGNATARIOS. -->

                            <div class="modal fade junta_directiva_eliminar" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15" style="color:red;">
                                                Eliminar el registro de la junta directiva y dignatarios ?.
                                            </h6>
                                            <h6 style="color:red;">Esta seguro que desea eliminarlo ?</h6>
                                            <div id="contenido_modal_jdd_eliminar">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!-- Modal Eliminar APODERADOS. -->

                            <div class="modal fade apoderados_eliminar" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15" style="color:red;">
                                                Eliminar el registro de los apoderados ?.
                                            </h6>
                                            <h6 style="color:red;">Esta seguro que desea eliminarlo ?</h6>
                                            <div id="contenido_modal_apoderados_eliminar">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!-- Modal Eliminar Beneficiarios finales temp. -->

                            <div class="modal fade generales_beneficiarios_finales" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15" style="color:red;">
                                                Eliminar el registro de los beneficiarios finales ?.
                                            </h6>
                                            <h6 style="color:red;">Esta seguro que desea eliminarlo ?</h6>
                                            <div id="contenido_modal_beneficiarios_finales">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!-- Modal Eliminar Beneficiarios finales temp. -->

                            <div class="modal fade generales_beneficiarios_finales_pj" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15" style="color:red;">
                                                Eliminar el registro general de los beneficiarios finales - persona juridica?.
                                            </h6>
                                            <h6 style="color:red;">Esta seguro que desea eliminarlo ?</h6>
                                            <div id="contenido_modal_beneficiarios_finales_pj">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!-- Modal Eliminar Beneficiarios finales temp. -->

                            <div class="modal fade propietarios_beneficiarios_finales_pj" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15" style="color:red;">
                                                Eliminar el registro de los propietarios beneficiarios finales - persona juridica?.
                                            </h6>
                                            <h6 style="color:red;">Esta seguro que desea eliminarlo ?</h6>
                                            <div id="contenido_modal_propietarios_bf_pj">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">REQUISITOS DEBIDA DILIGENCIA</button>
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl-delitos">DELITOS</button>
                            <!-- Full screen modal content debida deligencia -->
                            <div class="modal fade bs-example-modal-xl" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalFullscreenLabel">REQUISITOS DEBIDA DILIGENCIA</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15"></h6>
                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">TIPOS DE DEBIDA DILIGENCIA</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#25851B; color: white">Debida diligencia básica</td>
                                                </tr>
                                                <tr>
                                                    <td>Persona que no cumple criterios para ser considerado realizar sobre ella una debida diligencia ampliada o simplificada</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <table class="table">
                                                <tr style="background-color:#BA2F25; color: white">
                                                    <td>Debida diligencia ampliada</td>
                                                </tr>
                                                <tr>
                                                    <td>Clientes, terceros autorizados y/o beneficiarios finales considerados de medio y alto riesgo, previa clasificación de riesgo</td>
                                                </tr>
                                                <tr>
                                                    <td>Clientes, terceros autorizados y/o beneficiarios finales que se involucren en compras múltiples, es decir, más de un auto por transacción de compraventa o que se dediquen habitual o profesionalmente al negocio de reventa de autos.</td>
                                                </tr>
                                                <tr>
                                                    <td>Clientes, terceros autorizados y/o beneficiarios finales que se identifiquen como personas expuestas políticamente (PEP), sus familiares cercanos o estrechos colaboradores.</td>
                                                </tr>
                                                <tr>
                                                    <td>Relaciones de negocio y operaciones con clientes de países, territorios o jurisdicciones de riesgo, o que supongan transferencia de fondos desde o hacia tales países, territorios 
                                                    o jurisdicciones, incluyendo en todo caso, aquellos países para por que el GAFI exige la aplicación de medidas de debida diligencia ampliada o reforzada.</td>
                                                </tr>
                                            </table>

                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#C7AA28; color: white">Debida diligencia simplificada</td>
                                                </tr>
                                                <tr>
                                                    <td>Las entidades del Estado panameño y de Estados miembros de la Organización para la Cooperación y el Desarrollo Económico (OCDE). 
                                                        Las sociedades u otras personas jurídicas controladas o participadas mayoritariamente por entidades de derecho público del Estado panameño y de Estados miembros de la OCDE.
                                                        Personas jurídicas que estén listadas en bolsas de valores establecidas en jurisdicciones reconocidas por la Superintendencia del Mercado de Valores de Panamá.
                                                        Personas jurídicas con licencia emitida por la Superintendencia del Mercado de Valores de Panamá.
                                                        Personas jurídicas con licencia emitida por la Superintendencia de Bancos de Panamá.
                                                        Personas jurídicas con licencia emitida por la Superintendencia de Seguros y Reaseguros de Panamá. 
                                                        Empresas financieras reguladas por el Ministerio de Comercio e Industrias.
                                                        Las personas jurídicas que sean navieras, armadores o agentes de registro de naves debidamente reconocidas por la Autoridad Marítima de Panamá. 												
													 </td>
                                                </tr>
                                            </table>

                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">CLIENTE PERSONA NATURAL</td>
                                                    <td style="background-color:#BA2F25; color: white">Excepciones</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#25851B; color: white">Debida diligencia básica</td>
                                                    <td>Solo en los casos que el cliente no pueda cumplir con el requisito</td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de la cédula de identidad o pasaporte en el caso de extranjeros</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>En el caso de persona jurídica panameña, copia del documento de constitución de la entidad jurídica, en el que se evidencien los datos de inscripción de esta en el Registro Público o copia de Certificado de Registro Público  con antigüedad no mayor a 90 días calendario.</td>
                                                    <td>Información extraída, por el cliente o LA EMPRESA, a través de la base de datos del Registro Público en que se evidencien la existencia y los datos de la persona jurídica.</td>
                                                </tr>
                                                <tr>
                                                    <td>En el caso de persona jurídica extranjera, se deberá presentar los documentos equivalentes a lo dispuesto en el literal anterior que evidencien la constitución y vigencia de la persona jurídica extranjera, con antigüedad no mayor a 90 días calendario.</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de recibo de servicio público dentro de los últimos 3 meses a nombre del cliente o contrato de arrendamiento de bien inmueble.</td>
                                                    <td>Declaración Jurada de Domicilio (PCR-CUMP-EXCP01).</td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de la cédula de identidad o pasaporte del beneficiario final, directores, dignatarios, apoderados y representante legal de la entidad jurídica. </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Aviso de Operaciones o Licencia Comercial (si la persona jurídica es operativa)</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Evidencia de ingreso (si es la misma persona jurídica que paga o abona).</td>
                                                    <td></td>
                                                </tr>

                                                <tr style="background-color:#BA2F25; color: white">
                                                    <td>Debida diligencia ampliada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Carta de referencia bancaria.</td>
                                                    <td>Carta de referencia de proveedor o cliente.</td>
                                                </tr>
                                                <tr>
                                                    <td>Información adicional sobre la procedencia de los fondos.</td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td style="background-color:#C7AA28; color: white">Debida diligencia simplificada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Se exceptúan de aportar documento que sustente evidencia de ingreso</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <br>
                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">EVIDENCIA DE INGRESOS</td>
                                                    <td style="background-color:#BA2F25; color: white">Excepciones</td>
                                                </tr>
                                                <tr>
                                                    <td> <span style=" background-color:green; color:white; width:200px;"> Riesgo bajo </span><span style="background-color:#C7AA28; color:white; width:50%;"> Riesgo Medio </span> </td>
                                                    <td>Solo en los casos que el cliente no pueda cumplir con el requisito</td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de última Declaración Jurada de Rentas Persona Jurídica.</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#BA2F25; color: white">Riesgo alto.</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Estados Financieros auditados (de considerarse necesario).</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <br>

                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">TERCERO PERSONA JURÍDICA. </td>
                                                    <td style="background-color:#BA2F25; color: white">Excepciones</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#25851B; color: white">Debida diligencia básica</td>
                                                    <td>Solo en los casos que el cliente no pueda cumplir con el requisito</td>
                                                </tr>
                                                <tr>
                                                    <td>Declaración Jurada para la aplicación de abonos o cancelaciones para la compra de auto  por Terceros (PCR-CUMP-TE02).</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>En el caso de persona jurídica panameña, copia del documento de constitución de la entidad jurídica, en el que se evidencien los datos de inscripción de esta en el Registro Público o copia de Certificado de Registro Público  con antigüedad no mayor a 90 días calendario.</td>
                                                    <td>Información extraída, por el cliente o LA EMPRESA, a través de la base de datos del Registro Público en que se evidencien la existencia y los datos de la persona jurídica.</td>
                                                </tr>
                                                <tr>
                                                    <td>En el caso de persona jurídica extranjera, se deberá presentar los documentos equivalentes a lo dispuesto en el literal anterior que evidencien la constitución y vigencia de la persona jurídica extranjera, con antigüedad no mayor a 90 días calendario.</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de recibo de servicio público dentro de los últimos 3 meses a nombre del cliente o contrato de arrendamiento de bien inmueble.</td>
                                                    <td>Declaración Jurada de Domicilio (PCR-CUMP-EXCP01).</td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de la cédula de identidad o pasaporte del beneficiario final, directores, dignatarios, apoderados y representante legal de la entidad jurídia.</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Aviso de Operaciones o Licencia Comercial (si la persona jurídica es operativa).</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Evidencia de ingreso (si es la misma persona jurídica que paga o abona).</td>
                                                    <td></td>
                                                </tr>

                                                <tr style="background-color:#BA2F25; color: white">
                                                    <td>Debida diligencia ampliada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Carta de referencia bancaria.</td>
                                                    <td>Carta de referencia de proveedor o cliente.</td>
                                                </tr>
                                                <tr>
                                                    <td>Información adicional sobre la procedencia de los fondos.</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#C7AA28; color: white">Debida diligencia simplificada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Se exceptúan de aportar documento que  acredite participación accionaria.</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">BENEFICIARIO FINAL PERSONA JURÍDICA. </td>
                                                    <td style="background-color:#BA2F25; color: white">Excepciones</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#25851B; color: white">Debida diligencia básica</td>
                                                    <td>Solo en los casos que el cliente no pueda cumplir con el requisito</td>
                                                </tr>

                                                <tr>
                                                    <td>Autorización de traspaso a favor de un Tercero persona jurídica (PCR-CUMP-TR02).</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>En el caso de persona jurídica panameña, copia del documento de constitución de la entidad jurídica, en el que se evidencien los datos de inscripción de esta en el Registro Público o copia de Certificado de Registro Público  con antigüedad no mayor a 90 días calendario.</td>
                                                    <td>Información extraída, por el cliente o LA EMPRESA, a través de la base de datos del Registro Público en que se evidencien la existencia y los datos de la persona jurídica.</td>
                                                </tr>
                                                <tr>
                                                    <td>En el caso de persona jurídica extranjera, se deberá presentar los documentos equivalentes a lo dispuesto en el literal anterior que evidencien la constitución y vigencia de la persona jurídica extranjera, con antigüedad no mayor a 90 días calendario.</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de recibo de servicio público dentro de los últimos 3 meses a nombre del cliente o contrato de arrendamiento de bien inmueble.</td>
                                                    <td>Declaración Jurada de Domicilio (PCR-CUMP-EXCP01).</td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de la cédula de identidad o pasaporte del beneficiario final, directores, dignatarios, apoderados y representante legal de la entidad jurídica.</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Aviso de Operaciones o Licencia Comercial (si la persona jurídica es operativa).</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Evidencia de ingreso (si es la misma persona jurídica que paga o abona).</td>
                                                    <td></td>
                                                </tr>
                                                <tr style="background-color:#BA2F25; color: white">
                                                    <td>Debida diligencia ampliada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Se exceptúan de aportar documento que  acredite participación accionaria.</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Full screen modal content delitos -->
                            <div class="modal fade bs-example-modal-xl-delitos" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalFullscreenLabel">DELITOS</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15">
                                                Conforme a lo establecido en el Código Penal de la República de Panamá, 
                                                los delitos precedentes del Blanqueo de Capitales, según la nueva reforma al 
                                                código penal del artículo 254 son los siguientes:
                                            </h6>
                                            <ul>
                                                <li>Soborno Internacional</li>
                                                <li>Delitos contra el derecho de autor y delitos conexos</li>
                                                <li>Contra los derechos de la propiedad industrial</li>
                                                <li>Tráfico ilícito de migrantes</li>
                                                <li>Trata de personas</li>
                                                <li>Tráfico de órganos</li>
                                                <li>Delitos contra el ambiente</li>
                                                <li>Delitos de explotación sexual comercial</li>
                                                <li>Delitos contra la personalidad jurídica del estado</li>
                                                <li>Delitos contra la seguridad jurídica de los medios electrónicos</li>
                                                <li>Estafa calificada</li>
                                                <li>Robo</li>
                                                <li>Delitos Financieros</li>
                                                <li>Secuestro</li>
                                                <li>Extorsión</li>
                                                <li>Homicidio por precio o recompensa</li>
                                                <li>Peculado</li>
                                                <li>Corrupción de servicios públicos</li>
                                                <li>Enriquecimiento injustificado</li>
                                                <li>Pornografía y corrupción de personas menores de edad</li>
                                                <li>Robo o tráfico internacional de vehículos y sus piezas o componentes</li>
                                                <li>Falsificación de documento en general</li>
                                                <li>Omisión o falsedad de la declaración aduanera del viajero respecto a dineros, valores o documentos negociables</li>
                                                <li>Falsificación de moneda y otros valores</li>
                                                <li>Delito contra el patrimonio histórico de la nación</li>
                                                <li>Delito contra la seguridad colectiva</li>
                                                <li>Terrorismo y Financiamiento del terrorismo</li>
                                                <li>Delitos relacionados con droga</li>
                                                <li>Piratería</li>
                                                <li>Delincuencia organizada</li>
                                                <li>Asociación Ilícita</li>
                                                <li>Pandillerismo</li>
                                                <li>Posesión y tráfico de armas y explosivos y apropiación y sustracción violenta de material ilícito</li>
                                                <li>Tráfico y receptación de cosas provenientes del delito</li>
                                                <li>Delitos de contrabando</li>
                                                <li>Defraudación aduanera</li>
                                                <li>Evasión Fiscal</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!-- MODAL DE LA JUNTA DIRECTIVA -->

                            <div class="modal fade junta_directiva" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="text-align: center;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15">
                                                JUNTA DIRECTIVA Y DIGNATARIOS. 
                                            </h6>
                                            <div id="contenido_modal_documentos">

                                                <div class="row gy-4">
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Nombre completo.</label>
                                                            <input type="text" class="form-control" id="jd_temp_nombre_completo" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Cargo</label>
                                                            <input type="text" class="form-control" id="jd_temp_cargo" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                            <select class="form-control" data-choices
                                                                id="jd_temp_nacionalidad" class="" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">I.D.</label>
                                                            <input type="text" class="form-control" id="jd_temp_id" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                            <div class="form-icon">
                                                                <input type="text" class="form-control form-control-icon"
                                                                    id="jd_temp_correo" placeholder="example@gmail.com" name="">
                                                                <i class="ri-mail-unread-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Teléfono</label>
                                                            <input type="text" class="form-control" id="jd_temp_telefono" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Dirección</label>
                                                            <input type="text" class="form-control" id="jd_temp_direccion" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            <a href="#" class="btn btn-success" onclick="guardar_temp_jdd()">Guardar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        
                            <!-- MODAL APODERADOS -->

                            <div class="modal fade apoderados" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="text-align: center;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15">
                                                APODERADOS. 
                                            </h6>
                                            <div id="contenido_modal_documentos">

                                                <div class="row gy-4">
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Nombre completo.</label>
                                                            <input type="text" class="form-control" id="a_temp_nombre_completo" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Cargo</label>
                                                            <input type="text" class="form-control" id="a_temp_cargo" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                            <select class="form-control" data-choices
                                                                id="a_temp_nacionalidad" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">I.D.</label>
                                                            <input type="text" class="form-control" id="a_temp_id" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                            <div class="form-icon">
                                                                <input type="text" class="form-control form-control-icon"
                                                                    id="a_temp_correo" placeholder="example@gmail.com" name="fr_correo_electronico_1">
                                                                <i class="ri-mail-unread-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Teléfono</label>
                                                            <input type="text" class="form-control" id="a_temp_telefono" name="fr_razon_social_2">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Dirección</label>
                                                            <input type="text" class="form-control" id="a_temp_direccion" name="fr_actividad_2">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            <a href="#" class="btn btn-success" onclick="guardar_temp_apoderados()">Guardar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal --> 

                            <!-- Modal Generales Beneficiarios finales -->

                            <div class="modal fade generales_beneficiarios" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="text-align: center;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15">
                                                Generales Beneficiarios Finales. 
                                            </h6>
                                            <div id="contenido_modal_documentos">

                                                <div class="row gy-4">
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Nombre completo.</label>
                                                            <input type="text" class="form-control" id="gbf_temp_nombre_completo" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="disabledInput" class="form-label">Sexo</label>
                                                            <select class="form-control" data-choices
                                                                id="gbf_temp_genero" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($genero as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Cedula - Pasaporte</label>
                                                            <input type="text" class="form-control" id="gbf_temp_identificacion" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Nacionalidad</label>
                                                            <select class="form-control" data-choices
                                                                id="gbf_temp_nacionalidad" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">País de nacimiento</label>
                                                            <select class="form-control" data-choices
                                                                id="gbf_temp_pais_nacimiento" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Fecha de nacimineto</label>
                                                            <input type="text" class="form-control" data-provider="flatpickr"
                                                            data-date-format="d M, Y" id="gbf_temp_fecha_nacimiento">
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">País de residencia</label>
                                                            <select class="form-control" data-choices
                                                                id="gbf_temp_pais_residencia" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">País de residencia fiscal</label>
                                                            <select class="form-control" data-choices
                                                                id="gbf_temp_pais_residencia_fiscal" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="disabledInput" class="form-label">Profesión u oficio</label>
                                                            <select class="form-control" data-choices
                                                                id="gbf_temp_profesion" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($profesion as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                            <textarea class="form-control" id="gbf_temp_lugar_trabajo"
                                                                rows="3" name=""></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Teléfono</label>
                                                            <input type="text" class="form-control" id="gbf_temp_telefono" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                            <div class="form-icon">
                                                                <input type="text" class="form-control form-control-icon"
                                                                    id="gbf_temp_correo_electronico" placeholder="example@gmail.com" name="">
                                                                <i class="ri-mail-unread-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="exampleFormControlTextarea5" class="form-label">Domicilio Personal</label>
                                                            <textarea class="form-control" id="gbf_temp_domicilio_personal"
                                                                rows="3" name=""></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Porcentaje de participación</label>
                                                            <input type="text" class="form-control" id="gbf_temp_participacion" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            <a href="#" class="btn btn-success" onclick="guardar_temp_generaless_bf()">Guardar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!-- Modal GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA --> 

                            <div class="modal fade generales_beneficiarios_juridicos" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="text-align: center;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15">
                                                GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA. 
                                            </h6>
                                            <div id="contenido_modal_documentos"> 

                                                <div class="row gy-4">
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">NOMBRE DEL ACCIONISTA (JURÍDICO)</label>
                                                            <input type="text" class="form-control" id="gbfpj_temp_nombre_completo_accionista" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">PAÍS DE CONSTITUCIÓN ( ACCIONISTA JURÍDICO)</label>
                                                            <select class="form-control" data-choices
                                                                id="gbfpj_temp_pais_constitucion" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">FECHA  DE CONSTITUCIÓN</label>
                                                            <input type="text" class="form-control" data-provider="flatpickr"
                                                            data-date-format="d M, Y" name="" id="gbfpj_temp_fecha_constitucion">
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="disabledInput" class="form-label">DIRECCIÓN <br> (ACCIONISTA JURÍDICO)</label>
                                                            <select class="form-control" data-choices
                                                                id="gbfpj_temp_direccion" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($tipo_persona as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">RUC</label>
                                                            <input type="text" class="form-control" id="gbfpj_temp_ruc" name="">
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">SECTOR ECONÓMICO</label>
                                                            <select class="form-control" data-choices
                                                                id="gbfpj_temp_sector_economico" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($sector_economico as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">TELÉFONO</label>
                                                            <input type="text" class="form-control" id="gbfpj_temp_telefono" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Porcentaje de la participacion</label>
                                                            <input type="text" class="form-control" id="gbfpj_temp_porcentaje_participacion" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            <a href="#" class="btn btn-success" onclick="guardar_temp_bf_persona_juridica()">Guardar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal --> 

                            <!-- PROPIETARIOS BENEFICIARIOS FINALES- PERSONA JURÍDICA --> 

                            <div class="modal fade propietarios_beneficiarios_juridicos" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="text-align: center;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleMocClienteFormulario"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15">
                                            PROPIETARIOS DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA.
                                            </h6>
                                            <div id="contenido_modal_documentos">

                                                <div class="row gy-4">
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Nombre completo.</label>
                                                            <input type="text" class="form-control" id="pjpbj_temp_nombre_completo" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="disabledInput" class="form-label">Sexo</label>
                                                            <select class="form-control" data-choices
                                                                id="pjpbj_temp_genero" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($genero as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Cedula - Pasaporte</label>
                                                            <input type="text" class="form-control" id="pjpbj_temp_cedula_pasaporte" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Nacionalidad</label>
                                                            <select class="form-control" data-choices
                                                                id="pjpbj_temp_nacionalidad" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">País de nacimiento</label>
                                                            <select class="form-control" data-choices
                                                                id="pjpbj_temp_pais_nacimiento" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Fecha de nacimineto</label>
                                                            <input type="text" class="form-control" data-provider="flatpickr"
                                                            data-date-format="d M, Y" name="" id="pjpbj_temp_fecha_nacimiento">
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">País de residencia</label>
                                                            <select class="form-control" data-choices
                                                                id="pjpbj_temp_pais_residencia" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">País de residencia fiscal</label>
                                                            <select class="form-control" data-choices
                                                                id="pjpbj_temp_pais_residencia_fiscal" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($paises as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="disabledInput" class="form-label ">Profesión u oficio</label>
                                                            <select class="form-control" data-choices
                                                                id="pjpbj_temp_profesion_oficio" name="">
                                                                <option value="">Seleccione</option>
                                                                <?php foreach ($profesion as $key => $value) { ?>
                                                                <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                            <textarea class="form-control" id="pjpbj_temp_lugar_trabajo"
                                                                rows="3" name=""></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Teléfono</label>
                                                            <input type="text" class="form-control" id="pjpbj_temp_telefono" name="">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                            <div class="form-icon">
                                                                <input type="text" class="form-control form-control-icon"
                                                                    id="pjpbj_temp_correo" placeholder="example@gmail.com" name="">
                                                                <i class="ri-mail-unread-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="exampleFormControlTextarea5" class="form-label">Domicilio Personal</label>
                                                            <textarea class="form-control" id="pjpbj_temp_domicilio_personal"
                                                                rows="3" name=""></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="exampleFormControlTextarea5" class="form-label">Domicilio Laboral</label>
                                                            <textarea class="form-control" id="pjpbj_temp_domicilio_laboral"
                                                                rows="3" name=""></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Entidad juridica en la que participa</label>
                                                            <input type="text" class="form-control" id="pjpbj_temp_entidad_participa" name="fr_actividad_2">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-4 col-md-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Porcentaje de participación</label>
                                                            <input type="text" class="form-control" id="pjpbj_temp_porcentaje_participacion" name="fr_actividad_2">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                            <a href="#" class="btn btn-success" onclick="guardar_propietarios_beneficiarios_finales()">Guardar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            
                        </div>
                    </div>
                    <!-- tabs principal -->
                    <div class="col-xxl-12">
                        <h5 class="mb-3">POLÍTICA CONOZCA A SU CLIENTE - FORMULARIO DE DEBIDA DILIGENCIA CLIENTE PERSONA JURÍDICA - CÓDIGO: PCR-CUMP-FORM02.</h5>
                        <div class="card">
                            <div class="card-body">

                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="col-xxl-12">
                                        <h5 class="mb-3">Tabs</h5>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            <a class="nav-link mb-2 active" id="portada-tab" data-bs-toggle="pill" href="#portada" role="tab" aria-controls="portada" aria-selected="true">PORTADA FILE VENTAS</a>
                                                            <a class="nav-link mb-2" id="generales-tab" data-bs-toggle="pill" href="#generales" role="tab" aria-controls="generales" aria-selected="true">GENERALES</a>
                                                            <a class="nav-link mb-2" id="declaracion-tab" data-bs-toggle="pill" href="#declaracion" role="tab" aria-controls="declaracion" aria-selected="false">DECLARACIÓN</a>
                                                            <a class="nav-link mb-2" id="representante_legal-tab" data-bs-toggle="pill" href="#representante_legal" role="tab" aria-controls="representante_legal" aria-selected="false">REPRESENTANTE LEGAL</a>
                                                            <a class="nav-link" id="directiva-tab" data-bs-toggle="pill" href="#directiva" role="tab" aria-controls="directiva" aria-selected="false">DIRECTIVA Y DIGNATARIOS</a>
                                                            <a class="nav-link mb-2" id="apoderados-tab" data-bs-toggle="pill" href="#apoderados" role="tab" aria-controls="apoderados" aria-selected="false">APODERADOS</a>
                                                            <a class="nav-link mb-2" id="propietarios-tab" data-bs-toggle="pill" href="#propietarios" role="tab" aria-controls="propietarios" aria-selected="false">PROPIETARIOS</a>
                                                            <a class="nav-link" id="declaracion_accionistas-tab" data-bs-toggle="pill" href="#declaracion_accionistas" role="tab" aria-controls="declaracion_accionistas" aria-selected="false">DECLARACIÓN DE ACCIONISTAS</a>
                                                            <a class="nav-link mb-2" id="beneficio_final-tab" data-bs-toggle="pill" href="#beneficio_final" role="tab" aria-controls="beneficio_final" aria-selected="false">BENEFICIARIO FINAL</a>
                                                            <a class="nav-link mb-2" id="terceros_autorizados-tab" data-bs-toggle="pill" href="#terceros_autorizados" role="tab" aria-controls="terceros_autorizados" aria-selected="false">TERCEROS AUTORIZADOS</a>
                                                            <a class="nav-link" id="expuestas_politicamente-tab" data-bs-toggle="pill" href="#expuestas_politicamente" role="tab" aria-controls="expuestas_politicamente" aria-selected="false">EXPUESTAS POLÍTICAMENTE</a>
                                                            <a class="nav-link" id="referencias-tab" data-bs-toggle="pill" href="#referencias" role="tab" aria-controls="referencias" aria-selected="false">REFERENCIAS</a>
                                                            <a class="nav-link mb-2" id="jurada-tab" data-bs-toggle="pill" href="#jurada" role="tab" aria-controls="jurada" aria-selected="false">DECLARACIÓN JURADA</a>
                                                            <a class="nav-link mb-2" id="adjuntar-tab" data-bs-toggle="pill" href="#adjuntar" role="tab" aria-controls="adjuntar" aria-selected="false">ADJUNTOS</a>
                                                            <a class="nav-link" id="interno-tab" data-bs-toggle="pill" href="#interno" role="tab" aria-controls="interno" aria-selected="false">USO INTERNO</a>
                                                            <a class="nav-link" id="generales_beneficiarios_natural-tab" data-bs-toggle="pill" href="#generales_beneficiarios_natural" role="tab" aria-controls="generales_beneficiarios_natural" aria-selected="false">GENERALES B.F. P.N.</a>
                                                            <a class="nav-link mb-2" id="generales_beneficiarios_juridica-tab" data-bs-toggle="pill" href="#generales_beneficiarios_juridica" role="tab" aria-controls="generales_beneficiarios_juridica" aria-selected="false">GENERALES B.F. P.J.</a>
                                                            <a class="nav-link mb-2" id="propietarios_juridica-tab" data-bs-toggle="pill" href="#propietarios_juridica" role="tab" aria-controls="propietarios_juridica" aria-selected="false">PROPIETARIOS B.F. P.J.</a>
                                                            <a class="nav-link" id="declaracion_jurada-tab" data-bs-toggle="pill" href="#declaracion_jurada" role="tab" aria-controls="declaracion_jurada" aria-selected="false">DECLARACIÓN JURADA</a>
                                                            <a class="nav-link" id="aviso_legal-tab" data-bs-toggle="pill" href="#aviso_legal" role="tab" aria-controls="aviso_legal" aria-selected="false">AVISO LEGAL</a>
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-10">
                                                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                            <!-- Expediente -->
                                                            <div class="tab-pane fade show active" id="portada" role="tabpanel" aria-labelledby="portada-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">CONTROL DE ENTREGA DE EXPEDIENTES  DE VENTAS DE AUTOS | PERSONA JURÍDICA</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjexp_fecha">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Cliente</label>
                                                                                                    <input type="text" class="form-control" id="nombre_completo_inp" name="pjexp_cliente">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Marca</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_marca">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Modelo</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_modelo">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Año</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_anio">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Placa</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_placa">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Chasis</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_chasis">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col --> 
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Motor</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_motor">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Color</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_color">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Código Dollar</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_codigo_dollar">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">N° INTELISIS</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjexp_n_intelisis">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Datos generales -->
                                                            <div class="tab-pane fade" id="generales" role="tabpanel" aria-labelledby="generales-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">DATOS GENERALES</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Razón solcial</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_razon_social">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre Comercial</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_nombre_comercial">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Datos de inscripción</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_datos_inscripcion">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Tipo de persona</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjgn_tipo_persona">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($tipo_persona as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección Fisíca</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjgn_direccion_fisica"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">País de constitución</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjgn_pais_constitucion">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Residencia Fiscal</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjgn_residencia_fiscal"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">RUC & DV</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_ruc_dv">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Teléfono</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_telefono">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Apartado Postal</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_apartado_postal">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Aviso de operación</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_aviso_operacion">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Licencia</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_licencia">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Entidad reguladora</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_entidad_reguladora">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Activida principal a la que se dedica</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_actividad_principal_dedica">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Descripcion del negocio 
                                                                                                        <small>(SUMINISTRE UN RESUMEN ACTUALIZADO DE LOS PRINCIPALES ACTIVIDADES O NEGOCIOS A LAS CUALES SE DEDICA)</small>
                                                                                                    </label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjgn_descripcion_negocio"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Paises donde ofrece sus productos o servicios</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjgn_paises_ofrece_productos_servicios">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="iconInput" class="form-label">E-mail </label>
                                                                                                    <div class="form-icon">
                                                                                                        <input type="text" class="form-control form-control-icon"
                                                                                                            id="iconInput" placeholder="example@gmail.com" name="pjgn_email">
                                                                                                        <i class="ri-mail-unread-line"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Cargo</label>
                                                                                                    <input type="text" class="form-control" name="pjgn_cargo">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Declaracion -->
                                                            <div class="tab-pane fade" id="declaracion" role="tabpanel" aria-labelledby="declaracion-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN DE FUENTES Y ORIGEN DE LOS FONDOS.</h4>
                                                                                </div><!-- end card header -->
                                                                                
                                                                                <div class="card-body">
                                                                                    <p>
                                                                                    DECLARO QUE LOS FONDOS PARA EFECTUAR LA TRANSACCIÓN DE COMPRAVENTA PROVIENEN DE FUENTES LÍCITAS Y PROPIAS DETALLADAS A 
                                                                                    CONTINUACIÓN Y QUE NO REALIZARÉ O ADMITIRÉ QUE SE EFECTÚEN PAGOS A NOMBRE MÍO O DE LA PERSONA QUE REPRESENTO CON FONDOS 
                                                                                    PROVENIENTES DE ACTIVIDADES ILÍCITAS, NI EFECTUARÉ TRANSACCIONES DESTINADAS A TALES ACTIVIDADES O A FAVOR DE PERSONAS RELACIONADAS A LAS MISMAS.
                                                                                    </p>
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Actividad principal</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjdf_actividad_principal"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Actividad secundaria</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjdf_actividad_secundaria"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Otras fuentes</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjdf_otras_fuentes"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Otras fuentes 2</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjdf_otras_fuentes_secundaria"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Limite de compra</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjdf_limite_compra">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($limite as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Forma de pago</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjdf_forma_pago">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($forma_pago as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Método de pago</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjdf_metodo_pago_1">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($motodo_pago as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Método de pago 2</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjdf_metodo_pago_2">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($motodo_pago as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Representante legal -->
                                                            <div class="tab-pane fade" id="representante_legal" role="tabpanel" aria-labelledby="representante_legal-tab">
                                                                <div class="d-flex mb-2">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">DATOS DEL REPRESENTANTE LEGAL</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body"></div>
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre Completo</label>
                                                                                                    <input type="text" class="form-control" name="pjrl_nombre_completo">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Cédula / N# Pasaporte.</label>
                                                                                                    <input type="text" class="form-control" name="pjrl_cedula_pasaporte">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjrl_estado_civil">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($estado_civil as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjrl_nacionalidada">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha de nacimiento</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjrl_fecha_nacimiento">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjrl_direccion"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                                                    <div class="form-icon">
                                                                                                        <input type="text" class="form-control form-control-icon"
                                                                                                            id="iconInput" placeholder="example@gmail.com" name="pjrl_correo">
                                                                                                        <i class="ri-mail-unread-line"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Profesión</label>
                                                                                                    <input type="text" class="form-control" name="pjrl_profesion">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Lugar de trabajo</label>
                                                                                                    <input type="text" class="form-control" name="pjrl_lugar_trabajo">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Teléfono</label>
                                                                                                    <input type="text" class="form-control" name="pjrl_telefono">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Junta directiva temporal -->
                                                            <div class="tab-pane fade" id="directiva" role="tabpanel" aria-labelledby="directiva-tab">
                                                                <div class="d-flex mb-2">
                                                                    
                                                                    <div class="row" style="width:100%;">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">JUNTA DIRECTIVA Y DIGNATARIOS.</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">DETALLE LOS DIRECTORES Y DIGNATARIOS. AGREGUE MÁS LÍNEAS SEGÚN SEA NECESARIO.</div>
                                                                                    <div class="card-body">
                                                                                        <div class="live-preview">
                                                                                            
                                                                                            <a href="#" data-bs-toggle="modal" data-bs-target=".junta_directiva" class="btn btn-primary">Agregar</a>

                                                                                            <table class="table">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>Nombre Completo</th>
                                                                                                        <th>Cargo</th>
                                                                                                        <th>Nacionalidad</th>
                                                                                                        <th>I.D.</th>
                                                                                                        <th>Correo</th>
                                                                                                        <th>Dirección</th>
                                                                                                        <th>Acciones</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody id="contenido_junta_directiva">
                                                                                                    <?php foreach ($obtener_registros_temp_ddt as $key => $value) { ?>
                                                                                                            <tr>
                                                                                                                <td><input value="<?php echo $value['jd_temp_nombre_completo']; ?>" name="pjdd_nombre_completo[]" class="form-control"> </td>
                                                                                                                <td><input value="<?php echo $value['jd_temp_cargo']; ?>" name="pjdd_cargo[]" class="form-control"></td>
                                                                                                                <td><input value="<?php echo $value['jd_temp_nacionalidad']; ?>" name="pjdd_nacionalidad[]" class="form-control"></td>
                                                                                                                <td><input value="<?php echo $value['jd_temp_id']; ?>" name="pjdd_id[]" class="form-control"></td>
                                                                                                                <td><input value="<?php echo $value['jd_temp_correo']; ?>" name="pjdd_correo[]" class="form-control"></td>
                                                                                                                <td><input value="<?php echo $value['jd_temp_direccion']; ?>" name="pjdd_direccion[]" class="form-control"></td>
                                                                                                                <td><a href="#" onclick="eliminar_dd_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                                                                <input type="hidden" name="pjdd_telefono[]" value="<?php echo $value['jd_temp_telefono']; ?>">
                                                                                                            </tr>
                                                                                                    <?php } ?>
                                                                                                </tbody>
                                                                                            </table> 
                                                                                            <!--end row-->
                                                                                        </div>
                                                                                        <div class="d-none code-view">
                                                                                            <pre class="language-markup" style="height: 450px;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                            <!-- Apoderados temporal -->
                                                            <div class="tab-pane fade" id="apoderados" role="tabpanel" aria-labelledby="apoderados-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row" style="width:100%;">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">APODERADOS</h4>
                                                                                </div><!-- end card header -->
                                                                                
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        
                                                                                        <a href="#" data-bs-toggle="modal" data-bs-target=".apoderados" class="btn btn-primary">Agregar</a>

                                                                                        <table class="table">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Nombre Completo</th>
                                                                                                    <th>Cargo</th>
                                                                                                    <th>Nacionalidad</th>
                                                                                                    <th>I.D.</th>
                                                                                                    <th>Correo</th>
                                                                                                    <th>Dirección</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody id="apoderados_tabla">
                                                                                                <?php foreach ($obtener_registros_temp_apot as $key => $value) { ?>
                                                                                                            <tr>
                                                                                                                <td><input value="<?php echo $value['a_temp_nombre_completo']; ?>" name="pja_nombre_completo[]" class="form-control"> </td>
                                                                                                                <td><input value="<?php echo $value['a_temp_cargo']; ?>" name="pja_cargo[]" class="form-control"></td>
                                                                                                                <td><input value="<?php echo $value['a_temp_nacionalidad']; ?>" name="pja_nacionalidad[]" class="form-control"></td>
                                                                                                                <td><input value="<?php echo $value['a_temp_id']; ?>" name="pja_id[]" class="form-control"></td>
                                                                                                                <td><input value="<?php echo $value['a_temp_correo']; ?>" name="pja_correo[]" class="form-control"></td>
                                                                                                                <td><input value="<?php echo $value['a_temp_direccion']; ?>" name="pja_direccion[]" class="form-control"></td>
                                                                                                                <td><a href="#" onclick="eliminar_a_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                                                                <input type="hidden" name="pja_telefono[]" value="<?php echo $value['a_temp_telefono']; ?>">
                                                                                                            </tr>
                                                                                                    <?php }  ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <!-- Propietarios -->
                                                            <div class="tab-pane fade" id="propietarios" role="tabpanel" aria-labelledby="propietarios-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">PROPIETARIOS</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">¿ESTA EMPRESA ES PÚBLICA O PRIVADA?  </label>
                                                                                                    <br>
                                                                                                    <label for="basiInput" class="form-label">Pública</label>
                                                                                                    <input class="form-check-input" type="radio" name="pjpr_publica_privada" id="formradioRight6" value="109BFF">
                                                                                                    <label for="basiInput" class="form-label">Privada</label>
                                                                                                    <input class="form-check-input" type="radio" name="pjpr_publica_privada" id="formradioRight6" value="111BFF">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">¿ESTA EMPRESA LICITA CON EL ESTADO?  </label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjpr_licita_estado">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <option value="SI">SI</option>
                                                                                                        <option value="NO">NO</option>
                                                                                                        <option value="NO_APLICA">NO APLICA</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">País</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjpr_licita_pais">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">¿LAS ACCIONES DE ESTA EMPRESA COTIZAN EN UNA BOLSA DE VALORES?  </label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjpr_cotiza_bolsa">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <option value="SI">SI</option>
                                                                                                        <option value="NO">NO</option>
                                                                                                        <option value="NO_APLICA">NO APLICA</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">SI LA RESPUESTA ES AFIRMATIVA INDIQUE:</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjpr_descripcion_cotiza_bolsa">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">NOMBRE DE LA BOLSA DE VALORES Y TICKER:</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjpr_nombre_bolsa_ticker">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                        <br>
                                                                                        <br>
                                                                                        <p>
                                                                                        EN CASO AFIRMATIVO NO DEBE COMPLETAR SECCIÓN DE DECLARACIÓN DE ACCIONISTAS.
                                                                                        </p>
                                                                                        <p>
                                                                                        SI LA RESPUESTA ES NEGATIVA COMPLETE LA SECCIÓN DE DECLARACIÓN DE ACCIONISTAS.   
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- DECLARACION DE ACCIONISTAS -->
                                                            <div class="tab-pane fade" id="declaracion_accionistas" role="tabpanel" aria-labelledby="declaracion_accionistas-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN DE ACCIONISTAS.</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                        <p>DETALLE LOS NOMBRES DE LOS ACCIONISTAS QUE TENGAN EL DERECHO A EJERCER EL VOTO CON RESPECTO AL VEINTICINCO POR CIENTO (25%) O MÁS DE LAS ACCIONES EMITIDAS Y EN CIRCULACIÓN. ADICIONAL DEBERÁ COMPLETAR LA DECLARACIÓN JURADA DE BENEFICIARIOS FINALES PERSONA JURÍDICA.</p>
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre del accionista(Natural o Jurídica).</label>
                                                                                                    <input class="form-control" type="text" name="pjda_nombre_completo_accionista[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Participación Accionarias</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjda_participacion_accionaria[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre del accionista(Natural o Jurídica).</label>
                                                                                                    <input class="form-control" type="text" name="pjda_nombre_completo_accionista[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Participación Accionarias</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjda_participacion_accionaria[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre del accionista(Natural o Jurídica).</label>
                                                                                                    <input class="form-control" type="text" name="pjda_nombre_completo_accionista[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Participación Accionarias</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjda_participacion_accionaria[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre del accionista(Natural o Jurídica).</label>
                                                                                                    <input class="form-control" type="text" name="pjda_nombre_completo_accionista[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Participación Accionarias</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjda_participacion_accionaria[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col -->                        
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Beneficiario final -->
                                                            <div class="tab-pane fade" id="beneficio_final" role="tabpanel" aria-labelledby="beneficio_final-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">BENEFICIARIO FINAL.</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">INDIQUE SI EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO. ?  </label>
                                                                                                    <br>
                                                                                                    <label for="basiInput" class="form-label">Cliente </label>
                                                                                                    <input class="form-check-input" type="radio" name="pjbf_transpaso_cliente_tercero" id="formradioRight6" value="109BFF">
                                                                                                    <label for="basiInput" class="form-label">Tercero </label>
                                                                                                    <input class="form-check-input" type="radio" name="pjbf_transpaso_cliente_tercero" id="formradioRight6" value="110BFF">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col -->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS FINALES DE LAS PERSONAS JURÍDICAS.</label>
                                                                                                    <br>
                                                                                                    <label for="basiInput" class="form-label">Familiar </label>
                                                                                                    <input class="form-check-input" type="radio" name="pjbf_relacion_cliente" id="formradioRight6" value="111BFF">
                                                                                                    <label for="basiInput" class="form-label">Tercero </label>
                                                                                                    <input class="form-check-input" type="radio" name="pjbf_relacion_cliente" id="formradioRight6" value="110BFF">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col -->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                                                    <input type="text" class="form-control" id="primer_nombre" name="pjbf_primer_nombre">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                                                    <input type="text" class="form-control" id="segundo_nombre" name="pjbf_segundo_nomnbre">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                                                    <input type="text" class="form-control" id="apellido_paterno" name="pjbf_apellido_parterno">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                                                    <input type="text" class="form-control" id="apellido_materno" name="pjbf_apellido_materno">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                                                    <input type="text" class="form-control" id="apellido_casada" name="pjbf_apellido_casada">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">País de Naciemiento</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjbf_pais_nacimiento">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjbf_fecha_nacimiento">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col --> 
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Género</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjbf_genero">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($genero as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div> 
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjbf_nacionalidad">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjbf_estado_civil">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($estado_civil as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Cédula/N# Pasaporte</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjbf_cedula_pasaporte">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">País de Residencia</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjbf_pais_residencia">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección Residencial</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjbf_direccion_residencia"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">País de Residencia Fiscal</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjbf_pais_residencia_fiscal">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                                                    <div class="form-icon">
                                                                                                        <input type="text" class="form-control form-control-icon"
                                                                                                            id="iconInput" placeholder="example@gmail.com" name="pjbf_correo">
                                                                                                        <i class="ri-mail-unread-line"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Teléfono Residencial</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjbf_telefono_residencial">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Teléfono Móvil</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjbf_telefono_celular">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Profesión</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjbf_profesion">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Ocupación</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjbf_ocupacion">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjbf_lugar_trabajo"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección de trabajo</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjbf_direccion_trabajo"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Terceros autorizados -->
                                                            <div class="tab-pane fade" id="terceros_autorizados" role="tabpanel" aria-labelledby="terceros_autorizados-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">TERCEROS AUTORIZADOS.</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body" >

                                                                                <p>¿LOS PAGOS PARCIALES (ABONOS) O TOTALES AL PRECIO DE VENTA SERÁN REALIZADOS POR UNA TERCERA PERSONA DISTINTA DEL CLIENTE O DEL BENEFICIARIO FINAL? (NO ENTIDAD BANCARIA) 
                                                                                    EN CASO AFIRMATIVO, COMPLETE CON LOS DATOS DEL TERCERO AUTORIZADO. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02.</p>
                                                                                <p>
                                                                                    EN CASO AFIRMATIVO, COMPLETE CON LOS DATOS DEL TERCERO AUTORIZADO. DE SER PERSONA JURÍDICA, UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02.
                                                                                </p>

                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-3">
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">RELACIÓN CON EL CLIENTE.  </label>
                                                                                                    <br>
                                                                                                    <label for="basiInput" class="form-label">Familiar </label>
                                                                                                    <input class="form-check-input" type="radio" name="pjtu_relacion_cliente" id="formradioRight6" value="111BFF">
                                                                                                    <label for="basiInput" class="form-label">Tercero </label>
                                                                                                    <input class="form-check-input" type="radio" name="pjtu_relacion_cliente" id="formradioRight6" value="110BFF">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col -->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Primer Nombre</label>
                                                                                                    <input type="text" class="form-control" id="primer_nombre" name="pjtu_primer_nombre">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Segundo Nombre</label>
                                                                                                    <input type="text" class="form-control" id="segundo_nombre" name="pjtu_segundo_nomnbre">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Apellido Paterno</label>
                                                                                                    <input type="text" class="form-control" id="apellido_paterno" name="pjtu_apellido_parterno">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Apellido Materno</label>
                                                                                                    <input type="text" class="form-control" id="apellido_materno" name="pjtu_apellido_materno">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Apellido de Casada</label>
                                                                                                    <input type="text" class="form-control" id="apellido_casada" name="pjtu_apellido_casada">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">País de Naciemiento</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjtu_pais_nacimiento">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha Nacimiento</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjtu_fecha_nacimiento">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col --> 
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Género</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjtu_genero">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($genero as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div> 
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Nacionalidad</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjtu_nacionalidad">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Estado Civil</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjtu_estado_civil">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($estado_civil as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Cédula/N# Pasaporte</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjtu_cedula_pasaporte">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">País de Residencia</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjtu_pais_residencia">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección Residencial</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjtu_direccion_residencia"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">País de Residencia Fiscal</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjtu_pais_residencia_fiscal">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($paises as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['nombre']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="iconInput" class="form-label">Correo Electrónico </label>
                                                                                                    <div class="form-icon">
                                                                                                        <input type="text" class="form-control form-control-icon"
                                                                                                            id="iconInput" placeholder="example@gmail.com" name="pjtu_correo">
                                                                                                        <i class="ri-mail-unread-line"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Teléfono Residencial</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjtu_telefono_residencial">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Teléfono Móvil</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjtu_telefono_celular">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Profesión</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjtu_profesion">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Ocupación</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjtu_ocupacion">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($profesion as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Lugar de trabajo</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjtu_lugar_trabajo"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Dirección de trabajo</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjtu_direccion_trabajo"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Personas expuestas politicamente -->
                                                            <div class="tab-pane fade" id="expuestas_politicamente" role="tabpanel" aria-labelledby="expuestas_politicamente-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">PERSONAS EXPUESTAS POLÍTICAMENTE.</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <p>
                                                                                    LAS PERSONAS EXPUESTAS POLÍTICAMENTE SON LAS PERSONAS NACIONALES O EXTRANJERAS QUE CUMPLEN FUNCIONES PÚBLICAS DESTACADAS 
                                                                                    DE ALTO NIVEL O CON MANDO Y JURISDICCIÓN EN UN ESTADO, COMO (PERO SIN LIMITARSE) LOS JEFES DE ESTADO O DE UN GOBIERNO, 
                                                                                    LOS POLÍTICOS DE ALTO PERFIL, LOS FUNCIONARIOS GUBERNAMENTALES, JUDICIALES O MILITARES DE ALTA JERARQUÍA, LOS EJECUTIVOS 
                                                                                    DE EMPRESAS O CORPORACIONES ESTATALES LOS FUNCIONARIOS PÚBLICOS QUE OCUPEN POSICIONES DE ELECCIÓN POPULAR, ENTRE OTROS QUE 
                                                                                    EJERZAN LA TOMA DE DECISIONES EN LAS ENTIDADES PÚBLICAS; PERSONAS QUE CUMPLEN  O A QUIÉNES SE LES HA CONFIADO FUNCIONES IMPORTANTES 
                                                                                    POR UNA ORGANIZACIÓN INSTITUCIONAL, COMO LOS MIEMBROS DE LA ALTA GERENCIA, ES DECIR DIRECTORES, SUBDIRECTORES Y MIEMBROS DE LA JUNTA
                                                                                     DIRECTIVA O FUNCIONES EQUIVALENTES.
                                                                                    </p>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">¿ES EL REPRESENTANTE LEGAL, APODERADO, DIRECTOR O DIGNATARIO UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</label>
                                                                                                    <br>
                                                                                                    <label for="basiInput" class="form-label">SI</label>
                                                                                                    <input class="form-check-input" type="radio" name="pjpx_relacion_directa" id="formradioRight6" value="SI">
                                                                                                    <label for="basiInput" class="form-label">NO</label>
                                                                                                    <input class="form-check-input" type="radio" name="pjpx_relacion_directa" id="formradioRight6" value="NO">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjpx_nombre_completo">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Cargo actual</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjpx_cargo_actual">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_actual">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col --> 
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Cargo Anterior</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjpx_cargo_anterior">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha anterior</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_anterior">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col --> 
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Comentarios</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjpx_comentarios"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">¿ES EL BENEFICIARIO FINAL UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</label>
                                                                                                    <br>
                                                                                                    <label for="basiInput" class="form-label">SI</label>
                                                                                                    <input class="form-check-input" type="radio" name="pjpx_pep_relacion_directa" id="formradioRight6" value="SI">
                                                                                                    <label for="basiInput" class="form-label">NO</label>
                                                                                                    <input class="form-check-input" type="radio" name="pjpx_pep_relacion_directa" id="formradioRight6" value="NO">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjpx_nombre_completo_2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Cargo actual</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjpx_cargo_actual_2">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_actual_2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col --> 
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="disabledInput" class="form-label">Cargo Anterior</label>
                                                                                                    <select class="form-control" data-choices
                                                                                                        id="choices-single-default" name="pjpx_cargo_anterior_2">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <?php foreach ($profesion_personas_expuestas as $key => $value) { ?>
                                                                                                        <option value="<?php echo $value['codigo']; ?>"><?php echo utf8_encode($value['descripcion']); ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha anterior</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjpx_fecha_cargo_anterior_2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- end col --> 
                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                <div>
                                                                                                    <label for="exampleFormControlTextarea5" class="form-label">Comentarios</label>
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea5"
                                                                                                        rows="3" name="pjpx_comentarios_2"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Referencias -->
                                                            <div class="tab-pane fade" id="referencias" role="tabpanel" aria-labelledby="referencias-tab">
                                                                <div class="d-flex mb-2">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">REFERENCIAS</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <p>REFERENCIAS BANCARIAS.</p>
                                                                                </div>
                                                                                    <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre o razón social</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_nombre_razon_social[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_actividad[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Relación</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_relacion[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Teléfono</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_telefono[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="iconInput" class="form-label">Correo Electrónico</label>
                                                                                                    <div class="form-icon">
                                                                                                        <input type="text" class="form-control form-control-icon"
                                                                                                            id="iconInput" placeholder="example@gmail.com" name="pjrf_correo_electronico[]">
                                                                                                        <i class="ri-mail-unread-line"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            <div class="card-body">
                                                                                            </div>
                                                                                        
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre o razón social</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_nombre_razon_social[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Actividad</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_actividad[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Relacón</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_relacion[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Teléfono</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjrf_telefono[]">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="iconInput" class="form-label">Correo Electrónico</label>
                                                                                                    <div class="form-icon">
                                                                                                        <input type="text" class="form-control form-control-icon"
                                                                                                            id="iconInput" placeholder="example@gmail.com" name="pjrf_correo_electronico[]">
                                                                                                        <i class="ri-mail-unread-line"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- jurada -->
                                                            <div class="tab-pane fade" id="jurada" role="tabpanel" aria-labelledby="jurada-tab">
                                                                <div class="d-flex mb-2">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN JURADA</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    DECLARO QUE LA INFORMACIÓN ANTERIOR ES VERAZ Y HA SIDO PROPORCIONADA EN CUMPLIMIENTO DE LO ESTABLECIDO POR LAS LEYES 
                                                                                    Y REGULACIONES RELACIONADAS CON LA PREVENCIÓN DEL BLANQUEO DE CAPITALES, FINANCIAMIENTO DEL TERRORISMO Y FINANCIAMIENTO
                                                                                    DE LA PROLIFERACIÓN DE ARMAS DE DESTRUCCIÓN MASIVA DE LA REPÚBLICA DE PANAMÁ. ACEPTO PROPORCIONAR CUALQUIER INFORMACIÓN 
                                                                                    Y/O DOCUMENTACIÓN ADICIONAL A LA DESCRITA EN EL PRESENTE FORMULARIO, QUE PANAMA CAR RENTAL, S.A. REQUIERA PARA LA APLICACIÓN 
                                                                                    DE LAS MEDIDAS DE DEBIDA DILIGENCIA.
                                                                                </div>
                                                                                    <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                                                    <input type="text" class="form-control" id="basiInput" name="pjdj_nombre_completo">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjdj_fecha">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Firma</label>
                                                                                                    <input type="file" class="form-control" id="basiInput" name="pjdj_firma">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- Adjuntar -->
                                                            <div class="tab-pane fade" id="adjuntar" role="tabpanel" aria-labelledby="adjuntar-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">ADJUNTAR LOS SIGUIENTES DOCUMENTOS E INFORMACIÓN DE SOPORTE.</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            <!--end col-->
                                                                                            <p>
                                                                                            <p>Recuerde adjuntar un unico documento, donde este escaneada en un pdf los siguientes recaudos:<br>
                                                                                            -COPIA DE CÉDULA O PASAPORTE DEL REPRESENTANTE LEGAL, APODERADOS, DIRECTORES, DIGNATARIOS, TERCEROS AUTORIZADOS Y BENEFICIARIOS FINALES <br> 
                                                                                            -COPIA DE PACTO SOCIAL, CERTIFICADO DE REGISTRO PÚBLICO O SU EQUIVALENTE, CON UNA VIGENCIA NO MENOR DE 90 DÍAS CALENDARIO<br>
                                                                                            -AVISO DE OPERACIONES O LICENCIA COMERCIAL<br>
                                                                                            -EVIDENCIA DE INGRESO (DE ACUERDO CON PERFIL FINANCIERO)</p>
                                                                                            </p>
                                                                                            <div class="col-xxl-12 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Adjuntar pdf</label>
                                                                                                    <input type="file" class="form-control" id="basiInput" name="pjad_identificacion">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div style="display: none;">
                                                                                                <div class="col-xxl-6 col-md-6">
                                                                                                    <div>
                                                                                                        <label for="basiInput" class="form-label">COPIA DE PACTO SOCIAL, CERTIFICADO DE REGISTRO PÚBLICO O SU EQUIVALENTE, CON UNA VIGENCIA NO MENOR DE 90 DÍAS CALENDARIO</label>
                                                                                                        <input type="file" class="form-control" id="basiInput" name="pjad_pacto_social">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-xxl-6 col-md-6">
                                                                                                    <div>
                                                                                                        <label for="basiInput" class="form-label">AVISO DE OPERACIONES O LICENCIA COMERCIAL</label>
                                                                                                        <input type="file" class="form-control" id="basiInput" name="pjad_aviso_operaciones">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end col-->
                                                                                                <div class="col-xxl-6 col-md-6">                                                           
                                                                                                    <div>
                                                                                                        <label for="basiInput" class="form-label">EVIDENCIA DE INGRESO (DE ACUERDO CON PERFIL FINANCIERO)</label>
                                                                                                        <input type="file" class="form-control" id="basiInput" name="pjad_evidencia_ingreso">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div> 

                                                                </div>
                                                            </div>
                                                            <!-- uso interno -->
                                                            <div class="tab-pane fade" id="interno" role="tabpanel" aria-labelledby="interno-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">PARA USO INTERNO DE PANAMA CAR RENTAL, S.A.</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del vendedor</label>
                                                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_1">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                                                    <select class="form-control" data-choices id="choices-single-default" name="pjui_aprobacion_1">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <option value="Aprobado">Aprobado</option>
                                                                                                        <option value="Rechazado">Rechazado</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Comentaro</label>
                                                                                                    <textarea class="form-control" name="pjui_comentario_1"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjui_fecha_1">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del encargado de sucursal</label>
                                                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                                                    <select class="form-control" data-choices id="choices-single-default" name="pjui_aprobacion_2">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <option value="Aprobado">Aprobado</option>
                                                                                                        <option value="Rechazado">Rechazado</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Comentaro</label>
                                                                                                    <textarea class="form-control" name="pjui_comentario_2"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjui_fecha_2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del analista de cumplimiento</label>
                                                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_3">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                                                    <select class="form-control" data-choices id="choices-single-default" name="pjui_aprobacion_3">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <option value="Aprobado">Aprobado</option>
                                                                                                        <option value="Rechazado">Rechazado</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Comentaro</label>
                                                                                                    <textarea class="form-control" name="pjui_comentario_3"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjui_fecha_3">
                                                                                                </div>
                                                                                            </div>

                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre y apellidos del gerente de venta de autos (solo para PEPs)</label>
                                                                                                    <input class="form-control" id="basiInput" name="pjui_nombre_completo_4">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Aprobación</label>
                                                                                                    <select class="form-control" data-choices id="choices-single-default" name="pjui_aprobacion_4">
                                                                                                        <option value="">Seleccione</option>
                                                                                                        <option value="Aprobado">Aprobado</option>
                                                                                                        <option value="Rechazado">Rechazado</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Comentaro</label>
                                                                                                    <textarea class="form-control" name="pjui_comentario_4"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-3 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="pjui_fecha_4">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- I. GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA NATURAL -->
                                                            <div class="tab-pane fade" id="generales_beneficiarios_natural" role="tabpanel" aria-labelledby="generales_beneficiarios_natural-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row" style="width:100%;">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA NATURAL.</h4>
                                                                                </div><!-- end card header -->
                                                                                    <div class="card-body">COMPLETE CON LOS DATOS DE LAS PERSONAS NATURALES QUE OSTENTAN UNA PARTICIPACIÓN DEL 25% O MÁS EN EL CLIENTE O PROVEEDOR.</div>
                                                                                    <div class="card-body">
                                                                                        <div class="live-preview">
                                                                                            
                                                                                            <a href="#" data-bs-toggle="modal" data-bs-target=".generales_beneficiarios" class="btn btn-primary">Agregar</a>

                                                                                            <table class="table">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>Nombre Completo</th>
                                                                                                        <th>Participación</th>
                                                                                                        <th>Nacionalidad</th>ó
                                                                                                        <th>Profesión</th>
                                                                                                        <th>Correo</th>
                                                                                                        <th>Acciones</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody id="generales_bf">
                                                                                                <?php 
                                                                                                foreach ($obtener_registros_temp as $key => $value) { ?>
                                                                                                <tr>
                                                                                                    <td><input value="<?php echo $value['gbf_temp_nombre_completo']; ?>" name="pjgbf_nombre_completo[]" class="form-control"> </td>
                                                                                                    <td><input value="<?php echo $value['gbf_temp_participacion']; ?>" name="pjgbf_porcentaje_participacion[]" class="form-control"></td>
                                                                                                    <td><input value="<?php echo $value['gbf_temp_nacionalidad']; ?>" name="pjgbf_nacionalidad[]" class="form-control"></td>
                                                                                                    <td><input value="<?php echo $value['gbf_temp_profesion']; ?>" name="pjgbf_profesion_oficio[]" class="form-control"></td>
                                                                                                    <td><input value="<?php echo $value['gbf_temp_correo_electronico']; ?>" name="pjgbf_correo[]" class="form-control"></td>
                                                                                                    <td><a href="#" onclick="eliminar_generales_bf_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                                                    <input type="hidden" name="pjgbf_telefono[]" value="<?php echo $value['gbf_temp_telefono']; ?>">
                                                                                                    <input type="hidden" name="pjgbf_genero[]" value="<?php echo $value['gbf_temp_genero']; ?>">
                                                                                                    <input type="hidden" name="pjgbf_identificacion[]" value="<?php echo $value['gbf_temp_identificacion']; ?>">
                                                                                                    <input type="hidden" name="pjgbf_pais_nacimiento[]" value="<?php echo $value['gbf_temp_pais_nacimiento']; ?>">
                                                                                                    <input type="hidden" name="pjgbf_fecha_nacimiento[]" value="<?php echo $value['gbf_temp_fecha_nacimiento']; ?>">
                                                                                                    <input type="hidden" name="pjgbf_pais_residencia[]" value="<?php echo $value['gbf_temp_pais_residencia']; ?>">
                                                                                                    <input type="hidden" name="pjgbf_pais_residencia_fiscal[]" value="<?php echo $value['gbf_temp_pais_residencia_fiscal']; ?>">
                                                                                                    <input type="hidden" name="pjgbf_lugar_trabajo[]" value="<?php echo $value['gbf_temp_lugar_trabajo']; ?>">
                                                                                                    <input type="hidden" name="pjgbf_domicilio_personal[]" value="<?php echo $value['gbf_temp_domicilio_personal']; ?>">
                                                                                                </tr>
                                                                                                <?php } ?>
                                                                                                </tbody>
                                                                                            </table> 
                                                                                            <!--end row-->
                                                                                        </div>
                                                                                        <div class="d-none code-view">
                                                                                            <pre class="language-markup" style="height: 450px;">
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                            <!--end col-->
                                                                        </div>
                                                                    </div><!--end col-->

                                                                </div>
                                                            </div>
                                                            <!-- II. GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA -->
                                                            <div class="tab-pane fade" id="generales_beneficiarios_juridica" role="tabpanel" aria-labelledby="generales_beneficiarios_juridica-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row" style="width:100%;">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">GENERALES DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">COMPLETE CON LOS DATOS DE LAS PERSONAS JURÍDICAS QUE OSTENTAN UNA PARTICIPACIÓN DEL 25% O MÁS EN EL CLIENTE O PROVEEDOR.</div>
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        
                                                                                        <a href="#" data-bs-toggle="modal" data-bs-target=".generales_beneficiarios_juridicos" class="btn btn-primary">Agregar</a>

                                                                                        <table class="table">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Nombre de accionistas</th>
                                                                                                    <th>Fecha de construcción</th>
                                                                                                    <th>Pais de contrucción</th>
                                                                                                    <th>Telefono</th>
                                                                                                    <th>RUC</th>
                                                                                                    <th>Acciones</th>
                                                                                                </tr>
                                                                                            </thead> 
                                                                                            <tbody id="generales_beneficiarios_persona_juridica">
                                                                                            <?php 
                                                                                                foreach ($obtener_registros_temp_bf as $key => $value) { ?>
                                                                                                    <tr>
                                                                                                        <td><input value="<?php echo $value['gbfpj_temp_nombre_completo_accionista']; ?>" name="gbfpj_nombre_completo_accionista[]" class="form-control"> </td>
                                                                                                        <td><input value="<?php echo $value['gbfpj_temp_fecha_constitucion']; ?>" name="gbfpj_fecha_constitucion[]" class="form-control"></td>
                                                                                                        <td><input value="<?php echo $value['gbfpj_temp_pais_constitucion']; ?>" name="gbfpj_pais_constitucion[]" class="form-control"></td>
                                                                                                        <td><input value="<?php echo $value['gbfpj_temp_telefono']; ?>" name="gbfpj_telefono[]" class="form-control"></td>
                                                                                                        <td><input value="<?php echo $value['gbfpj_temp_ruc']; ?>" name="gbfpj_ruc[]" class="form-control"></td>
                                                                                                        <td><a href="#" onclick="eliminar_pj_beneficiario_generales_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                                                        <input type="hidden" name="gbfpj_porcentaje_participacion[]" value="<?php echo $value['gbfpj_temp_porcentaje_participacion']; ?>">
                                                                                                        <input type="hidden" name="gbfpj_sector_economico[]" value="<?php echo $value['gbfpj_temp_sector_economico']; ?>">
                                                                                                        <input type="hidden" name="gbfpj_direccion[]" value="<?php echo $value['gbfpj_temp_direccion']; ?>">
                                                                                                        <input type="hidden" name="gbfpj_tipo_pj[]" value="<?php echo $value['gbfpj_temp_tipo_pj']; ?>">
                                                                                                    </tr>
                                                                                                <?php } ?>
                                                                                            </tbody>
                                                                                        </table> 
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end col-->
                                                                        </div>
                                                                    </div><!--end col-->

                                                                </div>
                                                            </div>
                                                            <!-- III. PROPIETARIOS DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA -->
                                                            <div class="tab-pane fade" id="propietarios_juridica" role="tabpanel" aria-labelledby="propietarios_juridica-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row" style="width:100%;">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">PROPIETARIOS DE LOS BENEFICIARIOS FINALES- PERSONA JURÍDICA.</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">INDIQUE LOS ACCIONISTAS PERSONA NATURAL DE LAS ENTIDADES JURÍDICAS LISTADAS EN LA SECCIÓN II.
                                                                                    <div class="live-preview">
                                                                                        <a href="#" data-bs-toggle="modal" data-bs-target=".propietarios_beneficiarios_juridicos" class="btn btn-primary">Agregar</a>
                                                                                        <table class="table">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Nombre Completo</th>
                                                                                                    <th>Porcentaje</th>
                                                                                                    <th>Nacionalidad</th>
                                                                                                    <th>Profesión</th>
                                                                                                    <th>Correo</th>
                                                                                                    <th>Acciones</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody id="propietarios_beneficiarios_persona_juridica">
                                                                                            <?php foreach ($obtener_registros_temp_propietario as $key => $value) { ?>
                                                                                                <tr>
                                                                                                    <td><input value="<?php echo $value['pjpbj_temp_nombre_completo']; ?>" name="pjpbj_nombre_completo[]" class="form-control"> </td>
                                                                                                    <td><input value="<?php echo $value['pjpbj_temp_nacionalidad']; ?>" name="pjpbj_nacionalidad[]" class="form-control"></td>
                                                                                                    <td><input value="<?php echo $value['pjpbj_temp_profesion_oficio']; ?>" name="pjpbj_profesion_oficio[]" class="form-control"></td>
                                                                                                    <td><input value="<?php echo $value['pjpbj_temp_correo']; ?>" name="pjpbj_correo[]" class="form-control"></td>
                                                                                                    <td><input value="<?php echo $value['pjpbj_temp_porcentaje_participacion']; ?>" name="pjpbj_porcentaje_participacion[]" class="form-control"></td>
                                                                                                    <td><a href="#" onclick="eliminar_pj_propietario_bf_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                                                                                                    <input type="hidden" name="pjpbj_genero[]" value="<?php echo $value['pjpbj_temp_genero']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_cedula_pasaporte[]" value="<?php echo $value['pjpbj_temp_cedula_pasaporte']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_pais_nacimineto[]" value="<?php echo $value['pjpbj_temp_pais_nacimiento']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_fecha_nacimiento[]" value="<?php echo $value['pjpbj_temp_fecha_nacimiento']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_pais_residencia[]" value="<?php echo $value['pjpbj_temp_pais_residencia']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_pais_residencia_fiscal[]" value="<?php echo $value['pjpbj_temp_pais_residencia_fiscal']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_lugar_trabajo[]" value="<?php echo $value['pjpbj_temp_lugar_trabajo']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_telefono[]" value="<?php echo $value['pjpbj_temp_telefono']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_domicilio_laboral[]" value="<?php echo $value['pjpbj_temp_domicilio_laboral']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_domicilio_personal[]" value="<?php echo $value['pjpbj_temp_domicilio_personal']; ?>">
                                                                                                    <input type="hidden" name="pjpbj_entidad_participa[]" value="<?php echo $value['pjpbj_temp_entidad_participa']; ?>">
                                                                                                </tr>

                                                                                                <?php } ?>
                                                                                            </tbody>
                                                                                        </table> 
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                             <!--DECLARACIÓN JURADA -->
                                                             
                                                            <div class="tab-pane fade" id="declaracion_jurada" role="tabpanel" aria-labelledby="declaracion_jurada-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">DECLARACIÓN JURADA.</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <p>
                                                                                    POR ESTE MEDIO DECLARO QUE TODA LA INFORMACIÓN ANTES MENCIONADA ES VERDADERA A LOS DÍAS ____ DEL   _____ DE 20__; Y 
                                                                                    NOS OBLIGAMOS A NOTIFICAR INMEDIATAMENTE CUALQUIER CAMBIO QUE SE DÉ. ACEPTAMOS QUE CUALQUIER CAMBIO EN LOS BENEFICIARIOS 
                                                                                    FINALES DE ESTA ENTIDAD, SERÁ DEBIDAMENTE NOTIFICADO A PANAMÁ CAR RENTAL, S.A. EN UN PERIODO NO MAYOR A TREINTA (30) DÍAS 
                                                                                    CALENDARIOS DESPUÉS DE REALIZADO DICHO CAMBIO.
                                                                                    </p>
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                            
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Nombre completo</label>
                                                                                                    <input class="form-control" id="basiInput" name="p_jdj_nombre_completo_2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Firma</label>
                                                                                                    <input type="file" class="form-control" id="basiInput" name="p_jdj_firma_2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                            <div class="col-xxl-6 col-md-6">
                                                                                                <div>
                                                                                                    <label for="basiInput" class="form-label">Fecha</label>
                                                                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                                                                    data-date-format="d M, Y" name="p_jdj_fecha_2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end col-->
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div> 
                                                            <!-- aviso legal -->
                                                            <div class="tab-pane fade" id="aviso_legal" role="tabpanel" aria-labelledby="aviso_legal-tab">
                                                                <div class="d-flex mb-2">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="card">
                                                                                <div class="card-header align-items-center d-flex">
                                                                                    <h4 class="card-title mb-0 flex-grow-1">AVISO LEGAL</h4>
                                                                                </div><!-- end card header -->
                                                                                <div class="card-body">
                                                                                    <div class="live-preview">
                                                                                        <div class="row gy-4">
                                                                                        <p>PANAMA CAR RENTAL, S.A. ES SUJETO OBLIGADO NO FINANCIERO DE ACUERDO CON LA LEY 124 DE 7 DE ENERO DE 2020 "QUE CREA LA 
                                                                                        SUPERINTENDENCIA DE SUJETOS NO FINANCIEROS Y DICTA OTRAS DISPOSICIONES", LA LEY 23 DEL 27 DE ABRIL DE 2015 "QUE ADOPTA 
                                                                                        MEDIDAS PARA PREVENIR EL BLANQUEO DE CAPITALES, EL FINANCIAMIENTO DEL TERRORISMO Y DEL FINANCIAMIENTO DE LA PROLIFERACIÓN 
                                                                                        DE ARMAS DE DESTRUCCIÓN MASIVA Y OTRAS DISPOSICIONES", SUS MODIFICACIONES Y DEMÁS REGLAMENTACIONES</p>
                                                                                        <p>
                                                                                        AUTOMARKET SEMINUEVOS SE REFIERE A LA MARCA BAJO LA CUAL PANAMA CAR RENTAL, S.A. OFRECE SUS PRODUCTOS Y SERVICIOS. EL NOMBRE 
                                                                                        “AUTOMARKET SEMINUEVOS” Y SU LOGOTIPO ES UNA MARCA REGISTRADA DE PROPIEDAD DE SEMINUEVOS, S.A. LA SOCIEDAD SEMINUEVOS, S.A. NO 
                                                                                        TIENE RELACIÓN COMERCIAL Y/O CONTRACTUAL NI PRESTA SERVICIOS A LOS CLIENTES DE PANAMA CAR RENTAL, S.A. 
                                                                                        </p>
                                                                                        </div>
                                                                                        <!--end row-->
                                                                                        <input type="submit" class="btn btn-primary" value="Guardar" name="registro_cc_pj">
                                                                                        <button type="button" class="btn btn-primary btn-sm" id="sa-success" style="display:none;"></button>
                                                                                    </div>
                                                                                    <div class="d-none code-view">
                                                                                        <pre class="language-markup" style="height: 450px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div><!--  end col -->
                                                </div><!--end row-->
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div><!--end col-->
                                </form>
                            
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!--end col-->
        </div>
    </div><!-- end page title -->
</div>
<!-- End Page-content -->
</div><!-- cierra la franja de abajo  -->
<?php include 'layouts/footer.php'; ?>
<?php include 'pie.php'; ?>