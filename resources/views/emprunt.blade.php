<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form id="emprunt-form" action="" method="post" enctype="multipart/form-data"  role="form">
        {{csrf_field()}}
  <div class="row">
     <div class="col-md-6">

    <label for="adherent" class="form-label taille-label couleu">Adherent</label>
    <input type="text" name="adherent" class="form-control" id="adherent">
  </div>
  <div class="col-md-6">

<label for="livre_id" class="form-label taille-label couleu">Id Livre</label>

<select class="form-control" id="livre_id" name="livre_id">

@foreach(App\Models\Livre::all() as $livre)

<option value="{{ $livre->id }}">{{ $livre->titre}}</option>

@endforeach

</select>
</div>
 
  <div class="col">
  <br>
  <br>
  <button type="submit" class="btn orange">Enregistrer </button>
  
  </div>
  
</form>
</body>
</html>




