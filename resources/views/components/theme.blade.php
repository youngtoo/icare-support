<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name')}} | Home</title>

        @livewireStyles

        <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css")}}">
        @vite(['resources/js/app.js' ,'resources/scss/app.scss'])



    </head>
    <body>

        <!-- As a heading -->
        <x-nav/>


        <!-- Application -->
        <div id="icare-application" class="container px-2">

            <!-- 
                The page should be able to show the following sections
                1. Navigation
                2. Main content
                3. Page footer

            -->

            <!-- Navigation -->


            <!-- Main content -->


            <!-- Page footer -->


            <main class="row gx-5">
               
                    <!-- Sidebar -->
                    
                    <div id="sidebar" class="col-sm-2">
                        <x-sidenav/>
                    </div>

                    <!-- Content -->
                    <div id="main-content" class="col-sm-10">

                        <!-- Page Title -->

                    @auth
                        <x-notify type="success" message="You're authenticated!"/>
                    @endauth
                     
                    @guest
                        <x-notify type="warning" message="You are not authenticated!"/>
                    @endguest
                    <h4 class="mt-4 mb-2 p-2">{{ $pageTitle }}</h4>
                    <div class="notification-area"></div>
                        
                        {{ $slot }}

                    </div>
                    <!-- Content -->
    
            </main>
            
        </div>

      
        
        <!--script src="{{-- asset("assets/js/popper.js") --}}"></script-->
        <script src="{{ asset("assets/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{ asset("assets/js/feather.min.js")}}"></script>
        <script>
            feather.replace()

            /* Initialize Popover */
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
            const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

            /* Initialize Toast */
            const toastTrigger = document.getElementById('liveToastBtn')
            const toastLiveExample = document.getElementById('liveToast')
            if (toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                //const toast = new bootstrap.Toast(toastLiveExample)
                //toast.show()
            })
            }
        </script>

        @livewireScripts
    </body>
</html>