<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>GymMax - Tu gimnasio ideal</title>
<style>k
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }

    body {
        font-family: Arial, sans-serif;
        background: #111;
        color: #fff;
        line-height: 1.6;
    }

    header {
        background: #222;
        padding: 20px;
        text-align: center;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    header h1 {
        color: #f44336;
        margin-bottom: 10px;
    }

    nav a {
        margin: 0 15px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    nav a:hover {
        color: #f44336;
    }

    section {
        padding: 60px 20px;
        text-align: center;
    }

    .hero {
        background: url('https://images.unsplash.com/photo-1571019613913-7b22c0a1b3f9') no-repeat center center/cover;
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-shadow: 1px 1px 3px black;
    }

    .hero h2 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 1.2rem;
    }

    .services, .schedule, .contact {
        background: #1c1c1c;
        margin-bottom: 20px;
    }

    .services h2, .schedule h2, .contact h2 {
        margin-bottom: 20px;
        color: #f44336;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .card {
        background: #333;
        padding: 20px;
        border-radius: 10px;
        width: 280px;
    }

    .card h3 {
        color: #f44336;
        margin-bottom: 10px;
    }

    form input, form textarea {
        width: 90%;
        padding: 10px;
        margin: 10px auto;
        border: none;
        border-radius: 5px;
        display: block;
    }

    form button {
        padding: 10px 20px;
        background: #f44336;
        border: none;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    form button:hover {
        background: #d32f2f;
    }

    footer {
        background: #111;
        text-align: center;
        padding: 20px;
        font-size: 0.9rem;
        color: #aaa;
    }

    @media (max-width: 768px) {
        .card-container {
        flex-direction: column;
        align-items: center;
        }

        .hero h2 {
        font-size: 2.2rem;
        }
    }

    /* Modal styles */
    .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0; top: 0;
    width: 100%; height: 100%;
    background-color: rgba(0,0,0,0.6);
    justify-content: center;
    align-items: center;
    }

    .modal-content {
    background-color: #222;
    padding: 30px;
    border-radius: 10px;
    width: 300px;
    color: white;
    box-shadow: 0 0 10px black;
    position: relative;
    }

    .modal-content h2 {
    color: #f44336;
    text-align: center;
    }

    .modal-content input,
    .modal-content button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: none;
    }

    .modal-content button {
    background-color: #f44336;
    color: white;
    cursor: pointer;
    }

    .modal-content button:hover {
    background-color: #d32f2f;
    }

    .close {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 24px;
    cursor: pointer;
    color: white;
    }

</style>
</head>
<body>
<meta name="csrf-token" content="{{ csrf_token() }}">

<header>
<h1>GymMax</h1>
<nav>
  <a href="#inicio">Inicio</a>
  <a href="#servicios">Servicios</a>
  <a href="#horarios">Horarios</a>
  <a href="#contacto">Contacto</a>
  <a href="#" onclick="openLoginModal()">Login</a>
</nav>
</header>

<section class="hero" id="inicio">
<h2>¡Ponte en forma con nosotros!</h2>
<p>Entrena duro. Vive fuerte. Siente el cambio.</p>
</section>

<section class="services" id="servicios">
    <h2>Nuestros Servicios</h2>
    <div class="card-container" id="servicios-container">
        <p>Cargando servicios...</p>
    </div>
</section>


<section class="schedule" id="horarios">
<h2>Horarios</h2>
<div class="card-container">
    <div class="card">
    <h3>Lunes a Viernes</h3>
    <p>6:00 AM - 10:00 PM</p>
    </div>
    <div class="card">
    <h3>Sábados</h3>
    <p>8:00 AM - 6:00 PM</p>
    </div>
    <div class="card">
    <h3>Domingos</h3>
    <p>10:00 AM - 2:00 PM</p>
    </div>
</div>
</section>

<section class="contact" id="contacto">
<h2>Contacto</h2>
<form id="contactForm">
    <input type="text" placeholder="Nombre" required />
    <input type="email" placeholder="Correo electrónico" required />
    <textarea rows="4" placeholder="Tu mensaje..." required></textarea>
    <button type="submit">Enviar</button>
</form>
</section>

<footer>
<p>&copy; 2025 GymMax. Todos los derechos reservados.</p>
</footer>

<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeLoginModal()">&times;</span>
    <h2>Iniciar Sesión</h2>
    <form id="loginForm">
      <input type="email" name="email" placeholder="Correo electrónico" required />
      <input type="password" name="password" placeholder="Contraseña" required />
      <label style="display: block; margin: 10px 0;">
        <input type="checkbox" name="remember" /> Recuérdame
      </label>
      <button type="submit">Entrar</button>
      <p id="loginError" style="color: red; display: none;"></p>
    </form>
  </div>
</div>


<script>
    document.getElementById("contactForm").addEventListener("submit", function(e) {
        e.preventDefault();
        alert("Gracias por contactarnos. Te responderemos pronto.");
        this.reset();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const container = document.getElementById("servicios-container");

        fetch("/full-categorias")
        .then(response => {
            if (!response.ok) throw new Error("Error al cargar categorías");
            return response.json();
        })
        .then(data => {
            container.innerHTML = ""; // Limpiar contenido

            data.forEach(categoria => {
            const card = document.createElement("div");
            card.className = "card";

            const title = document.createElement("h3");
            title.textContent = categoria.nombre;

            const list = document.createElement("ul");
            list.style.textAlign = "left";

            categoria.actividades.forEach(actividad => {
                const item = document.createElement("li");
                item.textContent = actividad.nombre;
                list.appendChild(item);
            });

            card.appendChild(title);
            card.appendChild(list);
            container.appendChild(card);
            });
        })
        .catch(error => {
            container.innerHTML = `<p style="color:red">Error cargando servicios. Intenta de nuevo más tarde.</p>`;
            console.error("Error:", error);
        });
    });
</script>
<script>
  function openLoginModal() {
    document.getElementById("loginModal").style.display = "flex";
  }

  function closeLoginModal() {
    document.getElementById("loginModal").style.display = "none";
    document.getElementById("loginForm").reset();
    document.getElementById("loginError").style.display = "none";
  }

  window.onclick = function(event) {
    const modal = document.getElementById("loginModal");
    if (event.target === modal) {
      closeLoginModal();
    }
  }

  document.getElementById("loginForm").addEventListener("submit", async function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    try {
      const response = await fetch("/login", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": token,
          "Accept": "application/json"
        },
        body: formData
      });

      if (response.ok) {
        window.location.reload(); // Redirige o recarga si es éxito
      } else {
        const data = await response.json();
        const errorMsg = data.message || 'Error al iniciar sesión';
        document.getElementById("loginError").textContent = errorMsg;
        document.getElementById("loginError").style.display = "block";
      }

    } catch (error) {
      document.getElementById("loginError").textContent = "Error del servidor";
      document.getElementById("loginError").style.display = "block";
    }
  });
</script>


</body>
</html>
<script>