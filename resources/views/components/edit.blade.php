<article class="post">
    <h1>Edit Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{Route('update', [$post->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="header" value="{{$post->header}}" placeholder="Post name"><br>
        <input type="text" name="subheader" value="{{$post->subheader}}" placeholder="Subtitle"><br>
        <input type="text" name="anons" value="{{$post->anons}}" placeholder="Anons"><br>
        <textarea name="post" placeholder="Post content">{{$post->post}}</textarea><br>
        <input type="file" name="postphoto"><br><br>
        <input type="submit" class="button big fit" value="Edit Post">
    </form>
</article>