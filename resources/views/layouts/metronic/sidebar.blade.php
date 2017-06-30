<div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">


                        <li class="nav-item start active open">
                            <a href="{{ url('admin') }}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/home.svg">
                                <span class="title">Home</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/config.svg">
                                <span class="title">Config</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('ivatipo/') !!}" class="nav-link ">
                                        <span class="title">Tipo de Ivas</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('marca/') !!}" class="nav-link ">
                                        <span class="title">Marcas</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('transporte/') !!}" class="nav-link ">
                                        <span class="title">Transporte</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('skin/') !!}" class="nav-link ">
                                        <span class="title">Skin Panel</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <img height="50"  width="50" src="storage/icono admin/configweb.svg">
                                <span class="title">Web</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('logo/') !!}" class="nav-link ">
                                        <span class="title">Logo</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('carrucel/') !!}" class="nav-link ">
                                        <span class="title">Carrucel</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('carrucelmarcas/') !!}" class="nav-link ">
                                        <span class="title">Marcas</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('webconfig-footer/') !!}" class="nav-link ">
                                        <span class="title">Footer</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('categoria/') !!}" class="nav-link ">
                                        <span class="title">Categorias & Subcategorias</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('post/') !!}" class="nav-link ">
                                        <span class="title">Post</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('puntos/') !!}" class="nav-link ">
                                        <span class="title">Sistema de Puntos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>




                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/venta.svg">
                                <span class="title">Ventas</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('venta-show/') !!}" class="nav-link ">
                                        <span class="title">Nueva Venta</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('listar-venta/') !!}" class="nav-link ">
                                        <span class="title">Listar Ventas</span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/presupuesto.svg"> 
                                <span class="title">Presupuestos</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('presupuesto-show/') !!}" class="nav-link ">
                                        <span class="title">Nuevo Presupuesto</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('listar-presupuesto/') !!}" class="nav-link ">
                                        <span class="title">Listar Presupuesto</span>
                                    </a>
                                </li>
                            </ul>
                        </li>




                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/compra.svg">
                                <span class="title">Compras</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('compra-show/') !!}" class="nav-link ">
                                        <span class="title">Nueva Compra</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('listar-compra/') !!}" class="nav-link ">
                                        <span class="title">Listar Compra</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/liquidaciones.svg"> 
                                <span class="title">Liquidaciones</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('liquidacion-show/') !!}" class="nav-link ">
                                        <span class="title">Nueva Liquidaciones</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('listar-compra/') !!}" class="nav-link ">
                                        <span class="title">Listar Liquidaciones</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/producto.svg">
                                <span class="title">Productos</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('producto/') !!}" class="nav-link ">
                                        <span class="title">Productos</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('codigos-barras-filtrar/') !!}" class="nav-link ">
                                        <span class="title">Codigos De Barras</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/gastos.svg">
                                <span class="title">Gastos Y Pagos</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('gasto/') !!}" class="nav-link ">
                                        <span class="title">Gastos</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{!! URL::to('pago-show/') !!}" class="nav-link ">
                                        <span class="title">Pagos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                           
                        <li class="nav-item  ">
                            <a href="{!! URL::to('tickets/') !!}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/ticket.svg">
                                <span class="title">tickets</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                         <li class="nav-item  ">
                            <a href="{!! URL::to('provedor/') !!}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/provedor.svg">
                                <span class="title">Provedores</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                         <li class="nav-item  ">
                            <a href="{!! URL::to('usuario/') !!}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/user.svg">
                                <span class="title">Usuarios</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                         <li class="nav-item  ">
                            <a href="{!! URL::to('cliente/') !!}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/cliente.svg">
                                <span class="title">Clientes</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                         <li class="nav-item  ">
                            <a href="{!! URL::to('reportes/') !!}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/reporte.svg">
                                <span class="title">Reportes</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="{!! URL::to('listado_graficas/') !!}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/grafica.svg">
                                <span class="title">Graficas</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="{!! URL::to('reparaciones/') !!}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/servicio-tecnico.svg">
                                <span class="title">Servicio Tecnico</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="{!! URL::to('newsletter/') !!}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/email.svg">
                                <span class="title">Newsletter</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="{!! URL::to('backup/') !!}" class="nav-link nav-toggle">
                                <img height="40"  width="40" src="storage/icono admin/database.svg">
                                <span class="title">Respaldo de DB</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                        
                        
                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->