<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Reward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


/**
 * Class DashboardController.
 */
class RewardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.reward.index');
    }

    public function create()
    {
        return view('backend.reward.create');
    }

    public function edit($id)
    {
        $product = Reward::findOrFail($id);
        return view('backend.reward.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Reward::find($id);
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
        return redirect(route('admin.reward.index'))->withFlashSuccess('The product was successfully edited.');

    }

    public function store(Request $request)
    {
        If(Input::hasFile('image')){
            $file = Input::file('image');
            $destinationPath = 'product_images';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            $product = Reward::create([
                'image_url' => '/' . $destinationPath . '/' . $filename,
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'visible' => $request->input('visible'),
            ]);
        } else{
            Reward::create($request->all());
        }
        return redirect(route('admin.reward.index'))->withFlashSuccess('The product was successfully added.');
    }

    function destroy($id){
        $product = Reward::findOrFail($id);
        $product->delete();
        return redirect(route('admin.reward.index'))->withFlashSuccess('The product was successfully deleted.');
    }
}
