<article class="post">
    <header>
        <div class="title">
            <h2><a href="{{Route('single',['post'=>$post->id])}}">{{$post->header}}</a></h2>
            <p>{{$post->subheader}}</p>
        </div>
        <div class="meta">
           
            <time class="published" datetime="2015-11-01">{{$post->created_at->format('d.m.y')}}</time>
            <a href="#" class="author"><span class="name">{{$post->user->fullname}}</span><img style="width:50px; height: 50px;" src="{{asset($post->user->avatar)}}" alt="" /></a>
        </div>
    </header>
    <span class="image featured"><img src="{{asset($post->photo)}}" alt="" /></span>
    <p>{{$post->anons}}</p>
    <p>{{$post->post}}</p>
    <footer>
        <ul class="stats">
            <li><a href="{{Route('edit', ['post'=>$post->id])}}">Edit</a></li>
            <li><a href="#" class="red">Delete</a></li>
            <li><a href="#" class="red">Blocked</a></li>
            <li><a href="#" class="icon fa-heart">28</a></li>
            <li><a href="#" class="icon fa-comment">128</a></li>
        </ul>
    </footer>
</article>