<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $params = [
            'title' => 'Users Listing',
            'users' => $users,
        ];

        return view('MyInfo.myinfo_list')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
           // 'lname' => 'required',
            'email' => 'required|unique:users',
            'mobile_no' => 'required|max:10',
            //'dob' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
        ]);

        $user = User::create([
            'fname' => $request->input('fname'),
            //'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'mobile_no' => $request->input('mobile_no'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'address' => $request->input('address'),

            
           // 'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('MyInfo.index')->with('success', "The user <strong>$user->name</strong> has successfully been created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try
        {
            $user = User::findOrFail($id);

            $params = [
                'title' => 'Delete User',
                'user' => $user,
            ];

            return view('MyInfo.myinfo_delete')->with($params);
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try
        {
            $user = User::findOrFail($id);

            $params = [
                'title' => 'Edit User',
                'user' => $user,
            ];

            return view('MyInfo.myinfo_edit')->with($params);
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try
        {
            $user = User::findOrFail($id);

            $this->validate($request, [
                'name' => 'required',
                //'lname' => 'required',
                'email' => 'required|email|unique:users,email,'.$id,
                'mobile_no' => 'required|max:10',
                'city' => 'required',
                'state' => 'required',
                'address' => 'required',
            ]);
            $user->fname = $request->input('fname');
           // $user->lname = $request->input('lname');
            $user->email = $request->input('email');
            $user->mobile_no = $request->input('mobile_no');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->address = $request->input('address');

            $user->save();

            //get product data
        $userData = $request->all();
        
        //update product data
        User::find($id)->update($userData);
        

            return redirect()->route('MyInfo.index')->with('success', "The user <strong>$user->name</strong> has successfully been updated.");
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $user = User::findOrFail($id);

            $user->delete();

            return redirect()->route('MyInfo.index')->with('success', "The user <strong>$user->name</strong> has successfully been archived.");
        }
        catch (ModelNotFoundException $ex) 
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }
}
