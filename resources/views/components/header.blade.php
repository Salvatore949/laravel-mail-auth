<header>
<h1> FORM VIDEOGAMES</h1>

@auth

<a href="{{route('logout')}}"> LOGOOUT </a>


@else

<form action="{{route('login')}}" method="POST">

    @method('POST')
    @csrf
    <label for="email">Email</label><br>
    <input type="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" name="password"><br>

    <input type="submit" value="Login"><br>
    
</form>

<form action="{{route('register')}}" method="POST">

         @method('POST')
         @csrf

        <label for="name">Name</label><br>
        <input type="text" name="name"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <label for="password_confirmation">Password-confirmation</label><br>
        <input type="password" name="password_confirmation"><br>
        <br>
        <input type="submit" value= "Register">
    </form>


@endauth


</header>















    <!-- <h1>Videogames</h1>

    @guest

    <form action="{{route('register')}}" method="POST">

         @method('POST')
         @csrf

        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <label for="password_confirmation">Password-confirmation</label>
        <input type="password" name="password_confirmation">

        <input type="submit" value= "Register">
    </form>

    <form action="{{route('login')}}" method="POST">

        @method('POST')
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">

        <input type="submit" value="Login">
    </form>
    @else

    <h2> Hello to {{Auth::user() -> name }}</h2>
    <a href="{{route('logout')}}"> LOGOUT</a>

    @endguest -->

