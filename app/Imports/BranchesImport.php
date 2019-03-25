<?php

namespace App\Imports;

use App\Branch;
use Maatwebsite\Excel\Concerns\ToModel;

class BranchesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Branch([
            //
        ]);
    }
}
