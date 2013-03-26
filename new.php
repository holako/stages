<? require_once 'controllers/new.php' ?>
<!doctype html>
<html>
    <head><title>Nouvelle personne</title><meta charset="utf-8"></head>
    <body>
        <form action="controllers/create.php" method="post">
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
                        <td><input name="cin" required></td>
                        <td><input name="nom"></td>
                        <td><input name="prenom"></td>
                        <td><input name="email"></td>
                        <td><input name="login"></td>
                        <td><input name="password"></td>
                        <td>
                            <select name="profil" required>
                                <? while ($v = mysql_fetch_array($profils)): ?>
                                    <option value="<?= $v['id'] ?>">
                                        <?= $v['libelle'] ?>
                                    </option>
                                <? endwhile ?>
                            </select>
                        </td>
                    </tr>

                </tbody>
            </table>
            <input type="submit" />
        </form>
    </body>
</html>