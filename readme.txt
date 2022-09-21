About :

This task was created using symfony 

Its include two api : 
[GET] /triangle/{a}/{b}/{c}

[GET] /circle/{radius}

- routes must return JSON with serialized objects and calculated surfaces and diameters. For example:

{

 "type": "circle",

 "radius": 2.0,

 "surface": 12.56,

 "circumference": 12.56,

}

or

{

 "type": "triangle",

 "a": 3.0,

 "b": 4.0,

 "c": 5.0,

 "surface": 6.0,

 "circumference": 12.0,

}

 service/or similar structure for the given framework (for example app.geometry_calculator)

- implement method for sum of areas for two given objects

- implement method for sum of diameters for two given objects



in this project 
main.html.twig represent the frontend and bootstrap was used to make it reponsive and modern.

and two controllers classes to handle the circle and triangle in the backend .


-----------------------------------------------------

To run :

navigate to folder project and run symfony server:start

then make sure in main.html.twig the server address match what you use . for default its 

var server_host="http://127.0.0.1:8000";



