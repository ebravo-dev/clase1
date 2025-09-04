# 🐾 Pet Showcase - Landing Page & API

<p align="center">
  <img src="https://via.placeholder.com/400x100/4F46E5/FFFFFF?text=Pet+Showcase" alt="Pet Showcase Logo" width="400">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-red.svg" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8.4+-blue.svg" alt="PHP Version">
  <img src="https://img.shields.io/badge/Status-En%20Desarrollo-yellow.svg" alt="Development Status">
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
</p>

## 📋 Descripción del Proyecto

**Pet Showcase** es una aplicación web desarrollada con Laravel que combina una hermosa landing page para mostrar mascotas con una API RESTful completa para la gestión de datos de mascotas. El proyecto está diseñado para ser tanto una vitrina visual atractiva como una solución backend robusta para desarrolladores externos.

### 🎯 Objetivos del Proyecto

- **Landing Page Interactiva**: Mostrar mascotas de forma atractiva y responsiva
- **API RESTful**: Permitir a clientes externos gestionar mascotas a través de endpoints seguros
- **Gestión Completa**: CRUD completo para mascotas, categorías, y más
- **Documentación API**: Endpoints bien documentados para facilitar la integración

## ✨ Características Principales

### 🌐 Landing Page
- [ ] Galería de mascotas con filtros por categoría
- [ ] Información detallada de cada mascota
- [ ] Diseño responsivo y moderno
- [ ] Formulario de contacto
- [ ] Sistema de favoritos

### 🔌 API RESTful
- [ ] Autenticación con Laravel Sanctum
- [ ] CRUD completo de mascotas
- [ ] Gestión de categorías (perros, gatos, etc.)
- [ ] Filtrado y búsqueda avanzada
- [ ] Paginación automática
- [ ] Validación de datos robusta
- [ ] Documentación con Swagger/OpenAPI

### 🛡️ Características Adicionales
- [ ] Sistema de usuarios y roles
- [ ] Subida de imágenes optimizada
- [ ] Cache inteligente
- [ ] Rate limiting para la API
- [ ] Logs de auditoría

## 🛠️ Stack Tecnológico

- **Backend**: Laravel 11.x
- **Base de Datos**: MySQL/PostgreSQL
- **Frontend**: Blade Templates + Vite + TailwindCSS
- **API**: Laravel API Resources + Sanctum
- **Testing**: PHPUnit + Laravel Testing
- **Documentación**: Laravel API Documentation

## 📁 Estructura del Proyecto

```
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Web/           # Controladores de la Landing Page
│   │   │   └── Api/           # Controladores de la API
│   │   ├── Requests/          # Form Requests para validación
│   │   └── Resources/         # API Resources
│   ├── Models/                # Modelos Eloquent
│   └── Services/              # Lógica de negocio
├── database/
│   ├── migrations/            # Migraciones de BD
│   ├── seeders/               # Datos de prueba
│   └── factories/             # Factories para testing
├── resources/
│   ├── views/                 # Templates Blade
│   ├── js/                    # JavaScript/Vue components
│   └── css/                   # Estilos (TailwindCSS)
├── routes/
│   ├── web.php               # Rutas de la Landing Page
│   └── api.php               # Rutas de la API
└── tests/                    # Tests automatizados
```

## 🚀 Instalación y Configuración

### Prerrequisitos

- PHP 8.4 o superior
- Composer
- Node.js y npm
- MySQL/PostgreSQL
- Git

### Pasos de Instalación

1. **Clonar el repositorio**
```bash
git clone https://github.com/tu-usuario/pet-showcase.git
cd pet-showcase
```

2. **Instalar dependencias de PHP**
```bash
composer install
```

3. **Instalar dependencias de Node.js**
```bash
npm install
```

4. **Configurar el archivo de entorno**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configurar la base de datos en `.env`**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pet_showcase
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

6. **Ejecutar migraciones y seeders**
```bash
php artisan migrate --seed
```

7. **Compilar assets frontend**
```bash
npm run dev
# o para producción: npm run build
```

8. **Iniciar el servidor de desarrollo**
```bash
php artisan serve
```

## 🔧 Comandos Útiles

```bash
# Ejecutar tests
php artisan test

# Limpiar cache
php artisan config:clear
php artisan cache:clear

# Generar documentación API
php artisan l5-swagger:generate

# Crear nuevos recursos
php artisan make:model Mascota -mcr
php artisan make:controller Api/MascotaController --api
php artisan make:request StoreMascotaRequest
```

## 📚 Documentación de la API

Una vez que el proyecto esté en funcionamiento, la documentación completa de la API estará disponible en:

- **Desarrollo**: `http://localhost:8000/api/documentation`
- **Producción**: `https://tu-dominio.com/api/documentation`

### Endpoints Principales (Planificados)

```
GET    /api/mascotas           # Listar todas las mascotas
POST   /api/mascotas           # Crear nueva mascota
GET    /api/mascotas/{id}      # Obtener mascota específica
PUT    /api/mascotas/{id}      # Actualizar mascota
DELETE /api/mascotas/{id}      # Eliminar mascota

GET    /api/categorias         # Listar categorías
POST   /api/categorias         # Crear categoria
```

## 🧪 Testing

```bash
# Ejecutar todos los tests
php artisan test

# Ejecutar tests con coverage
php artisan test --coverage

# Ejecutar solo tests unitarios
php artisan test --testsuite=Unit

# Ejecutar solo tests de funcionalidad
php artisan test --testsuite=Feature
```

## 🌟 Roadmap del Proyecto

### Fase 1: Base del Proyecto ✅
- [x] Configuración inicial de Laravel
- [x] Estructura de carpetas definida
- [x] README inicial

### Fase 2: Modelos y Migraciones
- [ ] Modelo Mascota con sus relaciones
- [ ] Modelo Categoria
- [ ] Modelo Usuario (para API)
- [ ] Migraciones y seeders

### Fase 3: API RESTful
- [ ] Controladores API
- [ ] Autenticación con Sanctum
- [ ] Validaciones y Form Requests
- [ ] API Resources
- [ ] Tests de API

### Fase 4: Landing Page
- [ ] Diseño responsivo con TailwindCSS
- [ ] Componentes Blade reutilizables
- [ ] Galería de mascotas
- [ ] Filtros y búsqueda

### Fase 5: Características Avanzadas
- [ ] Sistema de favoritos
- [ ] Subida de imágenes optimizada
- [ ] Cache y optimización
- [ ] Documentación completa

## 🤝 Contribución

¡Las contribuciones son bienvenidas! Por favor:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/nueva-caracteristica`)
3. Commit tus cambios (`git commit -am 'Agrega nueva caracteristica'`)
4. Push a la rama (`git push origin feature/nueva-caracteristica`)
5. Abre un Pull Request

## 📝 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 👨‍💻 Autor

**Tu Nombre**
- GitHub: [@tu-usuario](https://github.com/tu-usuario)
- Email: tu-email@ejemplo.com

## 🙏 Agradecimientos

- Laravel Framework por proporcionar una base sólida
- TailwindCSS por el sistema de diseño
- La comunidad de Laravel por su apoyo continuo

---

<p align="center">
  Hecho con ❤️ para los amantes de las mascotas
</p>
