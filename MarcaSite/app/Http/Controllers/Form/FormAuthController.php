<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

//controller responsável por manter forms
class FormAuthController extends Controller
{
    // SHOW VIEWS
    public function ShowLoginForm()
    {
        return view('forms/vw_FormLogin');
    }
    public function ShowRegisterForm()
    {
        return view('forms/vw_RegisterForm');
    }

    // DO ACTIONS 
    public function Register(Request $request)
    {
        /*
        $register['nome']=$request->name;
        $register['sucess']=true;
        echo json_encode($register);*/
        // verifica campos nulos
        if(!empty($request->name) && !empty($request->email) && !empty($request->select))
        {
            //filtrar email
            if(filter_var($request->email,FILTER_VALIDATE_EMAIL))
            {
                        if($request->password1===$request->password2)
                        {
                                if($request->select==1){
                                $user= new User();
                                $user->name=$request->name;
                                $user->email=$request->email;
                                $user->password=Hash::make($request->password1);
                                $user->type_user='Comum';
                                $user->save();
                                $register['sucess']=true;
                                $register['menssage']='Comum';
                                echo json_encode($register);
                                }//AVISO: o else não foi utilizado para caso sejam implementados novos tipos de usuários no futuro
                                else if($request->select==2)
                                {
                                   
                                        $user= new User();
                                        $user->name=$request->name;
                                        $user->email=$request->email;
                                        $user->password=Hash::make($request->password1);
                                        $user->type_user='Adm';
                                        $register['sucess']=true;
                                        $register['menssage']='ADM cadastrado';
                                        $user->save();
                                        echo json_encode($register);
                                }
                                else
                                {
                                    $register['erro']='O tipo de usuário selecionado não é válido';
                                    $register['sucess']=false;
                                }
                                }
                            else
                            {
                                $register['error']="A senhas não correspondem";
                                $register['sucess']=false;
                                echo json_encode($register);
                                return;
                            }
                

                
                        }

                else
                {
                        $register['sucess'] = false;
                        $register['error']='O email informado não é válido';
                        echo json_encode($register);
                        return;
                }
            }
            else
            {
                $register['sucess'] = false;
                $register['error']='Preencha todos os campos';
                echo json_encode($register);
                return;
            }
        }

        public function login(Request $request)
        {
            if(!empty($request->email) && !empty($request->password))
            {

                $credentials=['email' =>$request->email,
                'password' =>$request->password,
                'type_user' =>$request->select        
            ];
            
                
                if(Auth::attempt($credentials) )
                {
                    if(Auth::user()->type_user=="Adm")
                    {
                    $login['success']=true;
                    $login['menssage']='ADM';
                    echo json_encode($login);
                    }
                    else
                    {
                        $login['success']=true;
                        $login['menssage']='Comum';
                        echo json_encode($login);
                    }
                }
                else
                {
                    $login['success']=false;
                    $login['error']='usuário não encontrado';
                    echo json_encode($login);
                    return;
                }
                
                
            }
            else
            {
                $login['success']=false;
                $login['error']='Os campos fornecidos estão vazios';
            }
        } 
    }

