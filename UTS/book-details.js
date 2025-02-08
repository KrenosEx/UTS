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
  


$(document).ready(function () {
  // selection pake id
  // $("#container").text("hello world")

  // innerHTLML
  // $("#container").html("h1<hello world></h1>")

  // Append item
  // const heading1 = $("<h1></h1>").ext("Hello")
  // $$("#container").append(heading1)

  // OnClick Event
  // $("#inputBtn").click(function (e) { 

  //   e.preventDefault();
  //   const inputValue = $("#inputTask").val()

  //   if(inputValue == ""){
  //     alert("Please input value")
  //     return
  //   }

  //   const listItem = $("<li></li>").text(inputValue)
  //   $("#taskList").append(listItem)
  //   $("#inputTask").val("")

  // });

  // $("#heading-1").hover(function () {
  //     // over
  //     $(this).css("color","red")
  //   }, function () {
  //     // out
  //     $(this).css("color","blue")
  //   }
  // );

});