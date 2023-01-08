<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    function getQuestionsByCategory($category) {
        $questions = Question::join('categories', 'questions.category_id', '=', 'categories.id')
            ->where('categories.name', $category)
            ->get();
    
        foreach ($questions as $question) {
            $options = Option::where('question_id', $question->id)->get();
            $question['options'] = $options;
        }
    
        return $questions;
    }
}
