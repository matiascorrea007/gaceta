
<head>
        <meta charset="utf-8" />
        <title>ADMIN - SHARKINFORMATICA</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="sharkinformatica venta de insumos para la computacion"
            name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <link href="{{ asset('/metronic/global/plugins/font-awesome/css/font.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('/metronic/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/metronic/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
       
        <link href="{{ asset('/metronic/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('/metronic/global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('/metronic/global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('/metronic/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css" />

        @if(DB::table('skins')->where('skin','=',"blue")->first())
        <link href="{{ asset('/metronic/layouts/layout2/css/themes/blue.min.css') }}" rel="stylesheet" type="text/css" id="style_color"/> 
        @elseif(DB::table('skins')->where('skin','=',"grey")->first())
        <link href="{{ asset('/metronic/layouts/layout2/css/themes/grey.min.css') }}" rel="stylesheet" type="text/css" id="style_color"/> 
        @elseif(DB::table('skins')->where('skin','=',"light")->first())
        <link href="{{ asset('/metronic/layouts/layout2/css/themes/light.min.css') }}" rel="stylesheet" type="text/css" id="style_color"/> 
        @elseif(DB::table('skins')->where('skin','=',"dark")->first())
        <link href="{{ asset('/metronic/layouts/layout2/css/themes/dark.min.css') }}" rel="stylesheet" type="text/css" id="style_color"/> 
        @endif


        <link href="{{ asset('/metronic/layouts/layout2/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


        {!!Html::style('css/sweetalert/sweetalert.css')!!} 
        {!!Html::style('css/select2.min.css')!!} 
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
</head>
    <!-- END HEAD -->