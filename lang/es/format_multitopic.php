<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component Multitopic course format.
 *
 * @package   format_multitopic
 * @copyright 2019 onwards James Calder and Otago Polytechnic
 * @copyright based on work by 1999 onwards Martin Dougiamas  {@link http://moodle.com},
 * @copyright based on work by 2012 David Herney Bernal - cirano,
 * @copyright based on work by 2014 Marina Glancy
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// CHANGED.
$string['addsectionpage'] = 'Agregar página';
$string['addsectiontopic'] = 'Ageregar tema';
$string['currentsection'] = 'Esta sección';
// REMOVED 'editsection' .
// REMOVED 'editsectionname' .
// REMOVED 'deletesection' .
// REMOVED 'newsectionname' .
$string['sectionname'] = 'Sección';
$string['pluginname'] = 'Formato Multitemas ';
$string['section0name'] = 'General';
$string['page-course-view-multitopic'] = 'Cualquier página principal del curso en formato Multitemas';
$string['page-course-view-multitopic-x'] = 'Cualquier página del curso en formato Multitemas';
$string['hidefromothers'] = 'Ocultar sección';
$string['showfromothers'] = 'Mostrar sección';
$string['privacy:metadata'] = 'Este plugin de formato multitemas no guarda ninguna información personal.';
// END CHANGED.

// INCLUDED /lang/en/moodle.php $string['topicoutline'] CHANGED.
$string['sectionoutline'] = 'Esquema de la sección';
// END INCLUDED.

// INCLUDED /course/format/onetopic/lang/en/format_onetopic.php $string['level'] - $string['level_help'] CHANGED.
$string['level'] = 'Nivel';
// REMOVED 'index' .
$string['asprincipal'] = 'Página de primer nivel';
// REMOVED 'asbrother' .
$string['aschild'] = 'Página de primer de segundo nivel';
$string['level_help'] = 'Establece el nivel de la sección.
Esta es una configuración avanzada
Donde posiblemente, es recomendado usar las opciones del menú de la pagina de "Editar" "Subir el nivel de página" y "Bajar el nivel de página" en cambio.';
// END INCLUDED.

// INCLUDED /course/format/periods/lang/en/format_periods.php $string['perioddurationdefault'] - $string['perioddurationoverride_help'] CHANGED.
$string['perioddurationdefault'] = 'Duración del tema';
$string['perioddurationoverride'] = 'Sobreescribir la duración del tema';
$string['perioddurationdefault_help'] = 'Establece la duración por defecto de los temas para que muestren la fecha.
 e.j. Una configuracion de "1 semana" seria como el formato semanal del curso.
 Colocado en "Sin especificar" para no mostrar fechas, como los temas en el formato de curso.';
$string['perioddurationoverride_help'] = 'La duración de este tema.
 Establecido en "Sin tiempo" para, e.j., asignaciones que los estudiantes necesitan completar mientras trabajan en otros temas.
 (No es aplicable a otras páginas.)';
// END INCLUDED.

// ADDED.
$string['activityclipboard_disable'] = 'Deshabilitar portapapeles de la actividad';
$string['activityclipboard_enable'] = 'Habilitar portapapeles de la actividad';
$string['activityclipboard_placeholder'] = 'Haz clic en las flechas arriba/abajo
 flechas próximas a una actividad para moverla al portapapeles.';

$string['back_to_course'] = 'Regresar al curso';

$string['bannerslice'] = 'Rebanada de pancarta';
$string['bannerslice_help'] = 'La rebanada de la imagen resumen del curso a usar en la pancarta del curso.
 e.j.  Colocado en "0%" para usar la imagen de resumen del curso en el tope de  en la pancarta del curso, "50%" para usar en el medio, or "100%" para usar en el fondo.';

$string['collapsibledefault'] = 'Temas colapsables';
$string['collapsibledefault_help'] = 'Si los temas son colapsables por defecto.';
$string['collapsibleoverride'] = 'Sobreescribir temas colapsables';
$string['collapsibleoverride_help'] = 'Si este tema es colapsable.
 (No se aplica a páginas.)';

$string['image'] = 'Imagen';
$string['image_by'] = 'de';
$string['image_licence'] = 'licencia';

$string['move_level_down'] = 'Bajar de página bajo';
$string['move_level_up'] = 'Aumentar nivel de página';
$string['move_page_next'] = 'Mover página a la derecha';
$string['move_page_prev'] = 'Mover página a la izquierda';
$string['move_to_next_page'] = 'Mover a la próxima página hacia la siguiente página';
$string['move_to_prev_page'] = 'Mover a la página previa';

$string['period_0_days'] = 'Sin tiempo';
$string['period_undefined'] = 'Sin especificar';
$string['weeks_capitalised'] = 'Semanas';
$string['weeks_mindays'] = 'Días mínimos de la primera semana del año';
$string['weeks_mindays_desc'] = 'La primera semana del año contiene un mínimo de cuantos días del año?';
$string['weeks_partial'] = 'Semanas Parciales';
$string['weeks_partial_desc'] = 'Si hay semanas parciales al principio y al final del año.';
// END ADDED.
