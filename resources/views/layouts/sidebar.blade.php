<!DOCTYPE html>

<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
    <header>
        @include('includes.header')
    </header>
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    
<div class="page-sidebar navbar-collapse collapse">
    <sidebar>
        @include('includes.sidebar')
    </sidebar>
</div>

</div>

<!-- END SIDEBAR -->
<!-- BEGIN CONTAINER -->

@yield('content')

<!-- END CONTAINER -->
</div>

<footer>
        @include('includes.footer')
</footer>

</body>

</html>