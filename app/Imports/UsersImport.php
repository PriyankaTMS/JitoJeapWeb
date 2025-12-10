<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PowerTeam;
use App\Models\Chapter;
use App\Models\Category;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        Log::info('Importing User: ', $row);
        $email = trim($row['email_id']);
        if (strlen($email) < 5) {
            Log::warning('Skipped row due to invalid email.', $row);
            return null;
        }
        if (!isset($email)) {
            Log::warning('Skipped row due to missing email.', $row);
            return null;
        }
        $chapter = null;
        $row_chapter = $row["chapter_name"] ?? $row['chapter'] ?? null;
        if (isset($row_chapter)) {
            $chapter = Chapter::where('name', $row_chapter)->first();
            if (is_null($chapter)) {
                $chapter = new Chapter();
                $chapter->name = $row_chapter;
                $chapter->save();
            }
        }

        $category = null;
        $row_category = $row["business_category"] ?? $row['category'] ?? null;
        if (isset($row_category)) {
            $category = Category::where('name', $row_category)->first();
            if (is_null($category)) {
                $category = new Category();
                $category->name = $row_category;
                $category->save();
            }
        }

        $power_team = null;
        if (isset($row['power_team'])) {
            $power_team = PowerTeam::where('name', $row['power_team'])->first();
            if (is_null($power_team)) {
                $power_team = new PowerTeam();
                $power_team->name = $row['power_team'];
                $power_team->save();
            }
        }

        $cap_id = is_null($chapter) ? null : $chapter->id;
        $cat_id = is_null($category) ? null : $category->id;
        $power_team_id = is_null($power_team) ? null : $power_team->id;

        $user = User::where('email', $email)->first();

        $addr = $row['office_address'] ?? $row['address'] ?? null;
        $company = $row["business_namecompany_name"] ?? $row['company_name'] ?? null;

        $link = $row['website'] ?? null;
        if ($link !== null && strlen($link) > 255) {
            $link = substr($link, 0, 255);
        }
        $chap_des = $row['chapter_designation'] ?? null;
        $branches = $row['branches'] ?? null;
        $exp = $row['experience'] ?? null;
        if ($exp !== null && strlen($exp) > 255) {
            $exp = substr($exp, 0, 255);
        }
        $com_brief = $row['company_brief'] ?? null;
        $usp = $row['usp'] ?? null;
        $dream_r = $row['dream_referral'] ?? null;
        if ($dream_r !== null && strlen($dream_r) > 255) {
            $dream_r = substr($dream_r, 0, 255);
        }
        if ($user) {
            $name = $row["member_name"] ?? $row['name'] ?? $user->name;
            $user->update([
                'name'     => $name,
                'mobile'   => $row["mobile_number_1"] ?? $row['mobile'] ?? $user->mobile,
                'role'     => $row['role'] ?? $user->role,
                'status'   => "1",
                'addr'     => $addr,
                'company'  => $company,
                'link'     => $link,
                'chap_des' => $chap_des,
                'branches' => $branches,
                'exp'      => $exp,
                'com_brief' => $com_brief,
                'usp'      => $usp,
                'dream_r'  => $dream_r,
                'cap_id'   => $cap_id,
                'cat_id'   => $cat_id,
                'pt_id'    => $power_team_id,
                'password' => Hash::make($email),
            ]);
            return null;
        } else {
            $name = $row["member_name"] ?? $row['name'] ?? 'Default Name';
            return new User([
                'cap_id'   => $cap_id,
                'name'     => $name,
                'email'    => $email,
                'password' => Hash::make($email),
                'mobile'   => $row['mobile'] ?? null,
                'role'     => $row['role'] ?? 'user',
                'status'   => "1",
                'addr'     => $addr,
                'company'  => $company,
                'link'     => $link,
                'chap_des' => $chap_des,
                'branches' => $branches,
                'exp'      => $exp,
                'com_brief' => $com_brief,
                'usp'      => $usp,
                'dream_r'  => $dream_r,
                'cap_id'   => $cap_id,
                'cat_id'   => $cat_id,
                'pt_id'    => $power_team_id,
            ]);
        }
    }
}
