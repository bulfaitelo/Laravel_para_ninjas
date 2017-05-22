// (function(){
// 	var app = angular.module('tarefas',[]);
// 	app.controller('TarefasController', function(){
// 		this.tarefa = tarefa;		
// 	});
// 	var tarefa = {'texto':'teste','autor':'Eu mesmo','status':'concluido'};
// })();

(function(){
	var app = angular.module('tarefas',[]);
	app.controller('TarefasController', function($scope, $http){
		$scope.loadData = function(){
			$http.get('api/tarefas').success(function(data){
				$scope.dadostarefas = data;
			});
		}
		$scope.loadData();
	});
})();