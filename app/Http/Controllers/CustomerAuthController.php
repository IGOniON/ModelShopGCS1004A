<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Http\Resources;
Use App\Models\Register;

    class CustomerAuthController extends Controller
    {
        public function login()
        {
            return view("login");
        }
        public function register()
        {
            return view("register");
        }
        public function registerUser(Request $request)
        {
            $validatedData = $request->validate([
                'full_name' => 'required|max:255',
                'email' => 'required|email|unique:customers,email|max:255',
                'password' => 'required|min:6|max:255',
            ], [
                'full_name.required' => 'Vui lòng nhập tên đầy đủ.',
                'email.required' => 'Vui lòng nhập địa chỉ email.',
                'email.email' => 'Địa chỉ email không hợp lệ.',
                'email.unique' => 'Địa chỉ email đã được sử dụng.',
                'password.required' => 'Vui lòng nhập mật khẩu.',
                'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự.',
            ]);

            $customer = new Register();
            $customer->full_name = $validatedData['full_name'];
            $customer->email = $validatedData['email'];
            $customer->password = bcrypt($validatedData['password']);
            $customer->save();

            return redirect()->route('login')->with('success', 'Đăng ký thành công. Vui lòng đăng nhập để tiếp tục');
        }
    }
?>

