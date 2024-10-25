// Function to Show Description
function showDescription() {
    const description = document.getElementById('description-container');
    description.style.display = 'block';
    
    // Hide the description after 10 seconds
    setTimeout(() => {
        description.style.display = 'none';
    }, 10000); // 10000 milliseconds = 10 seconds
}
