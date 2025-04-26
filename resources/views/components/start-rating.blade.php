@if ($rating)
    @for ($i=0; $i < 5; $i++)
        {{ $rating > round($i) ? '★' : '☆' }}
    @endfor
@endif