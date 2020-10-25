<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?php echo $judul; ?> </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- container buat nav di geserke mid -->
        <div class="container">
            <img src="https://ppdb.mtsn1tegal.sch.id/_assets/images/logo.png" height="30" width="30" class="mr-2">
            <a class="navbar-brand" href="<?= base_url(); ?>"> MTs Negeri Pemalang</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>siswa">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url(); ?>visi">Visi dan Misi</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>profile">Team</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>contact">Contact</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>maps">Maps</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
