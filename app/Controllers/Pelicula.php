<?php

namespace App\Controllers;
use App\Models\PeliculaModel;

class Pelicula extends BaseController
{
    public function create()
    {
        $peliculaModel = new PeliculaModel();
        
        $peliculaModel->insert(
            [
                'titulo'=>$this->request->getPost('titulo'),
                'description'=>$this->request->getPost('description'),
            ]
            );
        
            echo 'creado';        
    }
    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();

        return view('pelicula/edit',[
            'pelicula' => $peliculaModel->find($id)
        ]);


    }

    public function update($id)
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->update($id,[
            'titulo' => $this -> request ->getPost('titulo'),
            'description' => $this -> request ->getPost('description')
        ]);
       echo 'updated';
    }

    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel-> delete($id);

        echo 'delete';
    }
    public function new()
    {
        return view('pelicula/new',[
            'pelicula' => [
                'titulo' => '',
                'description' => ''
            ]
        ]);
    }
    public function show($id)
    {
        $peliculaModel= new PeliculaModel();

        return view('/pelicula/show',[
            'pelicula' => $peliculaModel->find($id)
        ]);
       
    }

    public function index(): string
    {
        $peliculaModel = new PeliculaModel();

       return view('pelicula/index',[
           'peliculas' => $peliculaModel->findAll(),
           
        ]);
    }

}