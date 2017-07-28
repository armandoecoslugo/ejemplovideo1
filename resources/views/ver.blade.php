@extends('layout')
@section('contenido')
<br>
<br>
<br>
<br>
 
 
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Agregar archivos</div>
        <div class="panel-body">
          <form method="POST" action="/video/create" accept-charset="UTF-8" enctype="multipart/form-data">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
              <label class="col-md-4 control-label">Nuevo Archivo</label>
              <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


 Listando<br>


<table class="table table-stripeds">
        <tr>
            @foreach($fis as $v)
            <tr>    
                <td>{{$v->nombre_video}}
                  
              <video width="300" height="300" controls> 
                <source src="/storage/video.mp4" type="video/mp4"/>
              
              </video></td> 

            
            </tr>
      @endforeach
      </tr>

      <div ng-app="appvideo" ng-controller="controladorvideos">
          <button  ng-click="onclickcontar()">play</button>
              Cantidad Vistos:@{{cantidad}}

      </div>

</table>