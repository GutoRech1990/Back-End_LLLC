<?php
include 'config.php';
session_start();
// Initialiser le tableau des étudiants s'il n'existe pas
// if (!isset($_SESSION['students'])) {
//     $_SESSION['students'] = [];
// }
// Fonction pour ajouter un étudiant
function addStudent($name, $age, $grade)
{
    if (!empty($name) && !empty($age) && !empty($grade)) {
        try {
            $conn = connectDB();
            $sql = "INSERT INTO students (name, age, grade) VALUES (:name, :age, :grade)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':age' => $age,
                ':grade' => $grade
            ]);
        } catch (PDOException $e) {
            echo "Erro ao adicionar estudante: " . $e->getMessage();
        }
    }
}




// Fonction pour mettre à jour un étudiant
function updateStudent($oldName, $name, $age, $grade)
{
    try {
        $conn = connectDB();
        $sql = "UPDATE students SET name = :name, age = :age, grade = :grade WHERE name = :oldName";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':age' => $age,
            ':grade' => $grade,
            ':oldName' => $oldName
        ]);
    } catch (PDOException $e) {
        echo "Erro ao atualizar estudante: " . $e->getMessage();
    }
}
// Fonction pour supprimer un étudiant
function removeStudent($name)
{
    try {
        $conn = connectDB();
        $sql = "DELETE FROM students WHERE name = :name";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':name' => $name]);
    } catch (PDOException $e) {
        echo "Erro ao remover estudante: " . $e->getMessage();
    }
}


// Função para listar todos os estudantes
function getAllStudents()
{
    try {
        $conn = connectDB();
        $sql = "SELECT * FROM students";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro ao listar estudantes: " . $e->getMessage();
        return [];
    }
}

// Fonction pour calculer la moyenne des notes
function calculateAverageGrade()
{
    try {
        $conn = connectDB();
        $sql = "SELECT AVG(grade) as average FROM students";
        $stmt = $conn->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['average'] ?? 0;
    } catch (PDOException $e) {
        echo "Erro ao calcular média: " . $e->getMessage();
        return 0;
    }
}
// Traitement des formulaires
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        // Traitement de l'ajout d'un nouvel étudiant
        if ($_POST['action'] === 'add') {
            addStudent($_POST['name'], $_POST['age'], $_POST['grade']);
        }
        // Traitement de la mise à jour d'un étudiant existant
        else if ($_POST['action'] === 'update') {
            updateStudent(
                $_POST['old_name'],
                $_POST['name'],
                $_POST['age'],
                $_POST['grade']
            );
        }
        // Traitement de la suppression d'un étudiant
        else if ($_POST['action'] === 'remove') {
            removeStudent($_POST['name']);
        }
        // Si l'action n'est pas reconnue, on ne fait rien
        else {
            // On pourrait ajouter un message d'erreur ici
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de Gestion des Étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        max-width: 800px;
        margin: 2rem auto;
    }

    .form-control {
        max-width: 400px;
    }

    .card {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: 2px solid #e9ecef;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Système de Gestion des Étudiants</h1>
        <div class="card mb-4">
            <div class="card-header">
                Ajouter un Nouvel Étudiant
            </div>
            <div class="card-body">
                <form method="POST" class="mx-auto" action="<?php echo
                                                            htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                    <input type="hidden" name="action" value="add">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Âge :</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                    </div>
                    <div class="mb-3">
                        <label for="grade" class="form-label">Note :</label>
                        <input type="number" class="form-control" id="grade" name="grade" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter
                        l'étudiant</button>
                </form>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                Liste des Étudiants
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Âge</th>
                                <th>Note</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $students = getAllStudents();
                            foreach ($students as $student): ?>
                            <tr>
                                <td><?php echo
                                        htmlspecialchars($student['name']); ?></td>
                                <td><?php echo
                                        htmlspecialchars($student['age']); ?></td>
                                <td><?php echo
                                        htmlspecialchars($student['grade']); ?></td>
                                <td>
                                    <form method="POST" style="display:inline;"
                                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                                        <input type="hidden" name="action" value="remove"><input type="hidden"
                                            name="name" value="<?php echo htmlspecialchars($student['name']); ?>">
                                        <button type="submit" class="btn btndanger btn-sm">Supprimer</button>
                                    </form>
                                    <button type="button" class="btn btnwarning btn-sm"
                                        onclick="fillUpdateForm('<?php echo htmlspecialchars($student['name']); ?>', '<?php echo htmlspecialchars($student['age']); ?>', '<?php echo htmlspecialchars($student['grade']); ?>')">Modifier</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                Modifier un Étudiant
            </div>
            <div class="card-body">
                <form method="POST" class="mx-auto" action="<?php echo
                                                            htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="old_name" id="update_old_name">
                    <div class="mb-3">
                        <label for="update_name" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="update_name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="update_age" class="form-label">Âge :</label>
                        <input type="number" class="form-control" id="update_age" name="age" required>
                    </div>
                    <div class="mb-3">
                        <label for="update_grade" class="form-label">Note
                            :</label>
                        <input type="number" class="form-control" id="update_grade" name="grade" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Modifier
                        l'étudiant</button>
                </form>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                Moyenne des Notes
            </div>
            <div class="card-body">
                <p class="mb-0">La moyenne des notes est : <?php echo number_format(calculateAverageGrade(), 2); ?></p>
            </div>
        </div>
    </div>
    <script>
    function fillUpdateForm(name, age, grade) {
        document.getElementById('update_old_name').value = name;
        document.getElementById('update_name').value = name;
        document.getElementById('update_age').value = age;
        document.getElementById('update_grade').value = grade;
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>