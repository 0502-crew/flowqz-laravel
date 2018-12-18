<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateQuizRequest;
use App\Http\Requests\Backend\UpdateQuizRequest;
use App\Repositories\Backend\QuizRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class QuizController extends AppBaseController
{
    /** @var  QuizRepository */
    private $quizRepository;

    public function __construct(QuizRepository $quizRepo)
    {
        $this->quizRepository = $quizRepo;
    }

    /**
     * Display a listing of the Quiz.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->quizRepository->pushCriteria(new RequestCriteria($request));
        $quizzes = $this->quizRepository->getPaginated();

        return view('backend.quizzes.index')
            ->with('quizzes', $quizzes);
    }

    /**
     * Show the form for creating a new Quiz.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.quizzes.create');
    }

    /**
     * Store a newly created Quiz in storage.
     *
     * @param CreateQuizRequest $request
     *
     * @return Response
     */
    public function store(CreateQuizRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['active'] = 0;

        $quiz = $this->quizRepository->create($input);

        Flash::success('Quiz saved successfully.');

        return redirect(route('backend.quizzes.index'));
    }

    /**
     * Display the specified Quiz.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quiz = $this->quizRepository->findWithoutFail($id);

        if (empty($quiz)) {
            Flash::error('Quiz not found');

            return redirect(route('backend.quizzes.index'));
        }

        return view('backend.quizzes.show')->with('quiz', $quiz);
    }

    /**
     * Show the form for editing the specified Quiz.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quiz = $this->quizRepository->findWithoutFail($id);

        if (empty($quiz)) {
            Flash::error('Quiz not found');

            return redirect(route('backend.quizzes.index'));
        }

        return view('backend.quizzes.edit')->with('quiz', $quiz);
    }

    /**
     * Update the specified Quiz in storage.
     *
     * @param  int              $id
     * @param UpdateQuizRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuizRequest $request)
    {
        $quiz = $this->quizRepository->findWithoutFail($id);

        if (empty($quiz)) {
            Flash::error('Quiz not found');

            return redirect(route('backend.quizzes.index'));
        }

        $quiz = $this->quizRepository->update($request->all(), $id);

        Flash::success('Quiz updated successfully.');

        return redirect(route('backend.quizzes.index'));
    }

    /**
     * Remove the specified Quiz from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quiz = $this->quizRepository->findWithoutFail($id);

        if (empty($quiz)) {
            Flash::error('Quiz not found');

            return redirect(route('backend.quizzes.index'));
        }

        $this->quizRepository->delete($id);

        Flash::success('Quiz deleted successfully.');

        return redirect(route('backend.quizzes.index'));
    }
}
