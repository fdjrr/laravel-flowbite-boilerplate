<div class="flex items-center justify-center h-screen w-100">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:border-gray-700 dark:bg-gray-800 sm:p-6 md:p-8">
        <form class="space-y-6" action="#">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h5>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="email">Your email</label>
                <input
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                    id="email" name="email" type="email" placeholder="name@company.com" required />
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="password">Your password</label>
                <input
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                    id="password" name="password" type="password" placeholder="••••••••" required />
            </div>
            <div class="flex items-start">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input
                            class="w-4 h-4 border border-gray-300 rounded focus:ring-3 bg-gray-50 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800"
                            id="remember" type="checkbox" value="" required />
                    </div>
                    <label class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300" for="remember">Remember me</label>
                </div>
                <a class="text-sm text-blue-700 ms-auto hover:underline dark:text-blue-500" href="#">Lost Password?</a>
            </div>
            <button
                class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="submit">Login to your account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Not registered? <a class="text-blue-700 hover:underline dark:text-blue-500" href="#">Create account</a>
            </div>
        </form>
    </div>
</div>
