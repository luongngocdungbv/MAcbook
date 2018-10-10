@if (empty($widget_setting) || $widget_setting->status == 1)
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="{{ route('pages.list') }}">
            <div class="visual">
                <i class="far fa-file-alt"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $pages }}">0</span>
                </div>
                <div class="desc"> {{ trans('core.page::pages.pages') }} </div>
            </div>
        </a>
    </div>
@endif