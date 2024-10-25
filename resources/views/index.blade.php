<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cafe Website</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar">
        <h1 class="brand">Cafe Website</h1>
        <div class="menu">
            <a href="#section1" class="navbar-link">Home</a>
            <a href="#section2" class="navbar-link">Menu</a>
            <a href="#section3" class="navbar-link">Reservation</a>
        </div>
        <div class="hamburger-container" onclick="toggleSidebar()">
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
        </div>
    </nav>
    <div class="sidebar" id="sidebar">
        <ul class="sidebar-link"><a href="#section1">Home</a></ul>
        <ul class="sidebar-link"><a href="#section2">Menu</a></ul>
        <ul class="sidebar-link"><a href="#section3">Reservation</a></ul>
    </div>
    {{-- home --}}
    <div class="home" id="section1">
        <div class="cafe-slogan-container">
            <h1 class="cafe-slogan">Where Every Sip is a Journey</h1>
            <p class="cafe-sub-slogan">
                Lorem ipsum dolor sit amet consectetur<br>
                adipiscing elit phasellus lacinia libero
            </p>
            <div class="reservation-button-container">
                <a href="#section3" class="reservation-button">Book a table</a>
            </div>
        </div>
        <div class="home-image-container">
            <img src="{{ asset('asset/cafe.jpg') }}" class="home-image">
            <img src="{{ asset('asset/coffee.jpg') }}" class="home-image">
            <img src="{{ asset('asset/bunchOfCoffee.jpg') }}" class="home-image">
        </div>
    </div>
    {{-- menu list --}}
    <div class="food-menu" id="section2">
        <div class="food-menu-title-container">
            <h1 class="food-menu-title">Our Menu</h1>
            <div class="food-menu-underline"></div>
        </div>
        <div class="food-list-container">
            <div class="food-list-section">
                <h1 class="food-list-section-title">Coffee</h1>
                <div class="foodNprice">
                    <p class="food-name">Espresso (Hot)</p>
                    <p class="food-price">$3</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Cappucino (Hot)</p>
                    <p class="food-price">$3.5</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Cafe Latte (Hot)</p>
                    <p class="food-price">$3.5</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Vanilla Latte (Hot)</p>
                    <p class="food-price">$3.8</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Cinnamon Coffee (Hot)</p>
                    <p class="food-price">$3.8</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Cold Coffee (Cold)</p>
                    <p class="food-price">$3.4</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Cold Mocha (Cold)</p>
                    <p class="food-price">$3.7</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Chocolate Shake (Hot or Cold)</p>
                    <p class="food-price">$3.75</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Belgian Chocolate (Hot or Cold)</p>
                    <p class="food-price">$3.95</p>
                </div>
            </div>
            <div class="food-list-section">
                <h1 class="food-list-section-title">Food</h1>
                <div class="foodNprice">
                    <p class="food-name">Sandwhich</p>
                    <p class="food-price">$5</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Garlic Bread</p>
                    <p class="food-price">$5.5</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Bread Sticks</p>
                    <p class="food-price">$6.5</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Burger</p>
                    <p class="food-price">$5.5</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Chicken Pockets</p>
                    <p class="food-price">$7.5</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Pizza</p>
                    <p class="food-price">$8.5</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Cheesecake</p>
                    <p class="food-price">$4.5</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Brownie</p>
                    <p class="food-price">$4</p>
                </div>
                <div class="foodNprice">
                    <p class="food-name">Strawberry Cake</p>
                    <p class="food-price">$5</p>
                </div>
            </div>
        </div>
    </div>
    {{-- reservation --}}
    <div class="reservation" id="section3">
        <h1 class="reservation-title">Reservation</h1>
        <div class="reservation-title-underline"></div>
        <form action="{{route('reservation')}}" method="POST" class="form">
            @csrf
            <input type="text" name="name" class="input" placeholder="Name" required>
            <input type="email" name="email" class="input" placeholder="Email" required>
            <input type="number" name="phone" class="input" placeholder="Phone" required>
            <input type="number" name="people" class="input" placeholder="Number of Peoples" required>
            <p class="form-label">Time:</p>
            <input type="time" name="time" class="input" placeholder="Time" required><br>
            <center><button class="submit-button">Book</button></center>
        </form>
    </div>
    <footer class="footer" id="section4">
        <div class="contact">
            <p class="copyright">&copy; Cafe Website 2024</p>
            <a href="" class="footer-link">Instagram</a>
            <a href="" class="footer-link">X</a>
        </div>
    </footer>
    {{-- javascript --}}
    <script>
        // toggle sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }

        // success message
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                alert('{{ session('success') }}');
            @endif
        });
    </script>
</body>
</html>
