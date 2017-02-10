@extends('layouts.master')

@section('title', 'Welcome')

@section('links')
    <script src="https://use.fontawesome.com/40d6d147db.js"></script>
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="/css/welcome.css">
@stop


@section('content')
        <main>
            <section class="mast">
                <figure class="mast__bg" id="particles-js"></figure>
                <header class="mast__header">
                    <div id="welcome">
                        <h1 class="mast__title title-span">Codeup Mentorship Portal</h1> 
                        <hr class="sep"/>
                        <p class="mast__text text-span">
Codeup is a career accelerator that prepares you to 
become a software developer, even if you have no prior 
coding experience. With a 10 to 1 student to instructor 
ratio and a focus on real world project based learning, 
our graduates typically get hired within 6 months and 
increase their earning power by $17K.
                        </p>
                        
                            <a href="#" id="login" class="mast__title title-span">Login</a>
                            <a href="#" id="register" class="mast__title title-span">Register</a>
                       
                    </div>
                    <div id="login-form">
                        <h1 class="mast__title title-span">Login</h1>
                        <hr class="sep" style="margin: 0 auto">
                        <br />
                        <input type=text name="email" placeholder="Enter Email" />

                        <input type="password" name="password" class="password" placeholder="Enter Password" /><span class="fa-eye"></span>

                        <button type="submit">Login</button>
                    </div>
                    <div id="register-form">
                        <h1 class="mast__title title-span">Register</h1>
                        <hr class="sep" style="margin: 0 auto">
                        <br />
                        <input type=text name="name" placeholder="Name" />

                        <input type="text" name="email" placeholder="Email">

                        <input type="password" name="password" class="password" placeholder="Enter Password" /><span class="fa-eye"></span>

                        <button type="submit">Register</button>
                    </div>
                </header>
            </section>
            

        </main>

@stop

@section('scripts')

    {{-- Particles JS --}}
    <script type="text/javascript" src="/js/particles.js"></script>
    {{-- Custom JS --}}
    <script src="/js/welcome.js"></script>
@stop