<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            .subtitle{
              font-size: 20px;
              font-weight: bold;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .title-top {
              margin-top: 40px;
            }



            html,body {
              min-height: 100vh;
              background: linear-gradient(to bottom, #b4b2b2 0%, #b4b2b2 70%, #f5f5f5 100%);
              overflow: hidden;
            }

.rocket {
  position: absolute;
  top: 50%;
  width: 80px;
  left: 47%;
}
.rocket .rocket-body {
  width: 80px;
  left: calc(50% - 50px);
  animation: bounce 0.5s infinite;
}
.rocket .rocket-body .body {
  background-color: #dadada;
  height: 180px;
  left: calc(50% - 50px);
  border-top-right-radius: 100%;
  border-top-left-radius: 100%;
  border-bottom-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-top: 5px solid #f5f5f5;
}
.rocket .rocket-body:before {
  content: "";
  position: absolute;
  left: calc(50% - 24px);
  width: 48px;
  height: 13px;
  background-color: #554842;
  bottom: -13px;
  border-bottom-right-radius: 60%;
  border-bottom-left-radius: 60%;
}
.rocket .window {
  position: absolute;
  width: 40px;
  height: 40px;
  border-radius: 100%;
  background-color: #a75248;
  left: calc(50% - 25px);
  top: 40px;
  border: 5px solid #b4b2b2;
}
.rocket .fin {
  position: absolute;
  z-index: -100;
  height: 55px;
  width: 50px;
  background-color: #a75248;
}
.rocket .fin-left {
  left: -30px;
  top: calc(100% - 55px);
  border-top-left-radius: 80%;
  border-bottom-left-radius: 20%;
}
.rocket .fin-right {
  right: -30px;
  top: calc(100% - 55px);
  border-top-right-radius: 80%;
  border-bottom-right-radius: 20%;
}
.rocket .exhaust-flame {
  position: absolute;
  top: 90%;
  width: 28px;
  background: linear-gradient(to bottom, transparent 10%, #f5f5f5 100%);
  height: 150px;
  left: calc(50% - 14px);
  animation: exhaust 0.2s infinite;
}
.rocket .exhaust-fumes li {
  width: 60px;
  height: 60px;
  background-color: #f5f5f5;
  list-style: none;
  position: absolute;
  border-radius: 100%;
}
.rocket .exhaust-fumes li:first-child {
  width: 200px;
  height: 200px;
  bottom: -300px;
  animation: fumes 5s infinite;
}
.rocket .exhaust-fumes li:nth-child(2) {
  width: 150px;
  height: 150px;
  left: -120px;
  top: 260px;
  animation: fumes 3.2s infinite;
}
.rocket .exhaust-fumes li:nth-child(3) {
  width: 120px;
  height: 120px;
  left: -40px;
  top: 330px;
  animation: fumes 3s 1s infinite;
}
.rocket .exhaust-fumes li:nth-child(4) {
  width: 100px;
  height: 100px;
  left: -170px;
  animation: fumes 4s 2s infinite;
  top: 380px;
}
.rocket .exhaust-fumes li:nth-child(5) {
  width: 130px;
  height: 130px;
  left: -120px;
  top: 350px;
  animation: fumes 5s infinite;
}
.rocket .exhaust-fumes li:nth-child(6) {
  width: 200px;
  height: 200px;
  left: -60px;
  top: 280px;
  animation: fumes2 10s infinite;
}
.rocket .exhaust-fumes li:nth-child(7) {
  width: 100px;
  height: 100px;
  left: -100px;
  top: 320px;
}
.rocket .exhaust-fumes li:nth-child(8) {
  width: 110px;
  height: 110px;
  left: 70px;
  top: 340px;
}
.rocket .exhaust-fumes li:nth-child(9) {
  width: 90px;
  height: 90px;
  left: 200px;
  top: 380px;
  animation: fumes 20s infinite;
}

.star li {
  list-style: none;
  position: absolute;
}
.star li:before, .star li:after {
  content: "";
  position: absolute;
  background-color: #f5f5f5;
}
.star li:before {
  width: 10px;
  height: 2px;
  border-radius: 50%;
}
.star li:after {
  height: 8px;
  width: 2px;
  left: 4px;
  top: -3px;
}
.star li:first-child {
  top: -30px;
  left: -210px;
  animation: twinkle 0.4s infinite;
}
.star li:nth-child(2) {
  top: 0;
  left: 60px;
  animation: twinkle 0.5s infinite;
}
.star li:nth-child(2):before {
  height: 1px;
  width: 5px;
}
.star li:nth-child(2):after {
  width: 1px;
  height: 5px;
  top: -2px;
  left: 2px;
}
.star li:nth-child(3) {
  left: 120px;
  top: 220px;
  animation: twinkle 1s infinite;
}
.star li:nth-child(4) {
  left: -100px;
  top: 200px;
  animation: twinkle 0.5s ease infinite;
}
.star li:nth-child(5) {
  left: 170px;
  top: 100px;
  animation: twinkle 0.4s ease infinite;
}
.star li:nth-child(6) {
  top: 87px;
  left: -79px;
  animation: twinkle 0.2s infinite;
}
.star li:nth-child(6):before {
  height: 1px;
  width: 5px;
}
.star li:nth-child(6):after {
  width: 1px;
  height: 5px;
  top: -2px;
  left: 2px;
}

@keyframes fumes {
  50% {
    transform: scale(1.5);
    background-color: transparent;
  }
  51% {
    transform: scale(0.8);
  }
  100% {
    background-color: #f5f5f5;
    transform: scale(1);
  }
}
@keyframes bounce {
  0% {
    transform: translate3d(0px, 0px, 0);
  }
  50% {
    transform: translate3d(0px, -4px, 0);
  }
  100% {
    transform: translate3d(0px, 0px, 0);
  }
}
@keyframes exhaust {
  0% {
    background: linear-gradient(to bottom, transparent 10%, #f5f5f5 100%);
  }
  50% {
    background: linear-gradient(to bottom, transparent 8%, #f5f5f5 100%);
  }
  75% {
    background: linear-gradient(to bottom, transparent 12%, #f5f5f5 100%);
  }
}
@keyframes fumes2 {
  50% {
    transform: scale(1.1);
  }
}
@keyframes twinkle {
  80% {
    transform: scale(1.1);
    opacity: 0.7;
  }
}

input { border-radius: 3px;
        margin:0;
      	border:0;
      	padding:0;
        height: 40px;
        width: 400px;
}
input[text]{
        height: 40px;
}

        </style>
    </head>
    <body>
        <div class="title-container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title title-top">
                    Freemarket
                </div>
                  <div class="subtitle">
                    <p>Compra y Vende desde tu casa!</p>
                  </div>
                  <input type="text" name="" value="">

                <div class="rocket">
                    <div class="rocket-body">
                      <div class="body"></div>
                      <div class="fin fin-left"></div>
                      <div class="fin fin-right"></div>
                      <div class="window"></div>
                    </div>
                    <div class="exhaust-flame"></div>
                    <ul class="exhaust-fumes">
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                    <ul class="star">
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
            </div>
        </div>
    </body>
</html>