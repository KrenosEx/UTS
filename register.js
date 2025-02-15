document.getElementById('registerForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  try {
    const response = await fetch('/UserController.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ username, password, action: "register" })
    });

    if (response.ok) {
      const data = await response.json(); 
      if (data.success) { 
        window.location.href = 'dashboard.php'; 
      } else {
        alert(data.message || 'Registration failed'); 
      }
    } else {
      alert('Registration failed. Server error.');
    }
  } catch (error) {
    console.info('Error:', error);
    alert('An error occurred during registration.');
  }

});
  