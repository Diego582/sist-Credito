# sist-Credito
-- ASEGURARSE DE TENER INSTALADO NODEJS EN VERSION 12 

-- CORRER 

./start-project.sh
(solo una vez)

--
luego correr 
./restart-project.sh


AGREGAR AL MODELO DE USER LOS SIGUIENTE 

use Spatie\Permission\Traits\HasRoles;


y dentro de la clase User 

use HasRoles;


PARA TRABAJAR CON Permission

--------------------------------------------------
El entorno queda configurado con Laravel de backend y VueJs de Frontend con Inertis, si bien queda
un poco limitado inicialmente nos permite hacer un pagina SPA con las mismas rutas de laravel.
