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
		$scope.adicionarTarefa = function(){
			dadosPost = {
				'texto': $scope.texto,
				'autor': $scope.autor,
				'status': $scope.status
			}
			var requisicao = $http({method:"post", url:"api/tarefas", data:dadosPost}).success( function (data, status){
					if(data && status == 201){
						$scope.loadData(function (){ $scope.texto = ''; $scope.autor = '';$scope.status = '';
						});
					}
					else{
						window.alert("Não foi possovel adicionar tarefa");
					}
				});
		}
		$scope.mudarStatus = function(id, status) {
			dadosPost = {'status': status};
			var requisicao = $http({method:"put", url:"api/tarefas/"+id, data:dadosPost}).success(function (data, status) {
				if(data.id == id && status == 201){
					$scope.loadData();
				}else{
					window.alert("Não foi possivel Alterar a tarefa");
				}
			})
		}
		$scope.excluirTarefa = function(id){
			if(confirm("Confirma Exclusão da tarefa?")){
				var requisicao = $http({method:"delete", url:"api/tarefas/"+id}).success(function (data, status) {
					if (data == 1 && status == 200) {
						$scope.loadData();
					}else {
						window.alert("Nao foi possivel excluirtarefa");
					}
				})
			}
		}
	});
})();
