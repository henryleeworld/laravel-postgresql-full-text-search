<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container-lg">
            <h2>{{ __('Full-Text Search') }}</h2>
            <div class="panel panel-primary">
                <div class="panel-heading mt-3">{{ __('Post Management') }}</div>
                <div class="panel-body">
                    <form method="GET" action="{{ route('posts-lists') }}">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <input type="text" name="phrases" class="form-control" placeholder="{{ __('Enter phrases to search') }}" value="{{ old('phrases') }}" />
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <button class="btn btn-success">{{ __('Search') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <th>{{ __('Index') }}</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Content') }}</th>
                            <th>{{ __('Created at') }}</th>
                            <th>{{ __('Updated at') }}</th>
                        </thead>
                        <tbody>
                            @if($posts->count()) 
                                @foreach($posts as $key => $post)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="4">{{ __('No data available.') }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </body>
</html>
