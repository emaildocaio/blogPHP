<x-layout>

    @section('banner')
        <h1>BANNER</h1>
    @endsection
    
    <x-slot name='content'> 
        <article>
            <h1>{{$post->title }}</h1>

            <p>
                By <a href="#">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>

            <div>
                <p>{!! $post->body !!}</p>
            </div>
        </article>
        <a href="/">Go Back</a>
    </x-slot>

</x-layout>