<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./src/style.css">
</head>
<body>

<!------Header------>
<header>
    <nav class="navbar">
      <a class="title" href="index.html">Portfolio</a>
      <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="extra.html">Extra</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="index.html#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

<form>
    <h1>Login</h1>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Login</button>
</form>


<footer class="sticky-footer">
    <p> &copy; Copyright 2023.<br>
        All Rights Reserved.
    </p>
</footer>

<script>
    //scroll thing
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            console.log(entry)
            if (entry.isIntersecting) {
                entry.target.classList.add('show')
            } else {
                entry.target/classList.remove('show');
            }
        });
    });

    const hiddenElements = document.querySelectorAll('.hidden');
    hiddenElements.forEach((el) => observer.observe(el))


    
    //Bar thing
    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.getElementsByClassName('navbar-links')[0]

    toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
    });


    // Scroll
    const header = document.querySelector('header');

    window.addEventListener('scroll', function() {
        if (window.scrollY > header.offsetHeight) {
        header.classList.add('scrolled');
        } else {
        header.classList.remove('scrolled');
        }
    });
</script>
</body>
</html>