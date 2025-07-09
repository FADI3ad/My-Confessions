<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Confession extends Model
{
    use HasFactory;

    protected $guarded = [];




    public static function scopeLatecomers($query) {
        return $query->where('nextvisit', '<', date('Y-m-d'));
    }

    public function scopeUpcomingBirthdays($query)
    {
        $today = Carbon::today();
        $in7Days = $today->copy()->addDays(7);

        $start = $today->format('m-d');     // مثلاً 07-09
        $end = $in7Days->format('m-d');     // مثلاً 07-16 أو 08-01

        if ($start <= $end) {
            // التاريخ لسه في نفس السنة (مثلاً من 07-09 إلى 07-16)
            return $query->whereRaw("DATE_FORMAT(dob, '%m-%d') BETWEEN ? AND ?", [$start, $end]);
        } else {
            // التاريخ بيعدي على آخر السنة (مثلاً من 12-30 إلى 01-05)
            return $query->where(function ($q) use ($start, $end) {
                $q->whereRaw("DATE_FORMAT(dob, '%m-%d') >= ?", [$start])
                ->orWhereRaw("DATE_FORMAT(dob, '%m-%d') <= ?", [$end]);
            });
        }
    }




}
