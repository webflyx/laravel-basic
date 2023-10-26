@foreach ($all_stats as $stats)
    <h3 class="mt-4 mb-2">{{ __('Stats for :currency', ['currency' => $stats->currency_id]) }}</h3>
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div>Count Donates</div>
                <h5 class="m-0">
                    {{ $stats['stats_count'] }}
                </h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-4">
                <div>Min</div>
                <h5 class="m-0">
                    {{ __money($stats->stats_min, $stats->currency_id) }}
                </h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-4">
                <div>Max</div>
                <h5 class="m-0">
                    {{ __money($stats->stats_max, $stats->currency_id) }}
                </h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-4">
                <div>Avg</div>
                <h5 class="m-0">
                    {{ __money($stats->stats_avg, $stats->currency_id) }}
                </h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-4">
                <div>Sum</div>
                <h5 class="m-0">
                    {{ __money($stats->stats_sum, $stats->currency_id) }}
                </h5>
            </div>
        </div>
    </div>
@endforeach
