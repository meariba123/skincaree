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
            <header>SkinRecs</header>
            <h2>What are your primary skincare concerns? (Select up to 3)</h2>
            <form id="concerns-form" onsubmit="return validateSelection()">
                <div class="age-options">
                    <div class="option-container">
                        <img src="../images/darkspots.jpg" alt="Dark Spots" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="concerns" value="Dark spots or hyperpigmentation"> Dark spots or hyperpigmentation
                        </label>
                    </div>
                    
                    <div class="option-container">
                        <img src="../images/unevenskin.jpg" alt="Uneven skin" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="concerns" value="Dullness or uneven texture"> Dullness or uneven texture
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/acneblemishes.jpg" alt="Acne or blemishes" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="concerns" value="Acne or blemishes"> Acne or blemishes
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/oilyskin.jpg" alt="Excess oil" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="concerns" value="Excess oil"> Excess oil
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/dryskin.jpg" alt="Dryness" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="concerns" value="Dryness"> Dryness
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/sensitive.jpg" alt="Redness or sensitivity" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="concerns" value="Redness or sensitivity"> Redness or sensitivity
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/wrinkles.jpg" alt="Fine lines or wrinkles" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="concerns" value="Fine lines or wrinkles"> Fine lines or wrinkles
                        </label>
                    </div>

                    <div class="option-container">
                        <img src="../images/pores.jpg" alt="Enlarged pores" class="option-image">
                        <label class="age-button checkbox-container">
                            <input type="checkbox" name="concerns" value="Enlarged pores"> Enlarged pores
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
                        <input type="checkbox" name="concerns" value="Other"> Other
                    </label>
                </div>

                <div class="option-container">
                    <label class="age-button checkbox-container">
                        <input type="checkbox" name="concerns" value="Prefer not to say">Prefer not to say
                    </label>
                </div>
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
            const checkboxes = document.querySelectorAll('input[name="concerns"]:checked');
            if (checkboxes.length > 3) {
                alert("Please select up to 3 options only.");
                return false;
            }
            // Store the selected concerns in local storage
            const selectedConcerns = [];
            checkboxes.forEach(checkbox => selectedConcerns.push(checkbox.value));
            localStorage.setItem('selectedConcerns', JSON.stringify(selectedConcerns));
            
            // Redirect to the next page
            window.location.href = 'skingoals.php';
            return false; // Prevent the default form submission
        }
    </script>
</body>
</html>
