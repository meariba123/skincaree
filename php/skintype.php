<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinRecs - Personalized Skincare</title>
    <link rel="stylesheet" href="../css/site.css">
</head>
<body>
    <main>
        <section class="welcome-section">
            <header>Skinrecs</header>
            <h2>How would you describe your skin type?</h2>
            <div class="age-options">
                <div class="option-container">
                    <img src="../images/normal.jpg" alt="Normal skin type" class="option-image">
                    <button class="age-button" onclick="selectSkinType('Normal')">Normal</button>
                </div>

                <div class="option-container">
                    <img src="../images/oilyskin.jpg" alt="Oily skin type" class="option-image">
                    <button class="age-button" onclick="selectSkinType('Oily')">Oily</button>
                </div>

                <div class="option-container">
                    <img src="../images/dryskin.jpg" alt="Dry skin type" class="option-image">
                    <button class="age-button" onclick="selectSkinType('Dry')">Dry</button>
                </div>

                <div class="option-container">
                    <img src="../images/dryskin.jpg" alt="Combination skin type" class="option-image">
                    <button class="age-button" onclick="selectSkinType('Combination')">Combination</button>
                </div>

                <div class="option-container">
                    <img src="../images/sensitive.jpg" alt="Sensitive skin type" class="option-image">
                    <button class="age-button" onclick="selectSkinType('Sensitive')">Sensitive</button>
                </div>

                <div class="option-container">
                    <img src="../images/acneprone.jpg" alt="Acne-prone skin type" class="option-image">
                    <button class="age-button" onclick="selectSkinType('Acne-prone')">Acne-prone</button>
                </div>

                <button class="age-button" onclick="selectSkinType('Prefer not to say')">Prefer not to say</button>
                <button class="age-button" onclick="selectSkinType('Other')">Other</button>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            &copy; 2024 SkinRecs. All rights reserved.
        </div>
    </footer>

    <script>
        function selectSkinType(skintypeRange) {
            localStorage.setItem('selectedSkinType', skintypeRange);
            window.location.href = 'skinconcern.php';
        }
    </script>

</body>
</html>
