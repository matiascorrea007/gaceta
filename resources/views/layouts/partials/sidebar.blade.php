<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/avatar5.png')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!---========================== Gestion Menu ====================== -->
        <ul class="sidebar-menu">
            <li class="header">GESTION DE STOCK</li>
            <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('admin') }}"></i> <span><img height="50"  width="50" src="storage/icono admin/home.svg"> Home</span></a></li>



        <li class="treeview">
                <a href="#"><span><img height="50"  width="50" src="storage/icono admin/config.svg"> Config</span> <i class="fa fa-angle-left pull-right"></i></a>

                <ul class="treeview-menu">
                    <li><a  href="{!! URL::to('rubro/') !!}">Rubros</a></li>
                    <li><a  href="{!! URL::to('ivatipo/') !!}">Iva Tipo</a></li>
                    <li><a  href="{!! URL::to('marca/') !!}">Marca</a></li>
                    <li><a  href="{!! URL::to('transporte/') !!}">Transporte</a></li>
                </ul>
        </li>

         <li class="treeview">
                <a href="#"><span><img height="50"  width="50" src="storage/icono admin/venta.svg"> Ventas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a  href="{!! URL::to('venta-show/') !!}">Generar Venta</a></li>
                    <li><a  href="{!! URL::to('listar-venta/') !!}">Listar</a></li>
                    
                </ul>
        </li>

        <li class="treeview">
                <a href="#"><span><img height="50"  width="50" src="storage/icono admin/presupuesto.svg"> Presupuestos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a  href="{!! URL::to('presupuesto-show/') !!}">Generar Presupuesto</a></li>
                    <li><a  href="{!! URL::to('listar-presupuesto/') !!}">Listar</a></li>
                    
                </ul>
        </li>

        <li class="treeview">
                <a href="#"><span><img height="50"  width="50" src="storage/icono admin/compra.svg"> Compras</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a  href="{!! URL::to('compra-show/') !!}">Generar Compra</a></li>
                    <li><a  href="{!! URL::to('listar-compra/') !!}">Listar Compras</a></li>
                    
                </ul>
        </li>

        <li class="treeview">
                <a href="#"><span><img height="50"  width="50" src="storage/icono admin/liquidaciones.svg"> Liquidaciones</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a  href="{!! URL::to('liquidacion-show/') !!}">Generar Liquidacion</a></li>
                    <li><a  href="{!! URL::to('listar-compra/') !!}">Listar Liquidaciones</a></li>
                    
                </ul>
        </li>


        <li class="treeview">
                <a href="#"><span><img height="50"  width="50" src="storage/icono admin/producto.svg"> Productos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a  href="{!! URL::to('producto/') !!}"> Productos</a></li>
                    <li><a  href="{!! URL::to('codigos-barras-filtrar/') !!}"> Codigos De Barras</a></li>
                    
                </ul>
        </li>

        <li class="treeview">
                <a href="#"><span><img height="50"  width="50" src="storage/icono admin/gastos.svg"> Gastos Y Pagos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a  href="{!! URL::to('gasto/') !!}">Gastos</a></li>
                    <li><a  href="{!! URL::to('pago-show/') !!}">Pagos</a></li>
                    
                </ul>
        </li>


        <li >
        <a href="{!! URL::to('tickets/') !!}">
        <span><img height="50"  width="50" src="storage/icono admin/ticket.svg"> tickets</span></a>
        </li> 

        <li >
        <a href="{!! URL::to('provedor') !!}">
        <span><img height="50"  width="50" src="storage/icono admin/provedor.svg"> Provedores</span></a>
        </li>

        <li >
        <a href="{!! URL::to('usuario/') !!}">
        <span><img height="50"  width="50" src="storage/icono admin/user.svg"> Usuarios</span></a>
        </li>

        <li >
        <a href="{!! URL::to('cliente/') !!}">
        </i><span><img height="50"  width="50" src="storage/icono admin/cliente.svg"> Clientes</span></a>
        </li>

        <li >
        <a href="{!! URL::to('reportes/') !!}">
        </i><span><img height="50"  width="50" src="storage/icono admin/reporte.svg"> Reportes</span></a>
        </li>


        <li >
        <a href="{!! URL::to('listado_graficas/') !!}">
        <span><img height="50"  width="50" src="storage/icono admin/grafica.svg"> Graficas</span></a>
        </li>  

        <li >
        <a href="{!! URL::to('reparaciones/') !!}">
        </i><span><img height="50"  width="50" src="storage/icono admin/servicio-tecnico.svg"> Servicio Tecnico</span></a>
        </li>  

        <li >
        <a href="{!! URL::to('backup/') !!}">
        </i><span><img height="50"  width="50" src="storage/icono admin/database.svg"> Respaldo de DB</span></a>
        </li>  
           
        </ul><!---========================== Gestion  Menu====================== -->


         <!---========================== Gestion web ====================== -->
        <ul class="sidebar-menu">
            <li class="header">WEB</li>

        <li class="treeview">
                <a href="#"><span><img height="50"  width="50" src="storage/icono admin/configweb.svg"> Configuracion</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                <li><a  href="{!! URL::to('webconfig-header/') !!}">Header</a></li>
                <li><a  href="{!! URL::to('carrucel/') !!}">Carrucel</a></li>
                <li><a  href="{!! URL::to('carrucelmarcas/') !!}">Marcas</a></li>
                <li><a  href="{!! URL::to('webconfig-footer/') !!}">Footer</a></li>
                </ul>
        </li>

        <li >
        <a href="{!! URL::to('categoria/') !!}">
        <span><img height="50"  width="50" src="storage/icono admin/categorias.svg"> Categorias</span></a>
        </li>

        <li >
        <a href="{!! URL::to('post/') !!}">
        <span><img height="50"  width="50" src="storage/icono admin/blog.svg"> Post</span></a>
        </li>

        <li >
        <a href="{!! URL::to('puntos/') !!}">
        <span><img height="50"  width="50" src="storage/icono admin/medal.svg"> Sistema De Puntos</span></a>
        </li> 

           
        </ul><!---========================== Gestion web ====================== -->

    </section>
    <!-- /.sidebar -->
</aside>
