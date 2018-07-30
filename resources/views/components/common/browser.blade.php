@if (isset($url))
<a href="{{ $url }}" target="_blank">
@endif
<div class="browser-mockup {{ isset($type) ? $type : '' }}">
    <span class="search-bar">{{ isset($domain) ? $domain : '' }}</span>
    <img src="{{ isset($src) ? $src : '' }}" alt="{{ isset($src) ? $src : '' }}">
</div>
@if (isset($url))
</a>
@endif

@if (isset($domain))
<style>.browser-mockup.with-url:after { content: '{{ $domain }}' }</style>
@endif