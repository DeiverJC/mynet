<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleTypeRequest;
use App\Http\Requests\UpdateArticleTypeRequest;
use App\Repositories\ArticleTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArticleTypeController extends AppBaseController
{
    /** @var  ArticleTypeRepository */
    private $articleTypeRepository;

    public function __construct(ArticleTypeRepository $articleTypeRepo)
    {
        $this->articleTypeRepository = $articleTypeRepo;
    }

    /**
     * Display a listing of the ArticleType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->articleTypeRepository->pushCriteria(new RequestCriteria($request));
        $articleTypes = $this->articleTypeRepository->all();

        return view('article_types.index')
            ->with('articleTypes', $articleTypes);
    }

    /**
     * Show the form for creating a new ArticleType.
     *
     * @return Response
     */
    public function create()
    {
        return view('article_types.create');
    }

    /**
     * Store a newly created ArticleType in storage.
     *
     * @param CreateArticleTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateArticleTypeRequest $request)
    {
        $input = $request->all();

        $articleType = $this->articleTypeRepository->create($input);

        Flash::success('Article Type saved successfully.');

        return redirect(route('articleTypes.index'));
    }

    /**
     * Display the specified ArticleType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articleType = $this->articleTypeRepository->findWithoutFail($id);

        if (empty($articleType)) {
            Flash::error('Article Type not found');

            return redirect(route('articleTypes.index'));
        }

        return view('article_types.show')->with('articleType', $articleType);
    }

    /**
     * Show the form for editing the specified ArticleType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articleType = $this->articleTypeRepository->findWithoutFail($id);

        if (empty($articleType)) {
            Flash::error('Article Type not found');

            return redirect(route('articleTypes.index'));
        }

        return view('article_types.edit')->with('articleType', $articleType);
    }

    /**
     * Update the specified ArticleType in storage.
     *
     * @param  int              $id
     * @param UpdateArticleTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticleTypeRequest $request)
    {
        $articleType = $this->articleTypeRepository->findWithoutFail($id);

        if (empty($articleType)) {
            Flash::error('Article Type not found');

            return redirect(route('articleTypes.index'));
        }

        $articleType = $this->articleTypeRepository->update($request->all(), $id);

        Flash::success('Article Type updated successfully.');

        return redirect(route('articleTypes.index'));
    }

    /**
     * Remove the specified ArticleType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articleType = $this->articleTypeRepository->findWithoutFail($id);

        if (empty($articleType)) {
            Flash::error('Article Type not found');

            return redirect(route('articleTypes.index'));
        }

        $this->articleTypeRepository->delete($id);

        Flash::success('Article Type deleted successfully.');

        return redirect(route('articleTypes.index'));
    }
}
