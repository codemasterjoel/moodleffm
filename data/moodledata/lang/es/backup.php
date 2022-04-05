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
 * Strings for component 'backup', language 'es', version '3.10'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'El proceso de copia de seguridad ha sido completado';
$string['asyncbackupcompletebutton'] = 'Continuar';
$string['asyncbackupcompletedetail'] = 'El proceso de copia de seguridad ha sido completado exitosamente. <br/> Puede acceder a la copia de seguridad en la  <a href="{$a}">página para restaurar.</a>';
$string['asyncbackuperror'] = 'El proceso de copia de seguridad ha fallado.';
$string['asyncbackuperrordetail'] = 'El proceso de copia de seguridad ha fallado. Por favor contacte con el administrador de la plataforma.';
$string['asyncbackuppending'] = 'El proceso de copia de seguridad está pendiente';
$string['asyncbackupprocessing'] = 'El proceso de copia de seguridad está en progreso';
$string['asyncbadexecution'] = 'Ejecución de controlador de copia de seguridad errónea. Es {$a} y debería ser 2.';
$string['asynccheckprogress'] = 'Puede revisar el progreso en cualquier momento en la <a href="{$a}">página para restaurar.</a>.';
$string['asyncemailenable'] = 'Habilitar notificaciones de mensajes';
$string['asyncemailenabledetail'] = 'Cuando se habilita, los usuarios recibirán un mensaje cuando se complete una restauración o copia de seguridad asincrónicos.';
$string['asyncgeneralsettings'] = 'Copia de seguridad/restauración asincrónicos';
$string['asyncmessagebody'] = 'Mensaje';
$string['asyncmessagebodydefault'] = 'Hola {user_firstname} {user_lastname}, <br/> ¡Su {operation} (ID: {backupid}) ha sido completado exitosamente <br/><br/>Puede verla aquí {link}.';
$string['asyncmessagebodydetail'] = 'Mensaje a enviar cuando se complete una restauración o copia de seguridad asincrónicos.';
$string['asyncmessagesubject'] = 'Asunto';
$string['asyncmessagesubjectdefault'] = '{operation} de Moodle se completó exitosamente';
$string['asyncmessagesubjectdetail'] = 'Asunto del mensaje';
$string['asyncnowait'] = 'No necesita esperar aquí, el proceso continuará en segundo plano.';
$string['asyncprocesspending'] = 'Proceso pendiente';
$string['asyncrestorecomplete'] = 'El proceso de restauración ha sido completado';
$string['asyncrestorecompletebutton'] = 'Continuar';
$string['asyncrestorecompletedetail'] = 'El proceso de restauración ha sido completado exitosamente. Seleccionar continuar lo llevará al <a href="{$a}">curso restaurado.</a>';
$string['asyncrestoreerror'] = 'El proceso de restauración ha fallado';
$string['asyncrestoreerrordetail'] = 'El proceso de restauración ha fallado. Por favor contacte con el administrador de la plataforma.';
$string['asyncrestoreinprogress'] = 'Restauraciones en progreso';
$string['asyncrestoreinprogress_help'] = 'Las restauraciones de curso asincrónicas que están en progreso son mostradas aquí.';
$string['asyncrestorepending'] = 'El proceso de restauración está pendiente';
$string['asyncrestoreprocessing'] = 'La restauración está en progreso';
$string['asyncreturn'] = 'Regresar al curso';
$string['autoactivedescription'] = 'Escoja si desea o no hacer copias de seguridad automáticas. Si selecciona el modo manual las copias de seguridad automáticas sólo serán posibles mediante el "script" CLI. También se pueden hacer manualmente mediante la línea de comandos o a través del cron.';
$string['autoactivedisabled'] = 'Desactivado';
$string['autoactiveenabled'] = 'Activado';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Programación';
$string['automatedbackupschedulehelp'] = 'Decida en qué días de la semana se realizarán las copias de seguridad automatizadas';
$string['automatedbackupsinactive'] = 'Las copias de seguridad programadas han sido habilitadas por el administrador del sitio';
$string['automatedbackupstatus'] = 'Estado de la Copia de Seguridad programada';
$string['automateddeletedays'] = 'Borrar las copias de seguridad más antiguas que';
$string['automatedmaxkept'] = 'Número máximo de copias de seguridad guardadas';
$string['automatedmaxkepthelp'] = 'Esto especifica el número máximo de copias de seguridad automáticas recientes que guardar para cada curso. Las copias anteriores serán eliminadas automáticamente.';
$string['automatedminkept'] = 'Número mínimo de copias de seguridad guardadas';
$string['automatedminkepthelp'] = 'Si las copias de seguridad anteriores a un número de días especificado se eliminan, puede suceder que un curso inactivo acabe sin copias de seguridad. Para prevenir esto, se debería especificar un número mínimo de copias de seguridad guardadas.';
$string['automatedsettings'] = 'Configuración de la copia de seguridad automática.';
$string['automatedsetup'] = 'Copia de seguridad programada';
$string['automatedstorage'] = 'Almacén de copias de seguridad automáticas';
$string['automatedstoragehelp'] = 'Elija la ubicación donde desea almacenar las copias de seguridad automáticas';
$string['backupactivity'] = 'Copia de seguridad actividad: {$a}';
$string['backupcourse'] = 'Copia de seguridad curso: {$a}';
$string['backupcoursedetails'] = 'Detalles del curso';
$string['backupcoursesection'] = 'Sección: {$a}';
$string['backupcoursesections'] = 'Secciones del curso';
$string['backupdate'] = 'Fecha realización';
$string['backupdetails'] = 'Detalles de la copia de seguridad';
$string['backupdetailsnonstandardinfo'] = 'El archivo seleccionado no es un archivo de copia de seguridad estándar de Moodle. El proceso de restauración intentará convertir el archivo de copia de seguridad en el formato estándar y luego restaurarlo.';
$string['backupformat'] = 'Formato';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.0';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Formato desconocido';
$string['backuplog'] = 'Información técnica y advertencias';
$string['backupmode'] = 'Modo';
$string['backupmode10'] = 'General';
$string['backupmode20'] = 'Importar';
$string['backupmode30'] = 'Central de cursos';
$string['backupmode40'] = 'Mismo sitio';
$string['backupmode50'] = 'Automatizado';
$string['backupmode60'] = 'Convertido';
$string['backupmode70'] = 'Asincrónico';
$string['backupsection'] = 'Copia de seguridad sección de curso: Copia de seguridad curso: {$a}';
$string['backupsettings'] = 'Copia de seguridad de parámetros de configuración';
$string['backupsitedetails'] = 'Detalles del sitio';
$string['backupstage16action'] = 'Continuar';
$string['backupstage1action'] = 'Siguiente';
$string['backupstage2action'] = 'Siguiente';
$string['backupstage4action'] = 'Ejecutar copia de seguridad';
$string['backupstage8action'] = 'Continuar';
$string['backuptype'] = 'Tipo';
$string['backuptypeactivity'] = 'Actividad';
$string['backuptypecourse'] = 'Curso';
$string['backuptypesection'] = 'Sección';
$string['backupversion'] = 'Copia de seguridad versión';
$string['cannotfindassignablerole'] = 'El rol {$a} en el archivo de copia de seguridad no se puede mapear a ninguno de los roles que usted puede asignar.';
$string['choosefilefromactivitybackup'] = 'Zona de actividad de la copia de seguridad';
$string['choosefilefromactivitybackup_help'] = 'Las actividades de Respaldo efectuadas utilizando los valores preestablecidos se guardan aquí.';
$string['choosefilefromautomatedbackup'] = 'Copias de seguridad automáticas';
$string['choosefilefromautomatedbackup_help'] = 'Contiene las copias de seguridad automáticas';
$string['choosefilefromcoursebackup'] = 'Zona de copia de seguridad de curso';
$string['choosefilefromcoursebackup_help'] = 'Las copias de seguridad del curso realizadas con la configuración predeterminada se almacenan aquí.';
$string['choosefilefromuserbackup'] = 'Zona de copia de seguridad privada de usuario';
$string['choosefilefromuserbackup_help'] = 'Los archivos de respaldo con información de usuario anónima se almacenan aquí.';
$string['config_keep_groups_and_groupings'] = 'Por defecto conservar grupos y agrupamientos actuales.';
$string['config_keep_roles_and_enrolments'] = 'Por defecto conservar roles e inscripciones actuales.';
$string['config_overwrite_conf'] = 'Permite al usuario anular la configuración actual del curso';
$string['config_overwrite_course_fullname'] = 'Por defecto sobrescribir el nombre completo del curso con el nombre completo del archivo de respaldo. Esto necesita que esté activado el "Sobrescribir configuración del curso" y que el usuario actual tenga la capacidad para cambiarle el nombre completo al curso (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Por defecto sobrescribir el nombre corto del curso con el nombre completo del archivo de respaldo. Esto necesita que esté activado el "Sobrescribir configuración del curso" y que el usuario actual tenga la capacidad para cambiarle el nombre corto al curso (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Por defecto sobrescribir la fecha de inicio del curso con la fecha del archivo de respaldo. Esto necesita que esté activado el "Sobrescribir configuración del curso" y que el usuario actual tenga la capacidad para cambiar fechas del curso al restaurar (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Ajusta los valores por defecto para incluir actividades en una copia de seguridad.';
$string['configgeneralanonymize'] = 'Si se activa, toda la información relativa a los usuarios será anónima por defecto.';
$string['configgeneralbadges'] = 'Establece el valor por defecto para incluir las insignias en la copia de seguridad.';
$string['configgeneralblocks'] = 'Ajusta los valores por defecto para incluir bloques en la copia de seguridad.';
$string['configgeneralcalendarevents'] = 'Establece el valor predeterminado para la inclusión de los eventos del calendario en una copia de seguridad.';
$string['configgeneralcomments'] = 'Ajusta los valores por defecto para incluir comentarios en la copia de seguridad.';
$string['configgeneralcompetencies'] = 'Establece el valor predeterminado para la inclusión de los eventos del calendario en una copia de seguridad.';
$string['configgeneralcontentbankcontent'] = 'Configurar las opciones predeterminadas para incluir contenido del banco de contenido en un respaldo.';
$string['configgeneralfiles'] = 'Establece el valor predeterminado para incluir archivos en una copia de seguridad. Tenga en cuenta: deshabilitar esta configuración dará como resultado una copia de seguridad que solo incluye referencias a archivos. Esto no es un problema si la copia de seguridad se restaura en el mismo sitio y los archivos no se han eliminado de acuerdo con la configuración \'Limpiar archivos del grupo de la papelera\' (filescleanupperiod).';
$string['configgeneralfilters'] = 'Ajusta los valores por defecto para incluir filtros en la copia de seguridad.';
$string['configgeneralgroups'] = 'Establece el valor por defecto en la inclusión de grupos y agrupamientos en una copia de seguridad.';
$string['configgeneralhistories'] = 'Ajusta los valores por defecto para incluir el historial del usuario dentro de una copia de seguridad.';
$string['configgenerallogs'] = 'Si se activa, se incluirán por defecto registros en las copias de seguridad.';
$string['configgeneralquestionbank'] = 'Si está habilitado el banco de preguntas será incluido en las copias de seguridad de forma predeterminada. NOTA: Al desactivar esta opción deshabilitará la copia de seguridad de las actividades que utilizan el banco de preguntas, tales como el cuestionario.';
$string['configgeneralroleassignments'] = 'Si se habilita, los roles asignados por defecto serán también copiados.';
$string['configgeneralusers'] = 'Ajusta los valores por defecto para incluir a los usuarios en las copias de seguridad.';
$string['configgeneraluserscompletion'] = 'Si se activa, la información del grado de avance de los usuarios se incluirá por defecto en las copias de seguridad.';
$string['configlegacyfiles'] = 'Establece el valor predeterminado para incluir archivos de cursos heredados en una copia de seguridad. Los archivos de cursos heredados son de versiones de Moodle anteriores a la 2.0.';
$string['configloglifetime'] = 'Especifica el periodo de tiempo durante el que desea mantener la información de los registros de copia de seguridad. Los registros más antiguos que el establecido se borrarán automáticamente. Se recomienda mantener este valor lo más bajo posible, ya que el volumen de la información sobre las  copias de seguridad puede llegar a se muy grande.';
$string['configrestoreactivities'] = 'Configurar el ajuste por defecto para restaurar actividades.';
$string['configrestorebadges'] = 'Configurar el ajuste por defecto para restaurar insignias.';
$string['configrestoreblocks'] = 'Configurar el ajuste por defecto para restaurar bloques.';
$string['configrestorecalendarevents'] = 'Configurar el ajuste por defecto para restaurar eventos del calendario.';
$string['configrestorecomments'] = 'Configurar el ajuste por defecto para restaurar comentarios.';
$string['configrestorecompetencies'] = 'Configurar el ajuste por defecto para restaurar competencias.';
$string['configrestorecontentbankcontent'] = 'Configurar las opciones predeterminadas para restaurar contenido del banco de contenido.';
$string['configrestoreenrolments'] = 'Configurar el ajuste por defecto para restaurar métodos de matriculación.';
$string['configrestorefilters'] = 'Configurar el ajuste por defecto para restaurar filtros.';
$string['configrestoregroups'] = 'Configura los valores por defecto  para restaurar grupos y agrupamientos si fueron incluidos en la copia de seguridad.';
$string['configrestorehistories'] = 'Configura los valores por defecto  para restaurar historia del usuario si fueron incluidos en la copia de seguridad.';
$string['configrestorelogs'] = 'Si se habilita, los \'logs\' serán restaurados si fueron incluidos en la copia de seguridad.';
$string['configrestoreroleassignments'] = 'Si se habilita, las asignaciones de roles por defecto serán restauradas si fueron incluidas en la copia de seguridad.';
$string['configrestoreusers'] = 'Configurar los ajustes por defecto sobre restaurar usuarios si fueron incluidos en la copia de seguridad.';
$string['configrestoreuserscompletion'] = 'Si se habilita, la información de finalización del usuario  será restaurada si fue incluida en la copia de seguridad.';
$string['confirmcancel'] = 'Cancelar copia de seguridad';
$string['confirmcancelimport'] = 'Cancelar importación';
$string['confirmcancelno'] = 'No cancelar';
$string['confirmcancelquestion'] = '¿Está seguro de que desea cancelar?
Cualquier información que haya introducido se perderá.';
$string['confirmcancelrestore'] = 'Cancelar restauración';
$string['confirmcancelyes'] = 'Cancelar copia de seguridad';
$string['confirmnewcoursecontinue'] = 'Alerta de curso nuevo';
$string['confirmnewcoursecontinuequestion'] = 'Se creará un curso temporal (oculto) en el proceso de restauración de cursos. Para cancelar la restauración pulse en Cancelar. No cierre el navegador mientras se restaura.';
$string['copiesinprogress'] = 'Este curso tiene copias en progreso. <a href="{$a}"> Ver copias en curso.</a>';
$string['copycoursedesc'] = 'Este curso se duplicará y se incluirá en la categoría de curso seleccionada.';
$string['copycourseheading'] = 'Copiar un curso';
$string['copycoursetitle'] = 'Copiar curso: {$a}';
$string['copydest'] = 'Destino';
$string['copyfieldnotfound'] = 'No se encontró un campo obligatorio';
$string['copyformfail'] = 'El envío de AJAX del formulario de copia del curso ha fallado.';
$string['copyingcourse'] = 'Copia de curso en proceso';
$string['copyingcourseshortname'] = 'copiando';
$string['copyop'] = 'Operación actual';
$string['copyprogressheading'] = 'Copias de curso en proceso';
$string['copyprogressheading_help'] = 'Esta tabla muestra el estado de todas las copias de curso inacabadas.';
$string['copyprogresstitle'] = 'Proceso de copia de curso';
$string['copyreturn'] = 'Copiar y volver';
$string['copysource'] = 'Origen';
$string['copyview'] = 'Copiar y ver';
$string['coursecategory'] = 'Categoría en la que se restaurará el curso';
$string['courseid'] = 'ID original';
$string['coursesettings'] = 'Ajustes del curso';
$string['coursetitle'] = 'Título';
$string['currentstage1'] = 'Ajustes iniciales';
$string['currentstage16'] = 'Completar';
$string['currentstage2'] = 'Ajustes del esquema';
$string['currentstage4'] = 'Confirmación y revisión';
$string['currentstage8'] = 'Ejecutar copia de seguridad';
$string['enableasyncbackup'] = 'Habilitar copias de seguridad asíncronas';
$string['enableasyncbackup_help'] = 'Si se habilita, todas las operaciones de copia de seguridad y restauración se harán asincrónicamente. Esto no afecta a las importaciones y exportaciones. Las copias de seguridad y restauraciones asincrónicos les permiten a los usuarios el hacer otras operaciones mientras está en progreso una copia de seguridad o una restauración.';
$string['enterasearch'] = 'Introduzca un criterio de búsqueda';
$string['error_block_for_module_not_found'] = 'Encontrada instancia de bloque huérfano (id: {$a->bid}) para el módulo del curso (id: {$a->mid}) Este bloque no se copiará';
$string['error_course_module_not_found'] = 'Encontrado módulo de curso huérfano (id: {$a}). Este modulo no se copiará';
$string['errorcopyingbackupfile'] = 'Fallo al copiar el fichero de copia de seguridad al directorio temporal antes de restaurar.';
$string['errorfilenamemustbezip'] = 'El nombre que se introduzca debe ser un archivo ZIP y con la extensión MBZ';
$string['errorfilenamerequired'] = 'Debe introducir un nombre de archivo válido para esta copia de seguridad';
$string['errorfilenametoolong'] = 'El nombre de archivo debe tener menos de 255 caracteres de longitud.';
$string['errorinvalidformat'] = 'Formato de backup desconocido';
$string['errorinvalidformatinfo'] = 'El archivo seleccionado no es un archivo de copia de seguridad de Moodle válido y no puede ser restaurado.';
$string['errorminbackup20version'] = 'Este archivo de copia de seguridad ha sido creado con una versión de desarrollo de copia de seguridad de Moodle ({$a->backup}) y se requiere al menos la versión {$a->min}. Por lo tanto, no puede ser restaurado.';
$string['errorrestorefrontpagebackup'] = 'Sólo puede restaurar respaldos de la página principal en la página principal.';
$string['executionsuccess'] = 'El archivo de copia de seguridad se creó con éxito';
$string['extractingbackupfileto'] = 'Extrayendo archivo de copia de seguridad a: {$a}';
$string['failed'] = 'Falló la copia de seguridad';
$string['filealiasesrestorefailures'] = 'Fallos en la restauración de alias';
$string['filealiasesrestorefailures_help'] = 'Los alias son enlaces simbólicos a otros archivos, incluyendo aquellos almacenados en repositorios externos. En algunos casos, Moodle no puede restaurarlos - por ejemplo cuando se restaura una copia de seguridad en otro sitio o cuando el archivo al que se hace referencia no existe.';
$string['filealiasesrestorefailuresinfo'] = 'Algunos alias incluidos en el archivo de copia de seguridad no pudieron restaurarse. La lista siguiente contiene su localización esperada y el archivo origen al que se estaban refiriendo en el sitio original.';
$string['filename'] = 'Nombre de archivo';
$string['filereferencesincluded'] = 'Las referencias de archivo a contenidos externos se han incluido en el paquete de copia de seguridad, no funcionarán en otros sitios.';
$string['filereferencesnotsamesite'] = 'El archivo de copia de seguridad es de un sitio diferente, por lo que las referencias de archivo no se pueden restaurar.';
$string['filereferencessamesite'] = 'La copia de seguridad es de este sitio y, por lo tanto, las referencias de archivo se pueden restaurar.';
$string['generalactivities'] = 'Incluir actividades y recursos';
$string['generalanonymize'] = 'Información anónima';
$string['generalbackdefaults'] = 'Configuración por defecto de la copia de seguridad';
$string['generalbadges'] = 'Incluir insignias';
$string['generalblocks'] = 'Incluir bloques';
$string['generalcalendarevents'] = 'Incluir eventos de calendario';
$string['generalcomments'] = 'Incluir comentarios';
$string['generalcompetencies'] = 'Incluir competencias';
$string['generalcontentbankcontent'] = 'Incluir contenido del banco de contenido';
$string['generalenrolments'] = 'Incluir métodos de matriculación';
$string['generalfiles'] = 'Incluir archivos';
$string['generalfilters'] = 'Incluir filtros';
$string['generalgradehistories'] = 'Incluir historiales';
$string['generalgroups'] = 'Incluir grupos y agrupamientos';
$string['generalhistories'] = 'Incluir historiales';
$string['generallegacyfiles'] = 'Incluir archivos heredados de curso';
$string['generallogs'] = 'Incluir archivos de \'log"';
$string['generalquestionbank'] = 'Incluir banco de preguntas';
$string['generalrestoredefaults'] = 'Valores por defecto generales de restauración';
$string['generalrestoresettings'] = 'Ajustes generales de restauración';
$string['generalroleassignments'] = 'Incluir asignaciones de rol';
$string['generalsettings'] = 'Parámetros generales de la copia de seguridad';
$string['generalusers'] = 'Incluir usuarios';
$string['generaluserscompletion'] = 'Incluir información del grado de avance del usuario';
$string['hidetypes'] = 'Ocultar tipo de opciones';
$string['importbackupstage16action'] = 'Continuar';
$string['importbackupstage1action'] = 'Siguiente';
$string['importbackupstage2action'] = 'Siguiente';
$string['importbackupstage4action'] = 'Realizar la importación';
$string['importbackupstage8action'] = 'Continuar';
$string['importcurrentstage0'] = 'Selección de cursos';
$string['importcurrentstage1'] = 'Configuración inicial';
$string['importcurrentstage16'] = 'Completo';
$string['importcurrentstage2'] = 'Configuración del esquema';
$string['importcurrentstage4'] = 'Confirmación y revisión';
$string['importcurrentstage8'] = 'Realizar la importación';
$string['importfile'] = 'Importar un archivo de copia de seguridad';
$string['importgeneralduplicateadminallowed'] = 'Permitir la resolución de conflictos de usuario admin';
$string['importgeneralduplicateadminallowed_desc'] = 'Si la página cuenta con un nombre de usuario \'admin\', tratar de restaurar una copia de seguridad que contenga un usuario \'admin\' puede causar conflicto. Si esta opción está habilitada, el conflicto puede resolverse cambiando el nombre de usuario en la copia de seguridad a \'admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Número máximo de cursos listados para importación';
$string['importgeneralmaxresults_desc'] = 'Controla el número de cursos que son listados durante el primer paso del proceso de importación';
$string['importgeneralsettings'] = 'Valores generales predeterminados de importación';
$string['importrootsettings'] = 'Importar configuraciones';
$string['importsettings'] = 'Configuraciones generales de importación';
$string['importsuccess'] = 'Importación completada. Pulse para volver al curso.';
$string['includeactivities'] = 'Incluido:';
$string['includeditems'] = 'Elementos incluidos:';
$string['includefilereferences'] = 'Referencias de archivo a contenidos externos';
$string['includesection'] = 'Sección {$a}';
$string['includeuserinfo'] = 'Datos de usuario';
$string['inprogress'] = 'Copia de seguridad en progreso';
$string['jumptofinalstep'] = 'Saltar al último paso';
$string['keep'] = 'Conservar';
$string['keptroles'] = 'Incluir asignaciones de rol de usuario';
$string['keptroles_help'] = 'Los usuarios con los roles seleccionados serán matriculados en el nuevo curso. No se copiarán datos de usuario si no se habilita "Incluir datos de usuario".';
$string['locked'] = 'Bloqueado';
$string['lockedbyconfig'] = 'Este ajuste ha sido bloqueado por la configuración predeterminada de la copia de seguridad';
$string['lockedbyhierarchy'] = 'Bloqueado por las dependencias';
$string['lockedbypermission'] = 'Usted no tiene permisos suficientes para cambiar esta configuración';
$string['loglifetime'] = 'Mantener los registro durante';
$string['managefiles'] = 'Gestionar archivos de copia de seguridad';
$string['mergerestoredefaults'] = 'Restablecer a los valores predeterminados al restaurar en otro curso fusionando la copia de seguridad';
$string['missingfilesinpool'] = 'Algunos archivos no se pudieron guardar durante la copia de seguridad, por lo que no será posible restaurarlos.';
$string['module'] = 'Módulo';
$string['moodleversion'] = 'Versión de Moodle';
$string['morecoursesearchresults'] = 'Más de {$a} cursos encontrados, mostrando los primeros {$a} resultados';
$string['moreresults'] = 'Hay demasiados resultados, escriba una búsqueda más específica.';
$string['nomatchingcourses'] = 'No hay cursos para mostrar';
$string['norestoreoptions'] = 'No hay categorías o cursos que pueda restaurar';
$string['originalwwwroot'] = 'URL de la copia de seguridad';
$string['overwrite'] = 'Sobrescribir';
$string['pendingasyncdeletedetail'] = 'Este curso tiene una copia de seguridad asincrónica pendiente.<br/> Los cursos no pueden ser eliminados hasta que termine esta copia de seguridad.';
$string['pendingasyncdetail'] = 'Las copias de seguridad asincrónicas solamente le permiten a un usuario el tener un respaldo pendiente para un recurso a la vez. <br/> Las copias de seguridad múltiples asincrónicos del mismo recurso no pueden ser puestas en cola, ya que esto probablemente resultaría en múltiples copias de seguridad con el mismo contenido.';
$string['pendingasyncedit'] = 'Hay una copia de seguridad asincrónica pendiente para este curso. Por favor no edite este curso hasta después de que esté completada la copia de seguridad.';
$string['pendingasyncerror'] = 'Copia de seguridad pendiente para este recurso';
$string['preparingdata'] = 'Preparando datos';
$string['preparingui'] = 'Preparando para visualizar página';
$string['previousstage'] = 'Anterior';
$string['privacy:metadata:backup:detailsofarchive'] = 'Este archivo puede contener varios datos del usuario relacionados con un curso, tales como calificaciones, matriculaciones de usuario y datos de actividades.';
$string['privacy:metadata:backup:externalpurpose'] = 'El propósito de este archivo es almacenar información relacionada con un curso, la cual puede ser restaurada en el futuro.';
$string['privacy:metadata:backup_controllers'] = 'La lista de operaciones de copias de seguridad';
$string['privacy:metadata:backup_controllers:itemid'] = 'La ID del curso';
$string['privacy:metadata:backup_controllers:operation'] = 'La operación que fue efectuada; por ejemplo, restaurar.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'El momento cuando la acción fue creada';
$string['privacy:metadata:backup_controllers:timemodified'] = 'El momento cuando la acción fue modificada';
$string['privacy:metadata:backup_controllers:type'] = 'El tipo de elemento sobre del cual se está operando; por ejemplo, actividad.';
$string['qcategory2coursefallback'] = 'La categoría de preguntas "{$a->name}", originalmente el contexto de categoría sistema/curso, serán creadas en el contexto curso al ser restauradas.';
$string['qcategorycannotberestored'] = 'La categoría de preguntas "{$a-> name}" no puede ser creada por restauración';
$string['question2coursefallback'] = 'La categoría de preguntas "{$a->name}", originalmente en la categoría de contesto sistema/curso dentro del archivo de copia de seguridad, se creará en el contexto del curso al ser restaurada';
$string['questionegorycannotberestored'] = 'Las preguntas "{$a->name}" no pueden crearse por restauración';
$string['recyclebin_desc'] = 'Tenga en cuenta que estas configuraciones también se aplicarán para la papelera de reciclaje.';
$string['replacerestoredefaults'] = 'Restablecer a los valores predeterminados al restaurar en otro curso borrando el contenido actual';
$string['restoreactivity'] = 'Restaurar actividad';
$string['restorecourse'] = 'Restaurar curso';
$string['restorecoursesettings'] = 'Configuración del curso';
$string['restoredcourseid'] = 'ID del curso restaurado: {$a}';
$string['restoreexecutionsuccess'] = 'Se ha restaurado el curso con éxito. Si pulsa en el botón \'Continuar\' podrá ver el curso que ha restaurado.';
$string['restorefileweremissing'] = 'Algunos archivos no pudieron restaurarse debido a que faltaban en la copia de seguridad.';
$string['restorenewcoursefullname'] = 'Nombre del nuevo curso';
$string['restorenewcourseshortname'] = 'Nombre corto del nuevo curso';
$string['restorenewcoursestartdate'] = 'Nueva fecha de inicio';
$string['restorerolemappings'] = 'Restaurar mapeos de rol';
$string['restorerootsettings'] = 'Restaurar ajustes';
$string['restoresection'] = 'Restaurar sección';
$string['restorestage1'] = 'Confirmar';
$string['restorestage16'] = 'Revisar';
$string['restorestage16action'] = 'Ejecutar restauración';
$string['restorestage1action'] = 'Siguiente';
$string['restorestage2'] = 'Destino';
$string['restorestage2action'] = 'Siguiente';
$string['restorestage32'] = 'Proceso';
$string['restorestage32action'] = 'Continuar';
$string['restorestage4'] = 'Ajustes';
$string['restorestage4action'] = 'Siguiente';
$string['restorestage64'] = 'Completar';
$string['restorestage64action'] = 'Continuar';
$string['restorestage8'] = 'Esquema';
$string['restorestage8action'] = 'Siguiente';
$string['restoretarget'] = 'Destino de la restauración';
$string['restoretocourse'] = 'Restaurar al curso:';
$string['restoretocurrentcourse'] = 'Restaurar en este curso';
$string['restoretocurrentcourseadding'] = 'Fusionar la copia de seguridad con este curso';
$string['restoretocurrentcoursedeleting'] = 'Borrar el contenido del curso actual y después restaurar';
$string['restoretoexistingcourse'] = 'Restaurar en un curso existente';
$string['restoretoexistingcourseadding'] = 'Fusionar la copia de seguridad del curso con el curso existente';
$string['restoretoexistingcoursedeleting'] = 'Borrar el contenidodel curso actual y después restaurar';
$string['restoretonewcourse'] = 'Restaurar como curso nuevo';
$string['restoringcourse'] = 'Restauración del curso iniciada';
$string['restoringcourseshortname'] = 'restaurando';
$string['rootenrolmanual'] = 'Restaurar como matriculaciones manuales';
$string['rootsettingactivities'] = 'Incluir actividades y recursos';
$string['rootsettinganonymize'] = 'Hacer anónima la información de usuario';
$string['rootsettingbadges'] = 'Incluir insignias';
$string['rootsettingblocks'] = 'Incluir bloques';
$string['rootsettingcalendarevents'] = 'Incluir eventos del calendario';
$string['rootsettingcomments'] = 'Incluir comentarios';
$string['rootsettingcompetencies'] = 'Incluir competencias';
$string['rootsettingcontentbankcontent'] = 'Incluir contenido del banco de contenido';
$string['rootsettingcustomfield'] = 'Incluir campos personalizados';
$string['rootsettingenrolments'] = 'Incluir métodos de matriculación';
$string['rootsettingenrolments_always'] = 'Sí, siempre';
$string['rootsettingenrolments_never'] = 'No, restaurar usuarios como cuentas manuales';
$string['rootsettingenrolments_withusers'] = 'Sí, pero solamente si están incluidos usuarios';
$string['rootsettingfiles'] = 'Incluir archivos';
$string['rootsettingfilters'] = 'Incluir filtros';
$string['rootsettinggradehistories'] = 'Incluir historial de calificaciones';
$string['rootsettinggroups'] = 'Incluir grupos y agrupamientos';
$string['rootsettingimscc1'] = 'Convertir a IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Convertir a IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Incluir archivos heredados de curso';
$string['rootsettinglogs'] = 'Incluir archivos "log" de cursos';
$string['rootsettingquestionbank'] = 'Incluir banco de preguntas';
$string['rootsettingroleassignments'] = 'Incluir asignaciones de rol de usuario';
$string['rootsettings'] = 'Configuración de la copia de seguridad';
$string['rootsettingusers'] = 'Incluir usuarios matriculados';
$string['rootsettinguserscompletion'] = 'Incluir detalles del grado de avance del usuario';
$string['samesitenotification'] = 'Esta copia de seguridad fue creada solo con referencias a archivos, pero no con los propios archivos. La restauración sólo funcionará en este sitio.';
$string['sectionactivities'] = 'Actividades';
$string['sectioninc'] = 'Incluido en la copia de seguridad (sin información de usuario)';
$string['sectionincanduser'] = 'Incluido en la copia de seguridad junto con la información del usuario';
$string['selectacategory'] = 'Seleccione una categoría';
$string['selectacourse'] = 'Seleccione un curso';
$string['setting_course_fullname'] = 'Nombre del curso';
$string['setting_course_shortname'] = 'Nombre corto del curso';
$string['setting_course_startdate'] = 'Inicio del curso';
$string['setting_keep_groups_and_groupings'] = 'Mantener los grupos y los agrupamientos actuales';
$string['setting_keep_roles_and_enrolments'] = 'Mantener los roles y matriculaciones actuales';
$string['setting_overwrite_conf'] = 'Sobrescribir la configuración del curso';
$string['setting_overwrite_course_fullname'] = 'Sobrescribir el nombre completo del curso';
$string['setting_overwrite_course_shortname'] = 'Sobrescribir el nombre corto del curso';
$string['setting_overwrite_course_startdate'] = 'Sobrescribir la fecha de inicio del curso';
$string['showtypes'] = 'Mostrar tipo de opciones';
$string['sitecourseformatwarning'] = 'Esto es un respaldo de una página principal, tenga en cuenta que estos sólo pueden ser restaurados en la página principal.';
$string['skiphidden'] = 'Pasar por alto cursos ocultos';
$string['skiphiddenhelp'] = 'Elija si desea o no pasar por alto cursos ocultos';
$string['skipmodifdays'] = 'Pasar por alto cursos no modificados desde';
$string['skipmodifdayshelp'] = 'Seleccione para pasar por alto cursos que no han sido modificados desde un número de días';
$string['skipmodifprev'] = 'Pasar por alto cursos no modificados desde copia de seguridad anterior';
$string['skipmodifprevhelp'] = 'Elija si desea o no pasar por alto cursos que no han sido modificados desde la copia de seguridad anterior. Requiere logearse para ser activada.';
$string['status'] = 'Estado';
$string['storagecourseandexternal'] = 'Área de ficheros de copia de seguridad y carpeta específica';
$string['storagecourseonly'] = 'Área de archivos de copia de seguridad';
$string['storageexternalonly'] = 'Especifique directorio para las copias de seguridad automáticas';
$string['successful'] = 'Copia de seguridad exitosa';
$string['successfulcopy'] = 'Copia exitosa';
$string['successfulrestore'] = 'Restauración exitosa';
$string['timetaken'] = 'Tiempo empleado';
$string['title'] = 'Título';
$string['totalcategorysearchresults'] = 'Total de categorías: {$a}';
$string['totalcoursesearchresults'] = 'Cursos totales: {$a}';
$string['undefinedrolemapping'] = 'Mapeo de rol no definido para arquetipo \'{$a}\'.';
$string['unnamedsection'] = 'Sección sin nombre';
$string['userdata'] = 'Incluir datos de usuario';
$string['userdata_help'] = 'Si se habilita, información como los mensajes de los foros, las entregas de las tareas, etc., serán copiadas en el nuevo curso para cualquier usuario con el rol seleccionado en "Incluir asignaciones de rol de usuario".';
$string['userinfo'] = 'Información de usuario';
