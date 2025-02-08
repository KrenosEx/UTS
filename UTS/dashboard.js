document.getElementById('logout').addEventListener('click', () => {
    window.location.href = 'login.php';
  });
  
  async function fetchBooks() {
    const response = await fetch('/books');
    const books = await response.json();
  
    const tableBody = document.querySelector('#bookTable tbody');
    tableBody.innerHTML = '';
  
    books.forEach((book, index) => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${index + 1}</td>
        <td><img src="${book.photo || ''}" alt="Book Photo" width="50"></td>
        <td>${book.title}</td>
        <td>${book.author}</td>
        <td>${book.publisher}</td>
        <td>${book.number_of_page}</td>
        <td>
          <button onclick="viewBook('${book._id}')">View</button>
          <button onclick="editBook('${book._id}')">Edit</button>
          <button onclick="deleteBook('${book._id}')">Delete</button>
        </td>
      `;
      tableBody.appendChild(row);
    });
  }
  
  fetchBooks();
  
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
  