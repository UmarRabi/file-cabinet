<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @supports ((position: -webkit-sticky) or (position: sticky)) {
            .sticky-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        @media only screen and (max-width:600px) {
            #hero-section {
                min-height: 350px !important;
            }
        }

        .password-p {
            font-size: 20px;
            font-weight: 600;
            width: inherit;
        }

        .nav-item,
        .nav-link,
        button,
        .navbar-toggler-icon {
            color: white !important;
            font-size: large;
            font-weight: 400;

        }

        /* a {
            color: white !important
        } */

        .nav>li {
            color: white !important;
        }

        .navbar-light .navbar-brand {
            color: white !important;
        }

        .blue-text {
            color: #061e5c;
        }

        .blue-bg,
        .btn-blue {
            background-color: #061e5c;
            color: white;

        }

        body {
            margin: 0;
            font-family: "Nunito", sans-serif;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f8fafc;
        }

        .btn {
            width: 200px
        }

        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .show>.nav-link {
            color: white !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: white;
        }

        .btn-xx-amaze {
            width: 90%;
        }

        .dropdown-toggle {
            background: white;
            color: black;
        }

        .paginate_button,
        .page-link {
            color: black !important;
        }

        #hero-section {
            background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.96), rgba(0, 0, 0, 0.96), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url({{ asset('assets/img/banner.png') }});
            background-repeat: no-repeat;
            background-size: cover;
            background-postion: top right;
            position: relative;
            min-height: 650px;
        }
    </style>
</head>
