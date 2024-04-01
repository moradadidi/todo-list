<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <?php include_once "nav.php" ?>
    <?php require_once "databases.php";
            require_once "ajouter.php";
    ?>
    <div class="container">
        <section>
            <div class="row g-3 align-items-center mt-4">
                
                <form method="post">
                    <div class="border border-dar p-2 m-4">
                        <h2>Ajouter Tache:</h2>
                        <div class="col-auto">
                            <label for="title" class="col-form-label">Title</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="Entrer Titre" name="title">
                        </div>
                        <div class="col-auto">
                            <span class="form-text">
                                Titre de la tache.
                            </span>
                        </div>
                        <div class="col-auto">
                            <input type="submit" value="Ajouter" class="btn btn-primary my-3" name="ajouter">
                        </div>
                    </div>

                </form>
            </div>
            
            <?php
            $todo_state = $pdo->query('SELECT * FROM items');
            $items = $todo_state->fetchAll(PDO::FETCH_ASSOC);

            ?>
            <?php
            require_once "modifier.php" 
            ?>
            <table class="table table-dark table-hover">
                <!-- <thead>
                    <tr>
                         <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">operation</th> -->
                <!-- </tr>
                </thead> -->
                <tbody>
                    <?php
                    
                    foreach ($items as $item) {
                    ?>
                        <tr>
                            <td><span class="badge rounded-pill bg-primary"> <?= $item['id'] ?></span> </td>
                            <td><?= $item['titre'] ?></td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                    <input class="btn btn-success" type="submit" value="modifier" name="modifier">
                                    <input class="btn btn-danger" type="submit" value='supprimer' name="supprimer">
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_POST['supprimer'])) {
                        require_once 'databases.php';
                        $id = $_POST['id'];
                        $sqlstate = $pdo->prepare('DELETE FROM items WHERE id=?');
                        $result = $sqlstate->execute([$id]);
                        
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
    <footer></footer>
</body>

</html>