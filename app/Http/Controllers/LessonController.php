<?php

namespace App\Http\Controllers;

use Auth;
use Middleware\Authenticate;
use Models\Profile;
use Database\Eloquent\Model;


class LessonController extends Controller
{
//    public function getLesson()
//    {
//        return view('lesson.home');
//    }

    public function getIndex2()
    {
        return view('lesson.index2');
    }

    public function getIndex3()
    {
        return view('lesson.index3');
    }

    public function getUser(){
        return view('lesson.User');
    }

    public function getMaterlials01(){
        return view('lesson.teach-materlials.0.1');
    }

    public function getMaterlials02(){
        return view('lesson.teach-materlials.1.1');
    }

    public function getMaterlials03(){
        return view('lesson.teach-materlials.1.2');
    }

    public function getMaterlials04(){
        return view('lesson.teach-materlials.1.3');
    }

    public function getMaterlials05(){
        return view('lesson.teach-materlials.1.4');
    }

    public function getMaterlials06(){
        return view('lesson.teach-materlials.1.5');
    }

    public function getMaterlials07(){
        return view('lesson.teach-materlials.1.6');
    }

    public function getMaterlials08(){
        return view('lesson.teach-materlials.1.7');
    }

    public function getMaterlials09(){
        return view('lesson.teach-materlials.2.1');
    }

    public function getMaterlials10(){
        return view('lesson.teach-materlials.2.2');
    }

    public function getMaterlials11(){
        return view('lesson.teach-materlials.2.3');
    }

    public function getMaterlials12(){
        return view('lesson.teach-materlials.2.4');
    }

    public function getMaterlials13(){
        return view('lesson.teach-materlials.2.5');
    }

    public function getMaterlials14(){
        return view('lesson.teach-materlials.3.1');
    }

    public function getMaterlials15(){
        return view('lesson.teach-materlials.3.2');
    }

    public function getMaterlials16(){
        return view('lesson.teach-materlials.3.3');
    }

    public function getMaterlials17(){
        return view('lesson.teach-materlials.4.1');
    }

    public function getMaterlials18(){
        return view('lesson.teach-materlials.4.2');
    }

    public function getMaterlials19(){
        return view('lesson.teach-materlials.4.3');
    }

    public function getMaterlials20(){
        return view('lesson.teach-materlials.5.1');
    }

    public function getMaterlials21(){
        return view('lesson.teach-materlials.5.2');
    }

    public function getMaterlials22(){
        return view('lesson.teach-materlials.6.1');
    }

    public function getMaterlials23(){
        return view('lesson.teach-materlials.6.2');
    }

    public function getMaterlials24(){
        return view('lesson.teach-materlials.7.1');
    }

    public function getMaterlials25(){
        return view('lesson.teach-materlials.7.2');
    }

    public function getMaterlials26(){
        return view('lesson.teach-materlials.8.1');
    }

    public function getMaterlials27(){
        return view('lesson.teach-materlials.8.2');
    }

    public function getMaterlials28(){
        return view('lesson.teach-materlials.8.3');
    }

    public function getMaterlials29(){
        return view('lesson.teach-materlials.9.1');
    }

    public function getMaterlials30(){
        return view('lesson.teach-materlials.9.2');
    }

    public function getMaterlials31(){
        return view('lesson.teach-materlials.9.3');
    }

    public function getMaterlials32(){
        return view('lesson.teach-materlials.10.1');
    }

    public function getSample(){
        return view('lesson.sample');
    }

    public function getIndex(){
        return view('lesson.index');
    }

//    teach-materlials1

    public function getMaterlials1_01(){
        return view('lesson.teach-materlials1.0.1');
    }

    public function getMaterlials1_02(){
        return view('lesson.teach-materlials1.0.2');
    }

    public function getMaterlials1_03(){
        return view('lesson.teach-materlials1.0.3');
    }




}


