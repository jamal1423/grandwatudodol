<!DOCTYPE html>
<html lang="en" dir="">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app_name', 'Dashboard GWD') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{ asset('panel/css/themes/lite-purple.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('panel/css/plugins/perfect-scrollbar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('panel/css/trix.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/dropzone.css') }}" rel="stylesheet">
    <style>
        trix-toolbar [data-trix-button-group="file-tools"],
		trix-toolbar [data-trix-attribute='quote'],
		trix-toolbar [data-trix-attribute='code'],
		trix-toolbar [data-trix-attribute='heading1'] {
			display: none;
		}

        .layout-sidebar-large .sidebar-left-secondary{
            z-index:200;
        }
    </style>
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <!-- HEADER -->
        @include('panel.partial.header')

        <!-- SIDENAV MENU -->
        @include('panel.layout.sidenav')

        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                @yield('content')
            </div><!-- Footer Start -->

            <div class="flex-grow-1"></div>

            <div class="app-footer">
                @include('panel.partial.footer')
            </div>
            <!-- fotter end -->
        </div>
    </div><!-- ============ Search UI Start ============= -->
    
    <!-- ============ Search UI End ============= -->
    <script src="{{ asset('panel/js/plugins/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('panel/js/scripts/script.min.js') }}"></script>
    <script src="{{ asset('panel/js/scripts/sidebar.large.script.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/echarts.min.js') }}"></script>
    <script src="{{ asset('panel/js/scripts/echart.options.min.js') }}"></script>
    <script src="{{ asset('panel/js/scripts/dashboard.v1.script.min.js') }}"></script>
    <script src="{{ asset('panel/js/sweetalert.js') }}"></script>
    <script src="{{ asset('panel/js/sweetalert1.js') }}"></script>
    <script src="{{ asset('panel/js/dropzone.js') }}"></script>
    <script src="{{ asset('panel/js/trix.js') }}"></script>
    <script>
		document.addEventListener('trix-file-accept', function(e) {
			e.preventDefault();
		});
	</script>

    <script>
        function destDel(element) {
			var id = $(element).attr('data-id');
			$.ajax({
				url: "/dashboard/get-destinasi-wisata/" + id,
				type: "GET",
				dataType: "JSON",
				success: function(data) {
					$('#id-del').val(data.id);
					$('#oldImages').val(data.image);
					$('#title-del').html(data.title);
					$('#delDestinasi').modal('show');
				}
			});
		}
        
        function paketDel(element) {
			var id = $(element).attr('data-id');
			$.ajax({
				url: "/dashboard/get-paket-wisata/" + id,
				type: "GET",
				dataType: "JSON",
				success: function(data) {
					$('#id-del').val(data.id);
					$('#oldImages').val(data.image);
					$('#title-del').html(data.title);
					$('#delPaket').modal('show');
				}
			});
		}

        function galeriDel(element) {
			var id = $(element).attr('data-id');
			$.ajax({
				url: "/dashboard/get-galeri/" + id,
				type: "GET",
				dataType: "JSON",
				success: function(data) {
                    var imgElement = $('#img');
					imgElement.empty();

					$('#id-del').val(data.id);
					$('#oldImages').val(data.image);
					$('#delGaleri').modal('show');

                    var imgs = data.image;
					var elem = document.createElement("img");
					elem.setAttribute("src", "/image-galeri/" + imgs);
					document.getElementById("img").appendChild(elem);
				}
			});
		}
    </script>

	@stack('script')

    <!-- DESTINASI WISATA -->
    @if(Session::has('add-destinasi'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Selesai!",
				text: "Destinasi berhasil ditambahkan!",
				type: "success",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    @if(Session::has('edit-destinasi'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Selesai!",
				text: "Destinasi berhasil diubah!",
				type: "success",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    @if(Session::has('delete-destinasi'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Selesai!",
				text: "Destinasi telah dihapus!",
				type: "success",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    @if(Session::has('error-destinasi'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Gagal!",
				text: "Silakan ulangi proses!",
				type: "error",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    <!-- PAKET WISATA -->
    @if(Session::has('add-paket'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Selesai!",
				text: "Paket wisata berhasil ditambahkan!",
				type: "success",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    @if(Session::has('edit-paket'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Selesai!",
				text: "Paket wisata berhasil diubah!",
				type: "success",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    @if(Session::has('delete-paket'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Selesai!",
				text: "Paket wisata telah dihapus!",
				type: "success",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    @if(Session::has('error-paket'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Gagal!",
				text: "Silakan ulangi proses!",
				type: "error",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    <!-- GALERI -->
    @if(Session::has('add-galeri'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Selesai!",
				text: "Galeri berhasil ditambahkan!",
				type: "success",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    @if(Session::has('edit-galeri'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Selesai!",
				text: "Galeri berhasil diubah!",
				type: "success",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    @if(Session::has('delete-galeri'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Selesai!",
				text: "Galeri telah dihapus!",
				type: "success",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif

    @if(Session::has('error-galeri'))
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: "Gagal!",
				text: "Silakan ulangi proses!",
				type: "error",
				confirmButtonClass: "btn btn-primary",
				buttonsStyling: !1
			})
		});
	</script>
	@endif
</body>
</html>