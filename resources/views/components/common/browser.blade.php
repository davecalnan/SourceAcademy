@if (isset($url))
<a href="{{ $url }}" target="_blank">
@endif
<div class="browser-mockup {{ isset($type) ? $type : '' }}">
    <span class="search-bar">{{ isset($domain) ? $domain : '' }}</span>
    @if (isset($src))
        @if (filter_var($src, FILTER_VALIDATE_URL))
        <div class="iframe-container">
            <iframe id="website-review-iframe" src="{{ $src }}" frameborder="0"></iframe>
        </div>
        @else
        <img src="{{ $src }}" alt="{{ isset($alt) ? $alt : 'Website Screenshot' }}">
        @endif
    @endif
</div>
@if (isset($url))
</a>
@endif

@if (isset($domain))
<style>.browser-mockup.with-url:after { content: '{{ $domain }}' }</style>
@endif