<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function show(Point $point)
    {
        //
    }

    public function add_location(Request $request){
        
        $point = new Point([
            'lat' => $request->lat,
            'lang' => $request->lng,

        ]);
        $point->save();

            return back()
            ->with('success','Coordinates have been saved in database.');
   }

    // function add_location(){
    //     $con=mysqli_connect ("localhost", 'root', 'looka','test');
    //     if (!$con) {
    //         die('Not connected : ' . mysqli_connect_error());
    //     }
    //     $lat = $_GET['lat'];
    //     $lng = $_GET['lng'];
    //     // Inserts new row with place data.
    //     $query = sprintf("INSERT INTO locations " .
    //         " (id, lat, lng) " .
    //         " VALUES (NULL, '%s', '%s');",
    //         mysqli_real_escape_string($con,$lat),
    //         mysqli_real_escape_string($con,$lng));
    
    //     $result = mysqli_query($con,$query);
    //     echo json_encode("Inserted Successfully");
    //     if (!$result) {
    //         die('Invalid query: ' . mysqli_error($con));
    //     }
    // }

    // function get_saved_locations(){
    //     $con=mysqli_connect ("localhost", 'root', '','test');
    //     if (!$con) {
    //         die('Not connected : ' . mysqli_connect_error());
    //     }
    //     // update location with location_status if admin location_status.
    //     $sqldata = mysqli_query($con,"select lng,lat from locations ");
    
    //     $rows = array();
    //     while($r = mysqli_fetch_assoc($sqldata)) {
    //         $rows[] = $r;
    
    //     }
    //     $indexed = array_map('array_values', $rows);
    
    //     //  $array = array_filter($indexed);
    
    //     echo json_encode($indexed);
    //     if (!$rows) {
    //         return null;
    //     }
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function edit(Point $point)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Point $point)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function destroy(Point $point)
    {
        //
    }
}
