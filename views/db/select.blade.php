@foreach($news as $newsItem)

    <h1>{{$newsItem->tittle}}</h1>
    <p>{{$newsItem->summary}}</p>
    <a href="/db/detail/{{$newsItem->}}">Detaylar>></a>
    <hr/>

@endforeach
