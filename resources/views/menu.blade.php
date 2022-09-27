<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="{{asset('public')}}/css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="{{url('/')}}" title="Logo">
                    <img src="{{asset('public')}}/images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('categories')}}">Categories</a>
                    </li>
                    <li>
                        <a href="{{url('foods')}}">Foods</a>
                    </li>
                    <li>
                        <a href="{{url('admin/login')}}">Admin</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->