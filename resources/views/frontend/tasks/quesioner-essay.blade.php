<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <SCRIPT language='JavaScript'>alert("Your answer has been entered and is being processed for evaluation!");</SCRIPT>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/balloon-block/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/balloon-block/ckeditor.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script>src="https://cdn.tiny.cloud/1/stcazhs0yosrg30xlg4h5wqz42yf4qjzqxuu2ihblwav9j7n/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/9a09786d9e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/quesioner.css">
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/ukuran.css">
    <title>Document</title>

</head>

<body>
    <!-- =============== header-question =============== -->
    <header>
        <div class="header-question">
            <a href="#">
                <div class="fa fa-chevron-left fa-2x"></div>
                <span class="header-back-question">pengenalan</span>
            </a>
        </div>
    </header>


    <!-- =============== container-question =============== -->
    <div class="container-question">
        <!-- =============== container-question-KIRI =============== -->
        <div class="question-kiri">
            <div class="judul-question m-bawah-30">
                <div class="bold font-32">
                    Test : Logika Penalaran
                </div>
                <br> <br>
                Ujian Logika Penalaran
                <hr>
                <p class="bold">Logika Keras ESSAY</p>
                <b class="font-24 m-atas-20">Mustahil seorang wanita punya jenggot. Tidak setiap pria
                    punya jenggot. X berada di kamar gelap dan hanya terlihat dagunya
                    yang tidak berjenggot. Maka..?</b>
            </div>
            <form action="#">
                <div class="container mt-4 mb-4">
                    <!--Bootstrap classes arrange web page components into columns and rows in a grid -->
                    <div class="row justify-content-md-center">
                        <div class="col-lg-12 ">
                            <div class="form-group">
                                <textarea id="editor"></textarea>
                            </div>
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        </div>
                    </div>
                </div>
            </form> <!-- FORM -->

            <!-- <div class="height-100" id="editor">
                <br><br><br><br><br><br><br><br>
            </div> -->

            <div class="tombol-question-pg m-atas-50">
                <a class="red">
                    <button>NEXT</button>
                </a>
                <a href="/quesioner-hasil">
                    <button>PREVIOUS</button>
                </a>
            </div>

        </div> <!-- QUESTION - KIRI -->



        <!-- =============== container-question-KANAN =============== -->
        <div class="question-kanan">
            <!-- ========== PAGE - LIST ========== -->
            <div class="page-list">
                <div class="judul-page-list">Page List</div>
                <hr>
                <div class="number-soal">
                    <div class="number sukses">1-5</div>
                    <div class="number">6-10</div>
                    <div class="number">11-15</div>
                    <div class="number">16-20</div>
                    <div class="number">21-25</div>
                    <div class="number">26-30</div>
                </div>
            </div>

            <!-- ========== LIST - MATERI ========== -->
            <div class="list-materi-container">
                <div class="progress-materi-container">
                    <div class="progress auto" style="max-width: 258px;max-height: 10px;background-color: #2D3260;">
                        <div class="progress-bar" style="width: 25%" role="progressbar" aria-valuenow="20"
                            aria-valuemin="10" aria-valuemax="100"></div>
                    </div>
                    <div class="persentase-progress">23% Selesai</div>
                    <div class="task-complete-progress">1/9</div>
                </div>
                <div class="task-list-container">
                    <!-- CARA PENGGUNAAN -->
                    <!-- fa-circle-check = untuk ceklis -->
                    <!-- fa-circle = untuk lingkaran saja -->
                    <!-- LIST - START -->
                    <div class="list">
                        <div class="fa-regular fa-circle-check"></div>
                        <div class="task">Pengenalan</div>
                    </div>
                    <!-- LIST - END -->

                    <!-- LIST - START -->
                    <div class="list">
                        <div class="fa-regular fa-circle"></div>
                        <div class="task">Pengantar logika dan pelaran Hukum</div>
                    </div>
                    <!-- LIST - END -->

                    <!-- LIST - START -->
                    <div class="list">
                        <div class="fa-regular fa-circle"></div>
                        <div class="task">Teori pengenalan Hukum</div>
                    </div>
                    <!-- LIST - END -->

                    <!-- LIST - START -->
                    <div class="list">
                        <div class="fa-regular fa-circle"></div>
                        <div class="task">Penerapan penalaran Hukum</div>
                    </div>
                    <!-- LIST - END -->

                    <!-- LIST - START -->
                    <div class="list">
                        <div class="fa-regular fa-circle"></div>
                        <div class="task">Legal Reasoning</div>
                    </div>
                    <!-- LIST - END -->

                    <!-- LIST - START -->
                    <div class="list">
                        <div class="fa-regular fa-circle"></div>
                        <div class="task">Ilmu Hukum</div>
                    </div>
                    <!-- LIST - END -->

                    <!-- LIST - START -->
                    <div class="list">
                        <div class="fa-regular fa-circle"></div>
                        <div class="task">Pendapat Hukum</div>
                    </div>
                    <!-- LIST - END -->

                    <!-- LIST - START -->
                    <div class="list">
                        <div class="fa-regular fa-circle"></div>
                        <div class="task">Putusan Hakim</div>
                    </div>
                    <!-- LIST - END -->

                    <!-- LIST - START -->
                    <div class="list">
                        <div class="fa-regular fa-circle"></div>
                        <div class="task">Produk Legalisasi</div>
                    </div>
                    <!-- LIST - END -->
                </div>
            </div>
        </div>
    </div> <!-- Container-Question -->




    <!-- =============== Footer-question =============== -->
    <footer>
        <div class="question-container-footer">
            <div class="auto">EXAM: Tes Logika Penalaran</div>
            <div class="previous-content-footer-question">
                <a href="#">
                    <div class="fa fa-chevron-left fa-2x"></div>
                    <span class="footer-button-position">Penerapan Penalaran Hukum</span>
                </a>
            </div>
            <div class="next-content-footer-question">
                <a href="#">
                    <span class="footer-button-position">Ilmu Hukum</span>
                    <div class="fa fa-chevron-right fa-2x"></div>
                </a>
            </div>
        </div>
    </footer>



    <!-- <script>
        BalloonEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
            // initialValue="Type your question here..."
        });
    </script>
    <!-- <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"
        integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA=="
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>