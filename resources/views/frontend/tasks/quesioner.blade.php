<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/satu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/9a09786d9e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/9a09786d9e.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="assets/css/questioner.css"> -->
    <link rel="stylesheet" href="assets/css/quesioner.css">
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/ukuran.css">
</head>

<body>

    <!-- =============== header-question =============== -->
    <header>
        <div class="header-question">
            <a href="" onclick='backAlert()' id="pen">
                <div class="fa fa-chevron-left fa-2x"></div>
                <span class="header-back-question">pengenalan</span>
            </a>
        </div>
    </header>


    <!-- =============== container-question =============== -->
    <div class="container-question">
        <!-- =============== container-question-KIRI =============== -->
        <div class="question-kiri">
            <!-- =============== CONTENT-1 =============== -->
            <div class="single-page-content active-single-page" id="div1">
                <div class="judul-question">
                    Lessons Test <br> <br>
                    Teori Pengenalan Hukum
                    <hr>
                </div>
                <h2 class="header-quesioner">Rules</h2>
                <br>
                <p class="p-quesioner">Knowledge Check : The theory of legal recognition aims to test your knowledge
                    of what has been learned in this module. </p>

                <p class="p-quesioner width-750">There are 3 questions that must be completed in this knowledge check.
                    The details are as follows:</p>

                <ul class="a ul-quesioner width-500 m-kiri-50">
                    <li>Passing grade : 60 Score</li>
                    <li class="m-atas-10">Exam Duration : 120 menit</li>
                </ul>
                <ul></ul>
                <br>

                <p class="p-quesioner width-750">If you do not meet the passing grade, you can redo the test.</p>

                <p class="p-quesioner width-250">Good luck with your work!</p>

                <button class="attempt m-bawah-50" id="next_peraturan">3 : Attempt</button>
                <!-- <button class="attempt m-bawah-50" name="next_question">3 : Attempt</button> -->
            </div>
            <!-- =============== CONTENT =============== -->

            <!-- =============== CONTENT-2 =============== -->
            <div class="single-page-content" id="div2">
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
                            <label class="radio-question">Inventor B seorang yang jenius
                                <input type="radio" value="A" name="radio1">
                                <span class="checkmark"></span>
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
                            <label class="radio-question">Inventor B seorang yang jenius
                                <input type="radio" value="A" name="radio2">
                                <span class="checkmark"></span>
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
                            <label class="radio-question">Siti saat ini memiliki tugas kuliah dan pasti akan membantu
                                ibu
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
                            <label class="radio-question">Siti sekarang ada di pasar pagi membantu Ibu berjualan kue,
                                karena
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
                <div class="tombol-question-pg d-none" id="tombol_questioner">
                    <button id="next-soal">NEXT</button>
                    <button id="prev-soal">PREVIOUS</button>
                </div>
            </div>
            <!-- =============== CONTENT =============== -->

            <!-- =============== CONTENT-3 =============== -->
            <div class="single-page-content" id="div3">
                <div class="judul-question">
                    <div class="bold font-32">
                        Test : Logika Penalaran
                    </div>
                    <br> <br>
                    Ujian Logika Penalaran
                    <hr>
                    <p class="bold">Logika Berat 6-10 Soal</p>
                </div>
                <form action="#">
                    <!-- SOAL - START -->
                    <div class="soal">
                        <div class="pertanyaan">
                            6. Inventor A adalah seorang yang jenius. Inventor A seorang penemu.
                            Semua penemu adalah kreatif. Inventor B juga seorang penemu.
                        </div>
                        <div class="jawaban">
                            <label class="radio-question">True
                                <input type="radio" value="True" name="radio1">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-question">False
                                <input type="radio" value="False" name="radio1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <hr>
                    </div>
                    <!-- SOAL - END -->

                    <!-- SOAL - START -->
                    <div class="soal">
                        <div class="pertanyaan">
                            7. Budi lebih ringan beratnya daripada Rudi. Agus lebih berat daripada Rudi.
                        </div>
                        <div class="jawaban">
                            <label class="radio-question">True
                                <input type="radio" value="True" name="radio2">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-question">False
                                <input type="radio" value="False" name="radio2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <hr>
                    </div>
                    <!-- SOAL - END -->

                    <!-- SOAL - START -->
                    <div class="soal">
                        <div class="pertanyaan">
                            8. Jika Siti tidak punya tugas kuliah maka Siti membantu Ibu berjualan
                            kue di pasar pagi.
                        </div>
                        <div class="jawaban">
                            <label class="radio-question">True
                                <input type="radio" value="True" name="radio3">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-question">False
                                <input type="radio" value="False" name="radio3">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <hr>
                    </div>
                    <!-- SOAL - END -->

                    <!-- SOAL - START -->
                    <div class="soal">
                        <div class="pertanyaan">
                            9. Tidak ada ikan Mujair yang punya sungut. Ikan Mujair memiliki duri.
                        </div>
                        <div class="jawaban">
                            <label class="radio-question">True
                                <input type="radio" value="True" name="radio4">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-question">False
                                <input type="radio" value="False" name="radio4">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <hr>
                    </div>
                    <!-- SOAL - END -->

                    <!-- SOAL - START -->
                    <div class="soal">
                        <div class="pertanyaan">
                            10. Mustahil seorang wanita punya jenggot. Tidak setiap pria
                            punya jenggot. X berada di kamar gelap dan hanya terlihat dagunya
                            yang tidak berjenggot. Maka..?
                        </div>
                        <div class="jawaban">
                            <label class="radio-question">True
                                <input type="radio" value="True" name="radio5">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-question">False
                                <input type="radio" value="False" name="radio5">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <hr>
                    </div>
                    <!-- SOAL - END -->
                </form> <!-- FORM -->
                <div class="tombol-question-pg" id="tombol_questioner">
                    <button data-toggle="modal" data-target="#exampleModal">NEXT</button>
                    <button id="prev-soal-l">PREVIOUS</button>
                </div>
            </div>
            <!-- =============== CONTENT =============== -->

            <!-- =============== GUNAKAN FORMAT DIBAWAH INI JIKA INGIN MENAMBAH CONTENT BARU =============== -->
            <!-- =============== CONTENT =============== -->
            <!-- <div class="single-page-content" id="div4">

            </div> -->
            <!-- =============== CONTENT =============== -->

        </div>
        <!-- =============== container-question-KIRI =============== -->



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
                        <div class="progress-bar" style="width: 25%" role="progressbar" aria-valuenow="20" aria-valuemin="10" aria-valuemax="100"></div>
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
    <div class="clear"></div>
    </div>
    <!-- =============== container-question =============== -->


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

    <!-- =========== MODAL ========== -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <!-- <div class="modal-body"> -->
        <div class="container-question-modal">
            <!-- <img src="assets/img/close.png" alt=""> -->
            <div class="con-close">
                <a href="#">
                    <div class="close-right"></div>
                </a>
            </div>
            <div class="judul-modal-question">
                Please Double Check Your Answers!
            </div>
            <div class="ket-modal-question">
                If you have checked the answers again, Please press
                the Continue button to continue On to the Next Session!
            </div>
            <div class="auto center">
                <img src="assets/img/modal-question.png" alt="">
            </div>
            <div class="question-tombol-modal">
                <button>Back</button>
                <a href="/quesioner-hasil">
                    <button>Continue</button>
                </a>
            </div>
        </div> <!-- CONTAINER-MODAL-QUESTION -->
        <!-- </div> -->
        <div class="modal-dialog" role="document">
            <div class="modal-content d-none">
            </div>
        </div>
    </div>

    <script>
        const nextButton_peraturan = document.getElementById("next_peraturan");

        const nextButton_soal = document.getElementById("next-soal");
        const prevButton_soal = document.getElementById("prev-soal");

        const nextButton_soal_n = document.getElementById("next-soal-l");
        const prevButton_soal_n = document.getElementById("prev-soal-l");

        const next_button = document.getElementsByName("next_question");

        const divs = document.querySelectorAll(".single-page-content");
        let activeIndex = 0;


        // =============================================
        // BACK--HEADER
        // =============================================
        function backAlert() {
            var yakin = confirm("Are You Sure want to leave the page? cause the data might won’t input in our System");

            if (yakin) {
                document.getElementById("pen").addEventListener("click", () => {
                    document.getElementById("pen").classList.remove("active-single-page");
                    activeIndex--;
                    if (activeIndex < 0) {
                        activeIndex = divs.length - 1;
                    }
                    divs[activeIndex].classList.add("active-single-page");
                });
            };
        }

        divs[activeIndex].classList.add("active-single-page");


        prevButton_soal.addEventListener("click", () => {
            divs[activeIndex].classList.remove("active-single-page");
            activeIndex--;
            if (activeIndex < 0) {
                activeIndex = divs.length - 1;
            }
            divs[activeIndex].classList.add("active-single-page");
            document.getElementById("tombol_questioner").classList.add("d-none");
        });

        nextButton_soal.addEventListener("click", () => {
            divs[activeIndex].classList.remove("active-single-page");
            activeIndex++;
            if (activeIndex > divs.length - 1) {
                activeIndex = 0;
            }
            divs[activeIndex].classList.add("active-single-page");
        });

        nextButton_peraturan.addEventListener("click", () => {
            divs[activeIndex].classList.remove("active-single-page");
            activeIndex++;
            if (activeIndex > divs.length - 1) {
                activeIndex = 0;
            }
            divs[activeIndex].classList.add("active-single-page");
            document.getElementById("tombol_questioner").classList.remove("d-none");
        });

        // =============================================
        // NEXT
        // =============================================
        prevButton_soal_n.addEventListener("click", () => {
            divs[activeIndex].classList.remove("active-single-page");
            activeIndex--;
            if (activeIndex < 0) {
                activeIndex = divs.length - 1;
            }
            divs[activeIndex].classList.add("active-single-page");
        });
        nextButton_soal_n.addEventListener("click", () => {
            divs[activeIndex].classList.remove("active-single-page");
            activeIndex++;
            if (activeIndex > divs.length - 1) {
                activeIndex = 0;
            }
            divs[activeIndex].classList.add("active-single-page");
        });
    </script>
</body>

</html>