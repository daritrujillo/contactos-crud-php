# CRUD de Contactos en PHP (Agenda Telefónica)

Proyecto académico que implementa un CRUD de contactos usando PHP 8, MySQL y PDO.
Incluye las operaciones de crear, leer, actualizar y eliminar contactos.

---

## ✨ Funcionalidades

- Listado de contactos
- Crear nuevo contacto
- Editar contacto existente
- Ver detalles de un contacto
- Eliminar contacto con confirmación
- Validación de formularios
- Conexión segura mediante PDO y consultas preparadas
- Mensajes de éxito/error
- Búsqueda por nombre, apellido o teléfono

---

## 🛠️ Tecnologías utilizadas

- PHP 7.4+ / 8+
- MySQL / MariaDB
- PDO (PHP Data Objects)
- HTML y CSS
- Hosting gratuito ProFreeHost (Ezyro)

---

## 🗂️ Estructura de la base de datos

El archivo `contacts.sql` contiene:

- Creación de la base de datos
- Creación de la tabla `contacts`

Campos:
- id
- nombre
- apellido
- telefono
- email
- direccion
- notas
- created_at

---

## 🔐 Conexión a la base de datos

Por seguridad **no se sube el archivo real `db.php`**.

En su lugar se incluye:

- `config/db.example.php`

El profesor debe copiar este archivo como `db.php` y colocar sus propios datos de conexión.

---

## 🌐 Sitio publicado

El CRUD está funcionando en:

👉 **http://contactos-crud-php.unaux.com/**

---

## 👨‍💻 Autor

Equipo de desarrollo — proyecto escolar.

