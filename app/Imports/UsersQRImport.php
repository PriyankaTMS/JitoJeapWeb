<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class UsersQRImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        Log::info('Importing User: ', $row);
        $name = trim($row['name']);
        if (!isset($name)) {
            Log::warning('Skipped row due to missing name.', $row);
            return null;
        }
        $user = User::where('name', $name)->first();
        $qr_code = trim($row['photo']);
        if ($user) {
            $user->update([
                'name' => trim($row['name']),
                'qr_image' => $qr_code,
            ]);
        }
        return null;
    }
}
