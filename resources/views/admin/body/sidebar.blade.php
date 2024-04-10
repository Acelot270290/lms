<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        
      
        
        <li class="menu-label">UI Elements</li>
       
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Categorias</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.category') }}"><i class='bx bx-radio-circle'></i>Categorias</a>
                </li>
                <li> <a href="{{ route('all.subcategory') }}"><i class='bx bx-radio-circle'></i>Subcategorias  </a>
                </li>
                
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Instrutor</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.instructor') }}"><i class='bx bx-radio-circle'></i>Todos</a>
                </li>
               
               
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Cursos</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.all.course') }}"><i class='bx bx-radio-circle'></i>Todos</a>
                </li>
               
               
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Cupons</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.all.coupon') }}"><i class='bx bx-radio-circle'></i>Todos</a>
                </li>
               
               
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Setting</div>
            </a>
            <ul>
                <li> <a href="{{ route('smtp.setting') }}"><i class='bx bx-radio-circle'></i>Manage SMPT</a>
                </li>
                <li> <a href="{{ route('site.setting') }}"><i class='bx bx-radio-circle'></i>Site Setting </a>
                </li>
               
               
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Pedidos</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.pending.order') }}"><i class='bx bx-radio-circle'></i>Pendentes </a>
                </li>
                <li> <a href="{{ route('admin.confirm.order') }}"><i class='bx bx-radio-circle'></i>Confirmados </a>
                </li>
               
               
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Report</div>
            </a>
            <ul>
                <li> <a href="{{ route('report.view') }}"><i class='bx bx-radio-circle'></i>Report View </a>
                </li>
               
               
               
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Review</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.pending.review') }}"><i class='bx bx-radio-circle'></i>Pendentes </a>
                </li>
                <li> <a href="{{ route('admin.active.review') }}"><i class='bx bx-radio-circle'></i>Ativos </a>
                </li>
               
               
               
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Usuários</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.user') }}"><i class='bx bx-radio-circle'></i>Todos</a>
                </li>
                <li> <a href="{{ route('all.instructor') }}"><i class='bx bx-radio-circle'></i>Instrutores</a>
                </li>
               
               
               
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Blog </div>
            </a>
            <ul>
                <li> <a href="{{ route('blog.category') }}"><i class='bx bx-radio-circle'></i>Blog Categoria </a>
                </li>
                <li> <a href="{{ route('blog.post') }}"><i class='bx bx-radio-circle'></i>Blog Post</a>
                </li>
               
               
               
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>