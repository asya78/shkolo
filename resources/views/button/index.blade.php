@extends('layouts.default');

@section('content')

    @foreach ($buttons as $button)
        
        @if ($button->link)
            @php 
                $url= $button->link;
                $target= '_blank';
            @endphp
        @else
             @php 
                $url = route('button.edit', $button->id);
                $target= '_self';
             @endphp
        @endif 
        
        <div class="col-md-4 col-sm-4 col-xs-6">
            <a class="btn btn-lg btn-block"
               style="background-color:{{ $button->color }}"
               href="{{ $url }}" target="{{ $target}}"          
            >
                <i class="icon-plus-sign"></i>
            </a>
        </div>       

    @endforeach

@endsection
