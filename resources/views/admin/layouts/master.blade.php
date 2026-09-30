<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- @vite(['resources/js/app.js', 'resources/js/notifications.js']) --}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset($site_setting->favicon ?? 'backend/GM_sansthan.png') }}">

    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet" type="text/css">
    <!-- Daterangepicker css -->
    <link href="{{ asset('backend/vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css">

    <!-- Vector Map css -->
    <link href="{{ asset('backend/vendor/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{ asset('backend/js/hyper-config.js') }}"></script>

    <!-- Vendor css -->
    <link href="{{ asset('backend/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Icons css -->
    <link href="{{ asset('backend/css/unicons/css/unicons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/remixicon/remixicon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <style>
        .side-nav .menuitem-active>a {
            color: #30a3a3 !important;
            font-weight: 500;
        }
        .select2-selection__choice__display{
            color:#000;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/GM_sansthan.png') }}">
</head>

<body>
    <div class="wrapper">
        @include('admin.layouts.header')
        <div class="content-page">
            @yield('content')
        </div>
        @include('admin.layouts.footer')
    </div>
    <!-- END wrapper -->
    <audio id="notificationSound" preload="auto">
        <source src="{{ asset('backend/audio/notification.mp3') }}" type="audio/mpeg">
    </audio>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="{{ asset('backend/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/js/tiny.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Vendor js -->
    <script src="{{ asset('backend/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('backend/js/app.js') }}"></script>
    <!-- Daterangepicker js -->
    <script src="{{ asset('backend/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Apex Charts js -->
    <script src="{{ asset('backend/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Vector Map Js -->
    <script src="{{ asset('backend/vendor/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/jsvectormap/world-merc.js') }}"></script>
    <script src="{{ asset('backend/vendor/jsvectormap/world.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/demo.datatable-init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- jQuery -->
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>


    @yield('javascript-section')
    <script>
        let timeout;

        $(document).on('input', '.icon-picker', function() {

            clearTimeout(timeout);

            let $input = $(this);
            let query = $input.val();
            let $dropdown = $input.closest('.position-relative').find('.icon-dropdown');
            let $preview = $input.closest('.input-group').find('iconify-icon');

            if (query.length < 2) {
                $dropdown.hide();
                return;
            }

            timeout = setTimeout(() => {

                fetch(`https://api.iconify.design/search?query=${query}&limit=20`)
                    .then(res => res.json())
                    .then(data => {

                        $dropdown.empty();

                        data.icons.forEach(icon => {
                            $dropdown.append(`
                                <div class="icon-item" data-icon="${icon}">
                                    <iconify-icon icon="${icon}"></iconify-icon>
                                    ${icon}
                                </div>
                            `);
                        });

                        $dropdown.show();

                        $dropdown.find('.icon-item').click(function() {
                            let icon = $(this).data('icon');
                            $input.val(icon);
                            $preview.attr('icon', icon);
                            $dropdown.hide();
                        });

                    });

            }, 300);

        });

        // hide dropdown
        $(document).on('blur', '.icon-picker', function() {
            let $dropdown = $(this).closest('.position-relative').find('.icon-dropdown');
            setTimeout(() => $dropdown.hide(), 200);
        });
    </script>



</body>

</html>
