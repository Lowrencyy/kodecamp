<h1>{{$heading}}</h1>

@unless (count($lectures) == 0)
    @foreach ($lectures as $lecture)
    <a href="/lecture/{{$lecture['id']}}">
        <h2>{{$lecture['title']}}</h2>
       <p>{{$lecture['description']}}</p>
       {{-- <iframe width="560" height="315" src={{$student['video']}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
       <img src={{$lecture['image']}} alt="img-logo"></a>
    @endforeach
    @else
    <p>no lecture found</p>
@endunless