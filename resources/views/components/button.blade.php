<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <button type="button" {{$attributes->merge(['class'=>'btn btn-'.$type])}} class="btn btn-{{$type}}">{{$slot}}</button>
</div>