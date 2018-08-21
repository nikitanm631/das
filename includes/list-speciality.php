<div class="sidelist">
  <ul>
    <a ng-repeat="service in services | filter:{type:'special'}" ng-href="{{service.url}}">
      <li>{{service.name}}</li>
    </a>
  </ul>
</div>
