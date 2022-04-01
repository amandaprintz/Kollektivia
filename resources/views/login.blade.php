@include('header')

<main>
    <section class="login">
        <div class="login-container">
            @if ($errors->any())
            <p>
                <p class="error">{{ $errors->first() }}</p>
            </p>
            @endif
            <div class="login-intro">
                <h1>Kollektiva</h1>
                <p>Logga in på vår användarportal</p>
            </div>
            <div class="login-form">
                <form method="post" action="/login">
                    @csrf
                    <div>
                        <label for="email">Email</label><br>
                        <input name="email" id="email" type="email" />
                    </div>
                    <br>
                    <br>
                    <div>
                        <label for="password"> Password</label><br>
                        <input name="password" id="password" type="password" />
                    </div>

                    <button class="button" type="submit">Login</button>
                </form>
                <p>Inte medlem än? <a href="{{ route('register') }}">Ansök här</a> för att gå med idag</p>
            </div>
        </div>
    </section>
</main>

@include('footer')
