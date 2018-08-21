// for services list on index page and speciality services page

var module = angular.module('servicelist-a',[]);

module.controller('servicelist-ctrl-a',['$scope',function($scope){

  // $scope.services = ['D&C (Dilation and Curettage)','Laparoscopic Adjustable Gastric Band','Gastric Balloon'];

  $scope.services = [
    {
      type:'special',
      name: 'D&C (Dilation and Curettage)',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Laparoscopic Adjustable Gastric Band',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Gastric Balloon',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Gastric Plication',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Mini Port Surgeries',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Laparoscopic Sleeve Resection',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Single Port Surgeries',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Gall Bladder (Biliary) Stone Treatment',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Colonoscopy',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Endoscopic Surgery',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Laparoscopic Surgery',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Laparoscopic Hernial Repair',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Laparoscopic Hiatus Hernia Repair',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Laparoscopic Nephrectomy',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Laparoscopic Cholecystectomy',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'special',
      name: 'Endoscopy - Diagnostic & Therapeutic',
      url: 'dilation.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },
    {
      type:'other',
      name: 'Daycare',
      url: 'daycare.php',
      image: 'http://medicare.bold-themes.com/cosmetic-surgery/wp-content/uploads/sites/11/2017/08/cosmetic-surgery-blog-15-320x213.jpg',
      content: 'Lorem ipsum dolor sit amet, consec adipisicing elit,'
    },

  ];
}]);
