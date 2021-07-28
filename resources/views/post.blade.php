@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h2>{{ $post["author"] }}</h2>
    <p>{{ $post["body"] }}</p>
</article>
    
<a href="/blog">Back to Posts</a>
@endsection
