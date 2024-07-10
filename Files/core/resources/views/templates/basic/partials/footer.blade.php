@php
    $content = getContent('footer.content', true);
    $socialIcons = getContent('social_icon.element', false, 4, true);
    $policies = getContent('policy_pages.element', false, 5, true);
    $categories = App\Models\Category::active()
        ->limit(5)
        ->get();
@endphp
@include($activeTemplate . 'partials.cookie')
<footer class="footer">
    <div class="section">
        <div class="container">
            <div class="row g-4 justify-content-xl-between">
                <div class="col-md-6 col-lg-3">
                    <h4 class="mt-0 text--white">{{ __(@$content->data_values->title) }}</h4>
                    <p class="text--white">
                        {{ __(@$content->data_values->description) }}
                    </p>
                    <ul class="list list--row social-list">
                        @foreach ($socialIcons as $social)
                            <li>
                                <a href="{{ $social->data_values->url }}" class="t-link social-list__icon" target="_blank">
                                    @php echo $social->data_values->icon @endphp
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-2">
                    <h4 class="mt-0 text--white">@lang('Explore')</h4>
                    <ul class="list" style="--gap: 0.5rem">
                        <li>
                            <a href="{{ route('members') }}" class="t-link t-link--base text--white d-inline-block sm-text">
                                @lang('Members')
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('collections') }}" class="t-link t-link--base text--white d-inline-block sm-text">
                                @lang('Collections')
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('images', ['scope' => 'premium']) }}" class="t-link t-link--base text--white d-inline-block sm-text">
                                @lang('Premium')
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('images', ['scope' => 'featured']) }}" class="t-link t-link--base text--white d-inline-block sm-text">
                                @lang('Featured')
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('images', ['scope' => 'popular']) }}" class="t-link t-link--base text--white d-inline-block sm-text">
                                @lang('Popular')
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-2">
                    <h4 class="mt-0 text--white">@lang('Categories')</h4>
                    <ul class="list" style="--gap: 0.5rem">
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('search', ['type' => 'image', 'category' => $category->slug]) }}" class="t-link t-link--base text--white d-inline-block sm-text">
                                    {{ __($category->name) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-2">
                    <h4 class="mt-0 text--white">@lang('Useful Links')</h4>
                    <ul class="list" style="--gap: 0.5rem">
                        @foreach ($policies as $policy)
                            <li>
                                <a href="{{ route('policy.pages', [slug($policy->data_values->title), $policy->id]) }}" class="t-link t-link--base text--white d-inline-block sm-text">
                                    {{ __($policy->data_values->title) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="mb-0 sm-text text--white text-center">
                        @lang('Copyright') &copy; {{ date('Y') }}. @lang('All Rights Reserved By')
                        <a href="{{ route('home') }}" class="t-link">{{ __($general->site_name) }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
