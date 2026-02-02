<div {{$attributes->merge(['class'=>'p-4 text-sm rounded-lg'.$class])}} role="alert">
    <span class="font-medium">{{$title ?? "No existe valor del title"}}</span> {{$slot}}
</div>