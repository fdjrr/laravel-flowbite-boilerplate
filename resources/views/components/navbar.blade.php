<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button
                    class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden"
                    data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" type="button" aria-controls="logo-sidebar">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a class="ms-2 flex md:me-24" href="{{ route('dashboard') }}" wire:navigate>
                    <img class="me-3 h-8" src="{{ asset('assets/img/whatsapp.png') }}" alt="{{ config('app.name') }}" />
                    <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white sm:text-2xl">{{ config('app.name') }}</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="ms-3 flex items-center">
                    <div>
                        <button class="flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" data-dropdown-toggle="dropdown-user"
                            type="button" aria-expanded="false">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                Neil Sims
                            </p>
                            <p class="truncate text-sm font-medium text-gray-900 dark:text-gray-300" role="none">
                                neil.sims@flowbite.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
