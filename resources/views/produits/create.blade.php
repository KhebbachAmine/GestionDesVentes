<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- include libraries(jQuery, bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')

<form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
    <fieldset><legend>Ajouter un nouveau produit</legend>
                {{ csrf_field() }}   <!--pour la securité -->    
<table>

    <tr>
        <td>libelle</td>
        <td>
          <input type="text" name="libelle" placeholder="libelle" value="{{ old('libelle') }}"> 
            @if($errors->get('libelle'))
                @foreach($errors->get('libelle') as $message)
                  <span class="text-danger">{{$message}}</span>
                @endforeach
            @endif 
        </td>
         
    </tr>
    <tr>
        <td>marque</td>
        <td><select name="marque">
        <option value="hp">hp</option>        
        <option value="samsung">samsung</option>        
        <option value="del">del</option>
        </select>  
            
    </td>
    </tr>
    <tr>
        <td>prix</td>
        <td>
          <input type="number" name="prix" placeholder="prix" value="{{ old('prix') }}"> 
            @if($errors->get('prix'))
               @foreach($errors->get('prix') as $message)
               <span class="text-danger">{{$message}}</span>
               @endforeach
             @endif
        </td>
        
    </tr>
    <tr>
        <td>Qtestock</td>
        <td>
          <input type="number" name="qtStock" placeholder="qtstock" value="{{ old('qtStock') }}" >  
            @if($errors->get('qtStock'))
              @foreach($errors->get('qtStock') as $message)
              <span class="text-danger">{{$message}}</span>
              @endforeach
            @endif
        </td>
        
    </tr>
    <tr>
        <td>image</td>
        <td>
          <input type="file" name="image" placeholder="image"> 
           @if($errors->get('image'))
             @foreach($errors->get('image') as $message)
             <span class="text-danger">{{$message}}</span>
             @endforeach
           @endif 
        </td>
        
    </tr>
    <tr>
    <td>description</td>
        <td><textarea class="summernote from-control" name="description" > </textarea> </td>
    </tr>
    <tr>
        <td><input type="submit" name="valider" text="valider">  </td>
    </tr>
    
    </table>
    </fieldset>
    </form>

        @if ($message = Session::get('message'))
	    <p>{{ $message }} </p>
        @endif

        @endsection
        <script>
            $(document).ready(function() {
                $('.summernote').summernote();
            });
        </script>
</body>
</html>