<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Warehouse</title>
</head>
<div class="hidden md:block my-6">
    <div class="flex justify-end items-baseline">
        <a class="underline underline-offset-8 decoration-4 decoration-blue-500 text-sm py-2 px-4"
           href="/products/create">Register
            New
            Product</a>
        <a class="hover:underline underline-offset-8 decoration-4 decoration-blue-500 text-sm py-2 px-4"
           href="/customers/create">Register
            New
            Customer</a>
        <a class="hover:underline underline-offset-8 decoration-4 decoration-blue-500 text-sm py-2 px-4"
           href="/products">Products</a>
        <a class="hover:underline underline-offset-8 decoration-4 decoration-blue-500 text-sm py-2 px-4 mr-10"
           href="/customers">Customers</a>
    </div>
</div>
<header class="my-10 text-center">
    <h2 class="drop-shadow-md text-2xl font-bold uppercase mb-1">
        Register new product
    </h2>
    <p class="drop-shadow-md mb-4">Add new product to database</p>
</header>
<body>
<div class="flex flex-col items-center mb-40">
    <form method="POST" action="/products">
        @csrf
        <div class="mb-6">
            <label
                for="name"
                class="w-96 drop-shadow-md inline-block text-lg mb-2 pl-3">Name</label>
            <label>
                <input
                    type="text"
                    class="border-none shadow-lg text-xs rounded-lg p-3 pl-3 w-full focus:outline-none focus:ring"
                    name="name"
                    placeholder="Example: The North Face"
                    required
                    value="{{ old('name') }}"/>
            </label>
            @error('name')
            <p class="text-red-500 text-xs mt-1 ml-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label
                for="type"
                class="drop-shadow-md inline-block text-lg mb-2 pl-3">Category</label>
            <label>
                <input
                    type="text"
                    class="border-none shadow-lg text-xs rounded-lg p-3 pl-3 w-full focus:outline-none focus:ring"
                    name="type"
                    placeholder="Example: Parka"
                    required
                    value="{{ old('type') }}"/>
            </label>
            @error('type')
            <p class="text-red-500 text-xs mt-1 ml-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label
                for="description"
                class="drop-shadow-md inline-block text-lg mb-2 pl-3">Details</label>
            <label>
                <input
                    type="text"
                    class="border-none shadow-lg text-xs rounded-lg p-3 pl-3 w-full focus:outline-none focus:ring"
                    name="description"
                    placeholder="Example: Lorem ipsum dolor sit amet, consectetur adipisicing elit."
                    required
                    value="{{ old('description') }}"/>
            </label>
            @error('description')
            <p class="text-red-500 text-xs mt-1 ml-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label
                for="price"
                class="drop-shadow-md inline-block text-lg mb-2 pl-3">Price</label>
            <label>
                <input
                    type="text"
                    id="price"
                    class="border-none shadow-lg text-xs rounded-lg p-3 pl-3 w-full focus:outline-none focus:ring"
                    name="price"
                    placeholder="Example: 52789"
                    required
                    value="{{ old('price') }}"/>
            </label>
            @error('price')
            <p class="text-red-500 text-xs mt-1 ml-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <button
                class="text-white bg-blue-500 rounded-full py-2 px-6 hover:opacity-95">Submit
            </button>
            <a href="/products"
               class="inline-block ml-4 text-blue-500 hover:underline">
                ‹ Back</a>
        </div>
    </form>
</div>
</body>
</html>
