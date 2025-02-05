<section id="menu">

    <section>
        <ul class="actions vertical">
            <li>
                <h3>Login</h3>
            </li>
            <li>
                <form action="{{Route('auth')}}" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Username"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <input type="submit" class="button big fit" value="Log In">
                </form>
            </li>

            <li>
                <h3>Registration</h3>
            </li>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <li>
                <form action="{{Route('register')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="fullname" value="{{old('fullname')}}" placeholder="Fullname"><br>
                    <input type="text" name="username" value="{{old('username')}}" placeholder="Username"><br>
                    <input type="text" name="email" value="{{old('email')}}" placeholder="Email"><br>
                    <input type="password" name="password" value="{{old('password')}}" placeholder="Password"><br>
                    <input type="file" name="avatar" value="{{old('avatar')}}"><br><br>
                    <input type="submit" class="button big fit" value="Sign up">
                </form>
            </li>
        </ul>
    </section>

</section>