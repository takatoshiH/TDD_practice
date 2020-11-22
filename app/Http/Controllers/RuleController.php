<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;

class RuleController extends Controller
{
    function index()
    {
        $rules = Rule::all();
        return view('rules.index', compact('rules'));
    }

    function show(Request $request)
    {
        $rule = Rule::find($request->input('rule_id'));
        return view('rules.show', compact('rule'));
    }

    function create()
    {
        return view('rules.create');
    }

    function confirm(Request $request)
    {
        return view('rules.confirm');
    }

    function store(Request $request)
    {
        return view('index.confirm');
    }

    function update(Request $request)
    {
        return view('index.update');
    }
}
