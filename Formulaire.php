<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title>Tester vos connaissance sur le VIH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style/style.css">
</head>

<body style="background-color: #eee">
    <section class="vh-100" style="background-color: #eee; margin-top: 75px">
        <div class="container h-100" id="notbox">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="h6 fw-bold mb-5 mx-1 mx-md-4 mt-4">Tester votre reconnaisance sur le VIH</p>

                                    <form class="mx-1 mx-md-4" action="action.php" method="POST">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" placeholder="Entrer votre nom" style="width: 275px !important;" />

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>

                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example3c" class="form-control" placeholder="Entrer votre Prenom" style="width: 275px !important;" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example4c" class="form-control" placeholder="Entrer votre email" style="width: 275px !important;" />
                                            </div>
                                        </div>



                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <select class="form-control" aria-label="Default select example" style="width: 275px !important;">
                                                    <option value="1">Homme</option>
                                                    <option value="2">Femme</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example7c" class="form-control" placeholder="Entrer votre pays" style="width: 275px !important;" />
                                            </div>
                                        </div>





                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control" placeholder="Entrer votre password" style="width: 275px !important;" />
                                            </div>
                                        </div>
                                        <br />

                                        <div class="g-container">
                                            <div class="game-captcha">
                                                <div class="game-container">
                                                    <div class="block" id="1"> <img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="2"> <img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="3"> <img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="4"> <img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="5"> <img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="6"> <img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="7"> <img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="8"> <img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="9"> <img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="10"><img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="11"><img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="12"><img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="13"><img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="14"><img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="15"><img src="image/giphy.gif" alt=""></div>
                                                    <div class="block" id="16"><img src="image/giphy.gif" alt=""></div>
                                                </div>

                                                <div class="result-container">
                                                    <div class="time-left">Time Left: <span id="timer">--</span></div>
                                                </div>
                                            </div>

                                            <div class="controls">
                                                <button id="play">
                                                    <p id="play__text">captcha</p>
                                                </button>
                                            </div>
                                        </div>


                                        <input type="hidden" name="captcha_key" value="nuitdinfo2022">
                                        <input type="hidden" id="js_captcha_score" name="captcha_score">
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-success btn-md" style="margin-left: 230px;">S'inscrire</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="image/sidaaa.png" class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>

</body>

</html>