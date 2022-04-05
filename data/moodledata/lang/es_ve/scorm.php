<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'scorm', language 'es_ve', version '3.10'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Activación';
$string['activityloading'] = 'Usted será automáticamente encaminado a la actividad en';
$string['activityoverview'] = 'Hay paquetes SCORM que requieren atención';
$string['activitypleasewait'] = 'Cargando actividad, espere por favor...';
$string['adminsettings'] = 'Configuración de administración';
$string['advanced'] = 'Parámetros';
$string['aicchacpkeepsessiondata'] = 'Datos de sesión AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Periodo de tiempo en días en el que se mantendrán los datos de la sesión externa AICC HACP (un valor alto llenará la tabla con datos antiguos, pero puede ser útil a la hora de depurar)';
$string['aicchacptimeout_desc'] = 'Periodo de tiempo en minutos en el que una sesión externa AICC HACP se mantendrá abierta';
$string['aiccuserid_desc'] = 'El estándar AICC para los nombres de usuario es muy restrictivo en comparación con Moodle, y sólo permite caracteres alfanuméricos, guiones y subrayado. No se permiten puntos, espacios y el símbolo @. Si está activado, los números ID de usuario se pasan al paquete AICC en lugar de los nombres de usuario.';
$string['aliasonly'] = 'Cuando se selecciona un archivo imsmanifest.xml de un repositorio debemos utilizar un alias / atajo para este archivo.';
$string['allowtypeaicchacp'] = 'Habilitar AICC HACP externo';
$string['allowtypeaicchacp_desc'] = 'Si se habilita permite comunicaciones externas AICC HACP sin necesidad de identidicación de usuario para peticiones de un paquete AICC externo';
$string['allowtypeexternal'] = 'Habilitar tipo de paquete externo';
$string['allowtypeexternalaicc_desc'] = 'Si se habilita permite una utl directa a un paquete simple AICC';
$string['allowtypelocalsync'] = 'Habilitar tipo de paquete descargado';
$string['areacontent'] = 'Archivos de contenido';
$string['areapackage'] = 'Archivo de paquete';
$string['asset'] = 'Recurso';
$string['assetlaunched'] = 'Recurso - Visto';
$string['attempt'] = 'Intento';
$string['attempt1'] = '1 intento';
$string['attempts'] = 'Intentos';
$string['attemptsmanagement'] = 'Gestión de intentos';
$string['attemptstatusall'] = 'Área personal y página de inicio';
$string['attemptstatusentry'] = 'Solo página de inicio';
$string['attemptstatusmy'] = 'Solo Área personal';
$string['attemptsx'] = '{$a} intentos';
$string['attr_error'] = 'Valor incorrecto para el atributo ({$a->attr}) en la marca {$a->tag}.';
$string['autocommit'] = 'Auto-guardado';
$string['autocommit_help'] = 'Si está habilitado, los datos SCORM se guarda automáticamente en la base de datos. Útil para los objetos SCORM que no guardan sus datos con regularidad.';
$string['autocommitdesc'] = 'Guardar automáticamente los datos SCORM si el paquete SCORM no ha sido guardado.';
$string['autocontinue'] = 'Continuación automática';
$string['autocontinuedesc'] = 'Si se habilita, los objetos de aprendizaje subsecuentes son iniciados automáticamente sino el botón Continuar debe ser usado.';
$string['averageattempt'] = 'Intentos promedio';
$string['badarchive'] = 'Debe proporcionar un archivo zip válido';
$string['badimsmanifestlocation'] = 'Se encontró un archivo imsmanifest.xml pero no estaba en la raíz de su archivo zip. Por favor, vuelva a empaquetar su SCORM';
$string['badmanifest'] = 'Algunos Errores de manifiesto: ver registro de errores';
$string['browse'] = 'Vista previa';
$string['browsed'] = 'Navegado';
$string['browsemode'] = 'Modo de presentación preliminar';
$string['browserepository'] = 'Navegar por el repositorio';
$string['calculatedweight'] = 'Peso calculado';
$string['cannotaccess'] = 'No se puede llamar a este script de esa manera';
$string['cannotfindsco'] = 'No se ha encontrado SCO';
$string['chooseapacket'] = 'Elegir o actualizar un paquete SCORM';
$string['collapsetocwinsize'] = 'Contraer TOC cuando el tamaño de la ventana inferior';
$string['collapsetocwinsizedesc'] = 'Este ajuste permite especificar el tamaño de la ventana inferior con el que el TOC se contrae automáticamente.';
$string['compatibilitysettings'] = 'Configuración de compatibilidad';
$string['completed'] = 'Finalizado';
$string['completionscorerequired'] = 'Requiere puntuación mínima';
$string['completionscorerequired_help'] = 'Al habilitar este parámetro se requerirá que el usuario tenga al menos la puntuación mínima registrada para que se marque la actividad SCORM como finalizada, así como cualquier otro requerimiento de Finalización de Actividad.';
$string['completionstatus_completed'] = 'Finalizado';
$string['completionstatus_passed'] = 'Pasado';
$string['completionstatusrequired'] = 'Se requiere estado';
$string['completionstatusrequired_help'] = 'Al comprobar uno o más estados se requerirá que el alumno cumpla al menos con uno de esos estados para que se marque como finalizada esta  actividad SCORM, así como cualquier otro requerimiento de Finalización de Actividad';
$string['confirmloosetracks'] = 'ATENCIÓN: El paquete parece haber sido cambiado o modificado. Si la estructura del paquete se ha cambiado, las pistas de algunos usuarios pueden haberse perdido durante el proceso de actualización.';
$string['contents'] = 'Contenido';
$string['coursepacket'] = 'Paquete de curso';
$string['coursestruct'] = 'Estructura de curso';
$string['currentwindow'] = 'Ventana actual';
$string['datadir'] = 'Error del sistema de archivos: No se puede crear el directorio de datos del curso';
$string['defaultdisplaysettings'] = 'Configuración de pantalla predeterminada';
$string['defaultgradesettings'] = 'Configuración de calificación predeterminada';
$string['defaultothersettings'] = 'Otras configuraciones predeterminadas';
$string['deleteallattempts'] = 'Eliminar todos los intentos SCORM';
$string['deleteattemptcheck'] = '¿Está totalmente seguro que quiere eliminar completamente estos intentos?';
$string['deleteselected'] = 'Eliminar los intentos seleccionados';
$string['deleteuserattemptcheck'] = '¿Está seguro que quiere eliminar completamente todos sus intentos?';
$string['details'] = 'Detalles del rastreo SCO';
$string['directories'] = 'Mostrar enlaces de directorio';
$string['disabled'] = 'Dehabilitado';
$string['display'] = 'Mostrar paquete';
$string['displayactivityname'] = 'Mostrar nombre de la actividad';
$string['displayactivityname_help'] = 'Mostrar o no mostrar el nombre de la actividad sobre el reproductor de SCORM.';
$string['displayattemptstatus'] = 'Mostrar estado de intentos';
$string['displayattemptstatus_help'] = 'Esta preferencia permite mostrar un resumen de los intentos de los usuarios en el bloque Vista general del curso en Mi Tablero y/o en la página de entrada del SCORM.';
$string['displayattemptstatusdesc'] = 'Mostrar un resumen de los intentos del usuario  en el bloque Vista general del curso en Mi Tablero y/o la página de inicio del SCORM';
$string['networkdropped'] = 'Este reproductor de SCORM ha determinado que tu conexión a internet es inestable o ha sido interrumpida. Si continuas en esta actividad SCORM, tu progreso puede no ser guardado.<br>
Debería cerrar la actividad ahora y volver cuando tenga una conexión a internet estable.';
$string['newattempt'] = 'Comenzar un nuevo intento';
$string['next'] = 'Continuar';
$string['no_attributes'] = 'La marca {$a->tag} debe tener atributos';
$string['no_children'] = 'La marca {$a->tag} debe tener hijos';
$string['noactivity'] = 'Nada que informar';
$string['noattemptsallowed'] = 'Número de intentos permitidos';
$string['noattemptsmade'] = 'Número de intentos realizados';
$string['nolimit'] = 'Intentos ilimitados';
$string['nomanifest'] = 'Archivo incorrecto - falta imsmanifest.xml o estructura AICC';
$string['noprerequisites'] = 'Lo sentimos, pero no posee los pre-requisitos requeridos para acceder a este objeto de aprendizaje';
$string['noreports'] = 'No hay informes que mostrar';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Su navegador no admite javascript, o tiene la opción javascript deshabilitada. Este paquete SCORM no puede reproducirse o guardar los datos correctamente.';
$string['not_corr_type'] = 'No concuerda el tipo para la marca {$a->tag}';
$string['notattempted'] = 'No se ha intentado';
$string['notopenyet'] = 'Esta actividad no estará disponible hasta {$a}';
$string['objectives'] = 'Objetivos';
$string['optallstudents'] = 'todos los usuarios';
$string['optattemptsonly'] = 'Sólo usuarios con intentos';
$string['options'] = 'Opciones (no admitidas por algunos navegadores)';
$string['optionsadv'] = 'Opciones (Avanzadas)';
$string['optionsadv_desc'] = 'Si se selecciona, el ancho y el alto serán listados como opciones avanzadas.';
$string['optnoattemptsonly'] = 'Sólo usuarios sin intentos';
$string['organization'] = 'Organización';
$string['organizations'] = 'Organizaciones';
$string['othersettings'] = 'Ajustes adicionales';
$string['package'] = 'Paquete';
$string['packagedir'] = 'Error de sistema: No se puede crear el directorio de paquetes';
$string['packagefile'] = 'No se ha especificado paquete';
$string['packagehdr'] = 'Paquete';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Este parámetro habilita una URL para especificar el paquete SCORM en vez de seleccionar un archivo a través del selector de archivos.';
$string['page-mod-scorm-x'] = 'Cualquier página del módulo SCORM';
$string['pagesize'] = 'Tamaño de la página';
$string['passed'] = 'Pasado';
$string['php5'] = 'PHP 5 (librería nativa DOMXML)';
$string['pluginname'] = 'Paquete SCORM';
$string['popup'] = 'Abrir Objetos de Aprendizaje en una ventana nueva';
$string['popuplaunched'] = 'Este paquete SCORM ha sido abierto en una ventana emergente, si has terminado de usar este recurso, pulsa aquí para regresar a la página del curso';
$string['popupmenu'] = 'En un menú emergente';
$string['popupopen'] = 'Abrir paquete en una ventana nueva';
