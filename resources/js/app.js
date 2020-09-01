require('./bootstrap');

var $ = require('jquery');

var Handlebars = require('handlebars');

$(document).ready(function () {
  $.ajax(
    {
      url: 'http://localhost:8000/api/api-cars',
      method: 'GET',
      success: function (dataResponse) {
        var allCars = dataResponse.JsonCars;
        var source = $('#entry-template').html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < allCars.length; i++) {
          var thisCar = allCars[i];
          var html = template(thisCar);
          $('#carsList').append(html);
        }

      },
      error: function () {
        alert('Error')
      }
    }
  )
})
