<!DOCTYPE html>
<html>
<head>
  <title>CSRF Example</title>
</head>
<body>
  <form method="POST" action="csfr_action.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit"><br><br>
  </form>

  <div id="splash-message"></div>

  <script>
    // get the form element
    const form = document.querySelector('form');

    // add an event listener for form submission
    form.addEventListener('submit', (event) => {
      // prevent default form behavior
      event.preventDefault();

      // get the username and password values
      const username = form.username.value;
      const password = form.password.value;

      // send a POST request to the server
      fetch('csfr_action.php', {
        method: 'POST',
        body: new FormData(form)
      })
      .then(response => response.text())
      .then(data => {
        // display success or failure message
        const splashMessage = document.querySelector('#splash-message');
        if (data === 'success') {
          splashMessage.innerText = 'Form submitted successfully!';
        } else {
          splashMessage.innerText = 'Form submission failed!';
        }
      })
      .catch(error => console.error(error));
    });
  </script>
</body>
</html>



