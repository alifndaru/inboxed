<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/img/inboxed.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/ukuran.css" class="style">
    <link rel="stylesheet" href="assets/css/detailing.css">
    <link rel="stylesheet" href="assets/js/show.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <style>
        body{
            background-image: url('assets/img/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            padding-bottom: 20px;
            font-family: 'Lexend', sans-serif, serif;
        }
        .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -25px;
        position: absolute;;
        z-index: 2;
        }

    </style>
</head>
<body>
   
   
        
<!-- =================JUDUL=============== -->
    <div class="garis width-210"></div>
    <div class="head abs pos1">
        <div class="font-45 ">Enhance Your Career with</div>
        <div class="font-70">InboxED</div> 
    </div> <!-- header -->

<!-- =================REGISTRASI=============== -->
<div class="logo-reg" style="margin-top:-30px;"></div>
    <div class="main-container p-bawah-20 container-kanan" style="margin-top:-40px;">
        <div class="head-container p-bawah-20 m-atas-4">
            <h3 class="center p-bawah-20 p-atas-20">Login</h3>
            <div class="m-bawah-4 m-atas-3">
                <h4 class="center wid-inp-1 p-bawah-30">Enter your detail to get sign in <br>to your account</h4>
            </div>

<!-- =================INPUT=============== -->
            <div class="input">

<!-- LOGIN -->  {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                    <input class="wid-inp-6 p-kiri-35" type="email" placeholder="Email" name="email">  
                    <div class="password">
                        <input type="password" class = "wid-inp-6 p-kiri-35" placeholder = "Password"name="password" id="password" />
                        <i class="fas fa-eye" id="togglePassword"></i>
                    </div> 
                    @if ($errors->has('salah'))
                        <style>
                            input::placeholder {
                                color:red;
                            }
                        </style>
                        <div style="color:red" class="message">
                            <p class="message">{{ $errors->first('salah') }}</p>
                        </div>
                    @endif
                    <input type="submit" class="wid-inp-6 btn-submit" value="LOGIN">
                {{ html()->form()->close() }}
                <p class="center wid-inp-6" style="margin-bottom: 10px; margin-top:10px;">or</p>
                <form action="/newregis">
                    <input type="submit" style="border: solid #fff; background: none; color: #fff;" class="wid-inp-6" value="REGISTER" data-bs-toggle="modalprofesi" data-bs-target="#modalprofesi">
                </form>
            </div> 
            
            <div class="wid-inp-1 m-kiri-2 p-kiri">
                <div class="wid-inp-1 m-kiri-2 p-kiri-35">
                    <div class="forgot-pass m-atas-20 hover-link">
                        <a href="/forgot" style="text-decoration: none;" class="forgot "> Forgot Your Password? </a> <br> <br>
                    </div>
            <div class="teacher m-bawah-50 ">
                <p>Are you Teacher? <a href="/teacher/register" style="color: white" class="forgot">CLICK HERE</a></p>
            </div>
            </div>

            <div class="support">
                <p class=" center wid-inp-1 p-atas-30" style="margin-top: 100px;">Need Help?<br>
                    <a href="mailto:support@inboxed.id" class="forgot"> support@inboxed.id</a>
                </p>
            </div>
        </div>
    </div> <!-- container -->

    

    {{-- modal --}}
    @if (Session::has('modal'))

    <script type="text/javascript">
        $(document).ready(function() {
            $('#modalprofesi').modal();
        });
    </script>

    <script>
        function closeModal() {
  // Get the modal element
  const modal = document.getElementById('modalprofesi123');

  // Set the display property to "none" to hide the modal
  modal.style.display = 'none';
}
    </script>

    <div id="modalprofesi123" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

        <div class="main-container container-tengah p-20 p-bawah-20 head" style="height: 250px; position:absolute; margin-left:-520px;">
            <div class="head-container">
                <span class="close"><img src="assets/img/close.png" onclick="closeModal()" id="close" style="position:relative; margin-left:350px; padding-top:10px;"></span>
                {{-- <button onclick="closeModal()" id="close"style="margin-left:350px; margin-top:10px; padding-top:20px;">&times;</button> --}}
                
                <div class="width-48 auto m-bawah-20">
                </div>
                <div class="font-24 m-bawah-20 center">PILIH JENIS PENDAFTARAN</div>

                <a href="/courses">
                    <div class="center inline-block" style="width: 180px; height: 100px;">
                        <img class="auto center" src="assets/img/profesi.png">
                        <div class="auto center" style="color: white">Competency <br>Certification</div>
                    </div>
                </a>
                <a href="/regisikadin" class="f-kanan">
                    <div class="inline-block center" style="width: 180px; height: 100px;">
                        <img class="auto center" src="assets/img/student.png"> 
                        <div class="auto center">Proffesion <br>Certification</div>
                    </div>
                </a>
                
            </div>
        </div>
    </div>

 @endif







<!-- =================PARTNER=============== -->
    <div class="foot">
        <div class="foot-part">Partnership with:</div>
        <a href="https://www.triples.co.id/">
        <div class="logo-triple-s"></div></a>

        <a href="https://dpdikadindki.org">
        <div class="logo-ikadin"></div> </a>
    </div>
    {{-- dd(session()->all()); --}}
    <script>
        const password = document.querySelector('#password');
        const togglePassword = document.querySelector('#togglePassword');
        togglePassword.addEventListener("click", function() {
            this.classList.toggle("fa-eye-slash");
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</body>
</html>
