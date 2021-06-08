<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="" content="width=device-width, initial-scale=1.0" />
    <title>RUMOR HAS IT</title>
    <link rel="stylesheet" href="style1.css" />
    <a
      target="_blank"
      href="https://icons8.com/icon/63270/registered-trademark"
    ></a>
    <a target="_blank" href="https://icons8.com"></a>
    <script
      src="https://kit.fontawesome.com/8f38540935.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <style>
      .navtitle {
        width: calc(15%-25px);
        height: 60px;
        box-sizing: border-box;
      }
      .navlist {
        height: 60px;
        box-sizing: border-box;
        border-left: 50px solid #224f3a;
        border-bottom: 60px solid transparent;
        width: calc(85%+25px);
      }
      .card:hover {
        box-shadow: 7px 7px 5px #224f3a;
      }
      .timeline .time {
        left: 50%;
        height: 100%;
        z-index: -1;
      }
      .timeline .circle {
        margin-left: -7px;
        z-index: 1;
        left: 50%;
      }
      .card1:hover {
        box-shadow: 7px 7px 5px #224f3a;
      }

      .over {
        box-shadow: rgba(138, 136, 136, 0.35) 0px 5px 15px;
      }

      .carousel-cell {
        width: 100%;
        height: 80%;
        margin-right: 10px;

        border-radius: 5px;
        counter-increment: gallery-cell;
      }

      /* cell number */
      .carousel-cell:before {
        display: block;

        line-height: 200px;
        font-size: 80px;
      }
      .carousel-cell1 {
        margin-left: 37px;
        width: 28%;
        height: 50%;
        margin-right: 10px;

        border-radius: 5px;
        counter-increment: carousel-cell;
      }

      /* cell number */
      .carousel-cell1:before {
        display: block;

        line-height: 200px;
      }
    </style>
  </head>
  <body class="bg-gray-50">
    <header class="">
      <div class="grid grid-cols-3 bg-transparent h-auto" height="100px">
        <div class="navtitle col-span-1 bg-green-900">
          <h1
            class="
              text-yellow-200
              lg:text-2xl
              font-serif
              lg:ml-36
              p-4
              text-lg
              ml-10
            "
          >
            RUMOR HAS IT
          </h1>
        </div>

        <div class="navlist col-span-2 bg-transparent">
          <div class="flex lg:hidden justify-end mt-6" id="bar">
            <i class="fas fa-bars text-xl cursor-pointer"></i>
            <div class="border-r-2 border-black ml-5 mr-5"></div>

            <a href="#"> <i class="fas fa-shopping-cart mr-5"></i></a>
          </div>

          <nav class="hidden lg:block" id="nav">
            <ul
              class="
                lg:flex
                gap-7
                inline-block
                float-right
                pt-3
                lg:mr-20
                text-lg
              "
            >
              <li><a href="home.php" class="hover:text-yellow-400">Home</a></li>
              <li><a href="lookUp.php" class="hover:text-yellow-400">Look Book</a></li>
              <li><a href="shop.php" class="hover:text-yellow-400">Shop</a></li>
              <li>
                <a href="aboutUs.php" class="hover:text-yellow-400">About</a>
              </li>
              <li>
                <a href="contactUs.php" class="hover:text-yellow-400"
                  >Contact</a
                >
              </li>
              <div class="border-r-2 border-black"></div>
              <li>
                <a href="checkOut.php"> <i class="fas fa-shopping-cart"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <hr class="ml-48 max-w-7xl h-2" />
    </header>