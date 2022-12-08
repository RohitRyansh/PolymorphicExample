

@foreach ($posts->tags as $tag)
    {{ $tag->name }}
@endforeach
@foreach ($tags->posts as $post) 
    {{ $post->name }}
@endforeach


