<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 15);
        return ItemResource::collection(Item::paginate($perPage)->appends([
            'per_page' => $perPage,
        ]));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>  'required|max:255|string',
            'seller' =>  'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'error' => $validator->messages(),
            ], '400');
        }

        Item::create([
            'name' => $request->name,
            'seller' => $request->seller,
            'price' => $request->price,
        ]);

        return response()->json([
            'status' => 201,
            'message' => 'Item Created Successfully!'
        ]);
    }

    /**
     * @param string $id
     * @return ItemResource
     */
    public function show(string $id)
    {
        return ItemResource::make(Item::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
