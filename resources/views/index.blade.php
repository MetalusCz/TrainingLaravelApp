<x-layouts.app>

    <div class="flex flex-wrap justify-center items-center border-b-2 border-sky-600 py-10">
        <h1 class="text-5xl font-bold">Welcome in my App.</h1>
    </div>
   
    

    <div class="row-flex justify-center py-20">

        <div
            class="w-96 h-64 duration-500 group overflow-hidden relative rounded-2xl bg-neutral-800 text-neutral-50 p-4 flex flex-col justify-evenly">
            <div
                class="absolute blur duration-500 group-hover:blur-none w-72 h-72 rounded-full group-hover:translate-x-12 group-hover:translate-y-12 bg-sky-900 right-1 -bottom-24"></div>
            <div
                class="absolute blur duration-500 group-hover:blur-none w-12 h-12 rounded-full group-hover:translate-x-12 group-hover:translate-y-2 bg-indigo-700 right-12 bottom-12"></div>
            <div
                class="absolute blur duration-500 group-hover:blur-none w-36 h-36 rounded-full group-hover:translate-x-12 group-hover:-translate-y-12 bg-indigo-800 right-1 -top-12"></div>
            <div
                class="absolute blur duration-500 group-hover:blur-none w-24 h-24 bg-sky-700 rounded-full group-hover:-translate-x-12"></div>
            <div class="z-10 flex flex-col justify-evenly w-full h-full">
                <span class="text-2xl font-bold">Text title</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat
                    felis nec rutrum vulputate. Morbi ut lobortis enim. Nam nec elit nibh.
                </p>
                <div class="pt-4">
                    <a href="/login" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center  bg-slate-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 text-black">
                        Go to login
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

                <div class="pt-2">
                    <a href="/register" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center  bg-sky-300 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 text-black">
                        Go to register
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <div class="flex flex-wrap justify-center items-stretch pt-10">
        <div class="lg:w-4/12 p-2">
            <div class="card-item ">
                <header>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">The PHP Framework
                        for Web Artisans</h5>
                </header>
                <footer>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                    <a href="https://laravel.com/docs/11.x" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Laravel
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </footer>

            </div>
        </div>
        <div class="lg:w-4/12 p-2">
            <div class="card-item">
                <header>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rapidly build modern websites without ever leaving your HTML.</h5>

                </header>
                <footer>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup.</p>
                    <a href="https://tailwindcss.com/docs/installation" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Tailwind
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </footer>

            </div>
        </div>
        <div class="lg:w-4/12 p-2">
            <div class="card-item">
                <header>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Building modern web apps is hard. </h5>

                </header>
                <footer>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tools like Vue and React are extremely powerful, but the complexity they add to a full-stack developer's workflow is insane.
                        <b>It doesn’t have to be this way...</b>
                    </p>
                    <a href="https://laravel-livewire.com/docs/2.x/quickstart" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Livewire
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </footer>

            </div>
        </div>
    </div>

</x-layouts.app>