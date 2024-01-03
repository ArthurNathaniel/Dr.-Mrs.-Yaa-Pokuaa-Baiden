<div class="navbar-all">
    <a href="index.php" class="logo-all">
        <div class="logo"></div>
    </a>
    <div class="nav-items">
        <div class="nav-links">
            <a href="index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>Home</a>
            <a href="about.php" <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?>>About Us</a>
            <a href="projects.php" <?php if (basename($_SERVER['PHP_SELF']) == 'projects.php') echo 'class="active"'; ?>>Projects</a>
            <a href="news.php" <?php if (basename($_SERVER['PHP_SELF']) == 'news.php') echo 'class="active"'; ?>>News & Events</a>
            <a href="contact.php" <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?>>Contact Us</a>
        </div>
    </div>
    <div class="nav-social-media">
        <span><a href="" target="_blank"><i class="fa-brands fa-facebook"></i></a></span>
        <span><a href="" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></span>
        <span><a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a></span>
        <span><a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></span>
    </div>
    <button id="toggleButton">
        <i class="fa-solid fa-bars"></i>
    </button>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById("toggleButton");
        const navLinks = document.querySelector(".nav-links");
        const icon = document.querySelector("#toggleButton i");

        toggleButton.addEventListener("click", () => {
            // Toggle the 'show-flex' class on the nav-links element
            navLinks.classList.toggle("show-flex");

            // Toggle the icon between bars and xmark
            if (icon.classList.contains("fa-bars")) {
                icon.classList.remove("fa-bars");
                icon.classList.add("fa-xmark");
            } else {
                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");
            }
        });

        // Close the navigation when a link is clicked
        const navLinksList = document.querySelectorAll(".nav-links a");
        navLinksList.forEach(link => {
            link.addEventListener("click", () => {
                navLinks.classList.remove("show-flex");
                // Reset the icon to bars when a link is clicked
                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");
            });
        });
    });
</script>