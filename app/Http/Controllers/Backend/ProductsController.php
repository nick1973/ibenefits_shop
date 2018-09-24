<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Categories;
use App\Models\Shop\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


/**
 * Class DashboardController.
 */
class ProductsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.products.index');
    }

    public function create()
    {
        $categories = Categories::select('category')->get();
        return view('backend.products.create', compact('categories'));
    }

    public function edit($id)
    {
        $categories = Categories::select('category')->get();
        $product = Products::findOrFail($id);
        return view('backend.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id) {
        $product = Products::find($id);
        If(Input::hasFile('image_url')) {
            $file = Input::file('image_url');
            $destinationPath = 'product_images';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            $product->update([
                'image_url' => '/' . $destinationPath . '/' . $filename,
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'visible' => $request->input('visible'),
            ]);
        } else{
            $input = $request->except('image_url');
            $product->update($input);
        }
        return redirect(route('admin.products.index'))->withFlashSuccess('The product was successfully edited.');

    }

    public function store(Request $request)
    {
        If(Input::hasFile('image')){
            $file = Input::file('image');
            $destinationPath = 'product_images';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            $product = Products::create([
                'image_url' => '/' . $destinationPath . '/' . $filename,
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'visible' => $request->input('visible'),
            ]);
        } else{
            Products::create($request->all());
        }
        return redirect(route('admin.products.index'))->withFlashSuccess('The product was successfully added.');
    }

    function destroy($id){
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect(route('admin.products.index'))->withFlashSuccess('The product was successfully deleted.');
    }
}
