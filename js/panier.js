// Sélectionnez l'élément du panier
const cartButton = document.getElementById('cart-button');

// Ajoutez un gestionnaire d'événements au clic sur le panier
cartButton.addEventListener('click', function() {
  // Créez une nouvelle URL avec les articles ajoutés
  const newURL = 'https://yhumisunstra.com/panier.html?articles=' + encodeURIComponent(JSON.stringify(cartItems));
  
  // Redirigez l'utilisateur vers la nouvelle page
  window.location.href = newURL;
});