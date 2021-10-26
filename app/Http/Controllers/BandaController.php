<?php

namespace App\Http\Controllers;

use App\Interfaces\BandaInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BandaController extends Controller
{
    private $bandaRepository;

    public function __construct(BandaInterface $bandaRepository)
    {
        $this->bandaRepository = $bandaRepository;
    }

    public function index()
    {
        $bandas = $this->bandaRepository->getAll();
        return view('banda.index', compact('bandas'));
    }

    public function cadastrar()
    {
        return view('banda.cadastrar');
    }

    public function cadastra(Request $request): RedirectResponse
    {
        $this->bandaRepository->create($request);
        return redirect()->route('banda.index');
    }

    public function editar(int $id)
    {
        $banda = $this->bandaRepository->getId($id);
        return view('banda.editar', compact('banda'));
    }

    public function edita(Request $request, int $id): RedirectResponse
    {
        $this->bandaRepository->update($request, $id);
        return redirect()->route('banda.index');
    }

    public function detalhes(int $id)
    {
        $banda = $this->bandaRepository->getId($id);
        return view('banda.detalhes', compact('banda'));
    }

    public function excluir(int $id): RedirectResponse
    {
        $this->bandaRepository->delete($id);
        return redirect()->route('banda.index');
    }
}
