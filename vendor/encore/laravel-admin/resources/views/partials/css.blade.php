@foreach($css as $c)
    <link rel="stylesheet" href="{{ admin_asset("$c") }}">
@endforeach

<?php

$primt_color = '#3e495b';
?><style> 
    .sidebar {
        background-color: #FFFFFF;
    }

    .content-header {
        background-color: #F9F9F9;
    }

    .sidebar-menu .active {
        border-left: solid 5px {{ $primt_color }} !important;
        ;
        color: {{ $primt_color }} !important;
        ;
    }


    .navbar,
    .logo,
    .sidebar-toggle,
    .user-header,
    .btn-dropbox,
    .btn-twitter,
    .btn-instagram,
    .btn-primary,
    .navbar-static-top {
        background-color: {{ $primt_color }} !important;
    }

    .dropdown-menu {
        border: none !important;
    }

    .box-success {
        border-top: {{ $primt_color }} .5rem solid !important;
    }

    :root {
        --primary: {{ $primt_color }};
    }
    /* .card {
        box-shadow: rgba(120, 20, 167, 0.1) 0px 20px 25px -5px, rgba(119, 30, 30, 0.04) 0px 10px 10px -5px;
    } */
     .card {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
    } 
</style> 
