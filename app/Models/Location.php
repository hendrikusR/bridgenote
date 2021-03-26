<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'location'
    ];



    public function getDataLocationByUserId()
    {
        $locations = \DB::table('locations')
            ->select('user_id','status','position')
            ->get();

        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'data' => $locations
        ]);
    }

    public function insertDataLocation($params)
    {
        try {
            \DB::table('locations')->insert($params);

            return response()->json([
                'code' => 200,
                'message' => 'Data has been inserted',
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function updateDataLocationByUserId($params)
    {
        try {
            \DB::table('locations')->where('user_id', $params['user_id'])->update($params);

            return response()->json([
                'code' => 200,
                'message' => 'Data has been updated',
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function deleteDataLocationByUserId($params)
    {
        try {
            \DB::table('locations')->where('user_id', $params['user_id'])->delete();

            return response()->json([
                'code' => 200,
                'message' => 'Data has been deleted',
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
}
