<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8"/>  
    <title>Assignment 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/index.css">
    <script src="index.js"></script>
</head>
<body>
    <div id="LargePainting">
        <div id="closeButton">&times;</div>
        <figure>
            <img>
        </figure>
    </div>
     <div class="container">
        <div id="header"> 
            <h1>COMP 3512: Assignment 1</h1>
            <p>By: Dylan Borchert, Curtis MacLean</p>
        </div>
        <div class="containerGallery">

            <div id="listOfGalleries">
                <div id="expandList">
                    <svg>
                        <path d="M 48.6875 23.84375 L 25.34375 0.5 C 25.011719 0.167969 24.628906 0 24.191406 0 C 23.757812 0 23.375 0.167969 23.042969 0.5 L 20.535156 3.003906 C 20.203125 3.339844 20.035156 3.722656 20.035156 4.15625 C 20.035156 4.59375 20.203125 4.976562 20.535156 5.308594 L 40.222656 24.996094 L 20.539062 44.679688 C 20.203125 45.015625 20.035156 45.398438 20.035156 45.832031 C 20.035156 46.265625 20.203125 46.652344 20.539062 46.984375 L 23.042969 49.488281 C 23.375 49.824219 23.757812 49.988281 24.191406 49.988281 C 24.628906 49.988281 25.011719 49.820312 25.34375 49.488281 L 48.6875 26.148438 C 49.019531 25.8125 49.1875 25.429688 49.1875 24.996094 C 49.1875 24.5625 49.019531 24.175781 48.6875 23.84375 Z M 48.6875 23.84375 "/>
                        <path d="M 29.953125 24.996094 C 29.953125 24.5625 29.785156 24.175781 29.453125 23.84375 L 6.109375 0.5 C 5.777344 0.167969 5.394531 0 4.960938 0 C 4.523438 0 4.140625 0.167969 3.808594 0.5 L 1.304688 3.003906 C 0.96875 3.339844 0.800781 3.722656 0.800781 4.15625 C 0.800781 4.59375 0.96875 4.976562 1.304688 5.308594 L 20.988281 24.996094 L 1.304688 44.679688 C 0.96875 45.015625 0.800781 45.398438 0.800781 45.832031 C 0.800781 46.265625 0.96875 46.652344 1.304688 46.984375 L 3.808594 49.488281 C 4.140625 49.824219 4.523438 49.988281 4.957031 49.988281 C 5.394531 49.988281 5.777344 49.820312 6.109375 49.488281 L 29.453125 26.148438 C 29.785156 25.8125 29.953125 25.429688 29.953125 24.996094 Z M 29.953125 24.996094 "/>
                    </svg>
                </div>
                <div id="listGalleryHeader">
                    <h1>Pick A Gallery</h1>
                    <div id="collapseList">
                        <svg>
                            <path d="M 12.132812 1.769531 L 10.367188 0 L 2.867188 7.5 L 10.367188 15 L 12.132812 13.230469 L 6.402344 7.5 Z M 12.132812 1.769531  "/>
                        </svg>
                    </div>
                </div>
                <div class="lds-roller" id="listLoader">
                    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                </div>
                <div id="listOfGalleriesArea"></div>                
            </div>

            <div id="galleryInfo">
                <div id="galleryInfoList"></div>
            </div>
            
            <div id="galleryMap"><div id="map"></div></div>
            
            <div id="paintings">
                <div class="lds-roller" id="paintingLoader">
                    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                </div>
                <div id="paintingHeading"></div>
                <div id="paintingArea">
                </div>
            </div>
            
        </div>
        <div class="containerView">
            <template id="paintingViewTemplate">
                <div id="paintingViewImg">
                    <figure>
                        <img>
                        <p id="imageSize"><span id="Width"></span> x <span id="Height"></span></p>
                        <figcaption id="Copyright"></figcaption>
                    </figure>
                </div>
                <div id="paintingViewText">  
                    <h2 id="Title"></h2>
                    <p id="Artist"></p>
                    <p id="Medium"></p>
                    <p id="Year"></p>
                    <p id="Description"></p>
                    <p id="GalleryName"></p>
                    <p id="GalleryCity"></p>
                    <a id="MuseumLink"></a>
                    <div id="colorContainer">
                        <div class="color" id="Colour_1"><p class="name"></p><p class="hex"></p></div>
                        <div class="color" id="Colour_2"><p class="name"></p><p class="hex"></p></div>
                        <div class="color" id="Colour_3"><p class="name"></p><p class="hex"></p></div>
                        <div class="color" id="Colour_4"><p class="name"></p><p class="hex"></p></div>
                        <div class="color" id="Colour_5"><p class="name"></p><p class="hex"></p></div>
                        <div class="color" id="Colour_6"><p class="name"></p><p class="hex"></p></div>
                    </div>
                    <p id="return"></p>
                </div>
            </template>
            <div class="lds-roller" id="paintViewLoader">
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
            </div>
            <div id="paintingView"></div>
        </div>
    </div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRm7Dyqq8GWu-nGW5OhUdc3kq0jacKuds&callback=initMap" type="text/javascript"></script>
</body>