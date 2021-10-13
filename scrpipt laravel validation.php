$rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|max:250',
    ];

    $customMessages = [
        'required' => 'The :attribute field is required.'
    ];

    $this->validate($request, $rules, $customMessages);
