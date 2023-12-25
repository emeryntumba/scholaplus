@extends('layouts.app')

@section('title', 'Enregistrer vous')

@section('content')

<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">Créer de votre compte entreprise</h1>
          <div class="custom-breadcrumbs">
            <span class="text-white"><strong>Ce compte vous facilitera de trouver les meilleurs profils de votre prochain employé et vous assitera dans votre quotidien de gestion de ressources humaines, avec un dashboard de suivi de perfomances du personnel et bien d'autres :) </strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5">
          <h2 class="mb-4">Formulaire d'inscription</h2>
          <form action="#" class="p-4 border rounded">

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black" for="fname">Intitulé</label>
                <input type="text" name="name" id="fname" class="form-control" placeholder="Nom de votre entreprise">
              </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="type_organisation">Type d'organisation</label>
                  <select name="type_organisation" id="type_organisation" class="custom-select">
                      <option value="">SARL</option>
                      <option value="">Organisme international</option>
                  </select>
                </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black" for="domaine">Domaine d'activité</label>
                <select name="domaine" id="domaine" class="custom-select">
                    <option value="">Informatique</option>
                    <option value="">Agriculture</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="adresse">Adresse</label>
                  <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Localisation">
                </div>
            </div>

            <div class="row form-group mb-4">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black" for="fname">Website</label>
                <input type="text" id="website" class="form-control" placeholder="Site web">
              </div>
            </div>

            <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="idnational">ID National</label>
                  <input type="text" id="idnational" class="form-control" placeholder="Numéro d'identité national">
                </div>
            </div>

            <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="description">Description</label>
                  <textarea name="description" id="description" class="form-control" placeholder="Decrivez votre entreprise"></textarea>
                </div>
              </div>

            <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="email">Email</label>
                  <input type="text" id="email" class="form-control" placeholder="Entreprise email">
                </div>
            </div>

            <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="password">Mot de passe</label>
                  <input type="text" id="password" class="form-control" placeholder="Entrez le mot de passe">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn px-4 btn-primary text-white">Suivant</button>
                </div>
            </div>

          </form>
        </div>

    </div>
  </section>

@endsection
