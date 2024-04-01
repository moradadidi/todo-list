<?php
$item = [];

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $sqlstate = $pdo->prepare('SELECT * FROM items WHERE id=?');
    $sqlstate->execute([$id]);
    $item = $sqlstate->fetch(PDO::FETCH_ASSOC);
}
?>

<div class="border border-dar p-2 m-4">
    <h2>Modifier Tache:</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?= $item['id'] ?? '' ?>">
        <div class="col-auto">
            <label for="title" class="col-form-label">Title</label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control" value="<?= $item['titre'] ?? '' ?>" name="title">
        </div>
        <div class="col-auto">
            <span class="form-text">
                NEW titre
            </span>
        </div>
        <div class="col-auto">
            <input type="submit" value="Modifier" class="btn btn-primary my-3" name="update">
        </div>
    </form>
</div>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $sqlstate = $pdo->prepare('UPDATE items SET titre=? WHERE id=?');
    $result = $sqlstate->execute([$title, $id]);
}
?>