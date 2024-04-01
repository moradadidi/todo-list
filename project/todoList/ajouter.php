<?php
                $title = '';
                if (isset($_POST['ajouter'])) {
                    $title = htmlspecialchars($_POST['title']);
                    if (!empty($title)) {
                        $todo_state = $pdo->prepare('INSERT INTO items VALUE(null,?)');
                        $success = $todo_state->execute([$title]);
                        // var_dump($success);
                ?>
                        <div class="alert alert-success" role="alert">
                            the title submited is : <span><?= $title; ?></span>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            the title required!
                        </div>
                <?php
                    }
                }
                ?>