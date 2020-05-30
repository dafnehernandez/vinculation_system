<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatedraticoRequest;
use App\Http\Requests\UpdateCatedraticoRequest;
use App\Repositories\CatedraticoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CatedraticoController extends AppBaseController
{
    /** @var  CatedraticoRepository */
    private $catedraticoRepository;

    public function __construct(CatedraticoRepository $catedraticoRepo)
    {
        $this->catedraticoRepository = $catedraticoRepo;
    }

    /**
     * Display a listing of the Catedratico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $catedraticos = $this->catedraticoRepository->all();

        return view('catedraticos.index')
            ->with('catedraticos', $catedraticos);
    }

    /**
     * Show the form for creating a new Catedratico.
     *
     * @return Response
     */
    public function create()
    {
        return view('catedraticos.create');
    }

    /**
     * Store a newly created Catedratico in storage.
     *
     * @param CreateCatedraticoRequest $request
     *
     * @return Response
     */
    public function store(CreateCatedraticoRequest $request)
    {
         $request->validate([
            'nombre_catedratico' => 'required|min:2|max:36',
            'apellidos_catedratico' => 'required|min:2|max:50',
            'especialidad_catedratico' => 'required|min:5|max:40',
            'rfc_catedratico' => 'required',
        ]);
        
        $input = $request->all();

        $catedratico = $this->catedraticoRepository->create($input);

        Flash::success('Catedratico saved successfully.');

        return redirect(route('catedraticos.index'));
    }
    
    /**
     * Display the specified Catedratico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catedratico = $this->catedraticoRepository->find($id);

        if (empty($catedratico)) {
            Flash::error('Catedratico not found');

            return redirect(route('catedraticos.index'));
        }

        return view('catedraticos.show')->with('catedratico', $catedratico);
    }

    /**
     * Show the form for editing the specified Catedratico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catedratico = $this->catedraticoRepository->find($id);

        if (empty($catedratico)) {
            Flash::error('Catedratico not found');

            return redirect(route('catedraticos.index'));
        }

        return view('catedraticos.edit')->with('catedratico', $catedratico);
    }

    /**
     * Update the specified Catedratico in storage.
     *
     * @param int $id
     * @param UpdateCatedraticoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatedraticoRequest $request)
    {
        $catedratico = $this->catedraticoRepository->find($id);

        if (empty($catedratico)) {
            Flash::error('Catedratico not found');

            return redirect(route('catedraticos.index'));
        }

        $catedratico = $this->catedraticoRepository->update($request->all(), $id);

        Flash::success('Catedratico updated successfully.');

        return redirect(route('catedraticos.index'));
    }

    /**
     * Remove the specified Catedratico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catedratico = $this->catedraticoRepository->find($id);

        if (empty($catedratico)) {
            Flash::error('Catedratico not found');

            return redirect(route('catedraticos.index'));
        }

        $this->catedraticoRepository->delete($id);

        Flash::success('Catedratico deleted successfully.');

        return redirect(route('catedraticos.index'));
    }
}
