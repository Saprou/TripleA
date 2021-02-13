<nav >
    <!-- Primary Navigation Menu -->
            <!-- Logo -->
    <div class="navLogo">
        <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
    </div>
    <div class="navLinks">
        <a href="/"><h3 style="color:#d09c36">Home</h3></a>
        <a href="/about"><h3>About Us</h3></a>
        <a href="/visit"><h3>Visit AAA</h3></a>
        <a href="/menu"><h3>Menu</h3></a>
        <a href="/gallary"><h3>Gallery</h3></a>
        <a href="/contact"><h3>Contact Us</h3></a>
        <section class="loginB">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z"/></svg>
            <div>
                <?php
                if(Auth::check()){
                    echo Auth::user()->name;
                }else{
                    echo 'Login';
                }
                ?>
            </div>
            <section class="loginMenu">
                <ul>
                    <li><a href="login"><h4>LOGIN</h4></a></li>
                    <li><a href="register"><h4>REGISTER</h4></a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <button style="background-color:transparent;
                                outline:none;
                                border:none;
                                box-shadow:none;
                                width:100%;
                                "><h4>{{ __('Logout') }}</h4></button>
                            
                        </form>

                    </li>
                </ul>
            </section>
        </section>
                    <!-- Authentication -->
                    
        </div>
    </div>
    

            <!-- Hamburger -->
           {{--  <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> --}}

</nav>
