<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do Applikation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="TodoStyle.css">
    <script src="https://cdn.tiny.cloud/1/qohfngyuqlqqqfu28a2gg1nbu3skksd0mke110ukhtd207sk/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'lists link image',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | numlist bullist | link image'
        });
    </script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand text-center" href="index.php">To-Do Applikation</a>
            </div>
        </nav>
    </header>
