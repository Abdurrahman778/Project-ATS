<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mencari Kelipatan 5</title>
    <style>
        body {
            background-color:slategray;
            display : flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            height : 100%;
            padding:0;
            margin:0;
        }
        .container-md {
            padding
            height : 100vh auto;
            width : 30%;
            display : flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            border-radius:25px;
            background-color:var(--bs-secondary-color);
            color : white;
        }
        .col-md-4 {
            width: 30rem ;
        }
        .form-control {
            background-color:var(--bs-secondary-bg);
        }
        .form-text {
            color:white;
        }
        .wrapper {
            width:35rem;
        }
    </style>
</head>
<body>
    <div class="container-md text-center m-5 text-wrap"> 
        <h1>Kelipatan 5</h1>
        <div class="col-md-4">
            <form action="" method="POST">
            <div class="mb-3 >
                <label for="formGroupExampleInput" class="form-label">Mencari Kelipatan 5</label>
                <input type="number" name="nilai"  class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nilai" required>
                <div id="emailHelp" class="form-text">Silahkan Masukan Angka Berapapun</div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary mb-3 btn-lg">TAMPILKAN</button>
            </form> 
            <div class="bg-black wrapper">
                <?php
                if (isset($_POST['submit']) && $_POST['nilai'] !== "") {
                    $nilai = $_POST['nilai'];
                    $nilai = floor($nilai/5);
                    $text = "";
                    for ($i=1; $i <= $nilai ; $i++) { 
                        $lipat = 5 * $i;
                        //$text .= " kelipatan ke-" . $i . " : ". $lipat . "<br>";
                        $text .= " 
                        <div class=' d-flex justify-content-flex-start align-items-center p-2 mb-2 bg-light-subtle text-wrap' style='height:50px; border-radius:20px;'>
                        <p class='badge text-bg-primary m-2 z-1' style='border-radius:50%; font-size:1.5rem ;'>$i </p> 
                        <span class='text-black'> kelipatan ke-  $i   :   $lipat  <br> </span>
                        </div>
                        ";
                    }
                    echo $text;
                    return;
                    } 
                    else {
                        echo '<div class="alert alert-danger" role="alert">
                        Kamu Harus Memasukan Sebuah Angka!
                      </div>';
                    }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>