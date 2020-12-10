<link rel="stylesheet" href="CSS/pagenav.css">
<link rel="stylesheet" href="CSS/reset.css">
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let navBarState = 0;
        let navBarLink = document.querySelector(".navlinks");
        let navBar = document.querySelector(".pagenavhamburger");
        navBar.addEventListener('click', (e) => {
            if (navBarState == 0) {
                navBarLink.style.display = "flex"
                navBarState = 1;
            } else if (navBarState == 1) {
                navBarLink.style.display = "none"
                navBarState = 0;
            }
        });
        window.addEventListener('resize', (e) => {
            if (document.documentElement.clientWidth > 950) {
                navBarLink.style.display = "flex"
                navBarState = 1;
            } else {
                navBarLink.style.display = "none"
                navBarState = 0;
            }
        });
    });
</script>
<nav class="pagenav">
    <button class="pagenavhamburger">
        <svg>
            <path d="M 42.785156 24.140625 L 1.859375 24.140625 C 0.832031 24.140625 0 23.308594 0 22.28125 C 0 21.257812 0.832031 20.425781 1.859375 20.425781 L 42.785156 20.425781 C 43.808594 20.425781 44.644531 21.257812 44.644531 22.28125 C 44.644531 23.308594 43.808594 24.140625 42.785156 24.140625 Z M 42.785156 24.140625 " />
            <path d="M 42.785156 9.878906 L 1.859375 9.878906 C 0.832031 9.878906 0 9.046875 0 8.023438 C 0 6.996094 0.832031 6.164062 1.859375 6.164062 L 42.785156 6.164062 C 43.808594 6.164062 44.644531 6.996094 44.644531 8.023438 C 44.644531 9.046875 43.808594 9.878906 42.785156 9.878906 Z M 42.785156 9.878906 " />
            <path d="M 42.785156 38.402344 L 1.859375 38.402344 C 0.832031 38.402344 0 37.570312 0 36.542969 C 0 35.515625 0.832031 34.683594 1.859375 34.683594 L 42.785156 34.683594 C 43.808594 34.683594 44.644531 35.515625 44.644531 36.542969 C 44.644531 37.570312 43.808594 38.402344 42.785156 38.402344 Z M 42.785156 38.402344 " />
        </svg>
    </button>
    <div class="navlinks">
        <div class="logo"></div>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="galleries.php">Galleries</a>
        <a href="browse-paintings.php">Search/Browse</a>
        <?php
        if (isset($_SESSION['userID'])) { ?>
            <a href="favorites.php">Favorites</a>
            <a href="index.php" onclick="session_destroy ( )">Logout</a>

        <?php } else { ?>
            <a href="login.php">Login</a>
        <?php }
        ?>
    </div>
</nav>