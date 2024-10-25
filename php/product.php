<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinRecs - Personalized Skincare</title>
    <link rel="stylesheet" href="../css/site.css">
</head>
<!-- Thought Bubble -->
<div class="info-bubble" onclick="showDescription()">
    Why do we ask this?
</div>

<!-- Hidden Description Container -->
<div id="description-container" class="description-popup">
    <p>This information helps us tailor the recommendations specifically to your skin type and concerns. Understanding your unique needs ensures that the products we suggest will be most effective for you.</p>
</div>

<body>
    <main>
        <section class="welcome-section">
            <header>Skinrecs</header>
            <h2>What skincare product are you interested in?</h2>
            <div class="age-options">
                <button class="age-button" type="button" onclick="selectProduct('Cleanser')">Cleanser</button>
                <button class="age-button" type="button" onclick="selectProduct('Toner')">Toner</button>
                <button class="age-button" type="button" onclick="selectProduct('Serum')">Serum</button>
                <button class="age-button" type="button" onclick="selectProduct('Moisturiser')">Moisturiser</button>
                <button class="age-button" type="button" onclick="selectProduct('Sunscreen')">Sunscreen</button>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            &copy; 2024 SkinRecs. All rights reserved.
        </div>
    </footer>

    <script>
        function selectProduct(productRange) {
            localStorage.setItem('selectedProduct', productRange);
            window.location.href = 'age.php';
        }
    </script>

    <script src="../php/infobubble.js"></script>
</body>
</html>
