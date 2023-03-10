<?php


namespace App\Http\Controllers\Admin\Contacts;


use App\Http\Controllers\Controller;
use App\Models\Contacts;


class ContactsController extends Controller
{
    public function index()
    {
        $contacts=Contacts::all();
        return view('admin.contacts.list');
    }

    public function create()
    {

    }

    public function show()
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
