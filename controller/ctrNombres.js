app.controller("ctrNombres", function ($scope, $http) {




    //ESCRIBE UN METODO PARA PODER ACCEDER AL ARCHIVO nombres.json

    $scope.dameInformacionArchivo = function () {
        $http.get("./json/nombre.json").success(function (res) {

        });
    };
})