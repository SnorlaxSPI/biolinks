<div>
    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf
        <input name="email" type="email" placeholder="Email">
        <input name="password" type="password" placeholder="Password">
        <button>Logar</button>
    </form>

</div>
