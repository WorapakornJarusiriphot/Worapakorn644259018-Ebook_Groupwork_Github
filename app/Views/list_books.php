<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Books</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<?= view('templates/header') ?>

<div class="container mt-5">
    <h2>List of Books</h2>
    <div class="row">
        <?php foreach($books as $book): ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('uploads/' . $book['cover_image']) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($book['title']) ?></h5>
                        <p class="card-text"><?= esc($book['author']) ?></p>
                        <a href="<?= site_url('books/viewBook/' . $book['id']) ?>" class="btn btn-primary">View PDF</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Content of your page here -->

<?= view('templates/footer') ?>
</body>
</html>
