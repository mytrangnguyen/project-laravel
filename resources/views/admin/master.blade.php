<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sell Handmade</title>

    <!-- Custom fonts for this template-->
    <link href="  {{ URL::to('/vendors/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->

    <link href=" {{ URL::to('/vendors/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="  {{ URL::to('/css/sb-admin-2.min.css') }}" rel="stylesheet">


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.leftMenu')
        <!-- End of Sidebar -->

        <!-- Main Content -->
        <div id="content" style="width: 100%;">
            <!-- Header -->
            @include('admin.rightHeader')
            <!-- End of Header -->

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Page Wrapper -->
    <!-- Footer -->
    @include('admin.footer')
    <!-- End of Footer -->


    <!-- Bootstrap core JavaScript-->
    <script src=" {{ URL::to('/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::to('/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::to('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::to('/js/sb-admin-2.min.js') }}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ URL::to('/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('/vendors/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::to('/js/demo/datatables-demo.js') }} ">
    </script>
    <script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        console.log("status", status);
        var user_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>

</body>

</html>
