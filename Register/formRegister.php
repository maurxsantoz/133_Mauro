<!--
 * Sources :  getbootstrap.com
 *            https://www.respocert.com/php/php-forms-best-practices
 *            https://www.the-art-of-web.com/html/html5-form-validation/
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : 133 - Register
 * Created  : 25.12.2018 - 10:18
 */
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register form</title>
</head>

<body>
  <form>
    <div>
      <label for="pseudo">Pseudo *</label>
      <input type="text" id="pseudo" aria-describedby="pseudoHelp" placeholder="Enter pseudo" required>
      <small id="pseudoHelp">Pseudo will be shared with other users.</small>
    </div>
    <div>
      <label for="userName">User Name *</label>
      <input type="text" id="userName" aria-describedby="userNameHelp" placeholder="Enter user name" required>
      <small id="userNameHelp">User Name will not be shared.</small>
    </div>
    <div>
      <label for="inputEmail">Email address *</label>
      <input type="email" id="inputEmail" aria-describedby="emailHelp" placeholder="firstname@domain.ch" required>
      <small id="emailHelp">We'll never share your email with anyone else.</small>
    </div>
    <div>
      <label for="inputPassword">Password *</label>
      <input type="password" id="inputPassword" placeholder="Password" required>
    </div>
    <div>
      <label for="inputPhoneNumber">Phone number</label>
      <input type="tel" id="inputPhoneNumber">
    </div>
    <div>
      <input type="checkbox" id="checkNewsLetter" required>
      <label for="checkNewsLetter">Newsletter</label>
    </div>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
