<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Category;
use App\Models\Option;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
function getQuestionsByCategory($category) {
    $questions = Question::join('categories', 'questions.kategori_id', '=', 'categories.id')
        ->where('categories.namaKategori', $category)
        ->get();

    foreach ($questions as $question) {
        $options = Option::where('pertanyaan_id', $question->id)->get();
        $question['options'] = $options;
    }

    return $questions;
    }
}
