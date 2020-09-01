require('./bootstrap');

// npm
var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {

    $.ajax(
        {
            url: 'http://127.0.0.1:8000/api/students-api',
            method: 'GET',
            success: function(rispostaApi) {
                var students = rispostaApi.students_api;

                // handlebars
                var source = $('#students-template').html();
                var template = Handlebars.compile(source);

                // ciclo l'array di risposta alla chiamata API
                // e stampo a schermo ogni singolo elemento
                for (var i = 0; i < students.length; i++) {
                    var thisStudent = students[i]

                    var html = template(thisStudent);
                    $('#students-list').append(html);
                }
            },
            error: function() {
                alert('errore');
            },
        }
    );
})
