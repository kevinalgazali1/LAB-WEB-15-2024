<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="flex flex-col min-h-screen">
    <nav class="bg-teal-500 border-gray-200 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Welcome, Go Shopping.</span>
          </a>
          <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-teal-500">
                <li>
                    <a href="{{ route('categories.index') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-500 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Categories</a>
                </li>
                <li>
                  <a href="{{ route('products.index') }}" class="block py-2 px-3 text-white  rounded md:bg-transparent md:text-white md:p-0 md:hover:text-blue-500" aria-current="page">Products</a>
                </li>
              <li>
                <a href="{{ route('inventoryLog.index') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-500 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Inventory Logs</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container mx-auto mt-4 flex-grow">
        @if (session('success'))
            <div class="bg-green-100 text-green-700 border border-green-300 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-bs-dismiss="alert" aria-label="Close">
                    <span class="material-icons text-green-700">close</span>
                </button>
            </div>
        @endif
        @yield('content')
    </div>
  
    <script src="{{ asset('js/backend.js') }}"></script>
</body>

</html>
