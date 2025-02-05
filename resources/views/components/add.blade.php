<article class="post">
    <h1>Add Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{Route('addpost')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{auth()->id()}}">
        <input type="text" name="header" value="{{old('header')}}" placeholder="Post name"><br>
        <input type="text" name="subheader" value="{{old('subheader')}}" placeholder="Subtitle"><br>
        <input type="text" name="anons" value="{{old('anons')}}" placeholder="Anons"><br>
        <textarea name="post" placeholder="Post content">{{old('post')}}</textarea><br>
        <input type="file" name="postphoto" value="{{old('photo')}}"><br><br>
        <input type="submit" class="button big fit" value="Add Post">
    </form>
</article>