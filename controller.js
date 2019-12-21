var myapp = angular.module('myapp',[]); 

myapp.controller('mainCtrl',function($scope){

    $scope.x= null;

    $scope.user="";


    $scope.email="";

    $scope.mob="";

    $scope.movie = ["Zindagi Na Milegi Dobara" ,"Marvel The Avengers" ,"Killa", "3-idiots"];

    $scope.xx = "Book Now";

    $scope.bookk = function(a) {
        console.log("Enterd in functions .. "+$scope.movie[a]);

        $scope.x = $scope.movie[a];
        
        console.log("still in functions .. "+$scope.x);

        //window.open("book.html");
        window.location.href='book.html';
    }
    
    console.log("outside functions .. "+$scope.x);
});
