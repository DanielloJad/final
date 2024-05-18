<?php

class Users extends Controller
{
  public function index()
  {
    $user = new User();
    $data = $user->findAll();

    $this->view('users/index', [
      'users' => $data
    ]);
  }

  public function create()
  {
    $user = new User();

    if (count($_POST) > 0) {


      $user->insert($_POST);

      redirect('users');
    }


    $this->view('users/create');
  }

  public function edit($id)
  {
    $user = new User();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->update($id, $_POST);

      redirect('users');
    }

    $this->view('users/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    $user = new User();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->delete($id);

      redirect('users');
    }

    $this->view('users/delete', [
      'row' => $data
    ]);
  }
}