<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <a href="#" onclick='backAlert()'>
                <div class="fa fa-chevron-left fa-2x"></div>
                <span class="header-back-question">pengenalan</span>
            </a>
        </div>
    </header>


    <!-- =============== container-question =============== -->
    <div class="container-question">
        <!-- =============== container-question-KIRI =============== -->
        <div class="question-kiri">
            <div class="judul-question">
                Lessons Test <br> <br>
                Teori Pengenalan Hukum
                <hr>
            </div>
        </div> <!-- QUESTION - KIRI -->

        <!-- =============== container-question-HASIL =============== -->
        <div class="container-question-hasil">
            <div class="question-hasil-setengah height-90">
                Total Soal
                <br>
                5
            </div>
            <div class="question-hasil-setengah height-90 f-kanan">
                Jawaban Benar
                <br>
                1
            </div>
            <div class="question-hasil-full height-88 font-24 center" style="line-height: 44px;color: #13DB63;">
                Score
                <br>
                70
            </div>
            <div class="question-hasil-full padding-10 font-12 center">Nilai Anda belum memenuhi <span style="color:red;
            "> syarat kelulusan</span>, untuk mengerjakan
                test selanjutnya, silahkan Anda mengulang kembali testnya.</div>
            <div class="center">

                <a href="/quesioner-review">
                    <button>Review</button>
                </a>
                <br>
                <button>RE-ATTEMPT:2</button>
                <a href="/quesioner-essay">
                    <button class="d-non">CONTINUE</button>
                    <button class="d-none" disabled>CONTINUE</button>
                </a>
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


    <script>
        function backAlert() {
            var yakin = confirm("Are You Sure want to leave the page? cause the data might won’t input in our System");

            if (yakin) {
                window.location = "/quesioner";
            }
        }
    </script>
</body>

</html>