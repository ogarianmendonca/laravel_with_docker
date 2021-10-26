<?php

namespace App\Interfaces;

interface BandaInterface
{
    public function getAll();

    public function getId(int $id);

    public function create($params);

    public function update($params, int $id);

    public function delete(int $id);
}
