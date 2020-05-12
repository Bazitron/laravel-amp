@if(isset($canonicalUrl))
    <link rel="canonical" href="{{ $canonicalUrl }}" />
@else
    <link rel="canonical" href="{{ Request::url() }}" />
@endif


