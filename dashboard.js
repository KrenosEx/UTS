document.getElementById('logout').addEventListener('click', () => {
    window.location.href = 'login.php';
  });
  
  function viewBook(bookId) {
    window.location.href = `/book-details.php?id=${bookId}`;
  }
  
  function editBook(bookId) {
    window.location.href = `/update-book.php?id=${bookId}`;
  }
  
  async function deleteBook(bookId) {
    const response = await fetch(`/books/delete/${bookId}`, { method: 'DELETE' });
    if (response.ok) {
      fetchBooks();
    } else {
      alert('Failed to delete book');
    }
  }
  