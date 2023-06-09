        <!-- Hero -->
        <section
            class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
            style="background-color: #800080;"
        >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('images/cat-silhoute.png');"
            ></div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    <span style="color:#FFC0CB">Meow</span><span style="color:#FFA500">Chat</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Connect with fellow cat lovers and share purr-fect moments of your feline companions in this social network for cat enthusiasts
                </p>
                <div>
                    @auth
                        {{-- You are login! --}}
                    @else
                        <a
                            href="/register"
                            class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                            >Sign Up to Post</a
                        >
                    @endauth
                </div>
            </div>
        </section>