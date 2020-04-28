<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends FrontendController
{
    public function getContact() {
        return view('contact.contact');
    }

    public function postContact(Request $request) {
        $dataContact = $request->except('_token');
        $dataContact['created_at'] = $dataContact['updated_at'] = now();
        Contact::insert($dataContact);

        return redirect()->back()->with('message', 'Gởi nội dung thành công');
    }
}
