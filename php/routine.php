<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinRecs - Recommendations</title>
    <link rel="stylesheet" href="../css/site.css">
</head>

<body>
    <div class="container">
        <h1>Recommended Products for You</h1>
        <div id="recommendations"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            loadRecommendations();

            // Add event listener to the button to navigate to the homepage
            const backButton = document.querySelector('.age-button');
            backButton.addEventListener('click', function() {
                window.location.href = 'index.php'; // Adjust this to the correct path of your homepage
            });
        });

        function loadRecommendations() { 
            const age = localStorage.getItem('selectedAge');
            const skinType = localStorage.getItem('selectedSkinType');
            const skinColor = localStorage.getItem('selectedSkinColor');
            const concerns = JSON.parse(localStorage.getItem('selectedConcerns')) || [];
            const goals = JSON.parse(localStorage.getItem('selectedGoals')) || [];
            const budget = localStorage.getItem('selectedBudget');
            const fragranceFree = localStorage.getItem('selectedFragrance') === 'true';  // Convert string to boolean
            const allergies = JSON.parse(localStorage.getItem('selectedAllergies')) || [];

            console.log('Loaded User Preferences:', {
                age, skinType, skinColor, concerns, goals, budget, fragranceFree, allergies
            });

            const products = [
                {
                    name: 'The Ordinary Niacinamide 10% + Zinc 1%',
                    productType: ['Serum'],
                    ageRange: ['Under 18', '18-24', '25-34', '35-44', '45+'],
                    skinColors: ['Fair', 'Light', 'Medium', 'Olive', 'Brown', 'Dark'],
                    skinTypes: ['Oily', 'Combination', 'Acne-prone'],
                    concerns: ['Acne or blemishes', 'Redness or sensitivity', 'Dullness or uneven texture'],
                    goals: ['Clearer skin', 'Reduced redness', 'Hydrated and plump skin'],
                    budget: ['Less than £25 per product'],
                    allergies: [],  
                    fragranceFree: true,
                    imageUrl: '../images/niacinamide.avif'
                }, 

                {
                    name: 'COSRX Advanced Snail 92 All in One Moisturising Cream 100g',
                    productType: ['Moisturiser'],
                    ageRange: ['Under 18', '18-24', '25-34', '35-44', '45+'],
                    skinColors: ['Fair', 'Light', 'Medium', 'Olive', 'Brown', 'Dark'],
                    skinTypes: ['Oily', 'Combination', 'Acne-prone'],
                    concerns: ['Fine lines or wrinkles', 'Excess oil'],
                    goals: ['Clearer skin', 'Fewer wrinkles', 'Hydrated and plump skin'],
                    budget: ['Less than £25 per product'],
                    allergies: [],
                    fragranceFree: true,
                    imageUrl: '../images/cosrx.webp'
                },
                {
                    name: 'The Ordinary Alpha Arbutin 2% + HA',
                    productType: ['Serum'],
                    ageRange: ['Under 18', '18-24', '25-34', '35-44', '45+'],
                    skinColors: ['Fair', 'Light', 'Medium', 'Olive', 'Brown', 'Dark'],
                    skinTypes: ['Normal' , 'Oily', 'Dry', 'Combination', 'Sensitive', 'Acne-prone'],
                    concerns: ['Dark spots or hyperpigmentation'],
                    goals: ['Brighter complexion', 'More even skin tone'],
                    budget: ['Less than £25 per product'],
                    fragranceFree: true,
                    allergies: [],
                    imageUrl: '../images/alpha_arbutin.avif'
                },
                {
                    name: 'Sunbum - Original Premium Moisturizing Sunscreen Lotion SPF30 177ml',
                    productType: ['Sunscreen'],
                    ageRange: ['Under 18', '18-24', '25-34', '35-44', '45+'],
                    skinColors: ['Fair', 'Light', 'Medium', 'Olive', 'Brown', 'Dark'],
                    skinTypes: ['Oily'],
                    concerns: ['Sun Protection'],
                    goals: ['Sun Protection'],
                    budget: ['Less than £25 per product'],
                    fragranceFree: true,
                    allergies: [],
                    imageUrl: '../images/sunbum.webp'
                },
                {
                    name: 'Simple - Kind to Skin Refreshing Facial Gel Wash',
                    productType: ['Cleanser'],
                    ageRange: ['Under 18', '18-24', '25-34', '35-44', '45+'],
                    skinColors: ['Fair', 'Light', 'Medium', 'Olive', 'Brown', 'Dark'],
                    skinTypes: ['Sensitive', 'Dry'],
                    concerns: ['Dryness', 'Sensitivity'],
                    goals: ['Hydrated and plump skin'],
                    budget: ['Less than £25 per product'],
                    fragranceFree: true,
                    allergies: [],
                    imageUrl: '../images/simple_gel.png'
                }
            ];

            const userInput = {
                age: age,
                skinType: skinType,
                skinColor: skinColor,
                concerns: concerns,
                goals: goals,
                budget: budget,
                fragranceFree: fragranceFree,
                allergies: allergies
            };

            const matchedProducts = products.filter(product => {
                return (
                    product.ageRange.includes(userInput.age) &&
                    product.skinTypes.includes(userInput.skinType) &&
                    product.skinColors.includes(userInput.skinColor) &&
                    product.budget.includes(userInput.budget) &&
                    (userInput.fragranceFree === product.fragranceFree || !userInput.fragranceFree) &&
                    userInput.allergies.every(allergy => !product.allergies.includes(allergy)) &&
                    userInput.concerns.every(concern => product.concerns.includes(concern)) &&
                    userInput.goals.every(goal => product.goals.includes(goal))
                );
            });

            console.log('Matched Products:', matchedProducts);

            const recommendationsDiv = document.getElementById('recommendations');
            recommendationsDiv.innerHTML = '';

            if (matchedProducts.length > 0) {
                matchedProducts.forEach(product => {
                    const productItem = document.createElement('div');
                    productItem.className = 'product-item';

                    const productImage = document.createElement('img');
                    productImage.src = product.imageUrl;
                    productImage.alt = product.name;
                    productImage.style.width = '150px'; 

                    const productName = document.createElement('p');
                    productName.textContent = product.name;

                    productItem.appendChild(productImage);
                    productItem.appendChild(productName);
                    recommendationsDiv.appendChild(productItem);
                });
            } else {
                recommendationsDiv.innerHTML = '<p>No matching products found based on your preferences.</p>';
            }
        }
    </script>
    <button type="submit" class="age-button" style="margin-top: 20px; width: 150px;">Back to homepage</button>
</body>
</html>
