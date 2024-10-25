<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinRecs - Personalized Skincare</title>
    <link rel="stylesheet" href="../css/site.css">
    <script>
        function navigateToAge() {
            window.location.href = "product.php";
        }
    </script>
</head>
<body>
    <header>
        <h1>Welcome to SkinRecs</h1>
    </header>

        <!-- Slideshow Section -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="../images/slide5.jpg" style="width:60%">
            </div>
            <div class="mySlides fade">
                <img src="../images/slide2.jpg" style="width:60%">
            </div>
            <div class="mySlides fade">
                <img src="../images/slide4.jpg" style="width:60%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>

        <!-- End of Slideshow Section -->

        <div class="description">
            <h2>About SkinRecs</h2>
            <p>SkinRecs is a website about letting you take charge of your own skin. We offer personalized skincare recommendations based on your unique skin type and concerns. Our team of expert dermatologists is here to guide you every step of the way.</p>
            <p>We do understand that skin can be a sensitive topic, we respect your decision if you choose not to answer specific questions, we solely use your answers to give you the best outcome to your skin and recommend you a product that will cater to your needs.</p>
            <div class="doctor-images">
                <img src="../images/derm1.jpg" alt="Dermatologist 1">
                <img src="../images/derm2.jpg" alt="Dermatologist 2">
                <img src="../images/derm3.jpg" alt="Dermatologist 3">
            </div>
        </div>

        <main>
        <div class="welcome-section">
            <p>Tap here to start your journey in discovering your skin</p>
            <div class="age-options">
                <div class="option-container">
                    <button class="age-button" onclick="navigateToAge()">Press here to start</button>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        © 2024 SkinRecs. All rights reserved.
    </footer>

    <!-- Slideshow JavaScript -->
    <script src="../php/slideshow.js"></script>
</body>
</html>
