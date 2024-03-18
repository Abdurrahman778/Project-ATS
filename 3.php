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