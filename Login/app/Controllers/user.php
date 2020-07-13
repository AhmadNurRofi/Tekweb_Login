<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
	public function index()
	{
        $model = new UserModel();
		$data['user'] = $model->getUser();
		return view('v_masuk', $data);
	}

	public function add_new()
	{
		echo view('v_tambahdata');
	}

	public function save()
	{
		$model = new UserModel();
		$data = array(
				'id_user' => $this ->request->getPost('id_user'),
				'nama_user' => $this ->request->getPost('nama_user'),
				'email' => $this ->request->getPost('email'),
				);
		$model->saveUser($data);
		return redirect()->to('/user');
	}

	public function edit($id)
	{
		$model = new UserModel();
		$data['user'] = $model ->getUser($id)->getRow();
		return view('v_edit' ,$data);
	}

	public function update()
	{
		$model = new UserModel();
		$id = $this->request->getPost('id_user');
		$data = array(
			'nama_user'  => $this->request->getPost('nama_user'),
			'email'      => $this->request->getPost('email'),
		);
		$model->updateUser($data, $id);
		return redirect()->to('/user');
	}

	public function delete($id)
	{
		$model = new UserModel();
		$model->deleteUser($id);
		return redirect()->to('/user');
	}
}
