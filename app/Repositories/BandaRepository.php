<?php

namespace App\Repositories;

use App\Entities\Banda;
use App\Interfaces\BandaInterface;
use Exception;

class BandaRepository implements BandaInterface
{
    private $model;

    public function __construct(Banda $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @throws Exception
     */
    public function getId(int $id)
    {
        try{
            return $this->model->with(['albuns'])->find($id);
        } catch (Exception $exception) {
            throw  new Exception($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @throws Exception
     */
    public function create($params)
    {
        try{
            $banda = new Banda();
            $banda->nome = $params->nome;
            $banda->genero = $params->genero;
            $banda->data_criacao = $params->data_criacao;

            $imagem = $this->convertToBase64($params);
            if ('sem_imagem' !== $imagem) {
                $banda->imagem = $imagem;
            }

            $banda->save();
        } catch (Exception $exception) {
            throw  new Exception($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @throws Exception
     */
    public function update($params, int $id)
    {
        try{
            $banda = $this->model->find($id);
            $banda->nome = $params->nome;
            $banda->genero = $params->genero;
            $banda->data_criacao = $params->data_criacao;

            $imagem = $this->convertToBase64($params);
            if ('sem_imagem' !== $imagem) {
                $banda->imagem = $imagem;
            }

            $banda->save();
        } catch (Exception $exception) {
            throw  new Exception($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @throws Exception
     */
    public function delete(int $id)
    {
        try{
            $banda = $this->model->find($id);
            $banda->delete();
        } catch (Exception $exception) {
            throw  new Exception($exception->getMessage(), $exception->getCode());
        }
    }

    public function convertToBase64($dadosArquivo)
    {
        if ($dadosArquivo->hasFile('imagem')) {
            $imagem = $dadosArquivo->file('imagem');
            $ext = $imagem->guessClientExtension();
            $data = file_get_contents($imagem);
            return 'data:image/' . $ext . ';base64,' . base64_encode($data);
        } else {
            return 'sem_imagem';
        }
    }
}
