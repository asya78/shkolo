<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.header')
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                    @endif

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                </div>
            </div>

            @yield('content')

            <footer class="row">
                @include('includes.footer')
            </footer>

        </div>
    </body>
</html>
