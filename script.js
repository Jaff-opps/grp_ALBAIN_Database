document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle
    const mobileMenuToggle = document.createElement('button');
    mobileMenuToggle.textContent = '☰';
    mobileMenuToggle.classList.add('mobile-menu-toggle');
    document.querySelector('nav').prepend(mobileMenuToggle);
  
    mobileMenuToggle.addEventListener('click', () => {
      document.querySelector('.nav-links').classList.toggle('show');
    });
  
    // Add to cart functionality
    const addToCartButtons = document.querySelectorAll('.product-card button');
    addToCartButtons.forEach(button => {
      button.addEventListener('click', () => {
        const productName = button.parentElement.querySelector('h3').textContent;
        alert(`Added ${productName} to cart!`);
      });
    });
  
    // Simple search functionality
    const searchIcon = document.querySelector('.search-icon');
    searchIcon.addEventListener('click', () => {
      const searchTerm = prompt('Enter a search term:');
      if (searchTerm) {
        alert(`Searching for: ${searchTerm}`);
      }
    });
  });