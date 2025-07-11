Actividad 4 - Sistema CRUD MVC con PHP y MySQL (Patrón Singleton)
📝 Descripción del Proyecto
Implementación profesional de un sistema CRUD para gestión de productos y marcas, desarrollado bajo el patrón MVC con:

Conexión PDO mediante Singleton para evitar múltiples instancias

Herencia mediante BaseModel para reutilización de código

Estructura modular y escalable

CRUD completo para ambas entidades (Productos y Marcas)

Relaciones entre tablas mediante claves foráneas

🏗 Estructura del Proyecto

actividad-4/
├── config/
│   └── database.php          # Clase Database (Singleton) con conexión PDO
├── controllers/
│   ├── BaseController.php     # Controlador base (opcional para extensión)
│   ├── MarcaController.php    # Lógica para gestión de marcas (CRUD)
│   └── ProductController.php  # Lógica para gestión de productos (CRUD)
├── models/
│   ├── BaseModel.php          # Modelo abstracto con métodos comunes
│   ├── MarcaModel.php         # Operaciones con tabla 'marca'
│   └── ProductModel.php       # Operaciones con tabla 'products' (JOIN con marcas)
├── views/
│   ├── layout/
│   │   ├── header.php         # Cabecera reusable
│   │   └── layout.php         # Plantilla maestra
│   ├── marca/
│   │   ├── create.php         # Formulario creación marcas (con validaciones)
│   │   ├── edit.php           # Formulario edición marcas
│   │   └── index.php          # Listado de marcas (tabla paginable)
│   └── product/
│       ├── create.php         # Formulario con dropdown de marcas
│       ├── edit.php           # Edición con dropdown y valores actuales
│       └── index.php          # Listado con relación marca_nombre
├── public/
│   ├── assets/
│   │   └── css/
│   │       └── style.css      # Estilos Bootstrap personalizados
│   └── index.php              # FrontController (enrutamiento)
├── sql/
│   └── actividad-4.sql        # Script con: CREATE, INSERT, RELACIONES
└── README.md                  # Este archivo
✅ Características Implementadas
Patrón Singleton en Database.php para conexión única

BaseModel centralizando métodos comunes (getAll, getById)

Relación 1:N entre Productos y Marcas (clave foránea)

Vistas reutilizables con layout común

Dropdowns dinámicos de marcas en formularios

Validación básica en formularios (required, htmlspecialchars)

JOIN SQL para mostrar nombres de marca en listados

🛠 Requisitos Técnicos
PHP 7.4+ (con PDO habilitado)

MySQL 5.7+ o MariaDB 10.2+

Servidor web (Apache/Nginx)

Composer (recomendado para futuras mejoras)

🚀 Instalación Paso a Paso
Clonar repositorio:

bash
git clone [url-repositorio]
cd actividad-4
Configurar base de datos:

bash
mysql -u [usuario] -p < sql/actividad-4.sql
Verificar credenciales en:

php
// config/database.php
private function __construct() {
    $this->connection = new PDO(
        'mysql:host=localhost;dbname=actividad4',
        'root', 
        ''
    );
}
Iniciar servidor de desarrollo:

bash
php -S localhost:8000 -t public/
Acceder en navegador:

text
http://localhost:8000

🤝 Cómo Contribuir
Haz fork del proyecto

Crea tu rama (git checkout -b feature/mejora)

Haz commit de tus cambios (git commit -m 'Add some feature')

Haz push a la rama (git push origin feature/mejora)

Abre un Pull Request

📄 Licencia
MIT License - Copyright (c) 2023 [Tu Nombre]