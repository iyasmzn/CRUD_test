<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() {
        $this->model = new User();
    }

    public function index()
    {
        $datas = $this->model->orderBy('created_at', 'desc')->paginate(10);

        return view('users.list', [
            'datas' => $datas
        ]);
    }
    public function create()
    {
        return view('users.form');
    }
    public function createPost(Request $request)
    {
        $this->model->create($request->all());
        return redirect('users');
    }
    public function edit($id)
    {
        $data = $this->model->findOrFail($id);

        return view('users.form', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        $requests = $request->all();
        $data = $this->model->find($id);
        $update = $data->update($requests);
        if ($update) {
            return redirect('users');
        } else {
            return view('users.edit', $id);
        }
    }
    public function delete($id)
    {
        $data = $this->model->findOrFail($id);
        $data->delete();
        return redirect('users');
    }
}
