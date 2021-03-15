<?php

namespace App\Http\Controllers;

use App\Models\DataList;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Throwable;

class IndexController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data_list = DataList::all();
        return view('front.task1.index', compact('data_list'));
    }

    /**
     * Save data in DB
     *
     * @param Request $request
     * @return JsonResponse
     * @throws Throwable
     */
    public function create(Request $request): JsonResponse
    {
        $html = '';
        $success = false;
        $message = 'your data is not inserting';

        // WRITE validations here as i did in my code
        $validation = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'author' => 'required|30',
            'date' => 'required|date',
            'list' => 'sometimes|max:500'
        ]);
        if ($validation->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validation->errors()
            ]);
        }

        try {
            $data = new DataList();
            $data->forceFill([
                'title' => $request->get('title'),
                'author' => $request->get('author'),
                'date' => $request->get('date'),
                'list' => $request->get('list'),
            ]);

            if ($data->save()) {
                $success = true;
                $message = 'your data inserting Successfully';
                $html = view('front.task1.includes._data_table_row', ['data' => $data])->render();
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => $success,
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'success' => $success,
            'message' => $message,
            'html' => $html
        ]);
    }
}
