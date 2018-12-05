<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleType_typeRequest;
use App\Http\Requests\UpdateArticleType_typeRequest;
use App\Repositories\ArticleType_typeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArticleType_typeController extends AppBaseController
{
    /** @var  ArticleType_typeRepository */
    private $articleTypeTypeRepository;

    public function __construct(ArticleType_typeRepository $articleTypeTypeRepo)
    {
        $this->articleTypeTypeRepository = $articleTypeTypeRepo;
    }

    /**
     * Display a listing of the ArticleType_type.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->articleTypeTypeRepository->pushCriteria(new RequestCriteria($request));
        $articleTypeTypes = $this->articleTypeTypeRepository->all();

        return view('article_type_types.index')
            ->with('articleTypeTypes', $articleTypeTypes);
    }

    /**
     * Show the form for creating a new ArticleType_type.
     *
     * @return Response
     */
    public function create()
    {
        return view('article_type_types.create');
    }

    /**
     * Store a newly created ArticleType_type in storage.
     *
     * @param CreateArticleType_typeRequest $request
     *
     * @return Response
     */
    public function store(CreateArticleType_typeRequest $request)
    {
        $input = $request->all();

        $articleTypeType = $this->articleTypeTypeRepository->create($input);

        Flash::success('Article Type Type saved successfully.');

        return redirect(route('articleTypeTypes.index'));
    }

    /**
     * Display the specified ArticleType_type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articleTypeType = $this->articleTypeTypeRepository->findWithoutFail($id);

        if (empty($articleTypeType)) {
            Flash::error('Article Type Type not found');

            return redirect(route('articleTypeTypes.index'));
        }

        return view('article_type_types.show')->with('articleTypeType', $articleTypeType);
    }

    /**
     * Show the form for editing the specified ArticleType_type.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articleTypeType = $this->articleTypeTypeRepository->findWithoutFail($id);

        if (empty($articleTypeType)) {
            Flash::error('Article Type Type not found');

            return redirect(route('articleTypeTypes.index'));
        }

        return view('article_type_types.edit')->with('articleTypeType', $articleTypeType);
    }

    /**
     * Update the specified ArticleType_type in storage.
     *
     * @param  int              $id
     * @param UpdateArticleType_typeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticleType_typeRequest $request)
    {
        $articleTypeType = $this->articleTypeTypeRepository->findWithoutFail($id);

        if (empty($articleTypeType)) {
            Flash::error('Article Type Type not found');

            return redirect(route('articleTypeTypes.index'));
        }

        $articleTypeType = $this->articleTypeTypeRepository->update($request->all(), $id);

        Flash::success('Article Type Type updated successfully.');

        return redirect(route('articleTypeTypes.index'));
    }

    /**
     * Remove the specified ArticleType_type from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articleTypeType = $this->articleTypeTypeRepository->findWithoutFail($id);

        if (empty($articleTypeType)) {
            Flash::error('Article Type Type not found');

            return redirect(route('articleTypeTypes.index'));
        }

        $this->articleTypeTypeRepository->delete($id);

        Flash::success('Article Type Type deleted successfully.');

        return redirect(route('articleTypeTypes.index'));
    }
}
