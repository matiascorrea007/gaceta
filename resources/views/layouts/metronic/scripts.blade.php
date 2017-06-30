<!------------------------------- metronic scriptt ------------------------------>
            <!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('/js/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('/metronic/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('/metronic/global/scripts/app.min.js') }}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('/metronic/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('/metronic/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/layouts/layout2/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/metronic/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
<!------------------------------- metronic scriptt ------------------------------>





<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrapselect.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<!-- manejo de graficas -->
<script src="{{ asset('/js/graficas.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/highcharts.js') }}" type="text/javascript"></script>
<!--estos dos scrip es para mandar la cantidad de item del carrito y actualizar-->
<script src="{{ asset('/js/main.js') }}" ></script>
<script src="{{ asset('js/pinterest_grid.js') }}"></script>
<!--sweetalert-->
<script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/sweetalert/sweetalert-dev.js') }}"></script>
@include('sweet::alert')
<!--Filemanager-->
<script src="{{ asset('../vendor/unisharp/laravel-filemanager/public/js/lfm.js') }}"></script>
<script src="{{ asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('../vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>

<!--Filemanager para crear-->
    <script>
       $('textarea.my-editor').ckeditor({
filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'});
        $('#lfm').filemanager('image');
    </script>
<!--Filemanager para editar-->
    <script>
       $('textarea.my-editor2').ckeditor({
filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'});
        $('#lfm2').filemanager('image');
    </script>




@yield('scriptdatepicker')
@yield('ventas')
@yield('compras')
@yield('presupuestos')


<!--dropzone-->
<script src="{{ asset('/js/dropzone/dropzone.js') }}" ></script>
<script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
           addRemoveLinks: true,
           dictRemoveFile: 'Remove',
            maxFilezise: 20,
             parallelUploads: 100,
            maxFiles: 4,

            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>




<!--select dinamico para crear-->
<script>
$('#categoria').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('../ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoria').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoria').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>

<!--select dinamico para editar-->
<script>
$('#categoriaedit').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('../../ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoriaedit').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoriaedit').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>

<!--select dinamico para crear combo-->
<script>
$('#categoria').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoria').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoria').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>



<script src="{{ asset('/js/productocombo.js') }}" ></script>
<script src="{{ asset('/js/mis-funciones.js') }}" ></script>
	
<!--===============scrip de los tags========-->

<script type="text/javascript">
    $(document).ready(function () {
        // inicializamos el plugin
        $('#tags').select2({
            // Activamos la opcion "Tags" del plugin
            tags: true,
            tokenSeparators: [','],
            ajax: {
                dataType: 'json',
                url: '{{ url("tags") }}',
                delay: 250,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                  return {
                    results: data
                  };
                },
            }
        });
    });
</script>

<!------------script backup---------------->	



<!------------script backup---------------->