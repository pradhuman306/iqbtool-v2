<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title', 'Page')</title>
    <meta name="description" content="">

    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.svg') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon.svg') }}">

    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    </noscript>

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    @include('components.header')

    <main class="iqb-main">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="{{ asset('assets/js/home.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // var title = document.getElementById('page-title').innerText;

            // <?php //if (!is_front_page()) { ?>
            //     document.title = 'IQB-tool – ' + title;
            // <?php //} else { ?>
            //     document.title = title;
            // <?php //} ?>

            // Cache the initial reg_price content
            document.querySelectorAll('input[name="plans"]').forEach(function (planInput) {
                planInput.addEventListener('change', function (e) {
                    e.preventDefault();
                    let reg_price = document.getElementById('reg_price').innerHTML;
                    var selectedPlanElement = document.querySelector('input[name="plans"]:checked');
                    var selectedDuration = selectedPlanElement.getAttribute('data-duration');
                    var yearlyText = document.getElementById('yearly_text').innerHTML;
                    var monthlyText = document.getElementById('monthly_text').innerHTML;
                    var selectedPlan = selectedDuration === 'year' ? yearlyText : monthlyText;

                    document.querySelectorAll('.duration').forEach(function (el) {
                        el.textContent = '/ ' + selectedPlan;
                    });

                    var basePrice = parseFloat(document.getElementById('price_personal').getAttribute('data-price'));
                    var defaultDiscount = document.getElementById('personal_discount_text').innerHTML;
                    var yearlyDiscount = document.getElementById('yearly_discount').innerHTML;
                    var newPrice = selectedDuration === 'year' ? basePrice * 12 : basePrice;
                    let personal_dis_text = selectedDuration === 'year' ? yearlyDiscount : defaultDiscount;

                    document.getElementById('price_personal').innerHTML = newPrice;

                    document.querySelector('#regular-dis-wrap #personal_discount').textContent = personal_dis_text;

                    if (selectedDuration !== 'year') {
                        document.querySelector('#regular-dis-wrap #reg_price').style.display = 'block';
                        document.querySelector('#regular-dis-wrap #reg_price').textContent = reg_price;
                    } else {
                        document.querySelector('#regular-dis-wrap #reg_price').style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>

</html>