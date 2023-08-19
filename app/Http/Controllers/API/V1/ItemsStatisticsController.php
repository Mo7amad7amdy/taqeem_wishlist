<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemsStatisticsController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke() {
        $currentMonth = Carbon::now()->month;

        $totalPrice = DB::table('items')
            ->whereMonth('created_at', $currentMonth)
            ->sum('price');

        $averagePrice = DB::table('items')
            ->avg('price');

        return response()->json([
            'status' => 200,
            'data' => [
                'total_price' => $totalPrice,
                'average_price' => $averagePrice,
            ]
        ]);
    }
}
