<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListUser;

class ListUserController extends Controller
{
    public function index()
    {
        $users = ListUser::all();
        return view('People.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sobrenome' => 'required',
            'email' => 'required|email|unique:list_users,email',
            'telefone' => 'required|integer',
            'data_de_nascimento' => 'required|date',
            'password' => 'required|min:8'
        ], [
            'email.unique' => 'O endereço de e-mail já está sendo utilizado. Por favor, escolha outro.',
            'name.required' => 'O campo nome é obrigatório.',
            'sobrenome.required' => 'O campo sobrenome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Por favor, insira um endereço de e-mail válido.',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'telefone.integer' => 'O campo telefone deve ser um número inteiro.',
            'data_de_nascimento.required' => 'O campo data de nascimento é obrigatório.',
            'data_de_nascimento.date' => 'O campo data de nascimento deve ser uma data válida.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter no mínimo :min caracteres.',
        ]);

        $user = new ListUser();
        $user->name = $request->name;
        $user->sobrenome = $request->sobrenome;
        $user->email = $request->email;
        $user->telefone = $request->telefone;
        $user->data_de_nascimento = $request->data_de_nascimento;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('people.index')->with('mensagem', 'Usuário adicionado com sucesso!');
    }

    public function show($id)
    {
        $user = ListUser::findOrFail($id);
        return view('People.show', compact('user'));
    }

    public function edit($id)
    {
        $user = ListUser::findOrFail($id);
        return view('People.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'sobrenome' => 'required',
            'email' => 'required|email|unique:list_users,email,' . $id,
            'telefone' => 'required|integer',
            'data_de_nascimento' => 'required|date',
            'password' => 'nullable|min:8'
        ], [
            'email.unique' => 'O endereço de e-mail já está sendo utilizado. Por favor, escolha outro.',
            'name.required' => 'O campo nome é obrigatório.',
            'sobrenome.required' => 'O campo sobrenome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Por favor, insira um endereço de e-mail válido.',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'telefone.integer' => 'O campo telefone deve ser um número inteiro.',
            'data_de_nascimento.required' => 'O campo data de nascimento é obrigatório.',
            'data_de_nascimento.date' => 'O campo data de nascimento deve ser uma data válida.',
            'password.min' => 'A senha deve ter no mínimo :min caracteres.',
        ]);

        $user = ListUser::findOrFail($id);
        $user->name = $request->name;
        $user->sobrenome = $request->sobrenome;
        $user->email = $request->email;
        $user->telefone = $request->telefone;
        $user->data_de_nascimento = $request->data_de_nascimento;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('people.index')->with('mensagem', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        try {
            $user = ListUser::findOrFail($id);
            $user->delete();
            return back()->with('mensagem', 'Usuário removido com sucesso!');
        } catch (\Throwable $th) {
            return back()->with('erro', 'Não foi possível realizar a ação');
        }
    }
}
