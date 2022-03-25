<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ajout User</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../css/login.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../images/favicon.ico" />
  </head>
  <body>
    <div class="login-box">
    <img src="../images/favicon.ico" class="avatar">
        <h1>AJOUTER UN Utilisateur</h1>
            <form method="POST" action="{{route('register')}}">
            @csrf
            <p>Nom</p>
            <input type="text" name="name" placeholder="Entrer Nom" required>
            <p>Pseudo</p>
            <input type="text" name="pseudo" placeholder="Entrer Pseudo" required>
            <p>Email</p>
            <input type="text" name="email" placeholder="Entrer Email" required>
            <p>Mot de passe</p>
            <input type="password" name="password" placeholder="Entrer Password" required>
            <br><br>
            <button type="submit">Login</button>
            </form>


        </div>

    </body>
</html>
