<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-desktop'></i> <span>{{ trans('adminlte_lang::message.mantenimiento') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('distrito')}}"><i class='fa fa-circle-o text-blue'></i> <span>{{ trans('adminlte_lang::message.distritos') }}</span></a></li>
                    <li><a href="{{url('provincia')}}"><i class='fa fa-circle-o text-blue'></i> <span>{{ trans('adminlte_lang::message.provincias') }}</span></a></li>
                    <li><a href="{{url('region')}}"><i class='fa fa-circle-o text-blue'></i> <span>{{ trans('adminlte_lang::message.region') }}</span></a></li>
               </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-cart-arrow-down'></i> <span>{{ trans('adminlte_lang::message.almacen') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('categoria')}}"><i class='fa fa-circle-o text-green'></i> <span>{{ trans('adminlte_lang::message.categorias') }}</span></a></li>
                    <li><a href="{{url('unidad')}}"><i class='fa fa-circle-o text-green'></i> <span>{{ trans('adminlte_lang::message.unidad') }}</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-truck'></i> <span>{{ trans('adminlte_lang::message.productos') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('producto')}}"><i class='fa fa-circle-o text-orange'></i> <span>{{ trans('adminlte_lang::message.productos') }}</span></a></li>
                    <li><a href="{{url('estado')}}"><i class='fa fa-circle-o text-orange'></i> <span>{{ trans('adminlte_lang::message.estado') }}</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-check-square-o'></i> <span>{{ trans('adminlte_lang::message.compras') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('proveedor')}}"><i class='fa fa-circle-o text-red'></i> <span>{{ trans('adminlte_lang::message.proveedores') }}</span></a></li>
                    <li><a href="{{url('ingresos')}}"><i class='fa fa-circle-o text-red'></i> <span>{{ trans('adminlte_lang::message.ingresos') }}</span></a></li>
                </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
