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
            <h2>Do you have any known allergies or sensitivities to skincare ingredients?</h2>
            <div class="age-options">
                <div class="age-option">
                <button class="age-button" type="button" onclick="selectAllergy('Yes, please specify')">Yes, please specify</button>
                    <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br>
                </div>    

                <div class="age-options">
                    <button class="age-button" type="button" onclick="selectAllergy('No')">No</button>
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
        function selectAllergy(allergyRange) {
            localStorage.setItem('selectedAllergy', allergyRange);
            window.location.href = 'routine.php';
        }
    </script>

</body>
</html>
