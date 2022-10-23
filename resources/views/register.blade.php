<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary">
            Já possui conta? Faça Login
        </a>
    </x-slot:btn>


    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
       <h1>Registrar-se</h1>

        @if($errors->any())
        <ul class="alert alet-error">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

       <form method="POST" action="{{route('user.register_action')}}">
        @csrf
                <x-form.text_input
                name='name'
                label="Seu nome"
                placeholder="Seu nome"
                />

                <x-form.text_input
                type="email"
                name='email'
                label="Seu email"
                placeholder="Seu email"
                />
                <x-form.text_input
                type="password"
                name='password'
                label="Sua senha"
                placeholder="Sua senha"
                />

           <x-form.form_button resetTxt="Limpar" submitTxt="Registrar" />


       </form>
</x-layout>
