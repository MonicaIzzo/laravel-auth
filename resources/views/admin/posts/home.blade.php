@extends('layout.app')

@section('title', 'Post')

@section('content')
    <header>
        <h1>Posts</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Ultima modifica</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @forelse($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->create_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td class="d-flex justify-content-end">
                            <a href="{{ route('adimin.posts.show', $post) }}" class="btn btn-sm btn-primary"><i
                                    class="fas fa-eye"></i>
                                <a href="{{ route('adimin.posts.edit', $post) }}" class="btn btn-sm btn-warnings"><i
                                        class="fas fa-eye"></i>
                                    <form action="{{ route('adimin.posts.destroy', $post) }}" method="POST" class="ms-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-damger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6"></td>
                        <h3>Non ci sono post</h3>
                    </tr>
                @endempty
            @endforelse
            </tr>
        </tbody>
    </table>
</header>

@endsection
