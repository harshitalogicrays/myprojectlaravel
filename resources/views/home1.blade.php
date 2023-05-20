<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Welcome {{$name ?? ' Guest'}}</h1> -->
    <!-- {!!$demo!!} -->

    <!-- @if($name!="")
        {{"name is not empty"}}
    @endif -->

    <!-- @if($name!="")
        {{"name is not empty"}}
    @else
    {{"name is empty"}}
    @endif -->

    <!-- @if($name=="")
        {{"name is  empty"}}
    @elseif($name=="happy")
        {{"name is happy"}}
    @else
        {{"name is incorrect"}}
    @endif -->

    <!-- @unless ($name=="Haa")
        The name is not Happiness
    @endunless -->

    <!-- @isset($name)
        Welcome {{$name}}
    @endisset -->

    <!-- @for($i=1;$i<=10;$i++)
        <h3>{{$i}}</h3>  
    @endfor -->

    @php
    // $i=1;
    @endphp
    {{-- @while($i<=10)
        <h3>{{$i}}</h3> --}}
    @php
    // $i++;
    @endphp
    {{-- @endwhile --}}

        {{-- @php
        $arr=[1,2,3,4,5,6,7,8];
        @endphp
        @foreach($arr as $i)
            <h4>{{$i}}</h4>
        @endforeach --}}

        {{-- @php
        $cityarr=array('pune','kota','mumbai','jaipur','baroda','ahmedabad');
        @endphp
        <select>
                <option selected disabled>Select City</option>
                @foreach($cityarr as $key=>$city)
                    <option value="{{$key}}">{{$city}}</option>
                @endforeach
        </select> --}}

    {{-- @for($i=1;$i<=10;$i++)
        @if($i==5)
            @continue
        @endif
        <h3>{{$i}}</h3>  
    @endfor  --}}

    {{-- @for($i=1;$i<=10;$i++)
    @if($i==5)
        @break
    @endif
    <h3>{{$i}}</h3>  
@endfor  --}}


</body>
</html>