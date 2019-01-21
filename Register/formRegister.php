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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
  <form action="index.php?action=register" method='post'>
    <div class="form-group">
      <label for="pseudo">Pseudo *</label>
      <input class="form-control" type="text" name="pseudo" id="pseudo" aria-describedby="pseudoHelp" placeholder="Enter pseudo" required>
      <small class="form-text text-muted" id="pseudoHelp">Pseudo will be shared with other users.</small>
    </div>
      <div class="form-group">
      <label for="userName">User Name *</label>
      <input class="form-control" type="text" name="userName" id="userName" aria-describedby="userNameHelp" placeholder="Enter user name" required>
      <small class="form-text text-muted" id="userNameHelp">User Name will not be shared.</small>
    </div>
      <div class="form-group">
      <label for="inputEmail">Email address *</label>
      <input class="form-control" type="email" name="email"  id="inputEmail" aria-describedby="emailHelp" placeholder="firstname@domain.ch" required>
      <small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
    </div>
      <div class="form-group">
      <label for="inputPassword">Password *</label>
      <input class="form-control" type="password" name="password"  id="inputPassword" placeholder="Password" required>
    </div>
      <div class="form-group">
      <label for="inputPhoneNumber">Phone number</label>
      <input class="form-control" type="tel" name="tel"  id="inputPhoneNumber">
    </div>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" name="checkbox"  id="checkNewsLetter" required>
      <label class="form-check-label" for="checkNewsLetter">Newsletter</label>
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
</body>
</html>
