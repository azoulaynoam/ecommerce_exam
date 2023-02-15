<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductsImport implements ToModel, SkipsOnError
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'id' => $row[0],
            'name' => $row[1],
            'price' => $row[2],
            'discount' => $row[3],
            'favorite' => $row[4],
        ]);
    }    

    public function onError(\Throwable $e)
    {
        // Handle the exception here
    }
}
