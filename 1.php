<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Mencari Kelipatan 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .nilai {
            width: 3rem;
            height: 3rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn {
            height:5rem;
        }
        .form-control {
            height:5rem;
        }
    </style>
</head>
<body style="background-color:slategray;">
<div class="container mt-5 pt-5 ">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card bg-dark text-white text-center">
                <div class="card-body">
                    <h1>KELIPATAN 5</h1>
                    <form action="" method="POST">
                        <input type="number" name="nilai" id="" class="form-control my-3 py-2" placeholder="Masukan Nilai">
                        <div class="text-center mt-3 d-grid ">
                            <button type="submit" name="submit" class="btn btn-primary ">
                                Proses
                            </button>
                        </div>
                        <h4 class="my-3">Kelipatan 5: </h4>
                    </form>
                    
                    <div>
                    <?php
                        if (isset($_POST['submit']) && $_POST['nilai'] !== "") {
                            $nilai = $_POST['nilai'];
                            $nilai = floor($nilai/5);
                            $text = "";
                            for ($i=1; $i <= $nilai ; $i++) { 
                            $lipat = 5 * $i;
                            $text .= " 
                            <div class='card my-3 bg-secondary text-white'>
                                <div class='card-body d-flex align-items-center'>
                                    <h3 class='m-0 nilai bg-primary rounded-circle text-white'>$i</h3>
                                    <p class=' ms-2 mb-0'>Kelipatan Ke-$i : $lipat</p>
                                </div>
                            </div>
                        ";
                    }
                    echo $text;
                    return;
                    } 
                    else {
                        echo '
                        <div class="alert alert-danger my-3" role="alert">
                            Kamu Harus Memasukan Sebuah Angka!
                        </div>';
                    }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>