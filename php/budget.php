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
            <h2>What is your budget for skincare products?</h2>
            <div class="age-options">
                <div class="age-options">
                    <button class="age-button" type="button" onclick="selectBudget('Less than £25 per product')">Less than £25 per product</button>
                </div>

                <div class="age-options">
                    <button class="age-button" type="button" onclick="selectBudget('£25 - £50 per product')">£25 - £50 per product</button>
                </div>

                <div class="age-options">
                    <button class="age-button" type="button" onclick="selectBudget('£50 - £100 per product')">£50 - £100 per product</button>
                </div>   

                <div class="age-options">
                    <button class="age-button" type="button" onclick="selectBudget('Over £100 per product')">Over £100 per product</button>
                </div>

                <div class="age-options">
                    <button class="age-button" type="button" onclick="selectBudget('No preference')">No preference</button>
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
        function selectBudget(ageBudget) {
            localStorage.setItem('selectedBudget', ageBudget);
            window.location.href = 'fragrance.php';
        }
    </script>

</body>
</html>
