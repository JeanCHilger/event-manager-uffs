@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <base-header>
    </base-header>

    {{-- Main --}}
    <main class="app-main">

        <base-card
            action-card
        >
        </base-card>

        <base-card
            title="Lorem Ipsum"
            description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            date="19/03/2020"
        >
        </base-card>

        <base-card
            paper-card
            variant="dark"
            padding="large"
        >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </base-card>

        <base-card
            paper-card
            variant="primary"
            shadow="large"
        >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </base-card>

        <base-card
            paper-card
            variant="light"
            padding="x-large"
            shadow="medium"
        >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </base-card>
    </main>

    {{-- Footer --}}
    <footer class="app-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="app-footer__logo">
                        Desenvolvido pela FronteiraTec
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="app-footer__nav">
                        <div class="app-footer__nav-title">
                            Links úteis
                        </div>

                        <a href="http://cc.uffs.edu.br/" class="app-footer__link">CC UFFS</a>
                    </div>
                </div>


            </div>

        </div>
    </footer>



@endsection
