<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Our Specialities </title>
  	<meta name = "keywords" content = "cardiologist">
  	<meta name = "description" content = "cardiologist in vashi navi mumbai">
    <?php include 'includes/head.php' ?>
  </head>
  <body>

    <?php include 'includes/menu.php' ?>

    <!-- SINGLE HEADER -->
    <section class="banner-head">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h2>Our Specialities</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- END SINGLE HEADER -->

    <section class="speciality-page-n pt-55 pb-40" ng-app="servicelist-a" ng-controller="servicelist-ctrl-a">
      <div class="container">

        <div class="row mt-19" ng-repeat="service in services" ng-if="$index % 4 == 0 && service.type =='special'">

          <div class="col col-sm-3">
            <div class="service-col-n">
              <img src="{{services[$index].image}}" alt="Das Hospital Services" class="img-responsive">
              <h4>{{services[$index].name}}</h4>
              <p>{{services[$index].content}} </p>
              <a href="{{services[$index].url}}" class="btn btn-light">Find Out More</a>
            </div>
          </div>

          <div class="col col-sm-3">
            <div class="service-col-n" ng-if="services[$index + 1].name != null">
              <img src="{{services[$index+1].image}}" alt="Das Hospital Services" class="img-responsive">
              <h4>{{services[$index+1].name}}</h4>
              <p>{{services[$index+1].content}} </p>
              <a href="{{services[$index + 1].url}}" class="btn btn-light">Find Out More</a>
            </div>
          </div>

          <div class="col col-sm-3">
            <div class="service-col-n" ng-if="services[$index + 2].name != null">
              <img src="{{services[$index+2].image}}" alt="Das Hospital Services" class="img-responsive">
              <h4>{{services[$index+2].name}}</h4>
              <p>{{services[$index+2].content}} </p>
              <a href="{{services[$index + 2].url}}" class="btn btn-light">Find Out More</a>
            </div>
          </div>

          <div class="col col-sm-3">
            <div class="service-col-n" ng-if="services[$index + 3].name != null">
              <img src="{{services[$index+3].image}}" alt="Das Hospital Services" class="img-responsive">
              <h4>{{services[$index+3].name}}</h4>
              <p>{{services[$index+3].content}} </p>
              <a href="{{services[$index + 3].url}}" class="btn btn-light">Find Out More</a>
            </div>
          </div>

       </div>

      </div>
    </section>


    <?php include 'includes/footer.php' ?>

  </body>
</html>
