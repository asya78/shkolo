@extends('layouts.default');

@section('content')

    @foreach ($buttons as $button)
        
        @if ($button->link)
            @php 
                $url= $button->link;
                $target= '_blank';
                $action = 'action-url';
                $id = $button->id;
            @endphp
        @else
             @php 
                $url = route('button.edit', $button->id);
                $target= '_self';
                $action = '';
                $id= '';
             @endphp
        @endif 
        
        <div class="col-md-4 col-sm-4 col-xs-6">
            <a class="btn btn-lg btn-block {{ $action }}"
               style="background-color:{{ $button->color }}"
               href="{{ $url }}" target="{{ $target}}"
               data-id="{{ $id }}"
            >
                <i class="icon-plus-sign"></i>
            </a>
        </div>       

    @endforeach

@endsection
