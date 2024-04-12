# PruebaCrud

## Instalación

1. Clona o descarga el repositorio.
2. Configura tu servidor web para que la carpeta `pruebaCrud` sea la raíz del sitio.
3. Importa la base de datos desde `database/schema.sql`.
4. Configura la conexión a la base de datos en `app/controllers/Database.php`.
5. Instala las dependencias usando Composer:

```bash
composer install

## Estructura del Proyecto

- `app/controllers`: Contiene los controladores PHP.
- `database`: Contiene los archivos relacionados con la base de datos.
- `public`: Contiene los archivos públicos accesibles desde el navegador.
  - `.htaccess`: Configuración del servidor Apache.
  - `index.php`: Punto de entrada del sitio.
- `resources/views`: Contiene las vistas HTML del proyecto.
  - `Category`: Vistas relacionadas con la entidad Category.
  - `Product`: Vistas relacionadas con la entidad Product.
- `router`: Archivos relacionados con el enrutamiento de la aplicación.
- `composer.json`: Archivo de configuración de Composer.

## Uso

### Category

- Lista de Categorías: `http://localhost/pruebacrud/public/category`
- Crear Categoría: `http://localhost/pruebacrud/public/category/create`
- Actualizar Categoría: `http://localhost/pruebacrud/resources/views/category/categoryPut.php`
- Eliminar Categoría: `http://localhost/pruebacrud/resources/views/category/categoryDelete.php?id=ID_DE_LA_CATEGORÍA`

### Product

- Lista de Productos: `http://localhost/pruebacrud/public/product`
- Crear Producto: `http://localhost/pruebacrud/public/product/create`
- Actualizar Producto: `http://localhost/pruebacrud/resources/views/product/productPut.php`
- Eliminar Producto: `http://localhost/pruebacrud/resources/views/product/productDelete.php?id=ID_DEL_PRODUCTO`


