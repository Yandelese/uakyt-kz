<nav class="navbar navbar-vertical fixed-start navbar-expand-md " id="sidebar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="./index.html">
            <img src="/admin_resources/logo/logo.png" class="navbar-brand-img mx-auto" alt="...">
        </a>
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-text">
                        <span class="fe fe-search"></span>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item parent-nav">
                    <a class="nav-link" href="{{route('allnews')}}"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="fe fe-file-text"></i> Новости
                    </a>
                </li>
                <li class="nav-item parent-nav">
                    <a class="nav-link" href="{{route('categories')}}"  role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="fe fe-grid"></i> Категории
                    </a><i class="fa-solid fa-paperclip"></i>
                </li>
                <li class="nav-item parent-nav">
                    <a class="nav-link" href="{{route('allpages')}}"  role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="fe fe-book-open"></i> Страницы
                    </a>
                </li>
                <li class="nav-item parent-nav">
                    <a class="nav-link" href="{{route('rubric')}}"  role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="fe fe-grid"></i> Рубрики
                    </a>
                </li>
            </ul>
            <hr class="navbar-divider my-3">
            <div class="mt-auto"></div>
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">
                <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-controls="sidebarOffcanvasActivity">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
                </a>
                <div class="dropup">
{{--                    <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <div class="avatar avatar-sm avatar-online">--}}
{{--                            <img src="{{ auth()->user()->avatar }}" class="avatar-img rounded-circle" alt="...">--}}
{{--                        </div>--}}
{{--                    </a>--}}
                    <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        {{--                        <a href="./profile-posts.html" class="dropdown-item">Profile</a>--}}
                        {{--                        <a href="./account-general.html" class="dropdown-item">Settings</a>--}}
                        {{--                        <hr class="dropdown-divider">--}}
                        <a href="" class="dropdown-item">Выйти</a>
                    </div>
                </div>
                <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasSearch" aria-controls="sidebarOffcanvasSearch">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
                </a>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-vertical navbar-vertical-sm fixed-start navbar-expand-md d-none" id="sidebarSmall"></nav>
<nav class="navbar navbar-expand-lg d-none" id="topnav"></nav>
