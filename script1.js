const stars = document.querySelectorAll('.star');

stars.forEach(function(star) {
  star.addEventListener('mouseover', function() {
    highlightStars(this.dataset.rating);
  });
  
  star.addEventListener('mouseout', function() {
    resetStars();
  });
  
  star.addEventListener('click', function() {
    saveRating(this.dataset.rating);
  });
});

function resetStars() {
  stars.forEach(function(star) {
    star.classList.remove('active');
  });
}

function saveRating(rating) {
  console.log('Saving rating:', rating);
  // Replace userId and itemId with the actual user and item IDs
  const userId = 123;
  const itemId = 456;
  // Send the rating data to the PHP file
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '/save-rating.php');
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onload = function() {
    if (xhr.status === 200) {
      console.log('Rating saved successfully');
    } else {
      console.error('Failed to save rating');
    }
  };
  xhr.send(JSON.stringify({
    user_id: userId,
    item_id: itemId,
    rating: rating
  }));
}
