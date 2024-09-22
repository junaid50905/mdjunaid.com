<!DOCTYPE html>
<html lang="ru">

@include('layouts.includes.head')

<body>
    @include('layouts.includes.preloader')

    @yield('main-panel')


    <script src="{{ asset('frontend') }}/js/main.js"></script>
    <script src="{{ asset('frontend') }}/js/fontawesome.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            @if (Session::has('success'))
                toastr.options = {
                    "progressBar": true,
                    "closeButton": true,
                }
                toastr.success("{{ Session::get('success') }}", 'Success!', {
                    timeOut: 12000
                })
            @endif

            @if (Session::has('error'))
                toastr.options = {
                    "progressBar": true,
                    "closeButton": true,
                }
                toastr.error("{{ Session::get('error') }}", 'Error!', {
                    timeOut: 3000
                })
            @endif
        });
    </script>
</body>

</html>
