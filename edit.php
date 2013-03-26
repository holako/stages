<? require_once "{$_SERVER['DOCUMENT_ROOT']}/controllers/show.php" ?>
<? require_once "{$_SERVER['DOCUMENT_ROOT']}/controllers/index_profils.php"; /*print_r($profils)*/ ?>
<!doctype html>
<html>
  <head><title>Modifier personne</title><meta charset="utf-8"></head>
  <body>
    <form action="controllers/update.php" method="post">
      <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
      <table border="0">
        <thead>
          <tr>
            <td>C.I.N.</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
            <td>Login</td>
            <td>Password</td>
            <td>Profil</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <? extract($pers) ?>
            <td><input name="cin"    value="<?= $cin ?>" />   </td>
            <td><input name="nom"    value="<?= $nom ?>" />   </td>
            <td><input name="prenom" value="<?= $prenom ?>" /></td>
            <td><input name="email" value="<?= $email ?>" /></td>
            <td><input name="login" value="<?= $login ?>" /></td>
            <td><input name="password" value="<?= $password ?>" /></td>
            <td>
              <select name="profil" required>
                <? foreach ($profils as $k => $v): ?>
                  <option value="<?= $k ?>" <?= $k == $id_profil ? 'selected' : ''?>>
                      <?= $v ?>
                  </option>
                <? endforeach ?>
              </select>
            </td>
          </tr>

        </tbody>
      </table>
      <input type="submit" />
    </form>
  </body>
</html>

