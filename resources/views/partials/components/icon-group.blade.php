@foreach ($icons as $icon)
    @php
        $title = $icon['title'];
        $url = $icon['url'];
    @endphp

    <a class="icon-anchor {{ $anchor_classes }}" href="{{ $url }}" target="_blank" rel="noopener noreferrer"
        style="width:40px;height:40px;">
        <i class="fa-brands fa-{{ strtolower($title) }} w-100 h-100"></i>
    </a>
@endforeach
