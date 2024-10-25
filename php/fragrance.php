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
            <h2>Do you prefer fragrance-free products?</h2>
            <div class="age-options">
                <div class="age-options">
                    <button class="age-button" type="button" onclick="selectFragrance('Yes')">Yes</button>
                </div>

                <div class="age-options">
                    <button class="age-button" type="button" onclick="selectFragrance('No')">No</button>
                </div>

                <div class="age-options">
                    <button class="age-button" type="button" onclick="selectFragrance('No preferences')">No preferences</button>
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
        function selectFragrance(fragranceRange) {
            localStorage.setItem('selectedFragrance', fragranceRange);
            window.location.href = 'allergies.php';
        }
    </script>    
    

</body>
</html>
