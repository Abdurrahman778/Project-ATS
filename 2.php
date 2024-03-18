<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Kompeten Tidak Kompeten</title>
    <style>
        input {
            width : 3rem 7%;
        }

    </style>
</head>
<body>
<div class="container position-absolute top-50 start-50 translate-middle ">
    <form action="" method="POST" class="row card-group">
        <div class=" card text-center col col-sm-8 col-md-6 m-auto">
            <div class="p-0 card-body  my-3">
                <label for="nama">Masukan Nama</label>
                <input type="text" id="nama" name="nama" placeholder="masukan nama">
                <?php
                    if (isset($_POST['submit'])) {
                        if ( $_POST['nama'] == ''){
                            echo '
                            <div class="alert alert-warning d-flex align-items-center justify-content-center my-3" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                          </svg>
                                Silahkan Masukan Nama Kamu
                            </div>
                            '; 
                        } }
                ?>
            </div>
            <div class=" p-0 card-body">
                <label for="nilai">Masukan Nilai</label>
                <input type="number" id="nilai" name="nilai" placeholder="masukan nilai">
                <?php
                if (isset($_POST['submit'])) {
                    if ($_POST['nilai'] == '') {
                                echo '
                                <div class="alert alert-warning d-flex align-items-center justify-content-center my-3" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                              </svg>
                                    Silahkan Masukan Nilai Kamu
                                </div>
                                '; 
                            }
                } 
                ?>
            </div>
        <div class="">
            <div class="">
                <button class="btn btn-primary my-3" type="submit" name="submit">Proses...</button>
            </div>
        </div>
        </div>

        <div class=" col-12 col-sm-8 col-md-6 m-auto text-center ">
                <div class="">
                <?php
        if (isset($_POST['submit']) && $_POST['nama'] && $_POST['nilai'] !== null ) {
            $nama = $_POST['nama'];
            $nilai = $_POST['nilai'];

            if ($nilai >0 && $nilai <= 70 ) {
                echo "
                <svg xmlns='http://www.w3.org/2000/svg' width='80' height='80' fill='currentColor' class='bi bi-emoji-frown' viewBox='0 0 16 16'>
                <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16'/>
                <path d='M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5'/>
                </svg>
                <h5>$nama</h5>
                    kamu tidak lulus dengan nilai $nilai 
                ";
            } elseif ($nilai > 70 && $nilai <= 100 ) {
                echo "
                <svg xmlns='http://www.w3.org/2000/svg' width='80' height='80' fill='currentColor' class='bi bi-emoji-smile' 'viewBox='0 0 16 16'>
                <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16'/>
                <path d='M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5'/>
                </svg>
                <h5>$nama</h5>
                kamu lulus dengan nilai $nilai
                ";
            } 
        } 
            ?>
                </div>
        </div>
    </form>
</div>
    <script src="script.js"></script>
</body>
</html>