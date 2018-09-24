<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Categories;
use App\Models\Shop\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


/**
 * Class DashboardController.
 */
class CategoriesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.categories.index');
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function edit($id)
    {
        $product = Categories::findOrFail($id);
        return view('backend.categories.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Categories::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect(route('admin.categories.index'))->withFlashSuccess('The product was successfully edited.');

    }

    public function store(Request $request)
    {
        Categories::create($request->all());
        return redirect(route('admin.categories.index'));
    }

    function destroy($id){
        $product = Categories::findOrFail($id);
        $product->delete();
        return redirect(route('admin.categories.index'))->withFlashSuccess('The product was successfully deleted.');
    }
}
