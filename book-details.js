async function fetchBookDetails() {
    const urlParams = new URLSearchParams(window.location.search);
    const bookId = urlParams.get('id');
    
    const response = await fetch(`/books/${bookId}`);
    const book = await response.json();
  
    const bookDetails = document.getElementById('bookDetails');
    bookDetails.innerHTML = `
      <p><strong>Title:</strong> ${book.title}</p>
      <p><strong>Author:</strong> ${book.author}</p>
      <p><strong>Publisher:</strong> ${book.publisher}</p>
      <p><strong>Number of Pages:</strong> ${book.number_of_page}</p>
    `;
  }
  
  fetchBookDetails();
  