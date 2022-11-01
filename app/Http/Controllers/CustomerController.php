<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;


class CustomerController extends Controller
{
    public function index(): Factory|View|Application
    {
        $customers = Customer::with('products')->latest()->paginate(5);
        return view('customers.index', compact('customers'));
    }

    public function show(Customer $customer): Factory|View|Application
    {
        return view('customers.show', [
            'customer' => $customer
        ]);
    }

    public function create(): Factory|View|Application
    {
        return view('customers.create');
    }

    public function store(Request $request): Redirector|Application|RedirectResponse
    {
        Customer::create($request->validate([
            'name' => 'required|unique:customers',
            'address' => 'required|unique:customers',
            'description' => 'required',
        ]))
            ->products()
            ->attach($request->validate(['id' => 'integer|min:1']));

        return redirect('/customers');
    }

    public function edit(Customer $customer): Factory|View|Application
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer): Redirector|Application|RedirectResponse
    {
        $customer->update($request->validate([
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]));

        $customer->products()->attach($request->validate(['id' => 'integer|min:1']));

        return redirect()->back();
    }
}
