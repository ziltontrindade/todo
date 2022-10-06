<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
       <h1>Criar Tarefa</h1>
       <form>
            <x-form.text_input name='title' label="Titulo da Task" placeholder="Digite o titulo da Task" />
            <x-form.text_input type="date" name='due_date' label="Data de realização" />
            <x-form.select_input name='category' label="categoria"  placeholder="Selecione uma opção">
                <option>Selecione um valor</option>
            </x-form.select_input>
            <x-form.textearea_input label="Descrição da tarefa" name="description" placeholder="Digite a Descrição da Tarefa"/>

           <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa" />


       </form>
    </section>


</x-layout>
