<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ordder Confirmed</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

            body {
                background-color: #eee;
                font-family: "Poppins", sans-serif;
                font-weight: 300
            }

            .cart {
                height: 100vh
            }

            .progresses {
                display: flex;
                align-items: center
            }

            .line {
                width: 76px;
                height: 6px;
                background: #63d19e
            }

            .steps {
                display: flex;
                background-color: #63d19e;
                color: #fff;
                font-size: 12px;
                width: 30px;
                height: 30px;
                align-items: center;
                justify-content: center;
                border-radius: 50%
            }

            .check1 {
                display: flex;
                background-color: #63d19e;
                color: #fff;
                font-size: 17px;
                width: 60px;
                height: 60px;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                margin-bottom: 10px
            }

            .invoice-link {
                font-size: 15px
            }

            .order-button {
                height: 50px
            }

            .background-muted {
                background-color: #fafafc
            }
        </style>
        <div class="container mt-4 mb-4">
            <div class="row d-flex cart align-items-center justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="d-flex justify-content-center border-bottom">
                            <div class="p-3">
                                <div class="progresses">
                                    <div class="steps"> <span><i class="fa fa-check"></i></span> </div> <span
                                      class="line"></span>
                                    <div class="steps"> <span><i class="fa fa-check"></i></span> </div> <span
                                      class="line"></span>
                                    <div class="steps"> <span class="font-weight-bold">3</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-12 p-5">
                                <div class="text-center order-details">
                                    <div class="d-flex justify-content-center mb-5 flex-column align-items-center">
                                        <span class="check1"><i class="fa fa-check"></i></span> <span
                                          class="font-weight-bold">Order Confirmed</span> <small class="mt-2">Your
                                            Order will be delivered to you soon</small> <a href="#"></a>
                                    </div> <a href="{{ route('index') }}"
                                      class="btn btn-danger btn-block order-button">Go
                                        to your
                                        Home Page</a>
                                </div>
                            </div>

                        </div>
                        <div> </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/cart.js"></script>

        <script>
            function myfun(){
                cartLS.destroy()
            }
            myfun()

        </script>


    </body>

</html>
