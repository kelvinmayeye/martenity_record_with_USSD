<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title> @yield('page_title') | {{ config('app.name') }} </title>

    <style>
        .header-row {
            width: 100%;
            display: grid;
            grid-template-columns: 0.15fr 0.95fr;
            grid-template-rows: 40hv;
        }

        .container {
            font-size: 12;
            px;
        }

        table {
            width: 100%;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container my-2" id="element">
        <div class="header-row">
            <div>
                <img src="{{ asset('global_assets/images/logo.png') }}" alt="" width="140" height="130">
            </div>
            <div>
                <span><strong style="font-size: 16px;">BRAIN YIELD PRE & PRIMARY SCHOOL</strong></span><br>
                <span>P.O Box 79031</span><br>
                <span>Kilimahewa - Salasala</span><br>
                <span>Kinondoni, Dar es Salaam</span><br>
                <span>Phone; 0755 394008, 0754 9473 370 or 0787 710 778</span><br>
                <span>Email; brainyield.schools2020@gmail.com</span>
            </div>
        </div>
        <hr>
        @yield('content')
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        var element = document.getElementById('element');
        html2pdf(element, {
            margin: 13,
            filename: 'myfile.pdf',
            image: {
                type: 'jpeg',
                quality: 0.1
            },
            html2canvas: {
                scale: 10,
                logging: true,
                dpi: 292,
                letterRendering: true
            },
            jsPDF: {
                unit: 'mm',
                format: 'a4',
                orientation: 'portrait'
            }
        });
    </script>
</body>

</html>
