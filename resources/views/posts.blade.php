<x-layout >

    <x-slot name='content'>
        @foreach ($posts as $post)
            <article class="{{ $loop -> even ? "test-class" : ""}}">
                    <h1>
                    <a href="/posts/{{$post->slug}}">
                            {{$post->title}}
                        </a>
                    </h1>
                    <p>
                        By Caio Farias in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                    </p>
        
                    <div>
                        <p>{{$post->excerpt}}</p>
                    </div> 
            </article>
        @endforeach
    </x-slot>
    
</x-layout>