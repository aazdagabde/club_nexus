<!-- Add this in the HTML head section -->
<script>
    function toggleMenu() {
        var menu = document.getElementById("menu");
        menu.classList.toggle("show");
    }
</script>

<!-- Modify the HTML to include a menu button -->
<header>
    <h1>Gestion des Clubs Scolaires</h1>
    <button onclick="toggleMenu()" class="menu-btn">☰</button>
</header>

<!-- Include this CSS for the menu -->
<style>
    .menu-btn {
        display: none;
        background: none;
        border: none;
        color: white;
        font-size: 1.5rem;
        position: absolute;
        top: 1rem;
        right: 1rem;
    }

    @media (max-width: 600px) {
        .menu-btn {
            display: block;
        }

        #menu {
            display: none;
            flex-direction: column;
            align-items: center;
            background-color: #4CAF50;
            position: absolute;
            top: 3rem;
            width: 100%;
        }

        #menu.show {
            display: flex;
        }
    }
</style>
