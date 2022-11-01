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
        <a class="hover:underline underline-offset-8 decoration-4 decoration-blue-500 text-sm py-2 px-4"
           href="/products/create">Register
            New
            Product</a>
        <a class="hover:underline underline-offset-8 decoration-4 decoration-blue-500 text-sm py-2 px-4"
           href="/customers/create">Register
            New Customer</a>
        <a class="hover:underline underline-offset-8 decoration-4 decoration-blue-500 text-sm py-2 px-4"
           href="/products">Products</a>
        <a class="underline underline-offset-8 decoration-4 decoration-blue-500 text-sm py-2 px-4 mr-10"
           href="/customers">Customers</a>
    </div>
</div>
<body>
<div class="flex justify-center text-2xl uppercase font-medium">
    <h1>Customers</h1>
</div>
<div class="flex justify-center mx-auto my-10">
    <div class="flex flex-col">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Id
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Name
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Address
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Details
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Purchased products • ID • Type • Price • Date
                            </th>
                        </tr>
                        </thead>
                        @foreach($customers as $customer)
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white hover:text-blue-500">
                                    <a href="/customers/{{ $customer->id }}">
                                        {{ $customer->id }}</a>
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white hover:text-blue-500">
                                    <a href="/customers/{{ $customer->id }}">
                                        {{ $customer->name }}</a>
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                    {{ $customer->address }}
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                    {{ $customer->description }}
                                </td>
                                <td>
                                    <ul class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        @foreach($customer->products as $product)
                                            <li><a class="hover:text-blue-500"
                                                   href="/products/{{ $product->id }}">ID: {{ $product->id }}
                                                    • {{ $product->type }} • {{ $product->price / 100 }}€
                                                    • {{ $product->pivot->updated_at->setTimezone('Europe/Riga')->format('j.m.Y | H:i:s') }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="my-6"> {{ $customers->links() }}</div>
    </div>
</div>
</body>
</html>
