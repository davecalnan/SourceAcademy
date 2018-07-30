<div class="card">
    <div class="card-content">
        @if (isset($icon) || isset($title) || isset($subtitle))
        <div class="media">
            @if (isset($icon))
            <div class="media-left">
                <figure class="image is-48x48">
                    {{ $icon }}
                </figure>
            </div>
            @endif
            
            @if (isset($title) || isset($subtitle))
            <div class="media-content">
                @if (isset($title))
                <p class="title is-4">{{ $title }}</p>
                @endif
                @if (isset($subtitle))
                <p class="subtitle is-6">{{ $subtitle }}</p>
                @endif
            </div>
            @endif
        </div>
        @endif
        
        @if (isset($content))
            {{ $content }}
        @endif
    </div>

    @if (isset($footer))
    <footer class="card-footer">
        {{ $footer }}
    </footer>
    @endif
</div>