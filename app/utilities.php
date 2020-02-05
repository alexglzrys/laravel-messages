<?php

/**
 * Función de utilidad que retorna una clase de CSS llamada "active",
 * para resaltar los enlaces que apuntan a la ruta actualmente activa.
 *
 * Composer carga automáticamente las clases PHP colocadas bajo la carpeta app/
 * Sin embargo, no es así con los archivos construidos con paradigmas secuenciales,
 * funcionales o estructurales. Para ello es necesario indicarselo a composer en la
 * clave "autoload", subindice "files". Para que lo cargue de forma global.
 *
 * Finalmente indicar a Composer que vuelva a leér dicho archivo para cargar la configuración
 * composer dump-autoload
 *
 * @param [type] $routeName [description]
 */
function setActive($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}
