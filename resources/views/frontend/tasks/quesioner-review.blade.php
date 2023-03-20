<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="judul-question">
                Lessons Test <br> <br>
                Teori Pengenalan Hukum
                <hr>
                <p>Silahkan Mengerjakan Ujian Dengan Baik dan Benar, Selamat Mengerjakan !</p>
            </div>
            <form action="a">
                <!-- SOAL - START -->
                <div class="soal">
                    <div class="pertanyaan">
                        1. Inventor A adalah seorang yang jenius. Inventor A seorang penemu.
                        Semua penemu adalah kreatif. Inventor B juga seorang penemu.
                    </div>
                    <div class="jawaban">
                        <label class="radio-question salah">Inventor B seorang yang jenius
                            <input type="radio" checked="checked" value="A" name="radio1">
                            <span class="checkmark salah"></span>
                        </label>
                        <label class="radio-question">Inventor B belum tentu kreatif
                            <input type="radio" value="B" name="radio1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Inventor A dan Inventor B sama-sama jenius dan kreatif
                            <input type="radio" value="C" name="radio1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Inventor B pasti kreatif. Dan belum tentu jenius
                            <input type="radio" value="D" name="radio1">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <hr>
                </div>
                <!-- SOAL - END -->

                <!-- SOAL - START -->
                <div class="soal">
                    <div class="pertanyaan">
                        2. Budi lebih ringan beratnya daripada Rudi. Agus lebih berat daripada Rudi.
                    </div>
                    <div class="jawaban">
                        <label class="radio-question benar">Inventor B seorang yang jenius
                            <input type="radio" checked="checked" value="A" name="radio2">
                            <span class="checkmark benar"></span>
                        </label>
                        <label class="radio-question">Inventor B belum tentu kreatif
                            <input type="radio" value="B" name="radio2">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Inventor A dan Inventor B sama-sama jenius dan kreatif
                            <input type="radio" value="C" name="radio2">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Inventor B pasti kreatif. Dan belum tentu jenius
                            <input type="radio" value="D" name="radio2">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <hr>
                </div>
                <!-- SOAL - END -->

                <!-- SOAL - START -->
                <div class="soal">
                    <div class="pertanyaan">
                        3. Jika Siti tidak punya tugas kuliah maka Siti membantu Ibu berjualan
                        kue di pasar pagi.
                    </div>
                    <div class="jawaban">
                        <label class="radio-question">Siti saat ini memiliki tugas kuliah dan pasti akan membantu ibu
                            berjualan di pasar pagi
                            <input type="radio" value="A" name="radio3">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Sekarang Siti tidak punya tugas kuliah, jadi Siti tak perlu ke
                            pasar
                            membantu Ibu berjualan kue
                            <input type="radio" value="B" name="radio3">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Siti sekarang ada di pasar pagi membantu Ibu berjualan kue, karena
                            tidak punya tugas kuliah
                            <input type="radio" value="C" name="radio3">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Siti tidak membantu ibu di pasar pagi karena saya tidak punya
                            tugas
                            kuliah
                            <input type="radio" value="D" name="radio3">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <hr>
                </div>
                <!-- SOAL - END -->

                <!-- SOAL - START -->
                <div class="soal">
                    <div class="pertanyaan">
                        4. Tidak ada ikan Mujair yang punya sungut. Ikan Mujair memiliki duri.
                    </div>
                    <div class="jawaban">
                        <label class="radio-question">Ikan yang tidak bersungut pasti punya duri
                            <input type="radio" value="A" name="radio4">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Ikan yang berduri pasti tidak punya sungut
                            <input type="radio" value="B" name="radio4">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Sungut ada hubungannya dengan duri
                            <input type="radio" value="C" name="radio4">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Andai Mujair punya sungut, maka tidak akan punya duri
                            <input type="radio" value="D" name="radio4">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <hr>
                </div>
                <!-- SOAL - END -->

                <!-- SOAL - START -->
                <div class="soal">
                    <div class="pertanyaan">
                        5. Mustahil seorang wanita punya jenggot. Tidak setiap pria
                        punya jenggot. X berada di kamar gelap dan hanya terlihat dagunya
                        yang tidak berjenggot. Maka..?
                    </div>
                    <div class="jawaban">
                        <label class="radio-question">X bukan pria
                            <input type="radio" value="A" name="radio5">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">Mustahil X adalah seorang wanita
                            <input type="radio" value="B" name="radio5">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">X pasti seorang pria
                            <input type="radio" value="C" name="radio5">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-question">X bisa seorang pria dan bisa pula seorang wanita
                            <input type="radio" value="D" name="radio5">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <hr>
                </div>
                <!-- SOAL - END -->
            </form> <!-- FORM -->

            <div class="tombol-question-pg">
                <a class="red" href="/quesioner-hasil">
                    <button>BACK</button>
                </a>
                <!-- <a href="">
                    <button>PREVIOUS</button>
                </a> -->
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
</body>

</html>