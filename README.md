# 📦 API REST CRUD PHP (OOP) + MySQL


![Status](https://img.shields.io/badge/Estado-Finalizado-success)
![License](https://img.shields.io/badge/License-MIT-blue.svg)

¡Esta es la API para gestionar la base de datos de productos!

<img width="1211" height="626" alt="image" src="https://github.com/user-attachments/assets/c45b6455-b713-45b2-b88c-38637ababadf" />

<br>
<br>

## 🛠️ Stack Tecnológico

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![JSON](https://img.shields.io/badge/JSON-000000?style=for-the-badge&logo=json&logoColor=white)
![Postman](https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white)

<br>
## 🚀 Inicio Rápido de la API

* ⚙️ **Requisitos:** Necesitas tener instalado WAMP/XAMPP (con PHP 8.1+) y MySQL.
* ⚙️ **Requisitos:** Necesitas tener instalado Postman.
* ⬇️ **Instalación:** Clona el repositorio y configura tu base de datos.
* 🛠️ **Configuración:** Edita 'Modelo/conexion.php' con tus credenciales.
<br>
## ✨ Características de la API

* ✅ CRUD completo para la tabla de Productos.
* 🧭 Enrutamiento centralizado en `index.php`.
* 🧱 Implementación de Programación Orientada a Objetos (POO).

<br> 

## 🚧 ¿Qué es un método HTTP?
Un método HTTP, a veces denominado verbo HTTP, indica la acción que la solicitud HTTP espera del servidor consultado. Por ejemplo,
dos de los métodos HTTP más comunes son 'GET' y 'POST'; una solicitud 'GET' espera recibir información a cambio (normalmente 
en forma de sitio web), mientras que una solicitud 'POST' suele indicar que el cliente está enviando información al servidor web 
(como datos de un formulario, por ejemplo, un nombre de usuario y una contraseña). Este ejemplo proporciona los dos métodos.
<br><br> 

## 🧩 ¿Qué es un código de estado HTTP?
Los códigos de estado HTTP son códigos de 3 dígitos que se utilizan con mayor frecuencia para indicar si una solicitud HTTP
se ha completado correctamente. Los códigos de estado se dividen en los siguientes 5 bloques:
* 1. 1xx Informativo
* 2. Éxito 2xx
* 3. Redirección 3xx
* 4. Error del cliente 4xx
* 5. Error del servidor 5xx
<br><br> 

## 🚀 ¿Cómo enviar un código de respuesta HTTP?
* http_response_code(404)
  <br> <br>

## 🛠️ Punto de Acceso a la API

* 🔵 Un endpoint es la dirección que un cliente utiliza para comunicarse con un servidor que ofrece una API (Interfaz de Programación de Aplicaciones).<br>
* 🔵 Un punto final de API es una URL que actúa como punto de contacto entre un cliente y un servidor de API. Los clientes de API envían solicitudes
a los puntos finales de API para acceder a sus funciones y datos.<br>
<br><br>

## 🔗  Métodos Endpoints

* 🟢 Los endpoints se utilizan en conjunto con métodos HTTP (como GET, POST, PUT, DELETE) para definir la acción que se quiere realizar. <br>
* 🟢 Los endpoints pueden incluir parámetros (en la URL o en el cuerpo de la solicitud) para especificar datos adicionales que necesita la API para procesar la solicitud. <br>
* 🟢 Los puntos finales de API son esenciales para el buen funcionamiento y el rendimiento de cualquier aplicación.  <br>
<br><br> 

## 🌐 Métodos HTTP
 API-REST-Productos [http://127.0.0.1/ApiRestFull/]  ✨ GET, POST, PUT, DELETE

*  GET 👁️ /productos - Obtiene la lista de todos los productos.

*  POST ✨ /productos - Crea un nuevo producto.

*  PUT 📝 /productos/{id} - Actualiza un producto existente por completo.

*  PATCH 🩹 /productos/{id} - Aplica una actualización parcial a un producto.

*  DELETE 🗑️ /productos/{id} - Elimina un producto.

  <br><br>

## 🛠️ ¿Por qué Usar raw y JSON en Postman?

  <img width="1451" height="694" alt="image" src="https://github.com/user-attachments/assets/74bfde14-e400-4060-afeb-79ecb5390512" />
  <br> <br>
   Cuando su API REST recibe una petición POST para crear un recurso (un producto, en su caso), necesita que los datos lleguen de
   una forma que pueda leer y decodificar fácilmente. La combinación de raw y JSON logra esto:

* 1. raw (Cuerpo Crudo/Sin Procesar)
     Seleccionar raw en la pestaña Body de Postman indica que usted mismo proporcionará el cuerpo de la solicitud como una cadena de texto
     sin procesar.
    <ul>
    <li><strong>Significado:</strong> Es la forma más flexible y estándar para enviar datos estructurados a una API REST, como texto puro, XML, o JSON.</li>
    <li><strong> En Postman:</strong> Le permite escribir o pegar el objeto JSON directamente en el área de texto.</li>
    </ul>
* 2. Json (JavaScript Object Notation)
     Seleccionar JSON en el menú desplegable junto a raw realiza dos acciones cruciales:
     A. Formato de Datos: Le dice a Postman que el texto que está escribiendo en el cuerpo raw debe seguir la sintaxis de JSON.
     B. Configuración de Encabezado (Header): Automáticamente le agrega el encabezado necesario a su petición, el cual es vital
para que su código PHP funcione 
       ```bash
       Content-Type: application/json 
       ```
<br><br> 
     
## 🛣️ Rutas (Endpoints) 

* **[GET]** `http://127.1.1.1/ApiRestFull` ➡️  Lista todos los productos.
* **[POST]** `http://127.1.1.1/ApiRestFull` ➡️  Crea un nuevo producto. (Requiere JSON Body)

<br><br>

## 💻 Configurar una Dirección o endpoint válido en Postman 

### ❌🌐Dirección IP Inválida [http://127.0.0.0/ApiRestFull/]

* ❌ 127.0.0.0: Esta es la dirección de red (la base de la subred de loopback) y, en la práctica, no es una dirección
     válida para un host (un dispositivo) para enviar peticiones HTTP. El sistema operativo y el software de red
    (como tu servidor web Apache) probablemente ignoraban o no respondían a peticiones dirigidas a esta IP.
* 🌐 127.0.0.1: Esta es la dirección de "localhost" o "loopback". Es la dirección estándar y universalmente reconocida
      que usa tu computadora para referirse a sí misma.

* 🌐 Es una dirección de Loopback: Al igual que $127.0.0.1$, cualquier tráfico dirigido a $127.1.1.1$ nunca sale de tu 
     computadora. El sistema operativo redirige los paquetes directamente de vuelta a la interfaz de red interna.
* 🌐 Funciona como $127.0.0.1$: Para la mayoría de las aplicaciones y servicios, especialmente en un entorno de desarrollo
     local (como tu servidor Apache), usar $127.1.1.1$ es funcionalmente idéntico a usar $127.0.0.1$. 
     Tu servidor web responderá a la petición de la misma manera.
     <br><br>

## 📚 Cómo usar este repositorio

1. Descarga o clona el repositorio, ubica una carpeta en www -> para WampServer o htdocs  si es Xampp
  ```bash
   [https://github.com/Salomon2514/Ejemplo_API_REST.git]
2. Para correrlos edita el URL de su navegador:  http://127.1.1.1/Carpeta/ o  http://localhost/Carpeta/
```
<br> <br> 
## 🔢 Estadísticas

![Creado](https://img.shields.io/badge/Creado-08--04--2025-blue)
![GitHub watchers](https://img.shields.io/github/watchers/Salomon2514/Ejemplo_API_REST.svg?style=social)
![Visitas](https://visitor-badge.laobi.icu/badge?page_id=Salomon2514.Ejemplo_API_REST)

<br>

## 👨‍🏫 Autor

**Irina Fong**  
Docente de Programación  
Desarrollo Web - Ingeniería Web
Universidad Tecnológica de Panamá  

📧 **Email:** irina.fong@utp.ac.pa  
📧 **Email:** irinafong@gmail.com<br>
🌐 **GitHub:**(https://github.com/Salomon2514)  

<br>

## 📖 Referencias

- API REST con PHP: [ver aquí](https://www.youtube.com/watch?v=Y9jkkfGjbzQ)  
- POSTMAN: [ver aquí](https://www.youtube.com/watch?v=qsejysrhJiU)
- ¿Qué son los códigos HTTP?: [ver aquí](https://www.hostinger.com/co/tutoriales/codigos-http)
- Una guía completa de los Códigos de Estado de HTTP: [ver aquí](https://kinsta.com/es/blog/codigos-de-estado-de-http/)



