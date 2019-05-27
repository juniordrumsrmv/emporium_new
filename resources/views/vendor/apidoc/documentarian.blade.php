---
{!! $frontmatter !!}
---
<!-- START_INFO -->
{!! $infoText !!}
<!-- END_INFO -->
{!! $prependMd !!}
@foreach($parsedRoutes as $group => $routes)
@if($group!='general')
#{!! $group !!}

@foreach($routes as $parsedRoute)
@if($writeCompareFile === true)
{!! $parsedRoute['output'] !!}
@else
{!! isset($parsedRoute['modified_output']) ? $parsedRoute['modified_output'] : $parsedRoute['output'] !!}
@endif
@endforeach
@endif
@endforeach{!! $appendMd !!}
