<?php
// Authentification simple
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin-login.php');
    exit;
}

$artists = [
    ['id' => 1, 'name' => 'Big Midrah', 'country' => 'Sénégal', 'votes' => 42000, 'image' => 'images/ar1.png'],
    // Ajoutez plus dartistes...
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Afro Trap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3 sidebar" style="width: 250px; min-height: 100vh;">
            <h4 class="text-warning mb-4">Admin Afro Trap</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="admin.php">Tableau de bord</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=artists">Artistes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=editions">Éditions</a>
                </li>
                <li class="nav-item mt-4">
                    <a class="nav-link text-danger" href="admin.php?logout=1">Déconnexion</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <h2 class="mb-4">Gestion des Artistes</h2>
            
            <!-- Ajout d'artiste -->
            <div class="card mb-4">
                <div class="card-header bg-warning">
                    <h5 class="mb-0">Ajouter un artiste</h5>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nom</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Pays</label>
                                <select name="country" class="form-select" required>
                                    <option value="Sénégal">Sénégal</option>
                                    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                    <option value="France">France</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Photo</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Liste des artistes -->
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Liste des artistes</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Pays</th>
                                    <th>Votes</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($artists as $artist): ?>
                                <tr>
                                    <td><?= $artist['id'] ?></td>
                                    <td><?= $artist['name'] ?></td>
                                    <td><?= $artist['country'] ?></td>
                                    <td><?= number_format($artist['votes']) ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Éditer</a>
                                        <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php
// Authentification simple
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin-login.php');
    exit;
}

$artists = [
    ['id' => 1, 'name' => 'Big Midrah', 'country' => 'Sénégal', 'votes' => 42000, 'image' => 'images/ar2.png'],
    // Ajoutez plus d'artistes...
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Afro Trap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3 sidebar" style="width: 250px; min-height: 100vh;">
            <h4 class="text-warning mb-4">Admin Afro Trap</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="admin.php">Tableau de bord</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=artists">Artistes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?page=editions">Éditions</a>
                </li>
                <li class="nav-item mt-4">
                    <a class="nav-link text-danger" href="admin.php?logout=1">Déconnexion</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <h2 class="mb-4">Gestion des Artistes</h2>
            
            <!-- Ajout d'artiste -->
            <div class="card mb-4">
                <div class="card-header bg-warning">
                    <h5 class="mb-0">Ajouter un artiste</h5>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nom</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Pays</label>
                                <select name="country" class="form-select" required>
                                    <option value="Sénégal">Sénégal</option>
                                    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                    <option value="France">France</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Photo</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Liste des artistes -->
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Liste des artistes</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Pays</th>
                                    <th>Votes</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($artists as $artist): ?>
                                <tr>
                                    <td><?= $artist['id'] ?></td>
                                    <td><?= $artist['name'] ?></td>
                                    <td><?= $artist['country'] ?></td>
                                    <td><?= number_format($artist['votes']) ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Éditer</a>
                                        <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>