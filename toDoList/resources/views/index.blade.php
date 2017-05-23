<!DOCTYPE html>
<html lang="en" ng-app="tarefas" >
<head>
    <meta charset="UTF-8">
    <title>Minha lista de tarefas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .even { background-color: #EFEFEF; }
        .odd { background-color: #DDDDDD; }
        .header { text-align: center; }
    </style>
</head>
<body class="container" ng-controller="TarefasController as tarefas">
    <div class="page-header"><h2>Minha lista de tarefas</h2></div>
   
    <!--  -->
    <form ng-submit="adicionarTarefa()">
        <input type="hidden" name="token" value="{{ csrf_token() }}">
        <label for="texto">Tarefa</label>
        <input type="text" id="texto" ng-model="texto" required placeholder="Texto" class="form-control">
        <label for="autor">Autor</label>
        <input type="text" id="autor" ng-model="autor" required placeholder="Autor" class="form-control">
        <label for="status">Status</label>
        <select id="status" ng-model="status" required="" class="form-control">
            <option value="Concluido">Concluido</option>
            <option value="Pendente">Pendente</option>
        </select>
        <input type="submit" value="Cadastrar" class="btn btn-default">
    </form>
    <!--  -->
    <hr>
    <div class="container">
        <div class="row" ng-repeat="tarefa in dadostarefas" ng-class-odd="'odd'" ng-class-even="'even'">
            <div class="col-sm-1"><span ng-click="excluirTarefa(tarefa.id)" class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
            <div class="col-sm-3">@{{tarefa.texto}}</div>
            <div class="col-sm-3">@{{tarefa.autor}}</div>
            <div class="col-sm-3">@{{tarefa.status}}</div>
            <div class="col-sm-2">
                <span ng-if="tarefa.status =='Concluido'">
                    <input type="button" value="Marcar Como Pendente" class="btn btn-success" ng-click="mudarStatus(tarefa.id, 'Pendente')">
                </span>
                <span ng-if="tarefa.status !='Concluido'">
                    <input type="button" value="Marcar Como Concluido" class="btn btn-warning" ng-click="mudarStatus(tarefa.id, 'Concluido')">
                </span>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js" ></script>
    <script src="js/app.js"></script>
</body>
</html>