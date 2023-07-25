

@foreach(Config::get('languages') as $Lang=>$languages)

    @if($Lang!=App::getLocale())
        <a href="{{route('Lang',$Lang)}}">{{$languages}}  </a>



       @endif

        @endforeach
