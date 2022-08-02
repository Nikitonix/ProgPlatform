
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column align-content-center" data-widget="treeview" role="menu" data-accordion="true">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('admin.main.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        На главную
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.documentation.index')}}" class="nav-link">
                    <i class="fa fa-folder"></i>
                    <p>
                        Документация
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.exercise.index')}}" class="nav-link">
                    <i class="ion ion-clipboard"></i>
                    <p>
                        Упражнения
                    </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="{{route('admin.journal.index')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Журнал
                </p>
            </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
