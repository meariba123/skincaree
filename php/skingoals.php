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
            <h2>What are your skincare goals? (Select up to 3)</h2>
            <form id="goals-form" onsubmit="return validateSelection()">
                <div class="age-options">
                    <div class="option-container">
                        <img src="../images/normal.jpg" alt="Fair skin color" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="goals" value="Clearer skin">Clearer skin
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/brightskin.jpg" alt="Bright skin color" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="goals" value="Brighter complexion">Brighter complexion
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/evenskin.jpg" alt="Even skin color" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="goals" value="More even skin tone">More even skin tone
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/reduceredness.jpg" alt="Reduce redness" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="goals" value="Reduced redness">Reduced redness
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/reducewrinkles.jpg" alt="Reduce wrinkles" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="goals" value="Fewer wrinkles">Fewer wrinkles
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/hydrated2.jpg" alt="Hydrated skin" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="goals" value="Hydrated and plump skin">Hydrated and plump skin
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/sunprotection.jpg" alt="Sun Protection" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="concerns" value="Sun Protection"> Sun Protection
                        </label>
                    </div>

                    <div class="option-container">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="goals" value="Prefer not to say">Prefer not to say
                        </label>
                    </div>

                    <div class="option-container">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="goals" value="Other">Other
                        </label>
                    </div>
                </div>

                <button type="submit" class="age-button" style="margin-top: 20px;">Submit</button>
            </form>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            &copy; 2024 SkinRecs. All rights reserved.
        </div>
    </footer>

    <script>
        function validateSelection() {
            const checkboxes = document.querySelectorAll('input[name="goals"]:checked');
            if (checkboxes.length > 3) {
                alert("Please select up to 3 options only.");
                return false;
            }
            // Store the selected goals in local storage
            const selectedGoals = [];
            checkboxes.forEach(checkbox => selectedGoals.push(checkbox.value));
            localStorage.setItem('selectedGoals', JSON.stringify(selectedGoals));
            
            // Redirect to the next page
            window.location.href = 'budget.php';
            return false; // Prevent the default form submission
        }
    </script>

</body>
</html>
