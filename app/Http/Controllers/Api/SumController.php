<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SumController extends Controller
{
    public function operacion($mode, $params)
    {
        switch ($mode) {
            case 'sum':
                return $this->sum($params);
            case 'mul':
                return $this->mul($params);
            default:
                return response()->json(['error' => 'Operación no válida'], 400);
        }
    }
    private function sum($params)
    {
        $numbers = explode('/', $params);
        $result = array_sum($numbers);
        return $result;
    }
    private function mul($params)
    {
        $numbers = explode('/', $params);
        $result = array_product($numbers);
        return $result;
    }
}
