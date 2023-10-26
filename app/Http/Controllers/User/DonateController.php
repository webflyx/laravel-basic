<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index()
    {

        // $currency = Currency::query()->get();

        // for($i = 0; $i < 1000; $i++){
        //     Donate::query()->forceCreate([
        //         'amount' => rand(0, 1000),
        //         'created_at' => now()->subDays(rand(0, 1000)),
        //         'currency_id' => $currency->random()->id,
        //     ]);
        // }

        //$stats_count = Donate::query()->where('amount', '>', '100')->count();
        
        // $stats = [
        //     'stats_count' => Donate::query()->count(),
        //     'stats_max' => Donate::query()->max('amount'),
        //     'stats_min' => Donate::query()->min('amount'),
        //     'stats_avg' => Donate::query()->avg('amount'),
        //     'stats_sum' => Donate::query()->sum('amount'),
        // ];

        //$stats = Donate::query()->select('id', 'amount')->get();
        $all_stats = Donate::query()
            ->select(['currency_id'])
            ->selectRaw('count(*) as stats_count')
            ->selectRaw('sum(amount) as stats_sum')
            ->selectRaw('min(amount) as stats_min')
            ->selectRaw('max(amount) as stats_max')
            ->selectRaw('avg(amount) as stats_avg')
            ->groupBy('currency_id')
            ->get();

        //dd($stats->toArray());

        return view('user.donate.donates', compact('all_stats'));
    }
}
