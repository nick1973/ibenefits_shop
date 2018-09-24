<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shop\OnlineTraining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


/**
 * Class DashboardController.
 */
class OnlineTrainingController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.online_training.index');
    }

    public function create()
    {
        return view('backend.online_training.create');
    }

    public function edit($id)
    {
        $product = OnlineTraining::findOrFail($id);
        return view('backend.online_training.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = OnlineTraining::find($id);
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
                'new_in' => $request->input('new_in'),
            ]);
        } else{
            $input = $request->except('image_url');
            $product->update($input);
        }
        return redirect(route('admin.online-training.index'))->withFlashSuccess('The product was successfully edited.');

    }

    public function store(Request $request)
    {
        If(Input::hasFile('image')){
            $file = Input::file('image');
            $destinationPath = 'product_images';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            $product = OnlineTraining::create([
                'image_url' => '/' . $destinationPath . '/' . $filename,
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'visible' => $request->input('visible'),
                'new_in' => $request->input('new_in'),
            ]);
        } else{
            OnlineTraining::create($request->all());
        }
        return redirect(route('admin.online-training.index'))->withFlashSuccess('The product was successfully added.');
    }

    function destroy($id){
        $product = OnlineTraining::findOrFail($id);
        $product->delete();
        return redirect(route('admin.online-training.index'))->withFlashSuccess('The product was successfully deleted.');
    }
}
