const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function (){
    $.ajax({
      url: "http://localhost:8888/php-ajax-dischi/server.php",
      method: 'GET',
      success: function (data) {
        console.log(data);
        if (data.length > 0) {
          printData(data);
        } else {
          alert('Nessun Risultato')
        }
      },
      error: function () {
        alert('errore')
      }
    });

    printFilter();
    $('#search-cd').change(function(){
    var author = $(this).val();
    $.ajax({
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',
      data: {
        'author': author
      },
      success: function (data) {
        console.log(data);
        $('.cds').html('');
        printData(data);
      },
      error: function () {
        alert('Errore');
      }
    });
    });
  });

function printData(data) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {
    var cd = data[i];
    var html = template(cd);
    $('.cds').append(html);
  }
}

function printFilter() {
  $.ajax({
    url: 'http://localhost:8888/php-ajax-dischi/server.php',
    method: 'GET',
    data: {
      'author-list': true
    },
    success: function (data) {
      console.log(data);
      if (data.length > 0) {
        var source = $('#entry-option').html();
        var template = Handlebars.compile(source);
        for(var i = 0; i< data.length; i++ ) {
        var context = {
          'author': data[i]
        };
          var html = template(context);
          $('#search-cd').append(html);
        }
      } else {
        alert('Nessun Risultato')
      }
    },
    error: function () {
      alert('errore')
    }
  });
};
