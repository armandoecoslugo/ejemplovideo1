////codigo javascript
var app=angular.module('appvideo',['ui.router']);
//$scope= relaciona la capa de vista y el controlador
//        para uso de variables y funciones (controlador=>vista) 
//$http= para hacer llamadas asincronas al servidor(ajax)
app.controller('controladorvideos',function($scope,$http,$state){

    var cantidad=[];
    var uno=1;
    $scope.onclickcontar=function(){
        cantidad.push(uno);
        console.log(cantidad);
    }


});