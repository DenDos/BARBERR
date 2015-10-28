<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <link rel="stylesheet" href="css/button.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
</head>

<body>

  <?php echo $content ?>
  <script src="libs/jquery/jquery-2.1.3.min.js"></script>
  <script src="js/common.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/admin.js"></script>
  <script src="javascripts/vendor.js"></script>
  <script src="javascripts/app.js"></script>
  <script src="js/bootstrap-select.js"></script>
  <script>  $('.selectpicker').selectpicker();</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/myConf.js"></script>
  <script src="js/myFunc.js"></script>
  <script>
    require('initialize');

  </script>
  <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <script src="js/bootstrap-datepicker.js"></script>

  <script>
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init() {

      myMap = new ymaps.Map('map', {
        center: [47.22707180, 39.71939650],
        zoom: 15,
        controls: []
      });
      myPlacemark = new ymaps.Placemark([47.22707180, 39.71939650], {}, {
        iconLayout: 'default#image',
        iconImageHref: 'images/placemark-1.png',
        iconImageSize: [25, 37],
        iconImageOffset: [-10, -27],
        controls: ['']
      });
      myMap.geoObjects.add(myPlacemark);
    }
  </script>
  <script src="js/masked.js"></script>
</body>
