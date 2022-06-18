<h1>
    Registration Form
</h1>
{{-- {{$url('/')}} --}}
<form action="/register" method="post">
@csrf
    <label for="name">Name : </label>
    <input type="text" name="name" ><br>
    @error('name')
        {{$message}}
    @enderror
    <br>
    <br>
    <label for="email">Email : </label>
    <input type="email" name="email"><br>
    @error('email')
        {{$message}}
    @enderror
    <br>
    <br>

    <label for="password">Password : </label>
    <input type="password" name="password" ><br>
    @error('password')
        {{$message}}
    @enderror
    
    <button type="submit"> Submit Here!</button>
</form>