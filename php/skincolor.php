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
    <h2>How would you describe your skin color?</h2>
    <div class="age-options">
        <div class="option-container">
            <div class="skin-tone" style="background-color: #f8e0b3;"></div>
            <button class="age-button checkbox-container" onclick="selectSkinColor('Fair')">Fair</button>
        </div>
        <div class="option-container">
            <div class="skin-tone" style="background-color: #f5d2a6;"></div>
            <button class="age-button checkbox-container" onclick="selectSkinColor('Light')">Light</button>
        </div>
        <div class="option-container">
            <div class="skin-tone" style="background-color: #e1a06d;"></div>
            <button class="age-button checkbox-container" onclick="selectSkinColor('Medium')">Medium</button>
        </div>
        <div class="option-container">
            <div class="skin-tone" style="background-color: #c68642;"></div>
            <button class="age-button checkbox-container" onclick="selectSkinColor('Olive')">Olive</button>
        </div>
        <div class="option-container">
            <div class="skin-tone" style="background-color: #8d5524;"></div>
            <button class="age-button checkbox-container" onclick="selectSkinColor('Brown')">Brown</button>
        </div>
        <div class="option-container">
            <div class="skin-tone" style="background-color: #5a3d2b;"></div>
            <button class="age-button checkbox-container" onclick="selectSkinColor('Dark')">Dark</button>
        </div>
        <div class="option-container">
            <button class="age-button checkbox-container" onclick="selectSkinColor('Prefer not to say')">Prefer not to say</button>
        </div>
        <div class="option-container">
            <button class="age-button checkbox-container" onclick="selectSkinColor('Other')">Other</button>
        </div>
    </div>
</section>
    </main>
    <footer class="footer">
        <div class="container">
            &copy; 2024 SkinRecs. All rights reserved.
        </div>
    </footer>

    <script>
    function selectSkinColor (skincolorRange){
        localStorage.setItem('selectedSkinColor', skincolorRange);
        window.location.href='skintype.php'

    } 
    </script>
    <script src="../php/infobubble.js"></script>
</body>
</html>
