document.getElementById('createBookForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  const title = document.getElementById('title').value;
  const author = document.getElementById('author').value;
  const publisher = document.getElementById('publisher').value;
  const number_of_page = document.getElementById('number_of_page').value;

  const response = await fetch('/request.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ title, author, publisher, number_of_page })
  });
  
  if (response.ok) {
    window.location.href = 'dashboard.php';
  } else {
    alert('Failed to create book');
  }
});
  