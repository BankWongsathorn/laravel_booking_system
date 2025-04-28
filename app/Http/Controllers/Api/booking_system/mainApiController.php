<?php

namespace App\Http\Controllers\Api\booking_system;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class mainApiController extends Controller
{
    protected $menu_name = "Main";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Request $request)
    {

    }

    public function index(Request $request)
    {
        $test = DB::connection('laravel_info')
        ->select('select id , name , location , capacity, available from rooms r ');

    return response()->json($test);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $startTime = Carbon::parse($request->input('start_time'))->format('Y-m-d H:i:s');
        $endTime = Carbon::parse($request->input('end_time'))->format('Y-m-d H:i:s');

        $updated = DB::table('rooms')
        ->where('id', $request->room_id)
        ->update([
            'available' => 0,
            'start_time' => $startTime,
            'end_time' => $endTime,
        ]);


        if ($updated) {
            return response()->json(['message' => 'จองห้องสำเร็จ'], 200);
        }

        return response()->json(['message' => 'ไม่พบห้องประชุมที่ระบุ'], 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {}
}
