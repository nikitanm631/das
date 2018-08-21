<div class="sidelist" ng-app="servicelist-a" ng-controller="servicelist-ctrl-a">
  <ul>
    <a ng-repeat="service in services | filter:{type:'other'}" ng-href="{{service.url}}">
      <li>{{service.name}}</li>
    </a>
  </ul>
</div>
