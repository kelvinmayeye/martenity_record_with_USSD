<!-- Theme JS files -->
<script src="{{ asset('global_assets/js/plugins/extensions/jquery_ui/interactions.min.js') }} "></script>
<script src="{{ asset('global_assets/js/plugins/forms/selects/select2.min.js') }} "></script>

<!-- for the Data table -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src=" https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

{{-- drop-navigations --}}
<script src=" {{ asset('assets/js/app.js') }} "></script>
<script src="{{ asset('global_assets/js/demo_pages/datatables_extension_buttons_html5.js') }}"></script>
<!-- /theme JS files -->
<script src=" {{ asset('assets/js/custom.js') }} "></script>

{{-- @include('partials.js.custom_js') --}}